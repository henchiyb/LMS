@extends('users.layouts.default')

@section('title')
    {{ __('all_courses') }}
@endsection

@section('inline_styles')
    <link rel="stylesheet" href="{{ asset('assets/css/custom/courses_index.css') }}">
@endsection

@section('content')
    <section class="courses">
        <!-- .courses -->
        <div class="container">
            <div class="row">
                <div class="tittle">
                    <h2><a href="{{ route('courses.filter', 'popular') }}"> {{ __('top_polular_courses') }} </a></h2>
                </div>
                <div class="slickSlider">
                    @foreach($mostViewCourses as $course)
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="viewed-courses-box">
                                <div class="viewed-courses-img">
                                    <img class="courseImage" src="{{ asset($course->course_avatar) }}" alt="coureses-img1">
                                </div>
                                <div class="viewed-courses-text">
                                    <a href="classroom-presence.html">
                                        <h4><b> {{ $course->title }} </b></h6>
                                    </a>
                                    <p> {{ __('teacher') }}: {{ $course->user->name }} </p>
                                    <div class="star">
                                        <div class="star-ratings-sprite"><span class="star-ratings-sprite-rating" style="width:{{ config('app.ratePercent') * $course->course_rate  }}%" data-course-rate="{{ $course->course_rate }}"></span></div>
                                    </div>
                                    <a href="#" class="ank5"> {{ __('active_now') }} </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="row">
                <div class="tittle">
                    <h2><a href="{{ route('courses.filter', 'rate') }}"> {{ __('top_rate_courses') }} </a></h2>
                </div>
                <div class="slickSlider">
                    @foreach($mostRateCourses as $course)
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="viewed-courses-box">
                                <div class="viewed-courses-img">
                                    <img class="courseImage" src="{{ asset($course->course_avatar) }}" alt="coureses-img1">
                                </div>
                                <div class="viewed-courses-text">
                                    <a href="classroom-presence.html">
                                        <h4><b> {{ $course->title }} </b></h6>
                                    </a>
                                    <p> {{ __('teacher') }}: {{ $course->user->name }} </p>
                                    <div class="star">
                                        <div class="star-ratings-sprite"><span class="star-ratings-sprite-rating" style="width:{{ config('app.ratePercent') * $course->course_rate  }}%" data-course-rate="{{ $course->course_rate }}"></span></div>
                                    </div>
                                    <a href="#" class="ank5"> {{ __('active_now') }} </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="row">
                <div class="tittle">
                    <h2><a href="{{ route('courses.filter', 'newest') }}"> {{ __('top_newest_courses') }} </a></h2>
                </div>
                <div class="slickSlider">
                    @foreach($mostNewestCourses as $course)
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="viewed-courses-box">
                                <div class="viewed-courses-img">
                                    <img class="courseImage" src="{{ asset($course->course_avatar) }}" alt="coureses-img1">
                                </div>
                                <div class="viewed-courses-text">
                                    <a href="classroom-presence.html">
                                        <h4><b> {{ $course->title }} </b></h6>
                                    </a>
                                    <p> {{ __('teacher') }}: {{ $course->user->name }} </p>
                                    <div class="star">
                                        <div class="star-ratings-sprite"><span class="star-ratings-sprite-rating" style="width:{{ config('app.ratePercent') * $course->course_rate  }}%" data-course-rate="{{ $course->course_rate }}"></span></div>
                                    </div>
                                    <a href="#" class="ank5"> {{ __('active_now') }} </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- /.courses -->
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

@section('inline_scripts')
    <script type="text/javascript">
        $( document ).ready(function() {
            $('.slickSlider').slick({
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 1
            });
        });
    </script>
@endsection
