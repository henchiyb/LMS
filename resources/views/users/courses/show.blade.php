@extends('users.layouts.default')

@section('title')
    {{ $selectedCourse->title }}
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
                        <img src="{{ asset($selectedCourse->course_avatar) }}" alt="course-avatar"/>
                    </div>
                    <!-- /.vedio-box -->
                    <!-- .vedio-box -->
                    <div class="vedio-box-text">
                        <ul>
                            <li><span>Course name :</span>{{ $selectedCourse->title }}</li>
                            <li><span>Instructor :</span>{{ $selectedCourse->user->name }}</li>
                            <li><span>Lecture No :</span>{{ $selectedCourse->lecture_numbers }}</li>
                            <li><span>Length :</span>{{ $selectedCourse->duration }}</li>
                            <li>
                                <div class="star">
                                    <div class="star-ratings-sprite"><span class="star-ratings-sprite-rating" style="width:{{ config('app.ratePercent') * $selectedCourse->course_rate  }}%" data-course-rate="{{ $selectedCourse->course_rate }}"></span></div>
                                    {{ $selectedCourse->course_rate }} ratings
                                </div>
                            </li>
                            <li><a id="btn-active" href="#">Active Now</a></li>
                            <input type="text" id="user_id" value="{{ Auth::user()->id }}" hidden="">
                            <input type="text" id="course_id" value="{{ $selectedCourse->id }}" hidden="">
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
                            @foreach($selectedCourse->lessons as $lesson)
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
                    @foreach($selectedCourse->user->courses as $selectedCourse)
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="viewed-courses-box">
                                <div class="viewed-courses-img">
                                    <img class="courseImage" src="{{ asset($selectedCourse->course_avatar) }}" alt="coureses-img1">
                                </div>
                                <div class="viewed-courses-text">
                                    <a href="{{ route('courses.show', $selectedCourse->id) }}l">
                                        <h4><b> {{ $selectedCourse->title }} </b></h6>
                                    </a>
                                    <p> {{ __('teacher') }}: {{ $selectedCourse->user->name }} </p>
                                    <div class="star">
                                        <div class="star-ratings-sprite"><span class="star-ratings-sprite-rating" style="width:{{ config('app.ratePercent') * $selectedCourse->course_rate  }}%" data-course-rate="{{ $selectedCourse->course_rate }}"></span></div>
                                    </div>
                                    <a href="" class="ank5"> {{ __('active_now') }} </a>
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

            $('#btn-active').on('click', function() {
                event.preventDefault();
                
                $.ajaxSetup({
                    headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                            
                $.post(
                    '/courses_users/activeCourse',
                    {
                        user_id : $('#user_id').val(),
                        course_id : $('#course_id').val()
                    },
                    function(data) {
                        if (typeof(data) === 'boolean') {
                            $('#active-btn button').removeClass('btn-warning');
                            $('#active-btn button').addClass('btn-primary');
                            $('#active-btn button').text(' {{ __('active_now') }} ');
                            $.notify({
                                // options
                                message: '{{ __('cancel_active_success') }}' 
                            },{
                                // settings
                                type: 'warning'
                            });
                        } else {
                            $('#btn-active').text(' {{ __('cancel_active') }} ');
                            $.notify({
                                // options
                                message: ' {{ __('active_success') }} ' 
                            },{
                                // settings
                                type: 'success'
                            });
                        }                  
                    },
                    'json'
                );
            });
        });
    </script>
@endsection
