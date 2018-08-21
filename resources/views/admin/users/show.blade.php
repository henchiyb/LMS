@extends('admin.admin_layouts.master')

@section('title')
    {{ __('information') }}
@endsection

@section('inline_styles')
    <link rel="stylesheet" href="{{ asset('assets/admin/css/admin-custom.css') }}">
@endsection

@section('content')
    <div class="main-content">
        <div class="container-fluid">
            <div class="page-header">
                <h2 class="header-title">{{ __('information') }}</h2>
                <div class="header-sub-title">
                    <nav class="breadcrumb breadcrumb-dash">
                        <a href="{{ route('admins.adminDashboard') }}" class="breadcrumb-item">
                            <i class="ti-home p-r-5"></i>{{ __('admin dashboard') }}
                        </a>
                        <a href="{{ route('admins.users.index') }}" class="breadcrumb-item">{{ __('users') }}</a>
                        <span class="breadcrumb-item active">{{ $user->name }}</span>
                    </nav>
                </div>
            </div>  
            <div class="card">
                <div class="card-header border bottom">
                    <h4 class="card-title">{{ __('personal information') }}</h4>
                </div>
                <div class="card-body">
                    <div class="row m-t-30">
                        <div class="col-md-4">
                            <div class="p-h-10">
                                <div class="form-group">
                                    <label class="control-label">{{ __('name') }}</label>
                                    <p class="form-control" aria-readonly="true">{{ $user->name }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-h-10">
                                <div class="form-group">
                                    <label class="control-label">{{ __('email') }}</label>
                                    <p class="form-control" aria-readonly="true">{{ $user->email }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-h-10">
                                <div class="form-group">
                                    <label class="control-label">Avatar</label>
                                    <img class="form-control-plaintext fix-avatar" 
                                        src="{{  asset($user->avatar) }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row m-t-30">
                        <div class="col-md-4">
                            <div class="p-h-10">
                                <div class="form-group">
                                    <label class="control-label">{{ __('address') }}</label>
                                    <p class="form-control" aria-readonly="true">{{ $user->address }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-h-10">
                                <div class="form-group">
                                    <label class="control-label">{{ __('role') }}</label>
                                    <p class="form-control" aria-readonly="true">{{ \App\Models\User::$roles[$user->role] }}</p>
                                </div>
                            </div>
                        </div> 
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">{{ __('joined in') }}</label>
                                <p class="form-control-plaintext">{{ $user->created_at }}</p>
                                <small class="form-text" aria-readonly="true">{{ __('join in descript') }}</small>
                            </div>
                        </div>
                    </div>
                    <div class="row m-t-30">
                        <div class="col-md-8">
                            <div class="p-h-10">
                                <div class="form-group">
                                    <label class="control-label">{{ __('about yourself') }}</label>
                                    <textarea class="form-control" rows="3">{{ $user->personal_info }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-h-10">
                                <div class="form-group">
                                    <label class="control-label">{{ __('working_place') }}</label>
                                    <p class="form-control" aria-readonly="true">{{ $user->working_place }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if ($user->role == 0)
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">{{ __('specializes') }}</label>
                                    <p class="form-control" aria-readonly="true">{{ $specializesName }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-30">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="control-label">{{ __('teaching course') }}</label>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Course</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($user->courses as $course)
                                                <tr>
                                                    <th scope="row">{{ $course->id }}</th>
                                                    <td>
                                                        <a href="{{ route('admins.courses.edit', $course->id) }}">{{ $course->title }}</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="p-h-10">
                                    <div class="form-group">
                                        <label class="control-label">{{ __('student numbers') }}</label>
                                        <p class="form-control" aria-readonly="true">{{ $countStudent }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if ($user->role == 1)
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <div class="p-h-10">
                                    <div class="form-group">
                                        <label class="control-label">{{ __('joined course') }}</label>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Course</th>
                                                    <th scope="col">Teacher</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($user->course as $course)
                                                    <tr>
                                                        <th scope="row">{{ $course->id }}</th>
                                                        <td>
                                                            <a href="{{ route('admins.courses.edit', $course->id) }}">{{ $course->title }}</a>
                                                        </td>
                                                        <td>
                                                            <a href="{{ route('admins.users.show', $course->user->id) }}">{{ $course->user->name }}</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>   
        </div>
    </div>
@endsection
