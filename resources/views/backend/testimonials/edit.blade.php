@extends('admin.admin_master')
@section('admin')
    <div class="content-wrapper">
        <div class="container-full">
            <section class="content">


                <form action="/testimonials/{{ $tm->id }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('PUT')

                    <label class="form-label">Upload Image</label>
                    <div class="form-outline mb-4">
                        <img src="{{ asset('backend/images/testimonials/' . $tm->images_path) }}"
                            style="max-width: 160px;" />
                        <input type="file" name="image_path" class="form-control"
                            data-default-file={{ asset('backend/images/testimonials/' . $tm->images_path) }} />
                    </div>

                    <label class="form-label">Name</label>
                    <div class="form-outline mb-20">
                        <input type="text" name="name" id="form4Example2" class="form-control" value="{{ $tm->name }}"
                            required />
                    </div>

                    <label class="form-label">Description</label>
                    {{-- <div class="form-outline mb-4">
                        <textarea class="form-control" name="description" id="myTextarea" rows="4" placeholder=""
                            required></textarea>
                    </div> --}}
                    <div class="form-outline mb-20">
                        <input type="text" name="description" class="form-control" value="{{ $tm->description }}"
                            style="height: 80px;" required />
                    </div>

                    <button type="submit" class="btn btn-primary mb-4">Update Testimonial</button>

                </form>
                {{-- <script>
                    $(document).ready(function() {
                        $("#myTextarea").val("({{ $tm->description }})");
                    });
                </script> --}}
            </section>
        </div>
    </div>
@endsection
