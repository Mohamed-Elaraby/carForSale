 @php
    $pageType = __('trans.edit');
    $pageItem = __('trans.category')
@endphp
@extends('admin.layouts.app')

@section('title', ' تعديل قسم '.$category -> name)

@section('content')
        <div class="row">
            <div class="col-xs-12 center-block" style="float: none">
                <div class="card card-primary mt-5">
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
                        <h3 class="text-center"><i class="fa fa-pencil"></i> تعديل قسم {{ $category->name }}</h3>
                    </div>
                    <div class="card-body">

                        {!! Form::open(['route' => ['admin.categories.update', $category -> id], 'method' => 'put', 'id' => 'myForm']) !!}

                        <div class="form-group">
                            {!! Form::label('name', __('trans.category name'), ['class' => 'control-label']) !!}
                            {!! Form::text('name', $category -> name, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('description', __('trans.category description'), ['class' => 'control-label']) !!}
                            {!! Form::textarea('description', $category -> description, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('keywords', __('trans.keywords'), ['class' => 'control-label']) !!}
                            {!! Form::textarea('keywords', $category -> keywords, ['class' => 'form-control']) !!}
                        </div>
                        {{--                        <div class="form-group">--}}
                        {{--                            {!! Form::submit($pageType, ['class' => 'form-control btn btn-primary']) !!}--}}
                        {{--                        </div>--}}
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
@endsection
@push('links')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.css" integrity="sha512-jU/7UFiaW5UBGODEopEqnbIAHOI8fO6T99m7Tsmqs2gkdujByJfkCbbfPSN4Wlqlb9TGnsuC0YgUgWkRBK7B9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        .custom-file-upload {
            border: 1px solid #ccc;
            height: 100px;
            position: relative;
            display: inline-block;
            padding: 6px 12px;
            cursor: pointer;
        }
        .upload_text
        {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
@endpush

@push('scripts')

@endpush

