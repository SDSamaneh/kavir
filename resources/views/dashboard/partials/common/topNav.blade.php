<nav class="navbar-light navbar-sticky header-static border-bottom navbar-dashboard">
      <!-- Logo Nav START -->
      <nav class="navbar navbar-expand-xl">
            <div class="container">
                  <!-- Logo START -->
                  <a class="navbar-brand me-3" href="{{route('index')}}">
                        <img class="navbar-brand-item light-mode-item" src="{{Vite::image('logo.png')}}" alt="logo">
                        <img class="navbar-brand-item dark-mode-item" src="{{Vite::image('logo.png')}}" alt="logo">
                  </a>
                  <!-- Logo END -->

                  <!-- Responsive navbar toggler -->
                  <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="text-body h6 d-none d-sm-inline-block">منو</span>
                        <span class="navbar-toggler-icon"></span>
                  </button>

                  <!-- Main navbar START -->
                  <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav navbar-nav-scroll mx-auto">

                              <!-- Nav item 1 Demos -->
                              <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-house-door me-1"></i>وبسایت</a></li>

                              <!-- Nav item 2 Post -->
                              <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="postMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="bi bi-pencil me-1"></i>مدیریت وام ها</a>
                                    <ul class="dropdown-menu" aria-labelledby="postMenu">
                                          <!-- dropdown submenu -->
                                          <li> <a class="dropdown-item" href="{{route('vam.index')}}">همه درخواست ها</a> </li>
                                          <li> <a class="dropdown-item" href="{{route('vam.create')}}">افزودن درخواست وام</a> </li>
                                    </ul>
                              </li>

                              <li class="nav-item"><a class="nav-link" href="{{route('category.index')}}"><i class="bi bi-chat-dots me-1"></i>افزودن دسته بندی</a></li>
                              <li class="nav-item"><a class="nav-link" href="{{route('supervisor.index')}}"><i class="bi bi-chat-dots me-1"></i>افزودن مدیرواحد</a></li>
                              <li class="nav-item"><a class="nav-link" href="{{route('departman.index')}}"><i class="bi bi-chat-dots me-1"></i>افزودن دپارتمان</a></li>

                              <li class=" nav-item"><a class="nav-link" href="{{route('users.index')}}"><i class="bi bi-people me-1 fs-5"></i>مدیریت کاربران</a></li>
                        </ul>
                  </div>
                  <!-- Main navbar END -->

                  <!-- Nav right START -->
                  <div class="nav flex-nowrap align-items-center">
                        <!-- Profile dropdown START -->
                        <div class="nav-item ms-2 ms-md-3 dropdown">
                              <!-- Avatar -->
                              <a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button" data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img class="avatar-img rounded-circle" src="{{Vite::image('avatar/avatar.png')}}" alt="avatar">
                              </a>
                              <!-- Profile dropdown START -->
                              <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3" aria-labelledby="profileDropdown">
                                    <!-- Profile info -->
                                    <li class="px-3">
                                          <div class="d-flex align-items-center">
                                                <!-- Avatar -->
                                                <div class="avatar me-3">
                                                      <img class="avatar-img rounded-circle shadow" src="{{Vite::image('avatar/avatar.png')}}" alt="avatar">
                                                </div>
                                                <div>
                                                      <a class="h6 mt-2 mt-sm-0" href="#"> علیرضا مرادی</a>
                                                      <p class="small m-0">example@gmail.com</p>
                                                </div>
                                          </div>
                                          <hr>
                                    </li>

                                    <li><a class="dropdown-item" href="{{route('users.edit')}}}"><i class="bi bi-person fa-fw me-2"></i>ویرایش</a></li>


                                    <form method="post" action="{{route('logout')}}">
                                          @csrf
                                          <li><button type="submit" class="dropdown-item">خروج</button></li>
                                    </form>
                                    <li class="dropdown-divider mb-3"></li>
                                    <!--  Dark mode  -->
                                    <li>
                                          <div class="dropdown-item">
                                                <!-- Dark mode options START -->
                                                <div class="nav-item dropdown ms-3">
                                                      <!-- Switch button -->
                                                      <button class="modeswitch " id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown"
                                                            data-bs-display="static">
                                                            <svg class="theme-icon-active">
                                                                  <use href="#"></use>
                                                            </svg>
                                                      </button>
                                                      <!-- Dropdown items -->
                                                      <ul class="dropdown-menu min-w-auto dropdown-menu-end" aria-labelledby="bd-theme">
                                                            <li class="mb-1">
                                                                  <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="light">
                                                                        <svg width="16" height="16" fill="currentColor"
                                                                              class="bi bi-brightness-high-fill fa-fw mode-switch me-1" viewBox="0 0 16 16">
                                                                              <path
                                                                                    d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z">
                                                                              </path>
                                                                              <use href="#"></use>
                                                                        </svg>روشن
                                                                  </button>
                                                            </li>
                                                            <li class="mb-1">
                                                                  <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                                                              class="bi bi-moon-stars-fill fa-fw mode-switch me-1" viewBox="0 0 16 16">
                                                                              <path
                                                                                    d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z">
                                                                              </path>
                                                                              <path
                                                                                    d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z">
                                                                              </path>
                                                                              <use href="#"></use>
                                                                        </svg>تیره
                                                                  </button>
                                                            </li>
                                                            <li>
                                                                  <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="auto">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                                                              class="bi bi-circle-half fa-fw mode-switch me-1" viewBox="0 0 16 16">
                                                                              <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"></path>
                                                                              <use href="#"></use>
                                                                        </svg>خودکار
                                                                  </button>
                                                            </li>
                                                      </ul>
                                                </div>
                                                <!-- Dark mode options END -->
                                          </div>
                                    </li>
                              </ul>
                              <!-- Profile dropdown END -->
                        </div>
                        <!-- Profile dropdown END -->
                        <!-- Nav right END -->
                  </div>
            </div>
      </nav>
      <!-- Logo Nav END -->
</nav>