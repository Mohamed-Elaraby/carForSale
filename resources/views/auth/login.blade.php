@extends('admin.layouts.auth.authApp')

@section('title', config('app.name').' Login')

@section('content')
    <div class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a style="font-size: 20px" href="{{ route('admin.dashboard') }}"><b>{{ $setting? $setting -> site_name: null }}</b></a>
            </div>
            @if ($errors->has('email'))
                {{ $errors->first('email') }}
            @endif
            <div class="login-box-body">
                {!! Form::open(['route' => 'login', 'method' => 'post']) !!}
                <div class="form-group has-feedback">
                    {!! Form::text('email', old('email'), ['class' => ['form-control', $errors->has('email') ? 'is-invalid' : ''] , 'placeholder' => __('trans.email'), 'autocomplete' => 'on']) !!}
                    <span class="form-control-feedback"><i class="fa fa-id-card-o"></i></span>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong class="text-danger">{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback">
                    {!! Form::password('password', ['class' => ['form-control', $errors->has('password') ? 'is-invalid' : ''], 'placeholder' => __('trans.password'), 'autocomplete' => 'on']) !!}
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong class="text-danger">{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <label>
                            {!! Form::checkbox('remember', 'on', null,  ['id' => 'remember', old('remember') ? 'checked' : '']) !!}
                            {{ __('trans.remember me') }}
                        </label>
                    </div>
                    <div class="col-xs-4">
                        {!! Form::submit(__('trans.sign in'), ['class' => 'form-control btn btn-primary btn-block btn-flat']) !!}
                    </div>
                </div>
                <!-- Sign in With Social Media Section -->
                {{--<div class="social-auth-links text-center">
                    <p>- {{ __('trans.or') }} -</p>
                    <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> {{ __('trans.sign in using Facebook') }}</a>
                    <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> {{ __('trans.sign in using Google') }}</a>
                </div>--}}
                <!-- /.social-auth-links -->
                {{--@if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('trans.forgot Your Password?') }}
                    </a>
                @endif--}}
                {{--<a href="{{ route('register') }}" class="text-center">{{ __('trans.register a new member') }}</a>--}}
                {!! Form::close() !!}

            </div>
            <!-- /.login-box-body -->
        </div>
    </div>
@stop

@push('scripts')

@endpush

