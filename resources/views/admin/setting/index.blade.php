@extends('admin.layouts.app')

@section('title', __('trans.site setting'))

@section('content')
    <div class="row">
        <div class="col-xs-6 center-block" style="float: none">
            <div class="card card-success">
                <div class="error_messages text-center">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (session('delete'))
                        <div class="alert alert-danger">
                            {{ session('delete') }}
                        </div>
                    @endif
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
                    <h3 class="text-center"><i class="fa fa-cogs"></i> {{ __('trans.site setting') }}</h3>
                </div>
                <div class="card-body">
                    {!! Form::open(['route' => 'admin.setting.update', 'method' => 'post', 'files' => true]) !!}
                    <div class="form-group">
                        {!! Form::label('site_name', __('trans.site name'), ['class' => 'control-label']) !!}
                        {!! Form::text('site_name', $setting? $setting -> site_name: null , ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('title', __('trans.title'), ['class' => 'control-label']) !!}
                        {!! Form::text('title', $setting? $setting -> title: null , ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('description', __('trans.description'), ['class' => 'control-label']) !!}
                        {!! Form::textarea('description', $setting? $setting -> description: null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('keywords', __('trans.keywords'), ['class' => 'control-label']) !!}
                        {!! Form::textarea('keywords', $setting? $setting -> keywords: null, ['class' => 'form-control', 'placeholder' => 'اكتب الكلمات المفتاحية متبوعة بفاصلة مثل keyword2, keyword1, ....']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit(__('trans.save edits'), ['class' => 'form-control btn btn-success']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@push('links')

@endpush

@push('scripts')
    @include('admin.includes.imagePreviewJQueryCode')
@endpush
