@extends('users.layouts.default')

@section('inline_styles')
    <link rel="stylesheet" href="{{ asset('assets/css/custom/courses_index.css') }}">
@endsection

@section('title')
    @if($type == 0)
        {{ __('top_polular_courses') }}
    @elseif($type == 1)
        {{ __('top_rate_courses') }}
    @elseif($type == 2)
        {{ __('top_newest_courses') }}
    @endif
@endsection

@section('content')
    <section class="courses">
        <!-- .courses -->
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="grid-list-view">
                        <a href="#"><i class="fa fa-th" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i></a>
                    </div>
                </div>
                @foreach($courses as $course)
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="viewed-courses-box">
                            <div class="viewed-courses-img">
                                <img class="courseImage" src="{{ asset($course->course_avatar) }}" data-image="{{ $course->course_avatar }}" data-image1="{{ $course->course_avatar_2 }}" data-image2="{{$course->course_avatar_3 }}" alt="coureses-img1">
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
                <div class="text-center col-md-12">
                    {{ $courses->links() }}
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
