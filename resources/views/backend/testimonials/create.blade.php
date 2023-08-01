@extends('admin.admin_master')
@section('admin')
    <div class="content-wrapper">
        <div class="container-full">
            <section class="content">



                <form action="/testimonials" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- image input -->
                    <label class="form-label" for="form4Example2">Upload Image</label>
                    <div class="form-outline mb-4">
                        <input type="file" name="image" class="form-control" />
                    </div>

                    <!-- name input -->
                    <label class="form-label" for="form4Example2">Name</label>
                    <div class="form-outline mb-20">
                        <input type="text" name="name" id="form4Example2" class="form-control" required />

                    </div>

                    <!-- description input -->
                    <label class="form-label" for="form4Example3">Description</label>
                    <div class="form-outline mb-4">

                        <textarea class="form-control" name="description" id="form4Example3" rows="4" required></textarea>

                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary mb-4">Add Testimonial</button>

                </form>




            </section>
        </div>
    </div>
@endsection
