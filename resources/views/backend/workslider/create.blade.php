@extends('admin.admin_master')
@section('admin')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.js"></script>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css" />


    <style>
        .preview {
            text-align: center;
            overflow: hidden;
            width: 160px;
            height: 160px;
            margin: 10px;
            border: 1px solid red;
        }

        .ui-datepicker-calendar {
            display: none;
        }


        .section {
            margin-top: 150px;
            background: #fff;
            padding: 50px 30px;
        }

        .modal-lg {
            max-width: 1000px !important;
        }
    </style>
    <div class="content-wrapper">
        <div class="container-full">
            <form action="/work-slider/store/data" method="POST" enctype="multipart/form-data">
                @csrf
            <section class="content">
                <span class="profile_image_preview_span">
                    <img class="profile_front_image_preview" src="" style="height: 100px;" />
                </span>
                <label class="form-label" for="form4Example2">Upload Image</label>
                <div class="form-outline mb-4">
                    <input type="file" name="Profile_image_card" id="Profile_image_card" class="form-control"
                        accept="image/jpg, image/jpeg, image/png">
                </div>
                <label class="form-label" for="form4Example2">Name</label>
                <div class="form-outline mb-4">
                    <input type="text" name="name" id="name" class="form-control" required />
                </div>
                <label class="form-label" for="form4Example2">Year</label>
                <div class="form-outline mb-4">
                    <input type="text" name="year" id="year" class="form-control" required />
                </div>
                <label class="form-label" for="form4Example2">Review</label>
                <div class="form-outline mb-4">
                    <textarea type="text" name="review" id="review" class="form-control" required></textarea>
                </div>
                <button type='submit' class="btn btn-primary" id="save1">Save</button>
            </section>
            </form>
           

        </div>
    </div>
    <script>
        // function pageRedirectProfileUpdate() {

        //     var profile_image = $('#Profile_image_card').val();
        //     var name = $('#name').val();
        //     var year = $('#year').val();
        //     var review = $('#review').val();
        //     var p_imagePathProfileFront = $('.profile_front_image_preview').attr('src');

        //     $.ajaxSetup({
        //         headers: {
        //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //         }
        //     });
        //     $.ajax({
        //         type: 'POST',
        //         url: ' {{ route('work_slider_store_data') }}',
        //         data: {
        //             _token: '{{ csrf_token() }}',
        //             'p_image': profile_image,
        //             'p_imagePathProfileFront': p_imagePathProfileFront,
        //             'name': name,
        //             'year': year,
        //             'review': review
        //         },

        //         dataType: 'json',
        //         success: function(response_msg) {
        //             if (response_msg.success == true) {
        //                 window.location.reload();
        //                 console.log('Your Profile Data Is Updated...');
        //             } else if (response_msg.success == 408) {
        //                 console.log(' Wrong...');
        //             }
        //         }
        //     });

        // }
    </script>
    {{-- <script>
        var profile_avtar_fr = $('#profile_up_fr').val();
        var $profile_modal = $('#profile_modal');
        var profile_image = document.getElementById('profile_image');
        var cropper;
        $("#Profile_image_card").on("change", function(e) {
           
            var files = e.target.files;
            var fileExtension = files[0].name.split('.').pop().toLowerCase();
            var allowedExtensions = ['png', 'jpg', 'jpeg'];
            if ($.inArray(fileExtension, allowedExtensions) === -1) {
                toastr.error('Please select a PNG, JPG, or JPEG file only.');
                $('#Profile_image_card').val('');
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
                aspectRatio: 9 / 16,
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
                        '<img class="profile_front_image_preview" src="' +
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
                $('.profile_front_image_preview').attr('src', frontbase64data);
                $('#Profile_Img').attr('src', frontbase64data);
            } else {
                $('#Profile_Img').attr('src', profile_avtar_fr);
                $('.profile_image_preview_span').find('img').remove();
                $('.profile_image_preview_span').html(' <span class="Image_company_icon">+</span> <br> Add Image');
                frontbase64data = "";
                $('#Profile_image_card').val('');
            }
        });
    </script> --}}
@endsection
