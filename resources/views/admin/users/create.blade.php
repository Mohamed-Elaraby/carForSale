@php
$pageType = __('trans.create');
$pageItem = __('trans.user')

@endphp
@extends('admin.layouts.app')

@section('title', $pageType.' '.$pageItem)

@section('content')
    <div class="row">
        <div class="col-xs-6 center-block" style="float: none">
            <div class="card card-success">
                <div class="error_messages">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                <div class="card-header">
                    <h3 class="text-center"><i class="fa fa-user"></i> {{ $pageType .' '. $pageItem }}</h3>
                </div>
                <div class="card-body">
                    {!! Form::open(['route' => 'admin.users.store', 'method' => 'post', 'files'=> true]) !!}
                        <div class="form-group">
                            {!! Form::label('name', __('trans.username'), ['class' => 'control-label']) !!}
                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('email', __('trans.email'), ['class' => 'control-label']) !!}
                            {!! Form::email('email', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('password', __('trans.password'), ['class' => 'control-label']) !!}
                            {!! Form::password('password', ['class' => 'form-control']) !!}
                        </div>
                        <!-- Profile Picture Section -->
                        <div class="form-group">
                            {!! Form::label('profile_picture', __('trans.profile picture'), ['class' => 'control-label']) !!}
                            {!! Form::file('profile_picture', ['class' => 'form-control', 'id' => 'myImg']) !!}
                        </div>
                        <div class="form-group">
                            <img class="img-thumbnail" id="imagePreview" src="{{ asset('storage/default.png') }}" height="100px" width="100px">
                        </div>
                    </div>
                    <div class="form-group">
                            {!! Form::submit($pageType, ['class' => 'form-control btn btn-success']) !!}
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
@endsection
@push('scripts')
    @include('admin.includes.imagePreviewJQueryCode')
@endpush
