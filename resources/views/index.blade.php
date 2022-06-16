@extends('layouts.main')

@section('page-content')

<!-- Start Hero Slider Area -->
<section class="hero-slider-area">
    <div class="hero-slider owl-theme owl-carousel">
        <div class="hero-slider-item">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="hero-slider-content pr-15">
                                    <span class="top-title">Discover the city</span>
                                    <h1>We developing a happy and sustainable city</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ipsum dolor sit amet.</p>

                                    <div class="slider-btn">
                                        <a href="about.html" class="default-btn"> Learn more </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="slider-img pl-15">
                                    <img src="assets/images/slider/slider-img-1.jpg" alt="Image" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slider-shape">
                <img src="assets/images/slider/slider-shape.png" alt="Image" />
            </div>
        </div>
    </div>
</section>
<!-- End Hero Slide Area -->

<!-- Start Services Area -->
<section class="services-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <h2>Eksplor Desa Kami</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore eveniet quod mollitia asperiores ullam dolor corporis. vero nemo consectetur</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-xl-4 col-md-6 col-md-6">
                <div class="single-services-box">
                    <span class="flaticon-group"></span>

                    <h3>Fasilitas dan Layanan</h3>

                    {{-- <p>-kuliner - warung -areal parkir -home stay -kios souvenir</p> --}}

                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero totam voluptate provident quod nemo accusantium dignissimos itaque cupiditate:
                        <ul>
                            <li>Lorem, ipsum.</li>
                            <li>Lorem, ipsum.</li>
                            <li>Lorem, ipsum.</li>
                            <li>Lorem, ipsum.</li>
                        </ul>
                    </p>

                    <div class="services-shape">
                        <img src="assets/images/services-shape.png" alt="Image" />
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 col-md-6">
                <div class="single-services-box">
                    <span class="flaticon-buildings"></span>

                    <h3>Spot Wisata</h3>

                    {{-- <p>-spot foto/selfie -balai pertemuan -kamar mandi umum</p> --}}

                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero totam voluptate provident quod nemo accusantium dignissimos itaque cupiditate:
                        <ul>
                            <li>Lorem, ipsum.</li>
                            <li>Lorem, ipsum.</li>
                            <li>Lorem, ipsum.</li>
                            <li>Lorem, ipsum.</li>
                        </ul>
                    </p>


                    <div class="services-shape">
                        <img src="assets/images/services-shape.png" alt="Image" />
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 col-md-6">
                <div class="single-services-box">
                    <span class="flaticon-government"></span>

                    <h3>Souvenir dan Hasil Bumi</h3>

                    {{-- <p>-spot foto/selfie -balai pertemuan -kamar mandi umum</p> --}}

                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero totam voluptate provident quod nemo accusantium dignissimos itaque cupiditate:
                        <ul>
                            <li>Lorem, ipsum.</li>
                            <li>Lorem, ipsum.</li>
                            <li>Lorem, ipsum.</li>
                            <li>Lorem, ipsum.</li>
                        </ul>
                    </p>


                    <div class="services-shape">
                        <img src="assets/images/services-shape.png" alt="Image" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Services Area -->

<!-- Stat Who We Are Area -->
<section class="who-we-are-area pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="who-we-are-img pr-15">
                    <img src="assets/images/who-we-are-img.jpg" alt="Image" />
                </div>
            </div>

            <div class="col-lg-6">
                <div class="who-we-are-content pl-15">
                    <span class="top-title">Tentang Desa</span>
                    <h2>Cerita Ke Tahap Perkembangan</h2>

                    <p>
                        Pada masa pendemi di tahun 2020, sekelompok pemuda desa di Kampung Porong Tedeng membentuk sebuah wadah organisasi yang dinamankan Ikatan Pemuda Kreatif. Gerakan anak muda ini berupaya merubah kampungnya menjadi
                        kampung wisata dan bermimpi untuk menciptakan lapangan pekerjaan baru di desa. Salah satu inovasi yang dikembangkan oleh anak muda ini yaitu menyulap salah satu bukit menjadi spot wisata selfie dengan menawarkan view
                        alam yang indah. Bukit ini dinamakan Bukit <i>porong</i> berasal dari bahasa adat Manggarai artinya <i>melihat, menyaksikan, menonton,</i> atau juga bisa diartikan dengan<i> harapan</i>. Narasi lain dari bukit Porong
                        yaitu sebagai tempat untuk menyampaikan harapan kepada Tuhan.
                    </p>
                    <a href="/about" class="default-btn">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Who We Are Area -->

<!-- Start Counselor Area -->
<section class="counselor-area pb-70">
    <div class="container">
        <div class="section-title">
            <h2>Galeri</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore eveniet quod mollitia asperiores ullam dolor corporis. vero nemo consectetur</p>
        </div>

        <div class="owl-carousel owl-theme counselor-slider">
            <div class="row align-items-center">
                <div class="col">
                    <div class="counselor-img px-30">
                        <div class="row justify-content-center">
                            <div class="col-lg-6 col-md-8">
                                <img src="assets/images/counselor-img.jpg" class="mb-3" alt="Image" />
                            </div>
                            <h4 class="text-center">Helen 1 Sanders</h4>
                            <div class="row justify-content-center">
                                <div class="col-lg-8 col-md-10">
                                    <p class="text-center">
                                        “ Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet
                                        aliquam vel, ullamcorper sit amet ligula. Sed porttitor lectus nibh.”
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col">
                    <div class="counselor-img px-30">
                        <div class="row justify-content-center">
                            <div class="col-lg-6 col-md-8">
                                <img src="assets/images/counselor-img.jpg" class="mb-3" alt="Image" />
                            </div>
                            <h4 class="text-center">Helen 2 Sanders</h4>
                            <div class="row justify-content-center">
                                <div class="col-lg-8 col-md-10">
                                    <p class="text-center">
                                        “ Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet
                                        aliquam vel, ullamcorper sit amet ligula. Sed porttitor lectus nibh.”
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col">
                    <div class="counselor-img px-30">
                        <div class="row justify-content-center">
                            <div class="col-lg-6 col-md-8">
                                <img src="assets/images/counselor-img.jpg" class="mb-3" alt="Image" />
                            </div>
                            <h4 class="text-center">Helen 3 Sanders</h4>
                            <div class="row justify-content-center">
                                <div class="col-lg-8 col-md-10">
                                    <p class="text-center">
                                        “ Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet
                                        aliquam vel, ullamcorper sit amet ligula. Sed porttitor lectus nibh.”
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Counselor Area -->

<!-- Start Blog Area -->
<section class="blog-area bg-color pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <h2>Artikel Terbaru</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore eveniet quod mollitia asperiores ullam dolor corporis. vero nemo consectetur</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-box">
                    <a href="/blog/slug">
                        <img src="assets/images/blog/blog-1.jpg" alt="Images" />
                    </a>

                    <div class="blog-content">
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="ri-user-3-fill"></i>
                                    Cameron
                                </a>
                            </li>
                            <li>
                                <i class="ri-calendar-line"></i>
                                February 12, 2021
                            </li>
                        </ul>
                        <h3>
                            <a href="/blog/slug"> Responds to citizens advice </a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ipsum dolor.</p>
                        <a href="/blog/slug" class="read-more">
                            Read more
                            <i class="ri-arrow-right-s-line"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-blog-box">
                    <a href="/blog/slug">
                        <img src="assets/images/blog/blog-2.jpg" alt="Images" />
                    </a>

                    <div class="blog-content">
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="ri-user-3-fill"></i>
                                    Bennett
                                </a>
                            </li>
                            <li>
                                <i class="ri-calendar-line"></i>
                                February 11, 2021
                            </li>
                        </ul>
                        <h3>
                            <a href="/blog/slug"> Housing advisers program </a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ipsum dolor.</p>
                        <a href="/blog/slug" class="read-more">
                            Read more
                            <i class="ri-arrow-right-s-line"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-blog-box">
                    <a href="/blog/slug">
                        <img src="assets/images/blog/blog-3.jpg" alt="Images" />
                    </a>

                    <div class="blog-content">
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="ri-user-3-fill"></i>
                                    Marquart
                                </a>
                            </li>
                            <li>
                                <i class="ri-calendar-line"></i>
                                February 10, 2021
                            </li>
                        </ul>
                        <h3>
                            <a href="/blog/slug"> Responds to a national report </a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ipsum dolor.</p>
                        <a href="/blog/slug" class="read-more">
                            Read more
                            <i class="ri-arrow-right-s-line"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="shape blog-shape-1">
        <img src="assets/images/blog/blog-shape-1.png" alt="Image" />
    </div>

    <div class="shape blog-shape-2">
        <img src="assets/images/blog/blog-shape-2.png" alt="Image" />
    </div>
</section>
<!-- End Blog Area -->

@endsection
