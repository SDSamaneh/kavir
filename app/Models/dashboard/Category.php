<?php

namespace App\Models\dashboard;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{

    protected $fillable = [
        'name',
        'slug',
        'description'
    ];



    public function articles(): HasMany
    {
        return $this->hasMany(Article::class);
    }
}
