@extends('admin.layouts.app')

@section('title', __('trans.all car'))

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="card">
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
                </div>
                <div class="card-header" style="margin: 20px 0">
                    <div class="row">
                        <div class="col-xs-9">
                            <h4 style="margin: 0; padding: 0; display: inline">{{ __('trans.all car') }}</h4>
                        </div>
                        <div class="col-xs-3">
                                <a href="{{ route('admin.cars.create') }}" class="btn btn-success btn-sm pull-right"><i class="fa fa-plus"></i> {{ __('trans.create') }}</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <form method="post" action="{{ route('admin.cars.create') }}" class="form-inline" style=" text-align: center; margin-top: 20px">
                                @csrf

                                <div class="form-group">
                                    <input type="text" id="start_date" value="" placeholder="من تاريخ" autocomplete="off" >
                                </div>
                                <div class="form-group">
                                    <input type="text" id="end_date" value="" placeholder="الى تاريخ" autocomplete="off" >
                                </div>
                                <button type="button" id="filter_date_button" class="btn btn-success btn-xs">تصفية <i class="fa fa-filter"></i> </button>
                                <button type="button" id="refresh_date_button" class="btn btn-warning btn-xs">اعادة تحميل <i class="fa fa-refresh"></i> </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    {!! $dataTable->table(['class' => 'table table-bordered table-striped']) !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@push('links')
    <!-- Datatable Bootstrap Css Files -->
    <link rel="stylesheet" href="{{ asset('assets/dist/css/datatableButtonsCssFiles/buttons.dataTables.min.css') }}">
    <link rel="stylesheet"
          href="{{ asset('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="{{ asset('assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
    <style>
            .date_dir_setting {
                direction: ltr;
                text-align: right;
            }
        </style>
@endpush

@push('scripts')
    <!-- Datatable Bootstrap JavaScript Files -->
    <script src="{{ asset('assets/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/buttons.server-side.js') }}"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>
    <!-- bootstrap datepicker -->
    <script
        src="{{ asset('assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
    {!! $dataTable->scripts() !!}
    <!-- Datatable Bootstrap Options -->
    <script>
        $('#start_date').datepicker({
            autoclose: true,
            todayBtn: "linked",
            format: "yyyy-mm-dd"
        });
        $('#end_date').datepicker({
            autoclose: true,
            todayBtn: "linked",
            format: "yyyy-mm-dd"
        });


        $('#filter_date_button').on('click', function () {
            let start_date = $('#start_date').val();
            let end_date = $('#end_date').val();
            let table = $('#categorydatatable-table');

            table.on('preXhr.dt', function (e, settings, data) {
                data.start_date = start_date;
                data.end_date = end_date;

            })
            table.DataTable().ajax.reload();
            $('#refresh_date_button').on('click', function () {
                table.on('preXhr.dt', function (e, settings, data) {
                    data.start_date = '';
                    data.end_date = '';
                })
                table.DataTable().ajax.reload();
            })

        })

    </script>
    <!-- Custom Function -->
    <script>

        // Show Confirm Message For Delete Any Item
        $(document).on('click', '#remove_button', function () {
            let deleteMessage;
            let catType = $(this).closest('tr').find('span').data('id');
            if (catType == 0){
                 deleteMessage = 'حذف هذا القسم سوف يؤدى الى حذف جميع الاقسام الفرعية المرتبطة بة بما تحتويه من بيانات ! هل تريد حذف القسم ؟';
            }else{
                 deleteMessage = 'حذف هذا القسم سوف يؤدى الى حذف جميع البيانات المرتبطة بة ! هل تريد حذف القسم ؟';
            }
            return confirm(deleteMessage);
        })
    </script>

    <script>
        $(document).on('change', '#selectAction', function () {
            let url = $(this).children('option:selected').attr('value');
            location.href = url;
        }) // end on change
    </script>
@endpush


