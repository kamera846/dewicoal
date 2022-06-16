@extends('layouts.main')

@section('page-content')

<!-- Start Page Title Area -->
<div class="page-title-area bg-15">
    <div class="container">
        <div class="page-title-content">
            <h2>Artikel</h2>

            <ul>
                <li>
                    <a href="index.html"> Beranda </a>
                </li>

                <li class="active">Artikel</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Blog Post Area -->
<section class="blog-post-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-12 col-md-6">
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
                                <p>
                                    Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Nulla quis lorem ut libero malesuada feugiat. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Lorem ipsum
                                    dolor sit amet, consectetur adipiscing elit. Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. adipiscing elit
                                </p>
                                <a href="/blog/slug" class="read-more">
                                    Read more
                                    <i class="ri-arrow-right-s-line"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-6">
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
                                <p>
                                    Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Nulla quis lorem ut libero malesuada feugiat. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Lorem ipsum
                                    dolor sit amet, consectetur adipiscing elit. Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. adipiscing elit
                                </p>
                                <a href="/blog/slug" class="read-more">
                                    Read more
                                    <i class="ri-arrow-right-s-line"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-6">
                        <div class="single-blog-box active">
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
                                    <a href="/blog/slug"> Councils told to return millions in business grants </a>
                                </h3>
                                <p>
                                    Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Nulla quis lorem ut libero malesuada feugiat. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Lorem ipsum
                                    dolor sit amet, consectetur adipiscing elit. Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. adipiscing elit
                                </p>
                                <a href="/blog/slug" class="read-more">
                                    Read more
                                    <i class="ri-arrow-right-s-line"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-6">
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
                                <p>
                                    Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Nulla quis lorem ut libero malesuada feugiat. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Lorem ipsum
                                    dolor sit amet, consectetur adipiscing elit. Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim. adipiscing elit
                                </p>
                                <a href="/blog/slug" class="read-more">
                                    Read more
                                    <i class="ri-arrow-right-s-line"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="pagination-area">
                            <span class="page-numbers current" aria-current="page">1</span>
                            <a href="#" class="page-numbers">2</a>
                            <a href="#" class="page-numbers">3</a>

                            <a href="#" class="next page-numbers">
                                <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="widget-sidebar pl-15">
                    <div class="sidebar-widget search">
                        <form class="search-form">
                            <input class="form-control" name="search" placeholder="Cari artikel.." type="text" />
                            <button class="search-button" type="submit">
                                <i class="ri-search-line"></i>
                            </button>
                        </form>
                    </div>

                    <div class="sidebar-widget categories">
                        <h3>Categories</h3>

                        <ul>
                            <li>
                                <a href="#">
                                    Advertising permits
                                    <i class="ri-arrow-right-s-line"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Animal health and welfare
                                    <i class="ri-arrow-right-s-line"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Building and construction
                                    <i class="ri-arrow-right-s-line"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Drainage services
                                    <i class="ri-arrow-right-s-line"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Environmental services
                                    <i class="ri-arrow-right-s-line"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Geographic information services
                                    <i class="ri-arrow-right-s-line"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Public health and safety
                                    <i class="ri-arrow-right-s-line"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Survey services
                                    <i class="ri-arrow-right-s-line"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Water supply
                                    <i class="ri-arrow-right-s-line"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="sidebar-widget advertizing">
                        <h3>Oleh Google</h3>

                        <div class="advertizing-img">
                            <a href="#">
                                <img src="assets/images/blog-details/advertizing.jpg" alt="Image" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Blog Post Area -->

@endsection
