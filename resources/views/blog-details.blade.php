@extends('layouts.main')

@section('page-content')

<!-- Start Page Title Area -->
<div class="page-title-area bg-10">
    <div class="container">
        <div class="page-title-content">
            <h2>Responds to citizens advice</h2>

            <ul>
                <li>
                    <a href="index.html"> Beranda </a>
                </li>

                <li class="active">Detail Artikel</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Blog Details Area -->
<section class="blog-details-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-details-content">
                    <div class="blog-details-img">
                        <img src="{{ asset('assets/images/blog-details/blog-details.jpg') }}" alt="Image" />
                    </div>

                    <div class="blog-top-content">
                        <div class="news-content">
                            <ul class="admin">
                                <li>
                                    <i class="ri-user-fill"></i>
                                    Andrew lawson
                                </li>

                                <li>
                                    <i class="ri-calendar-line"></i>
                                    February 12, 2021
                                </li>
                            </ul>

                            <h3>Responds to citizens advice</h3>

                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur commodo. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Voluptatem ex necessitatibus dolor placeat fuga deleniti doloremque? Ratione officia quia aliquam possimus Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua.
                            </p>

                            <p>
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            </p>

                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur commodo. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Voluptatem ex necessitatibus dolor placeat fuga deleniti doloremque? Ratione officia quia aliquam possimus Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua.
                            </p>
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

                    <div class="sidebar-widget recent-post">
                        <h3>Artikel Terbaru</h3>

                        <ul>
                            <li>
                                <a href="/blog/slug">
                                    <h4 class="fs-6">
                                        Advertising permits
                                    </h4>
                                </a>
                            </li>
                            <li>
                                <a href="/blog/slug">
                                    <h4 class="fs-6">
                                        Animal health and welfare
                                    </h4>
                                </a>
                            </li>
                            <li>
                                <a href="/blog/slug">
                                    <h4 class="fs-6">
                                        Building and construction
                                    </h4>
                                </a>
                            </li>
                            <li>
                                <a href="/blog/slug">
                                    <h4 class="fs-6">
                                        Drainage services
                                    </h4>
                                </a>
                            </li>
                            <li>
                                <a href="/blog/slug">
                                    <h4 class="fs-6">
                                        Environmental services
                                    </h4>
                                </a>
                            </li>
                            <li>
                                <a href="/blog/slug">
                                    <h4 class="fs-6">
                                        Geographic information services
                                    </h4>
                                </a>
                            </li>
                            <li>
                                <a href="/blog/slug">
                                    <h4 class="fs-6">
                                        Public health and safety
                                    </h4>
                                </a>
                            </li>
                            <li>
                                <a href="/blog/slug">
                                    <h4 class="fs-6">
                                        Survey services
                                    </h4>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <h4 class="fs-6">
                                        Water supply
                                    </h4>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Blog Details Area -->

@endsection