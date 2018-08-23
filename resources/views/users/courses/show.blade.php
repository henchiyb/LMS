@extends('users.layouts.default')

@section('title')
    {{ $course->title }}
@endsection

@section('inline_styles')
    <link rel="stylesheet" href="{{ asset('assets/css/custom/courses_index.css') }}">
@endsection

@section('content')
    <section class="classroom-container">
        <!-- .classroom-container -->
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 wow fadeInLeft  animated">
                    <!-- .vedio-box -->
                    <div class="vedio-box">
                        <img src="{{ asset($course->course_avatar) }}" alt="course-avatar"/>
                    </div>
                    <!-- /.vedio-box -->
                    <!-- .vedio-box -->
                    <div class="vedio-box-text">
                        <ul>
                            <li><span>Course name :</span>{{ $course->title }}</li>
                            <li><span>Instructor :</span>{{ $course->user->name }}</li>
                            <li><span>Lecture No :</span>{{ $course->lecture_numbers }}</li>
                            <li><span>Length :</span>{{ $course->duration }}</li>
                            <li>
                                <div class="star">
                                    <div class="star-ratings-sprite"><span class="star-ratings-sprite-rating" style="width:{{ config('app.ratePercent') * $course->course_rate  }}%" data-course-rate="{{ $course->course_rate }}"></span></div>
                                    {{ $course->course_rate }} ratings
                                </div>
                            </li>
                            <li><a href="#">Active Now</a></li>
                        </ul>
                    </div>
                    <!-- /.vedio-box -->
                </div>
                <div class="upcomming-container col-xs-12 col-sm-6 col-md-6 wow fadeInRight  animated">
                    <!-- .upcomming-container -->
                    <h2>
                        Upcoming Classes
                    </h2>
                    <div class="row">
                        <ul>
                            @foreach($course->lessons as $lesson)
                                <li>
                                    <div class="row upcommin-text-outer">
                                        <div class="col-md-4">
                                            <img width="250px" height="100px" src="{{ $lesson->getVideoByLesson($lesson->id)->image }}" alt="us-img"/>
                                        </div>
                                        <div class="col-md-8">
                                            <p>{{ __('title') }}: <span class="red-text">{{ $lesson->title }}</span></p>
                                            <p>{{ $lesson->description }}</p>
                                            <span><i class="fa fa-clock-o" aria-hidden="true"></i>  at {{ $lesson->created_at }} by {{ $lesson->course->user->name }}</span>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- /.upcomming-container -->
                </div>
            </div>
        </div>
        <!-- /.classroom-container -->
    </section>

    <section class="discussion-contaniner">
    <!-- .discussion-contaniner-->
    <div class="container">
        <div class="row">
            <div class="discussion">
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <h4>Discussion</h4>
                    <!-- .questions -->
                    <div class="questions">
                        <span>Write your questions here...</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.discussion-contaniner-->
    </section>

    <section class="courses">
        <!-- .courses -->
        <div class="container">
            <div class="row">
                <div class="tittle">
                    <h2>{{ __('related course') }}</h2>
                </div>
                <div class="slickSlider">
                    @foreach($course->user->courses as $course)
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="viewed-courses-box">
                                <div class="viewed-courses-img">
                                    <img class="courseImage" src="{{ asset($course->course_avatar) }}" alt="coureses-img1">
                                </div>
                                <div class="viewed-courses-text">
                                    <a href="{{ route('courses.show', $course->id) }}l">
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
