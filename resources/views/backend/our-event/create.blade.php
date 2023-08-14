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
    <style>
        .image-container {
            margin: 20px;
        }

        .upload-menu,
        .input-field {
            display: none;
        }
    </style>
    <div class="content-wrapper">
        <div class="container-full">
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <section class="content">

                    <!-- image input -->
                    <h1>Our Event Details</h1>
                    <br>

                    <label class="form-label" for="form4Example2">Event</label><br>

                    <label>
                        <input type="radio" name="interactionType" value="image"> Image
                    </label>
                    <label>
                        <input type="radio" name="interactionType" value="link"> Link
                    </label>

                    <div class="image-container">
                        {{-- <img id="image" src="default-image.jpg" alt="Image"> --}}
                    </div>
                    <div class="upload-menu" id="uploadMenu">
                        <input type="file" id="imageUpload" accept="image/*">
                    </div>

                    <div class="input-field" id="inputField">
                        <input type="text" id="linkInput" placeholder="Enter link">
                    </div>

                    <div class="form-outline mb-4">
                        <input type="text" name="emp_img_name" id="emp_img_name" class="form-control" required />
                    </div>


                    <button type='submit' class="btn btn-primary">Save</button>
                </section>
            </form>

        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const imageRadioButton = document.querySelector('input[value="image"]');
            const linkRadioButton = document.querySelector('input[value="link"]');
            const imageContainer = document.querySelector('.image-container');
            const uploadMenu = document.getElementById('uploadMenu');
            const inputField = document.getElementById('inputField');
            const imageUpload = document.getElementById('imageUpload');
            const linkInput = document.getElementById('linkInput');

            imageRadioButton.addEventListener('change', function() {
                imageContainer.style.display = 'block';
                uploadMenu.style.display = 'block';
                inputField.style.display = 'none';
            });

            linkRadioButton.addEventListener('change', function() {
                imageContainer.style.display = 'none';
                uploadMenu.style.display = 'none';
                inputField.style.display = 'block';
            });

            imageUpload.addEventListener('change', function() {
                const selectedImage = imageUpload.files[0];
                if (selectedImage) {
                    const imageURL = URL.createObjectURL(selectedImage);
                    document.getElementById('image').src = imageURL;
                }
            });
        });
    </script>
@endsection
