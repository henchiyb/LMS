@extends('users.layouts.default')

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
                    <div class="vedio-box slickSlider">
                        <img src="{{ asset($selectedCourse->course_avatar) }}" alt="vedio-img"/>
                        <img src="{{ asset($selectedCourse->course_avatar_2) }}" alt="vedio-img"/>
                        <img src="{{ asset($selectedCourse->course_avatar_3) }}" alt="vedio-img"/>
                    </div>
                    <!-- /.vedio-box -->
                    <!-- .vedio-box -->
                    <div class="vedio-box-text">
                        <ul>
                            <li><span><strong> {{ __('course_name') }} :</strong></span> {{ $selectedCourse->title }} </li>
                            <li><span><strong> {{ __('instruction') }} :</strong></span> <a href="{{ route('users.show', $selectedCourse->user->id) }}" id="teacher"> {{ $selectedCourse->user->name }} </a></li>
                            <li><span><strong> {{ __('lecture_no') }} :</strong></span> {{ $selectedCourse->lecture_numbers }} </li>
                            <li><span><strong> {{ __('course_duration') }} :</strong></span> {{ $selectedCourse->duration }} </li>
                            <li><span><strong> {{ __('description') }} :</strong></span> {{ $selectedCourse->description }} </li>
                            <li><span><strong> {{ __('level') }} :</strong></span> {{ $selectedCourse->level }} </li>
                            <li><span><strong> {{ __('rate') }} :</strong></span><div class="star-ratings-sprite"><span class="star-ratings-sprite-rating" style="width:{{ config('app.ratePercent') * $selectedCourse->course_rate  }}%" data-course-rate="{{ $selectedCourse->course_rate }}"></span></div></li>
                            <li><span></span>{{ $selectedCourse->course_rate }} Ratings ( {{ $selectedCourse->user()->count() }} students enrolled )</li>
                            <li></li>
                            <li><a href="#">Join Now</a></li>
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
                            <li>
                                <div class="upcommin-text-outer">
                            <div class="upcomming-img">
                                <img src="assets/img/uc-img1.jpg" alt="us-img"/>
                            </div>
                            <div class="upcommin-text">
                                <p>Lorem ipsum dolor sit amet,imperdiet sit amet aliquet ac, facilisi consectetur adipiscing elitmauris. Nulla congue suscipit tin</p>
                                <span><i class="fa fa-clock-o" aria-hidden="true"></i>  at 9: 00 p.m by Orion mimin</span>
                            </div>
                        </div>
                            </li>
                            <li>
                                <div class="upcommin-text-outer">
                            <div class="upcomming-img">
                                <img src="assets/img/uc-img1.jpg" alt="us-img"/>
                            </div>
                            <div class="upcommin-text">
                                <p>Lorem ipsum dolor sit amet,imperdiet sit amet aliquet ac, facilisi consectetur adipiscing elitmauris. Nulla congue suscipit tin</p>
                                <span><i class="fa fa-clock-o" aria-hidden="true"></i>  at 9: 00 p.m by Orion mimin</span>
                            </div>
                        </div>
                            </li>
                            <li>
                                <div class="upcommin-text-outer">
                            <div class="upcomming-img">
                                <img src="assets/img/uc-img1.jpg" alt="us-img"/>
                            </div>
                            <div class="upcommin-text">
                                <p>Lorem ipsum dolor sit amet,imperdiet sit amet aliquet ac, facilisi consectetur adipiscing elitmauris. Nulla congue suscipit tin</p>
                                <span><i class="fa fa-clock-o" aria-hidden="true"></i>  at 9: 00 p.m by Orion mimin</span>
                            </div>
                        </div>
                            </li>
                            <li>
                                <div class="upcommin-text-outer">
                            <div class="upcomming-img">
                                <img src="assets/img/uc-img1.jpg" alt="us-img"/>
                            </div>
                            <div class="upcommin-text">
                                <p>Lorem ipsum dolor sit amet,imperdiet sit amet aliquet ac, facilisi consectetur adipiscing elitmauris. Nulla congue suscipit tin</p>
                                <span><i class="fa fa-clock-o" aria-hidden="true"></i>  at 9: 00 p.m by Orion mimin</span>
                            </div>
                        </div>
                            </li>
                            <li>
                                <div class="upcommin-text-outer">
                            <div class="upcomming-img">
                                <img src="assets/img/uc-img1.jpg" alt="us-img"/>
                            </div>
                            <div class="upcommin-text">
                                <p>Lorem ipsum dolor sit amet,imperdiet sit amet aliquet ac, facilisi consectetur adipiscing elitmauris. Nulla congue suscipit tin</p>
                                <span><i class="fa fa-clock-o" aria-hidden="true"></i>  at 9: 00 p.m by Orion mimin</span>
                            </div>
                        </div>
                            </li>
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
                            <img src="assets/img/dn-img.jpg" alt="dn"> <span>Write your questions here...</span>
                        </div>
                        <!-- .questions -->
                        <div class="taype-select">
                            <a class="btn btn-default btn-select options2">
                                        <input type="hidden" class="btn-select-input" id="1" name="1" value="" />
                                        <span class="btn-select-value">Select an Item</span>
                                        <span class="btn-select-arrow fa fa-angle-down"></span>
                                        <ul>
                                            <li class="selected">Default Sorting</li>
                                            <li>Option 1</li>
                                            <li>Option 2</li>
                                            <li>Option 3</li>
                                            <li>Option 4</li>
                                        </ul>
                                    </a>
                        </div>
                        
                        <!-- .discussion-comment -->
                        <div class="discussion-comment">
                            <ul>
                                <li>
                                    <div class="comment-text1">
                                        <img src="assets/img/comment-img.jpg" alt="comment"/>
                                        <div class="text">
                                            <strong>Adrite rowshan</strong>
                                            <p>Is it perfect for others sides? I need two ways of it.</p>
                                            <a href="#"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="comment-text1 reply">
                                        <img src="assets/img/comment-img2.jpg" alt="comment"/>
                                        <div class="text">
                                            <strong>Adrite rowshan</strong>
                                            <p>Is it perfect for others sides? I need two ways of it.</p>
                                            <a href="#"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="comment-text1">
                                        <img src="assets/img/comment-img.jpg" alt="comment"/>
                                        <div class="text">
                                            <strong>Adrite rowshan</strong>
                                            <p>Is it perfect for others sides? I need two ways of it.</p>
                                            <a href="#"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="comment-text1 reply">
                                        <img src="assets/img/comment-img2.jpg" alt="comment"/>
                                        <div class="text">
                                            <strong>Adrite rowshan</strong>
                                            <p>Is it perfect for others sides? I need two ways of it.</p>
                                            <a href="#"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="comment-text1">
                                        <img src="assets/img/comment-img.jpg" alt="comment"/>
                                        <div class="text">
                                            <strong>Adrite rowshan</strong>
                                            <p>Is it perfect for others sides? I need two ways of it.</p>
                                            <a href="#"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="comment-text1 reply">
                                        <img src="assets/img/comment-img2.jpg" alt="comment"/>
                                        <div class="text">
                                            <strong>Adrite rowshan</strong>
                                            <p>Is it perfect for others sides? I need two ways of it.</p>
                                            <a href="#"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- /.discussion-comment -->
                    </div>
                </div>
                    
                    
                    
                </div>
            </div>
        <!-- /.discussion-contaniner-->
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
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
        });
    });
</script>
@endsection
