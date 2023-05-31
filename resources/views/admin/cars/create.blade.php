@php
$pageType = __('trans.create');
$pageItem = __('trans.car')

@endphp
@extends('admin.layouts.app')

@section('title', $pageType.' '.$pageItem)

@section('content')
    <div class="container">
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
                        <h3 class="text-center"><i class="fa fa-briefcase"></i> {{ $pageType .' '. $pageItem }}</h3>
                    </div>
                    <div class="card-body">
                        {!! Form::open(['route' => 'admin.cars.store', 'method' => 'post']) !!}
                        <div class="form-group">
                            {!! Form::label('name', __('trans.car name'), ['class' => 'control-label']) !!}
                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('manufacturing_year', __('trans.manufacturing year'), ['class' => 'control-label']) !!}
                            {!! Form::select('manufacturing_year', ['' => ''] + $manufacturing_years, null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            @php($manufacturing_countries = ['' => '', 'وارد امريكى' => 'وارد امريكى', 'وارد يابانى' => 'وارد يابانى', 'وارد كورى' => 'وارد كورى', 'خليجى' => 'خليجى', 'ناغى' => 'ناغى'])
                            {!! Form::label('manufacturing_country', __('trans.manufacturing country'), ['class' => 'control-label']) !!}
                            {!! Form::select('manufacturing_country', $manufacturing_countries, null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('kilometers', __('trans.kilometers'), ['class' => 'control-label']) !!}
                            {!! Form::text('kilometers', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('warranty', __('trans.warranty'), ['class' => 'control-label']) !!}
                            <label>
                                {!! Form::radio('warranty_status', 1, null,  ['class' => 'warranty_status']) !!}
                                ضمان
                                {!! Form::radio('warranty_status', 0, 'checked',  ['class' => 'warranty_status']) !!}
                                بدون ضمان
                            </label>
                            {!! Form::text('warranty', 'بدون ضمان', ['class' => 'form-control', 'id' => 'warranty']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('inside_color', __('trans.inside color'), ['class' => 'control-label']) !!}
                            {!! Form::text('inside_color', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('outside_color', __('trans.outside color'), ['class' => 'control-label']) !!}
                            {!! Form::text('outside_color', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('rim_size', __('trans.rim size'), ['class' => 'control-label']) !!}
                            {!! Form::text('rim_size', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('body_status', __('trans.body status'), ['class' => 'control-label']) !!}
                            {!! Form::text('body_status', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('gear_status', __('trans.gear status'), ['class' => 'control-label']) !!}
                            {!! Form::text('gear_status', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('engine_status', __('trans.engine status'), ['class' => 'control-label']) !!}
                            {!! Form::text('engine_status', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('keys_count', __('trans.keys count'), ['class' => 'control-label']) !!}
                            {!! Form::text('keys_count', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('hours_count', __('trans.hours count'), ['class' => 'control-label']) !!}
                            {!! Form::text('hours_count', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('gear_box', __('trans.gear box'), ['class' => 'control-label']) !!}
                            {!! Form::select('gear_box', ['' => '', 'Manual' => 'Manual', 'Automatic' => 'Automatic', 'Automatic 6 Speed' => 'Automatic 6 Speed', 'Automatic 8 Speed ' => 'Automatic 8 Speed '], null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('fuel', __('trans.fuel'), ['class' => 'control-label']) !!}
                            {!! Form::select('fuel', ['' => '', 'petrol' => 'petrol', 'diesel' => 'diesel', 'electric' => 'electric', 'hybrid ' => 'hybrid '], null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('engine_size', __('trans.engine size'), ['class' => 'control-label']) !!}
                            {!! Form::text('engine_size', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('type', __('trans.type'), ['class' => 'control-label']) !!}
                            {!! Form::text('type', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('code', __('trans.code'), ['class' => 'control-label']) !!}
                            {!! Form::text('code', null, ['class' => 'form-control']) !!}
                        </div>
                        {{--                    <div class="form-group">--}}
                        {{--                        {!! Form::label('status', __('trans.status'), ['class' => 'control-label']) !!}--}}
                        {{--                        {!! Form::select('status', ['' => '', 'متاحة' => 'متاحة', 'محجوزة' => 'محجوزة', 'مباعة' => 'مباعة'], null, ['class' => 'form-control']) !!}--}}
                        {{--                    </div>--}}
                        <div class="form-group">
                            {!! Form::label('price', __('trans.price'), ['class' => 'control-label']) !!}
                            {!! Form::text('price', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('price_status', __('trans.price status'), ['class' => 'control-label']) !!}
                            {!! Form::select('price_status', [''=> '', 'قابل للتفاوض' => 'قابل للتفاوض', 'غير قابل للتفاوض' => 'غير قابل للتفاوض'], null,['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('category_id', __('trans.category'), ['class' => 'control-label']) !!}
                            {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        {!! Form::submit($pageType, ['class' => 'form-control btn btn-success']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(document).on('change', '.warranty_status', function () {
            let warranty_status = $(this).val();
            let warranty_input = $('#warranty');
            if (warranty_status == 0)
            {
                warranty_input.val('بدون ضمان');
            }else
            {
                warranty_input.val('');
            }
        })
    </script>
@endpush
