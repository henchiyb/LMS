@extends('users.layouts.default')

@section('title')
    {{ __('sign_up') }}
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
                                    <h2> {{ __('create_an_account') }} </h2>
                                    <p> {{ __('sign_up_pls') }} </p>
                                </div>
                                <div class="col-sm-12 col-md-12 author">
                                    {{ Form::text('name', null, ['id' => 'name', 'placeholder' => __('your_name')]) }}
                                </div>
                                <div class="col-sm-12 col-md-12 email">
                                    {{ Form::text('email', null, ['id' => 'email', 'placeholder' => __('your_email')]) }}
                                </div>
                                <div class="col-sm-12 col-md-12 password">
                                    {{ Form::password('password', ['id' => 'password', 'placeholder' => __('your_password')]) }}
                                </div>
                                <div class="col-sm-12 col-md-12 password">
                                    {{ Form::password('password_confirmation', ['id' => 'password-confirmation', 'placeholder' => __('your_password_confirmation')]) }}
                                </div>
                                <div class="col-sm-12 col-md-12 text-center">
                                    {{ Form::submit(__('sign_up'), ['id' => 'send', 'name' => 'submit']) }}
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
