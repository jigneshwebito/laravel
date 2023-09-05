@extends('admin.admin_master')
@section('admin')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.js"></script>
    <style>
        .preview {
            text-align: center;
            overflow: hidden;
            width: 160px;
            height: 160px;
            margin: 10px;
            border: 1px solid red;
        }

        /* input {
                        margin-top: 40px;
                    } */

        .section {
            margin-top: 150px;
            background: #fff;
            padding: 50px 30px;
        }

        .modal-lg {
            max-width: 1000px !important;
        }

        .employee_front_image {
            height: 7rem;
        }
    </style>

    <div class="content-wrapper">
        <div class="container-full">
            <form action="@if (isset($employee)) {{ route('employee.update') }} @else {{ route('employee_store_data') }} @endif" method="POST" enctype="multipart/form-data">
                @csrf
                <section class="content">

                    <!-- image input -->
                    <h1>Employee Details</h1>
                    <br>
                    <input type="hidden" name="emp_id" value="{{ isset($employee) ? $employee->id : '' }}">
                    <label class="form-label" for="form4Example2">Upload Image</label>
                    <div class="form-outline mb-4">
                        <input type="file" name="employee_image" id="employee_image" class="form-control"
                            accept="image/jpg, image/jpeg, image/png">
                    </div>
                    <span class="profile_image_preview_span">
                        <img class="employee_front_image" src="" style="height: 7rem;" />
                    </span><br>

                    <div class="form-outline mb-4">
                        <input type="hidden" name="emp_img_name" id="emp_img_name" class="form-control"
                            value="{{ isset($employee->image) ? $employee->image : '' }}" required />
                    </div>
                    <label class="form-label" for="form4Example2">Employee Name</label>
                    <div class="form-outline mb-4">
                        <input type="text" name="emp_name" id="emp_name" class="form-control"
                            value="{{ isset($employee->name) ? $employee->name : '' }}" required />
                    </div>
                    <label class="form-label" for="form4Example2">Employee Content</label>
                    <div class="form-outline mb-4">
                        <textarea name="emp_content" id="emp_content" cols="30" rows="10" class="form-control">{{ isset($employee->content) ? $employee->content : '' }}</textarea>
                    </div>
                    <label class="form-label" for="form4Example2">Position</label>
                    <div class="form-outline mb-4">
                        <select name="position" id="position" class="form-control">
                            <option @if (isset($employee) && $employee->position == 1) selected @endif value="senior">Senior</option>
                            <option @if (isset($employee) && $employee->position == 2) selected @endif value="junior">Junior</option>
                            <option @if (isset($employee) && $employee->position == 3) selected @endif value="fresher">Fresher</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        @if (isset($employee))
                            Update
                        @else
                            Save
                        @endif
                    </button>
                    {{-- <button type='button' class="btn btn-primary"
                    onclick="EmployeeDataSave()">Save</button> --}}
                </section>
            </form>
            <div class="modal fade" id="profile_modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
                aria-hidden="true" data-backdrop="static" data-keyboard="false">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalLabel"></h5>
                            <button type="button" class="close front_cancel" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="img-container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div style="height:500px;width:100%">
                                            <img id="profile_image" src="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="preview" style="width: 160px;height: 160px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary front_cancel"
                                data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-primary" id="front_crop">Crop</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function EmployeeDataSave() {

            var employee_image = $('#employee_image').val();
            var emp_img_name = $('#emp_img_name').val();
            var emp_name = $('#emp_name').val();
            var emp_content = $('#emp_content').val();
            var employee_front_image = $('.employee_front_image').attr('src');
            var position = $('#position').find(":selected").text();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'POST',
                url: ' {{ route('employee_store_data') }}',
                data: {
                    _token: '{{ csrf_token() }}',
                    'employee_image': employee_image,
                    'emp_img_name': emp_img_name,
                    'emp_name': emp_name,
                    'emp_content': emp_content,
                    'position': position,
                    'employee_front_image': employee_front_image,
                },

                dataType: 'json',
                success: function(response_msg) {
                    if (response_msg.success == true) {
                        window.location.reload();
                        console.log('Your Profile Data Is Updated...');
                    } else if (response_msg.success == 408) {
                        console.log(' Wrong...');
                    }
                }
            });

        }
    </script>
    {{-- <script>
        var profile_avtar_fr = $('#profile_up_fr').val();
        var $profile_modal = $('#profile_modal');
        var profile_image = document.getElementById('profile_image');
        var cropper;
        $("#employee_image").on("change", function(e) {
            // $('#remove_avtar_profile_front').css("display", "none");
            var files = e.target.files;
            var fileExtension = files[0].name.split('.').pop().toLowerCase();
            var allowedExtensions = ['png', 'jpg', 'jpeg'];
            if ($.inArray(fileExtension, allowedExtensions) === -1) {
                toastr.error('Please select a PNG, JPG, or JPEG file only.');
                $('#employee_image').val('');
                return false;
            } else {
                var done = function(url) {
                    profile_image.src = url;
                    $profile_modal.modal('show');
                };
                var reader;
                var file;
                var url;
                if (files && files.length > 0) {
                    file = files[0];
                    if (URL) {
                        done(URL.createObjectURL(file));
                    } else if (FileReader) {
                        reader = new FileReader();
                        reader.onload = function(e) {
                            done(reader.result);
                        };
                        reader.readAsDataURL(file);
                    }
                }
            }

        });
        $profile_modal.on('shown.bs.modal', function() {
            cropper = new Cropper(profile_image, {
                aspectRatio: 1,
                viewMode: 2,
                preview: '.preview',

            });
            var contData = cropper.getContainerData(); //Get container data
            cropper.setCropBoxData({
                height: contData.height,
                width: contData.width
            })


        }).on('hidden.bs.modal', function() {
            cropper.destroy();
            cropper = null;
        });
        var frontbase64data;
        $("#front_crop").click(function() {
            canvas = cropper.getCroppedCanvas();

            canvas.toBlob(function(blob) {
                url = URL.createObjectURL(blob);
                var reader = new FileReader();
                reader.readAsDataURL(blob);
                reader.onloadend = function() {
                    frontbase64data = reader.result;
                    $('.profile_image_preview_span').html('');
                    $('.profile_image_preview_span').prepend(
                        '<img class="employee_front_image" src="' +
                        frontbase64data + '"/>');
                    $('#remove_avtar_profile_front').css("display", "block");
                    $profile_modal.modal('hide');
                    Profile_Image(frontbase64data);
                }
            });

        })

        function Profile_Image(frontbase64data) {
            var image = document.getElementById('Profile_Img');
            console.log(image);
            // image.src = frontbase64data;
        };
        $(".front_cancel").click(function() {
            if (frontbase64data) {
                $('.employee_front_image').attr('src', frontbase64data);
                $('#Profile_Img').attr('src', frontbase64data);
            } else {
                $('#Profile_Img').attr('src', profile_avtar_fr);
                $('.profile_image_preview_span').find('img').remove();
                $('.profile_image_preview_span').html(' <span class="Image_company_icon">+</span> <br> Add Image');
                frontbase64data = "";
                $('#employee_image').val('');
            }
        });
    </script> --}}
@endsection
