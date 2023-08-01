@extends('admin.admin_master')
@section('admin')
<style>
    .active_status {
        display: block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 12px;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    /* Hide the browser's default radio button */
    .active_status input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
    }

    /* Create a custom radio button */
    .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 25px;
        width: 25px;
        background-color: #eee;
        border-radius: 50%;
    }

    /* On mouse-over, add a grey background color */
    .active_status:hover input~.checkmark {
        background-color: #ccc;
    }

    /* When the radio button is checked, add a blue background */
    .active_status input:checked~.checkmark {
        background-color: #2196F3;
    }

    /* Create the indicator (the dot/circle - hidden when not checked) */
    .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }

    /* Show the indicator (dot/circle) when checked */
    .active_status input:checked~.checkmark:after {
        display: block;
    }

    /* Style the indicator (dot/circle) */
    .active_status .checkmark:after {
        top: 9px;
        left: 9px;
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: white;
    }
</style>
<div class="content-wrapper">
    <div class="container-full">
        <section class="content">


            <form action="/articles_category/{{ $article_category->id }}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')


                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label class="form-label" for="form4Example2">Category</label>
                        <div class="form-outline mb-4">


                            <input type="text" name="name" id="form4Example2" class="form-control" required value="{{ $article_category->category }}" />

                        </div>
                    </div>
                    <div class="col-md-6">

                        <label class="form-label" for="form4Example2">Banner Image</label>
                        <div class="form-outline mb-4">
                            <img src="{{ asset('/backend/images/category/' . $article_category->banner_image) }}" style="max-width: 160px;" />
                            <input type="file" name="banner_image" class="form-control" data-default-file={{ asset('/backend/images/category/' . $article_category->banner_image) }} />
                        </div>
                    </div>
                </div>


                <div class="col-md-6">
                    <label class="active_status">Active
                        <input type="radio" checked="checked" name="radio" value="1">
                        <span class="checkmark"></span>
                    </label>
                    <label class="active_status">In-Active

                        <input type="radio" name="radio" value="0">
                        <span class="checkmark"></span>
                    </label>
                </div>

                <button type="submit" class="btn btn-primary mb-4">Update Category</button>

            </form>

        </section>
    </div>
</div>


@endsection