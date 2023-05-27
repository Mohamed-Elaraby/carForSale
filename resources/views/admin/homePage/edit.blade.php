@extends('admin.layouts.app')

@section('title', 'تعديل الصفحة الرئيسية')

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
                        <h3 class="text-center"><i class="fa fa-home"></i>تعديل الصفحة الرئيسية</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div id="show_images_area"></div>
                        </div>
                        <div class="col-md-12">
{{--                            <h4 class="text-center">سلايدر الصفحة الرئيسية</h4>--}}
                            <div  style="width: 100%; margin: 0 auto">
                                <div class="form-inline" style="text-align: center">
                                    <form style="width: 100%" action="{{ route('admin.home.slideShow.upload') }}" class="dropzone" id="my_dropzone_form">@csrf
                                        <input type="hidden" name="location" value="home_slideShow">
                                        <div class="dz-message" data-dz-message><span>سلايدر الصفحة الرئيسية</span></div>
                                    </form>
                                    <span class="image_dimensions_asterisk">
                                        <strong>*</strong>
                                        يجب ان تكون ابعاد الصورة [العرض : 800px , الطول : 400px ]
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

    {{--<script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        let category_id = '{{ $home->id }}' ;
        $('#header_cover').on('change', function () {

            imagePreviewForTest(this); // access imagePreviewForTest from include script

            let data = new FormData();
            let location = $(this).data('location');
            let url = '{{ route('admin.dropzone.upload_header_cover') }}';
            data.append('location', location);
            data.append('category_id', category_id);
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
    </script>--}}
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        Dropzone.options.myDropzoneForm = {
            autoProcessQueue: false,
            acceptedFiles : ".png,.jpg,.jpeg",
            parallelUploads: 100, //  that means that they shouldn't be split up in chunks as well
            maxFiles: 100, // files than allowed in one request.

            init:function(){
                var submitButton = document.querySelector("#upload");
                myDropzone = this;

                submitButton.addEventListener('click', function(){
                    myDropzone.processQueue();
                    Swal.fire({
                        position: 'top-start',
                        icon: 'success',
                        title: 'تم رفع الصور بنجاح',
                        showConfirmButton: false,
                        timer: 1500
                    })
                });

                this.on("thumbnail", function (file) {
                    if (file.height != 400 || file.width != 800) {
                        alert("انتبة ابعاد الصور غير متطابقة [العرض : 800px , الطول : 400px ]");
                    }
                });

                this.on("complete", function(){
                    if(this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0)
                    {
                        fetchImages();
                    }
                });

            }

        };
        fetchImages();
        function fetchImages ()
        {
            let url = '{{ route('admin.home.get_slideShow_images') }}';
            $.ajax({
                url: url,
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
                        let html = '<div class="container"><div class="text-center alert alert-warning"><i class="fa fa-image"> لا يوجد صور داخل السلايدر</div></div>';
                        $('#show_images_area').append(html);
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

