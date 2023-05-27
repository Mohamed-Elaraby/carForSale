@extends('admin.layouts.app')

@section('title', __('trans.home'))

@section('content')


    <div class="row">
        <div class="col-md-12">
            <div style="width: 100%; margin: 0 auto; position: relative; height: 100vh">
                <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%,-50%)">
                    <span style="font-size: 25px">
                        مرحبا {{ Auth::user()->name }}
                    </span>
                </div>
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
@endsection
@push('links')

@endpush

@push('scripts')

@endpush
