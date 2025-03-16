<!-- Footer START -->
<footer class="mb-3">
      <div class="container">
            <div class="card card-body bg-light">
                  <div class="row align-items-center justify-content-between">
                        <div class="col-lg-6">
                              <!-- Copyright -->
                              <div class="text-center text-lg-start">©2025 ارائه شده در سایت <a href="#" class="text-reset btn-link" target="_blank">کویرموتور</a>
                              </div>
                        </div>
                        <div class="col-lg-6 d-sm-flex align-items-center justify-content-center justify-content-lg-end">
                              <!-- Language switcher -->
                              <div class="dropup me-0 me-sm-3 mt-3 mt-md-0 text-center text-sm-end">
                                    <a class="dropdown-toggle text-body" href="#" role="button" id="languageSwitcher" data-bs-toggle="dropdown" aria-expanded="false">
                                          زبان
                                    </a>
                                    <ul class="dropdown-menu min-w-auto" aria-labelledby="languageSwitcher">
                                          <li><a class="dropdown-item" href="#">فارسی</a></li>
                                          <li><a class="dropdown-item" href="#">انگلیسی </a></li>

                                    </ul>
                              </div>
                              <!-- Links -->
                              <ul class="nav text-center text-sm-end justify-content-center justify-content-center mt-3 mt-md-0">
                                    <li class="nav-item"><a class="nav-link" href="#">یکتاز سیکلت کویر</a></li>
                              </ul>
                        </div>
                  </div>
            </div>
      </div>
</footer>
<!-- Footer END -->

<!-- Back to top -->
<div class="back-top"><i class="bi bi-arrow-up-short"></i></div>


@error('success')
@include('notifications.successMessage')
@enderror()

@if(session()->has('error'))
@include('notifications.errorMessage')
@endif

<!-- Vendors -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.27.3/apexcharts.min.js"></script>
<script src="assets/vendor/overlay-scrollbar/js/OverlayScrollbars.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/min/tiny-slider.js"></script>
</body>

</html>