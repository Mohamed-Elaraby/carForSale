 @php
    $pageType = __('trans.edit');
    $pageItem = __('trans.car')
@endphp
@extends('admin.layouts.app')

@section('title', ' تعديل سيارة '.$car -> name)

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
                        <h3 class="text-center"><i class="fa fa-pencil"></i> تعديل سيارة {{ $car->name }}</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <div id="page_header_cover"></div>
{{--                            @if ($header_cover)--}}
{{--                                <div class="text-center">--}}
{{--                                    <img class="img-thumbnail" id="imagePreview" src="{{ asset('storage/'.$header_cover->image_path.DIRECTORY_SEPARATOR.$header_cover->image_name) }}" width="900px">--}}
{{--                                </div>--}}
{{--                            @endif--}}

                        </div>
                        <label for="header_cover" class="custom-file-upload form-control">
                            <span class="upload_text">
                                <i class="fa fa-cloud-upload"></i>{{ $header_cover ? ' تعديل صورة الغلاف ' : ' رفع صورة الغلاف' }}
                            </span>
                        </label>
                        <input type="file" data-location="car_header_cover" name="header_cover" id="header_cover" style="display: none">
                        <span class="image_dimensions_asterisk">
                            <strong>*</strong>
                            يجب ان تكون ابعاد الصورة [العرض : 1600px , الطول : 500px ]
                        </span>

                        {!! Form::open(['route' => ['admin.cars.update', $car -> id], 'method' => 'put', 'id' => 'myForm']) !!}

                        <div class="form-group">
                            {!! Form::label('name', __('trans.car name'), ['class' => 'control-label']) !!}
                            {!! Form::text('name', $car -> name, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('manufacturing_year', __('trans.manufacturing year'), ['class' => 'control-label']) !!}
                            {!! Form::select('manufacturing_year', $manufacturing_years,$car -> manufacturing_year, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('manufacturing_country', __('trans.manufacturing country'), ['class' => 'control-label']) !!}
                            {!! Form::text('manufacturing_country', $car -> manufacturing_country, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('kilometers', __('trans.kilometers'), ['class' => 'control-label']) !!}
                            {!! Form::text('kilometers', $car -> kilometers, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('warranty', __('trans.warranty'), ['class' => 'control-label']) !!}
                            <label>
                                {!! Form::radio('warranty_status', 1, $car -> warranty ? 'checked' : '',  ['class' => 'warranty_status']) !!}
                                ضمان
                                {!! Form::radio('warranty_status', 0, $car -> warranty == 'بدون ضمان' ? 'checked' : '',  ['class' => 'warranty_status']) !!}
                                بدون ضمان
                            </label>
                            {!! Form::text('warranty', $car -> warranty, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('color', __('trans.color'), ['class' => 'control-label']) !!}
                            {!! Form::text('color', $car -> color, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('gear_box', __('trans.gear box'), ['class' => 'control-label']) !!}
                            {!! Form::select('gear_box',['Manual' => 'Manual', 'Automatic' => 'Automatic'], $car -> gear_box, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('fuel', __('trans.fuel'), ['class' => 'control-label']) !!}
                            {!! Form::select('fuel', ['petrol' => 'petrol', 'diesel' => 'diesel', 'electric' => 'electric', 'hybrid ' => 'hybrid '], $car -> fuel, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('engine_size', __('trans.engine size'), ['class' => 'control-label']) !!}
                            {!! Form::text('engine_size', $car -> engine_size, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('type', __('trans.type'), ['class' => 'control-label']) !!}
                            {!! Form::text('type', $car -> type, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('code', __('trans.code'), ['class' => 'control-label']) !!}
                            {!! Form::text('code', $car -> code, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('status', __('trans.status'), ['class' => 'control-label']) !!}
                            {!! Form::select('status', ['' => '', 'متاحة' => 'متاحة', 'محجوزة' => 'محجوزة', 'مباعة' => 'مباعة'], $car -> status, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('price', __('trans.price'), ['class' => 'control-label']) !!}
                            {!! Form::text('price', $car -> price, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('price_status', __('trans.price status'), ['class' => 'control-label']) !!}
                            {!! Form::select('price_status', [''=> '', 'قابل للتفاوض' => 'قابل للتفاوض', 'غير قابل للتفاوض' => 'غير قابل للتفاوض'], $car -> price_status,['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('category_id', __('trans.category'), ['class' => 'control-label']) !!}
                            {!! Form::select('category_id', $categories, $car -> category_id, ['class' => 'form-control']) !!}
                        </div>
                        {!! Form::close() !!}

                            <div style="margin: 20px 0">
                                <div class="row">
                                    <div id="show_images_area"></div>
                                </div>
                            </div>
                        <div class="col-md-12">
                            <div  style="width: 100%; margin: 0 auto">
                                <div class="form-inline" style="text-align: center">
                                    <form style="width: 100%" action="{{ route('admin.dropzone.upload') }}" class="dropzone" id="my_dropzone_form">@csrf
                                        <input type="hidden" name="car_id" value="{{ $car->id }}">
                                        <div class="dz-message" data-dz-message><span>اضغط او اسحب الملفات هنا</span></div>
                                    </form>
                                    <span class="image_dimensions_asterisk">
                                        <strong>*</strong>
                                        يجب ان تكون ابعاد الصور [العرض : 1600px , الطول : 1200px ]
                                    </span>
                                    <br>
                                    <button class="btn btn-success form-control" id="upload">حفظ التعديلات</button>
                                </div>
                            </div>

                        </div>
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
    @include('admin.includes.imagePreviewJQueryCode')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js" integrity="sha512-U2WE1ktpMTuRBPoCFDzomoIorbOyUv0sP8B+INA3EzNAhehbzED1rOJg6bCqPf/Tuposxb5ja/MAUnC8THSbLQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        let car_id = '{{ $car->id }}' ;
        $('#header_cover').on('change', function () {
            // imagePreviewForTest(this); // access imagePreviewForTest from include script

            let data = new FormData();
            let location = $(this).data('location');
            let url = '{{ route('admin.dropzone.upload_header_cover') }}';
            data.append('location', location);
            data.append('car_id', car_id);
            $.each($(this)[0].files, function(i, file) {
                // data.append('file-'+i, file);
                data.append('header_cover', file);
            });

            $.ajax({
                url: url,
                data: data,
                cache: false,
                contentType: false,
                processData: false,
                method: 'POST',
                type: 'POST', // For jQuery < 1.9
                success: function(data){
                    fetchHeaderCover();
                    Swal.fire({
                        position: 'top-start',
                        icon: 'success',
                        title: 'تم رفع الصورة بنجاح',
                        showConfirmButton: false,
                        timer: 1500
                    })
                    // alert(data);
                }
            });
        })
    </script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        Dropzone.options.myDropzoneForm = {
            // resizeWidth:700,
            // thumbnailWidth: 700,
            autoProcessQueue: false,
            acceptedFiles : ".png,.jpg,.jpeg",
            parallelUploads: 100, //  that means that they shouldn't be split up in chunks as well
            maxFiles: 100, // files than allowed in one request.

            init:function(){
                var submitButton = document.querySelector("#upload");
                myDropzone = this;

                submitButton.addEventListener('click', function(){
                    myDropzone.processQueue();
                    let formData = $('#myForm').serializeArray(),
                        url = '{{ route('admin.cars.update', $car -> id) }}';
                    $.ajax({
                        url: url,
                        method: 'POST',
                        data: formData,
                        success: function (data) {
                            Swal.fire({
                                position: 'top-start',
                                icon: 'success',
                                title: 'تم حفظ التعديلات بنجاح',
                                showConfirmButton: false,
                                timer: 1500
                            })
                        }
                    });
                });

                this.on("thumbnail", function (file) {
                    if (file.height != 1200 || file.width != 1600) {
                        alert("انتبة ابعاد الصور غير متطابقة [العرض : 1600px , الطول : 1200px ]");
                    }
                });

                this.on("complete", function(){
                    if(this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0)
                    {
                        fetchImages();
                    }
                });

                // this.on(
                //     "addedfile", function(file) {
                //         caption = file.caption == undefined ? "" : file.caption;
                //         file._captionLabel = Dropzone.createElement("<p>File Info:</p>")
                //         file._captionBox = Dropzone.createElement("<input id='"+file.filename+"' type='text' name='caption' value="+caption+" >");
                //         file.previewElement.appendChild(file._captionLabel);
                //         file.previewElement.appendChild(file._captionBox);
                //     }),
                //     this.on(
                //         "sending", function(file, xhr, formData){
                //             formData.append('yourPostName',file._captionBox.value);
                //         })

            }

        };
        fetchImages();
        function fetchImages ()
        {
            let car_id = '{{ $car->id }}' ;
            let url = '{{ route('admin.car.get_car_images') }}';
            $.ajax({
                url: url,
                data: {car_id: car_id},
                success: function (data) {
                    $('#show_images_area').empty();
                    if(data.images.length > 0)
                    {
                        $.each(data.images, function (index, image) {
                            let remove_url = '{{ route('admin.dropzone.destroy', ':image_id') }}';
                            remove_url = remove_url.replace(':image_id', image.id);
                            let path =  image.image_path+'/'+image.image_name;
                            let image_link = '{{ asset("storage/:path") }}';
                            image_link = image_link.replace(':path',path);
                            let html = '<div class="col-xs-2">' +
                                '<div class="card">\n' +
                                '  <img class="card-img-top img-thumbnail" src="'+image_link+'" width="100%" height="auto">\n' +
                                '  <div class="card-body text-center">\n' +
                                '    <button data-url="'+remove_url+'" class="btn btn-danger btn-sm remove_image">حذف</button>\n' +
                                '  </div>\n' +
                                '</div>\n' +
                                '</div>';
                            $('#show_images_area').append(html);
                        })
                    }else{
                        let html = '<div class="container"><div class="text-center alert alert-warning"><i class="fa fa-image"> لا يوجد صور لهذه السيارة</div></div>';
                        $('#show_images_area').append(html);
                    }
                }
            });
        }
        fetchHeaderCover();
        function fetchHeaderCover ()
        {
            let car_id = '{{ $car->id }}' ;
            let url = '{{ route('admin.car.get_car_header_cover') }}';
            $.ajax({
                url: url,
                data: {car_id: car_id},
                success: function (data) {
                    $('#page_header_cover').empty();
                    if(data.header_cover)
                    {
                        // $.each(data.header_cover, function (index, image) {
                            let remove_url = '{{ route('admin.dropzone.destroy', ':image_id') }}';
                            remove_url = remove_url.replace(':image_id', data.header_cover.id);
                            let path =  data.header_cover.image_path+'/'+data.header_cover.image_name;
                            let image_link = '{{ asset("storage/:path") }}';
                            image_link = image_link.replace(':path',path);
                            let html = '<div class="col-xs-offset-3 col-xs-6">' +
                                '<div class="card">\n' +
                                '  <img class="card-img-top img-thumbnail" src="'+image_link+'" width="100%" height="auto">\n' +
                                '  <div class="card-body text-center">\n' +
                                '    <button data-url="'+remove_url+'" class="btn btn-danger btn-sm remove_image">حذف</button>\n' +
                                '  </div>\n' +
                                '</div>\n' +
                                '</div>';
                            $('#page_header_cover').append(html);
                        // })
                    }else{
                        let html = '<div class="container"><div class="text-center alert alert-warning"><i class="fa fa-image"> لا يوجد صورة غلاف لهذه السيارة</div></div>';
                        $('#page_header_cover').append(html);
                    }
                }
            });
        }
        $(document).on('click', '.remove_image', function () {
            let remove_url = $(this).data('url');
            removeImage(remove_url);
        })
        function removeImage (url)
        {
            $.ajax({
                url: url,
                method: 'POST',
                success: function (data) {
                    fetchImages();
                    fetchHeaderCover();
                    Swal.fire({
                        position: 'top-start',
                        icon: 'error',
                        title: 'تم حذف الصورة بنجاح',
                        showConfirmButton: false,
                        timer: 1500
                    })
                }
            });
        }
    </script>
@endpush

