@extends('admin.layouts.app')

@section('title', 'الصقحة الرئيسية')

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
                    <h3 class="text-center"><i class="fa fa-briefcase"></i>تعديل الصفحة الرئيسية</h3>
                </div>
                <div class="card-body">
{{--                    <form action="" method="post" enctype="multipart/form-data" class="uploadimage">--}}
{{--                        <label for="file-upload" class="custom-file-upload">--}}
{{--                            <i class="fa fa-cloud-upload"></i> صورة الهيدر--}}
{{--                        </label>--}}
{{--                        <input id="file-upload" type="file" name="file" class="file_upload"/>--}}
{{--                    <span id="mgs_ta"></span>--}}

                    <div class="row">

                        @if(empty($emp_data[0]->emp_img))
                            <img id="img_prv" style="max-width: 150px;max-height: 150px" class="img-thumbnail" src="{{url('../emp_profile/user.jpg')}}">

                        @else
                            <img id="img_prv" style="max-width: 150px;max-height: 150px" class="img-thumbnail" src="{{url('../emp_profile/'.$emp_data[0]->emp_img)}}">
                        @endif

                    </div>
                    <div class="row">
                        <label>Image upload</label>
                        <input type="file" name="file_img" id="img_file_upid">

                        <span id="mgs_ta">

  </span>
                    </div>
{{--                    </form>--}}
                </div>
            </div>
        </div>
    </div>
@endsection
@push('links')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        input[type="file"] {
            display: none;
        }
        .custom-file-upload {
            border: 1px solid #ccc;
            display: inline-block;
            padding: 6px 12px;
            cursor: pointer;
        }
    </style>
@endpush

@push('scripts')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // $("input[type='file']").on('change', function (e) {
        //     $('.uploadimage').submit();
        // });

        $('.file_upload').on('change',function(ev){
            console.log("here inside");

            var filedata=this.files[0];
            var imgtype=filedata.type;


            var match=['image/jpeg','image/jpg'];

            if(!(imgtype==match[0])||(imgtype==match[1])){
                $('#mgs_ta').html('<p style="color:red">Plz select a valid type image..only jpg jpeg allowed</p>');

            }else{

                $('#mgs_ta').empty();


                //---image preview

                var reader=new FileReader();

                reader.onload=function(ev){
                    $('#img_prv').attr('src',ev.target.result).css('width','150px').css('height','150px');
                }
                reader.readAsDataURL(this.files[0]);

                /// preview end

                //upload

                var postData=new FormData();
                postData.append('file',this.files[0]);

                var url="{{url('ajaxuploadimg')}}";

                $.ajax({
                    headers:{'X-CSRF-Token':$('meta[name=csrf_token]').attr('content')},
                    async:true,
                    type:"post",
                    contentType:false,
                    url:url,
                    data:postData,
                    processData:false,
                    success:function(){
                        console.log("success");
                    }


                });

            }

        });
    </script>
@endpush
