@extends('users.layouts.default')

@section('title')
    {{ __('lms') }}
@endsection

@section('inline_styles')
    <link rel="stylesheet" href="{{ asset('assets/css/custom/courses_index.css') }}">
@endsection

@section('content')
    <section class="for-box">
        <!-- .for-box -->
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInLeft  animated">
                    <div class="clr1">
                        <div class="for-box-crecl">
                            <i class="fa fa-users" aria-hidden="true"></i>
                        </div>
                        <h2>
                            Over 40 million<br/> Students
                        </h2>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInLeft  animated">
                    <div class="clr1">
                        <div class="for-box-crecl">
                            <i class="fa fa-bookmark" aria-hidden="true"></i>
                        </div>
                        <h2>
                            More Than 20,000<br/>courses
                        </h2>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInRight  animated">
                    <div class="clr1">
                        <div class="for-box-crecl">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </div>
                        <h2>
                            Free contact<br/> anytime
                        </h2>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInRight  animated">
                    <div class="clr1">
                        <div class="for-box-crecl">
                            <i class="fa fa-line-chart" aria-hidden="true"></i>
                        </div>
                        <h2>
                            Learn at your pace<br/>on any device
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.for-box -->
    </section>

    <section class="viewed-courses">
        <!-- .viewed-courses -->
        <div class="container">
            <div class="row">
                <div class="tittle">
                    <h2>Most Viewed Courses</h2>
                </div>
                <div class="row">
                    @foreach($courses as $course)
                        <div class="col-xs-12 col-sm-3 col-md-3">
                            <!-- .viewed-courses-box -->
                            <div class="viewed-courses-box">
                                <div class="viewed-courses-img">
                                    <img width="270px" height="170px" src="{{ asset($course->course_avatar_2) }}" alt="course-img1">
                                </div>
                                <div class="viewed-courses-text">
                                    <a href="{{ route('courses.show', $course->id) }}">
                                        <h6>{{ $course->title }}</h6>
                                    </a>
                                    <p>By : {{ $course->user->name }}</p>
                                    <div class="star">
                                        <div class="star-ratings-sprite"><span class="star-ratings-sprite-rating" style="width:{{ config('app.ratePercent') * $course->course_rate  }}%" data-course-rate="{{ $course->course_rate }}"></span></div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.viewed-courses-box -->
                        </div>
                    @endforeach
                    <div class="col-md-12">
                        <a href="{{ route('courses.index') }}" class="button">Browse More Courses</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.viewed-courses -->
    </section>

    <section class="px-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Don’t miss anything online<br/> Enjoy our live classes and booked your seat</h2>
                    <a href="{{ route('courses.index') }}" class="button">Browse More Courses</a>
                </div>
            </div>
        </div>
    </section>

    <section class="instructor-container">
        <!-- .instructor-container -->
        <div class="container">
            <div class="tittle">
                <h2>
                    MEET OUR INSTRUCTOR
                </h2>
            </div>
            <div class="row">
                <div class="owl-demo-outer">
                    <div id="owl-demo" class="owl-carousel owl-theme">
                        <div class="item">
                            @foreach($users as $user)
                                <div class="col-xs-12 col-sm-4 col-md-4">
                                    <!-- .instructor -->
                                    <div class="instructor">
                                        <div class="instructor-img">
                                            <img width="262px" height="262px" src="{{ asset($user->avatar) }}" alt="instructor-img1" />
                                        </div>
                                        <h4>
                                            <a href="{{ route('users.show', $user->id) }}">
                                                {{ $user->name }}<br/>
                                                <span>{{ $user->working_place }}</span>
                                            </a>
                                        </h4>
                                        <p>
                                            {{ $user->personal_info }}
                                        </p>
                                    </div>
                                    <!-- /.instructor -->
                                </div>
                            @endforeach
                        </div>
                        <div class="text-center col-md-12">
                            {{ $users->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.instructor-container -->
    </section>

    <section class="price-container">
        <!-- .price-container -->
        <div class="container">
            <div class="tittle">
                <h2>PLANS AND PRICING</h2>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <!-- .price-box -->
                    <div class="price-box">
                        <div class="price-tittle">
                            FREE TRIAL
                        </div>
                        <div class="price-text">
                            <div class="price-no">
                                <sub>$0.</sub>00
                            </div>
                            <p>FREE 30 DAYS TRIAL</p>
                            <a href="payment.html">Get It Now</a>
                        </div>
                    </div>
                    <!-- .price-box -->
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <!-- .price-box -->
                    <div class="price-box active">
                        <div class="price-tittle">
                            FREE TRIAL
                        </div>
                        <div class="price-text">
                            <div class="price-no">
                                <sub>$0.</sub>00
                            </div>
                            <p>FREE 30 DAYS TRIAL</p>
                            <a href="payment.html">Get It Now</a>
                        </div>
                    </div>
                    <!-- .price-box -->
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <!-- .price-box -->
                    <div class="price-box">
                        <div class="price-tittle">
                            FREE TRIAL
                        </div>
                        <div class="price-text">
                            <div class="price-no">
                                <sub>$0.</sub>00
                            </div>
                            <p>FREE 30 DAYS TRIAL</p>
                            <a href="payment.html">Get It Now</a>
                        </div>
                    </div>
                    <!-- .price-box -->
                </div>
            </div>
        </div>
        <!-- /.price-container -->
    </section>

    <section class="px-bg2">
        <!-- .Subscribe -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="subscribe">
                        <h2>120+ classes & Staff Teaching<br/>Courses and Discussing Topics Online</h2>
                        <a href="#" class="button">Subscribe Now</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.Subscribe -->
    </section>
@endsection