@extends('users.layouts.default')

@section('title')
    Login
@endsection

@section('content')
    <section class="courses">           
        <!-- .courses -->
        <div class="container">
            <div class="row">       
                <div class="sign-up-outer">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="our-course">
                        {{ Form::open(['method' => 'post', 'name' => 'ajax-form', 'id' => 'contact-form2', 'class' => 'contact-form']) }}
                            <div class="col-sm-12 col-md-12">
                                <h2> {{ __('login') }} </h2>
                                <p> {{ __('login_pls') }} </p>
                            </div>
                            <div class="col-sm-12 col-md-12 email">
                                {{ Form::text('email', null, ['id' => 'email', 'placeholder' => __('your_email')]) }}
                            </div>
                            <div class="col-sm-12 col-md-12 password">
                                {{ Form::password('password', ['id' => 'password', 'placeholder' => __('your_password')]) }}
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <label class="checkbox-inline">
                                    {{ Form::checkbox('remember', null, false, ['id' => 'remember']) }}
                                    {{ __('remember_me') }}
                                </label>
                            </div>
                            <div class="col-sm-12 col-md-12 text-center">
                                {{ Form::submit(__('login'), ['id' => 'send', 'name' => 'submit']) }}
                            </div>
                        {{ Form::close() }}
                    </div>
                </div>              
                </div>  
            </div>
        </div>
        <!-- /.courses -->
    </section>
@endsection
