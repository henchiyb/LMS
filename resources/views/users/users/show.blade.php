@extends('users.layouts.default')

@section('title')
    @can('is-teacher', $selectedUser)
        {{ __('teacher_profile') }}
    @endcan

    @can('is-student', $selectedUser)
        {{ __('student_profile') }}
    @endcan
@endsection

@section('inline_styles')
    <link rel="stylesheet" href="{{ asset('assets/css/custom/users_show.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css" />
@endsection

@section('content')
    @can('is-teacher', $selectedUser)
        <section class="courses">
            <!-- .courses -->
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <!-- .student-outer -->
                        <div class="student-outer teacher-outer">
                            <div class="student-img">
                                <h6><img src="{{ asset($selectedUser->avatar) }}" width="360px" height="360px" alt="teacher-profile-img"></h6>
                            </div>
                            <div class="student-text">
                                <div class="teacher-personal-info">
                                    <h4> {{ $selectedUser->name }} </h4>
                                    {{ __('last_login') }} : {{ $selectedUser->last_login }}<br/>
                                    {{-- Next Class : 2 P.M<br/> --}}
                                    {{-- Topics : Affiliate Marketing --}}
                                </div>
                                <a id="edit-profile">
                                    {{ __('edit_profile') }}
                                </a>    
                                <a href="#">
                                    Courses Manager
                                </a>    
                                {{--  <a href="#">
                                    Skills
                                </a>    
                                <a href="#">
                                    Notifications
                                </a>      --}}
                            </div>
                        </div>
                        <!-- /.student-outer -->
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8">
                        <!-- .teacher-info -->
                        <div class="student-info teacher-info">
                            <h3> {{ __('skill_experience') . strtoupper($selectedUser->name) }} :</h3>
                            <ul>
                                <li><span id="working-place"><i class="fa fa-graduation-cap" aria-hidden="true"></i> {{ __('working_place') }} :</span><div> {{ $selectedUser->working_place }} </div></li>
                                <li><span><i class="fa fa-hand-peace-o" aria-hidden="true"></i> {{ __('specializes') }} :</span> {{ $specializesName }} </li>
                                <li><span><i class="fa fa-clipboard" aria-hidden="true"></i> {{ __('courses') }} :</span> {{ $coursesName }} </li>
                                <li><span><i class="fa fa-envelope" aria-hidden="true"></i> {{ __('email') }} :</span> {{ $selectedUser->email }} </li>
                                <li><span id="phone"><i class="fa fa-phone" aria-hidden="true"></i> {{ __('phone_number') }} :</span><div> {{ $selectedUser->phone }} </div></li>
                                <li><span id="birthday"><i class="fa fa-birthday-cake" aria-hidden="true"></i> {{ __('date_of_birth') }} :</span><div> {{ $selectedUser->birthday }} </div></li>
                                <li><span id="address"><i class="fa fa-map-marker" aria-hidden="true"></i> {{ __('address') }} :</span><div> {{ $selectedUser->address }} </div></li>
                            </ul>
                        </div>
                        <!-- .teacher-info -->
                    </div>              
                    <div class="col-sm-12 col-md-12">
                        <div class="news-box teacher-biogaphy">
                            <h4>TEACHER’S BIOGRAPHY</h4>
                            <h2><a href="#"> {{ $selectedUser->name }} </a><span> {{ $specializesName }} </span></h2>
                            <div class="news-text">
                                <div class="news-comment">
                                <ul>
                                    <li><i class="fa fa-pencil" aria-hidden="true"></i> {{ $selectedUser->courses->count() . ' ' . __('courses') }} </li>
                                    <li><i class="fa fa-user" aria-hidden="true"></i> {{ $countStudent . ' ' . __('students') }} </li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i>  {{ __('avg_rate') . ': ' . $teacherRate }} </li>
                                </ul>
                                </div>
                                <p> {{ $selectedUser->personal_info }} </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.courses -->
        </section>
        {{-- Modal Form Edit Profile --}}
        <div id="edit-profile-modal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"> {{ __('edit_profile') }} </h4>
                    </div>
                    <div class="modal-body">
                        {{ Form::open() }}
                            <div class="form-group">
                                {{ Form::label('email', null, ['class' => 'control-label']) }}
                                {{ Form::text('email', null, ['class' => 'form-control', 'id' => 'm-email', 'disabled' => '']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('name', null, ['class' => 'control-label']) }}
                                {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'm-name', 'disabled' => '']) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('working_place', __('working_place'), ['class' => 'control-label']) }}
                                {{ Form::text('working_place', null, ['class' => 'form-control', 'id' => 'm-working-place']) }}
                                <p style="color: red" id="error-m-working-place" hidden=""></p>
                            </div>
                            <div class="form-group">
                                {{ Form::label('phone', __('phone_number'), ['class' => 'control-label']) }}
                                {{ Form::text('phone', null, ['class' => 'form-control', 'id' => 'm-phone']) }}
                                <p style="color: red" id="error-m-phone" hidden=""></p>
                            </div>
                            <div class="form-group">
                                {{ Form::label('birthday', __('date_of_birth'), ['class' => 'control-label']) }}
                                {{ Form::text('birthday', null, ['class' => 'form-control', 'id' => 'm-birthday', 'data-provide' => 'datepicker', 'data-date-format' => 'yyyy-mm-dd']) }}
                                <p style="color: red" id="error-m-birthday" hidden=""></p>
                            </div>
                            <div class="form-group">
                                {{ Form::label('address', __('address'), ['class' => 'control-label']) }}
                                {{ Form::text('address', null, ['class' => 'form-control', 'id' => 'm-address']) }}
                                <p style="color: red" id="error-m-address" hidden=""></p>
                            </div>
                        {{ Form::close() }}
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-warning" type="submit" id="update-profile">
                            {{ __('update') }}
                        </button>
                        <button class="btn btn-warning" type="button" data-dismiss="modal">
                            {{ __('close-modal') }}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endcan

    @can('is-student', $selectedUser)
        <section class="courses">
            <!-- .courses -->
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <!-- .student-outer -->
                        <div class="student-outer">
                            <div class="student-img">
                                <h6><img src="{{ asset($selectedUser->avatar) }}" width="360px" height="360px" alt="student-img1"></h6>
                            </div>
                             <div class="student-text">
                                 <a href="{{ route('my-course', $selectedUser->id) }}">
                                     {{ __('my course') }}
                                 </a>
                                 <a href="{{ route('users.show', $selectedUser->id) }}">
                                     {{ __('my profile') }}
                                 </a>
                            </div>
                        </div>
                        <!-- /.student-outer -->                    
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8">   
                        <!-- .student-info -->
                        <div class="student-info">
                            <h3> {{ $selectedUser->name }} <span>Student</span></h3>
                            <ul>
                                <li><span> {{ __('email') }}: </span> {{ $selectedUser->email }} </li>
                                <li><span>  {{ __('phone_number') }}: </span> {{ $selectedUser->phone }} </li>
                                <li><span> {{ __('date_of_birth') }}: </span> {{ $selectedUser->birthday }} </li>
                                <li><span> {{ __('address') }}: </span>  {{ $selectedUser->address }} </li>
                                <li><span> {{ __('working_place') }}: </span>  {{ $selectedUser->working_place }} </li>
                                <li><span> {{ __('grade') }}: </span> {{ $selectedUser->grade }} </li>
                                <li><span> {{ __('personal_info') }}: </span> {{ $selectedUser->personal_info }}</li>                                
                                <li><span> {{ __('last_login') }}: </span> {{ $selectedUser->last_login }}</li>
                            </ul>
                        </div>
                        <!-- .student-info -->
                    </div>              
                    
                </div>
            </div>
            <!-- /.courses -->
        </section>
    @endcan
@endsection

@section('inline_scripts')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript">
        $( document ).ready(function() {
            $('.datepicker').datepicker();

            var flag = 0;

            $('#edit-profile').attr('data-id', '{{ $selectedUser->id }}');
            $('#edit-profile').attr('data-email', '{{ $selectedUser->email }}');
            $('#edit-profile').attr('data-name', '{{ $selectedUser->name }}');
            $('#edit-profile').attr('data-working-place', '{{ $selectedUser->working_place }}');
            $('#edit-profile').attr('data-phone', '{{ $selectedUser->phone }}');
            $('#edit-profile').attr('data-birthday', '{{ $selectedUser->birthday }}');
            $('#edit-profile').attr('data-address', '{{ $selectedUser->address }}');

            $('#edit-profile').click(function( event ) {
                event.preventDefault();
                
                $('#edit-profile-modal').modal('show');
                $('#form-horizontal').show();

                if(!flag) {
                    $('#m-email').val($(this).data('email'));
                    $('#m-name').val($(this).data('name'));
                    $('#m-working-place').val($(this).data('working-place'));
                    $('#m-phone').val($(this).data('phone'));
                    $('#m-birthday').val($(this).data('birthday'));
                    $('#m-address').val($(this).data('address'));
                }
            });

            $('#update-profile').click(function() {
                var id = $('#edit-profile').data('id');

                $.ajaxSetup({
                    headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: 'POST',
                    url: '/users/' + id + '/update',
                    data: {
                        id: id,
                        working_place: $('#m-working-place').val(),
                        phone: $('#m-phone').val(),
                        birthday: $('#m-birthday').val(),
                        address: $('#m-address').val(),
                    },
                    success: function(data) {
                        $('#edit-profile-modal').modal('hide');

                        $.notify({
                            // options
                            message: ' {{ __('update_user_success') }} '
                        },{
                            // settings
                            type: 'success'
                        });

                        $('#working-place').next().text($('#m-working-place').val());
                        $('#phone').next().text($('#m-phone').val());
                        $('#birthday').next().text($('#m-birthday').val());
                        $('#address').next().text($('#m-address').val());

                        $('#m-email').val(data.email);
                        $('#m-name').val(data.name);
                        $('#m-working-place').val(data.working_place);
                        $('#m-phone').val(data.phone);
                        $('#m-birthday').val(data.birthday);
                        $('#m-address').val(data.address);

                        flag = 1;
                    },
                    error: function(response) {
                        errors = response.responseJSON.errors;

                        if (errors.working_place != null) {
                            $('#error-m-working-place').removeAttr('hidden');
                            $('#error-m-working-place').text(errors.working_place);
                            $('#m-working-place').addClass('error-input');
                        } else {
                            $('#error-m-working-place').attr('hidden', '');
                            $('#m-working-place').removeClass('error-input');
                        }

                        if (errors.phone != null) {
                            $('#error-m-phone').removeAttr('hidden');
                            $('#error-m-phone').text(errors.phone);
                            $('#m-phone').addClass('error-input');
                        } else {
                            $('#error-m-phone').attr('hidden', '');
                            $('#m-phone').removeClass('error-input');
                        }

                        if (errors.birthday != null) {
                            $('#error-m-birthday').removeAttr('hidden');
                            $('#error-m-birthday').text(errors.birthday);
                            $('#m-birthday').addClass('error-input');
                        } else {
                            $('#error-m-birthday').attr('hidden', '');
                            $('#m-birthday').removeClass('error-input');
                        }

                        if (errors.address != null) {
                            $('#error-m-address').removeAttr('hidden');
                            $('#error-m-working-place').text(errors.address);
                            $('#m-address').addClass('error-input');
                        } else {
                            $('#error-m-address').attr('hidden', '');
                            $('#m-address').removeClass('error-input');
                        }
                    }
                }, 'json');
            });
        });
    </script>
@endsection
