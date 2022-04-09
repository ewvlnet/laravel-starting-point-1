@extends('layouts.master')
@section('meta-title', config('app.name').' | History')

@section('content')
    <div id="banner-area" class="banner-area" style="background-image:url(/site/images/banner/banner1.jpg)">
        <div class="banner-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner-heading">
                            <h1 class="banner-title">History</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="#!">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#!">History</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div><!-- Col end -->
                </div><!-- Row end -->
            </div><!-- Container end -->
        </div><!-- Banner text end -->
    </div><!-- Banner area end -->

    <section id="main-container" class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="post">
                        <div class="post-media post-image">
                            <img loading="lazy" src="/site/images/news/news1.jpg" class="img-fluid" alt="post-image">
                        </div>

                        <div class="post-body">
                            <div class="entry-header">
                                <h2 class="entry-title">
                                    <a href="news-single.html">We Just Completes $17.6 million Medical Clinic in
                                        Mid-Missouri</a>
                                </h2>
                            </div><!-- header end -->

                            <div class="entry-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et
                                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                    laboris nisi ut aliquip
                                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                                    esse cillum dolore eu
                                    fugiat nulla pariatur. Excepteur ...</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et
                                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                    laboris nisi ut aliquip
                                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                                    esse cillum dolore eu
                                    fugiat nulla pariatur. Excepteur ...</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et
                                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                    laboris nisi ut aliquip
                                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                                    esse cillum dolore eu
                                    fugiat nulla pariatur. Excepteur ...</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et
                                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                    laboris nisi ut aliquip
                                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                                    esse cillum dolore eu
                                    fugiat nulla pariatur. Excepteur ...</p>
                            </div>

                        </div><!-- post-body end -->
                    </div><!-- 1st post end -->
                </div><!-- Content Col end -->
                <div class="col-lg-2"></div>

            </div><!-- Main row end -->
        </div><!-- Container end -->
    </section><!-- Main container end -->


@endsection


