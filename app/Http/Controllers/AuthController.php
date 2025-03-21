<?php

namespace App\Http\Controllers;

use App\Events\UserSubscribed;
use App\Http\Requests\Auth\StoreRegister;
use App\Mail\WelcomeMail;
use App\Models\dashboard\Departmans;
use App\Models\dashboard\Supervisors;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules\Password;

use function PHPUnit\Framework\callback;

class AuthController extends Controller
{
    public function index()
    {
       
        return view('auth/register');
    }
    //Register or Create User
    public function register(Request $request): RedirectResponse
    {
        $fields = $request->validate([
            'name' => ['required', 'persian_alpha', 'min:3', 'max:255'],
            'email' => ['required', 'max:255', 'email', 'unique:users'],
            'idCard' => ['required', 'ir_national_id'],
            'phone_number' => ['required', 'ir_mobile'],
            'password' => ['required', 'confirmed', 'min:8', 'max:12']
        ], [
            'name.required' => 'نام و نام خانوادگی خود را وارد کنید',
            'name.min' => 'نام و نام خانوادگی باید حداقل 3 کاراکتر باشد',
            'name.max' => 'نام و نام خانوادگی باید حداکثر 255 کاراکتر باشد',
            'email.required' => 'ایمیل معتبر خود را وارد کنید',
            'email.max' => 'ایمیل باید حداکثر 255 کاراکتر باشد',
            'email.unique' => 'ایمیل قبلا موجود می باشد',
            'password.required' => 'رمز عبور خود را وارد کنید',
            'password.min' => 'رمز عبور باید حداقل 8 کاراکتر باشد',
            'password.max' => 'رمز عبور باید حداکثر 12 کاراکتر باشد',
            'password.confirmed' => 'رمز عبور باید با تکرار آن یکسان باشد',

        ]);

        //create user
        $user = User::create($fields);
        //login user
        if ($user) {
            Auth::login($user);
            Mail::to($request->email)->send(new WelcomeMail(Auth::user(), $request->password));
            if ($request->subscribe) {
                event(new UserSubscribed($user));
            }
        } else {
            return redirect()->back()->with('erroe', 'مشکلی پیش آمده است . مجدد اقدام فرمایید.');
        }
        return redirect()->route('index')->withErrors([
            'success' => auth()->user()->name . ' خوش آمدید'
        ]);
    }

    public function login(Request $request): RedirectResponse
    {
        $credentials = $request->validate(
            [
                'idCard' => ['required', 'ir_national_id'],
                'password' => ['required'],
            ],
            [
                'idCard.required' => 'کدملی خود را وارد کنید',
                'password.required' => 'رمز عبور خود را وارد کنید',
            ]
        );
        if (Auth::attempt($credentials, $request->remember)) {
            $request->session()->regenerate();
            return redirect()->route('index')->withErrors([
                'success' => auth()->user()->name . ' خوش آمدید'
            ]);
        } else {
            return redirect()->back()->with('erroe', 'مشکلی پیش آمده است . مجدد اقدام فرمایید.');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('index')->withErrors(['success' => 'با موفقیت از سایت خارج شدید.']);
    }
}
