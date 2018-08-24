@extends('users.layouts.default')

@section('title')

@endsection

@section('inline_styles')
    <link rel="stylesheet" href="{{ asset('assets/css/custom/courses_index.css') }}">
@endsection

@section('content')
    <section class="courses">
        <!-- .courses -->
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <!-- .student-outer -->
                    <div class="student-outer">
                        <div class="student-img">
                            <h6><img src="{{ asset($user->avatar) }}" width="360px" height="360px" alt="student-img1"></h6>
                        </div>
                         <div class="student-text">
                            <a href="{{ route('my-course', $user->id) }}">
                                {{ __('my course') }}
                            </a>
                            <a href="{{ route('users.show', $user->id) }}">
                                {{ __('my profile') }}
                            </a>
                        </div>
                    </div>
                    <!-- /.student-outer -->
                </div>
                <div class="col-xs-12 col-sm-6 col-md-8">
                    <!-- .student-info -->
                    <div class="student-info">
                        @foreach($courses as $course)
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="viewed-courses-box">
                                    <div class="viewed-courses-img">
                                        <img class="courseImage" src="{{ asset($course->course_avatar) }}" data-image="{{ $course->course_avatar }}" data-image1="{{ $course->course_avatar_2 }}" data-image2="{{$course->course_avatar_3 }}" alt="coureses-img1">
                                    </div>
                                    <div class="viewed-courses-text">
                                        <a href="{{ route('courses.show', $course->id) }}">
                                            <h4><b> {{ $course->title }} </b></h6>
                                        </a>
                                        <p> {{ __('teacher') }}: {{ $course->user->name }} </p>
                                        <div class="star">
                                            <div class="star-ratings-sprite"><span class="star-ratings-sprite-rating" style="width:{{ config('app.ratePercent') * $course->course_rate  }}%" data-course-rate="{{ $course->course_rate }}"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- .student-info -->
                </div>
            </div>
        </div>
        <!-- /.courses -->
    </section>
@endsection

