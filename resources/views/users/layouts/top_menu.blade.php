<!-- /top-menu -->
<div class="top-menu">
    <!-- top-header -->
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="phone dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i class="fa fa-globe" aria-hidden="true"></i> Language : English </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">English</a></li>
                            <li><a href="#">Vietnamese</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="social">
                        <ul>
                            @guest
                            <li><a href="{{ route('login') }}"> Log In </a></li>
                            <li>|</li>
                            <li><a href="{{ route('register') }}"> Sign up </a></li>
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"  data-hover="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right fix-dropdown" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('users.show', Auth::user()->id) }}">
                                        {{ __('my_profile') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    {{ Form::open(['method' => 'post', 'url' => 'logout', 'id' => 'logout-form']) }}
                                    {{ Form::close() }}
                                </div>
                            </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /top-header -->
    <!-- mainNav -->
    <div id="mainNav" class="navbar-fixed-top">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-inverse navbar-default">

                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('assets/img/logo.png') }}" alt="logo"/></a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1" data-hover="dropdown" data-animations="fadeIn fadeInLeft fadeInUp fadeInRight">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="{{ route('home') }}">Home</a>                                      
                            </li>
                            <li>
                                <a href="about.html">About Us</a>                                       
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Courses</a>
                                <div class="dropdown-menu dropdownhover-bottom mega-menu" role="menu">
                                    <div class="col-sm-12 col-md-12">
                                        <ul>
                                            <li><a href="{{ route('courses.index') }}">All Courses (150)</a></li>
                                            <li><a href="courses.html">UI/UX (12)</a></li>
                                            <li><a href="courses.html">CMS (42)</a></li>
                                            <li><a href="courses.html">Business (18)</a></li>
                                            <li><a href="courses.html">Marketing (20)</a></li>
                                            <li><a href="courses.html">Development (12)</a></li>
                                            <li><a href="courses.html">It & Software ( 15)</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="teacher.html">Teacher</a>
                            </li>
                            <li>
                                <a href="student-portfolio.html">Student Profile</a>                                        
                            </li>
                            <li>
                                <a href="pricing.html"><span>Pricing</span></a>
                            </li>
                            <li>
                                <a href="contact.html"><span>Contact</span></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                        <!-- /.navbar-collapse -->
                    </div>

                </nav>
            </div>
        </div>


    </div>
    <!-- /mainNav -->
</div>
<!-- /top-menu -->