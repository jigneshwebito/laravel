@extends('admin.admin_master')
@section('admin')
    <script src="https://cdn.ckeditor.com/4.17.2/standard/ckeditor.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
    <script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://cdn.ckeditor.com/4.17.2/standard/ckeditor.js"></script>
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


                <form action="/articles/{{ $articles->id }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('PUT')


                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label class="form-label" for="form4Example2">Title</label>
                            <div class="form-outline mb-4">
                                <input type="text" name="title" id="form4Example2" class="form-control" required
                                    value="{{ $articles->title }}" />

                            </div>
                        </div>
                        <div class="form-group col-md-6">

                            <label class="form-label" for="form4Example2">Category</label>
                            <div class="form-outline mb-4">
                                <select data-ref="category" id="choices-multiple-remove-button" class="form-control" name="category[]"
                                    size="1" multiple required>
                                    @foreach ($article_category as $k => $v)
                                        @php
                                            $articleCategory = json_decode($articles['category'], true);
                                        @endphp
                                        <option value="{{ $v->id }}"
                                            {{ in_array($v->id, $articleCategory) ? 'selected' : '' }}>
                                            {{ $v->category }}
                                        </option>
                                    @endforeach
                                </select>



                                <!-- <input type="text" name="category" id="form4Example2" class="form-control" required value="{{ $articles->category }}" /> -->

                            </div>
                        </div>
                    </div>
                    <div class="form-row">

                        <div class="col-md-6">

                            <label class="form-label" for="form4Example2">Sub Category</label>
                            <div class="form-outline mb-4">
                                <!-- <input type="text" name="sub_category" id="form4Example2" class="form-control" required value="{{ $articles->sub_category }}" /> -->
                                <select id="choices-multiple-remove-button" name="sub_category[]" class="form-control"
                                    placeholder="Select" multiple>

                                    @foreach ($article_sub_category as $k => $v)
                                        @if (isset($articles))
                                            @php
                                                $articleSubCategory = json_decode($articles['sub_category'], true);
                                            @endphp
                                            <option value="{{ $v->id }}"
                                                {{ in_array($v->id, $articleSubCategory) ? 'selected' : '' }}>
                                                {{ $v->category }}
                                            </option>
                                        @else
                                        @endif
                                    @endforeach

                                </select>

                            </div>
                        </div>
                        <div class="col-md-6">

                            <label class="form-label" for="form4Example2">Banner Image</label>
                            <div class="form-outline mb-4">
                                <img src="{{ asset('/backend/images/articles/' . $articles->banner_image) }}"
                                    style="max-width: 160px;" />
                                <input type="file" name="banner_image" class="form-control"
                                    data-default-file={{ asset('/backend/images/articles/' . $articles->banner_image) }} />
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <label class="form-label" for="form4Example2">Video Url</label>
                            <div class="form-outline mb-4">
                                <input type="text" name="video" id="form4Example2" class="form-control" required
                                    value="{{ $articles->video_url }}" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="form4Example2">Tags</label>
                            <div class="form-outline mb-4">
                                <select id="choices-multiple-remove-button" name="tags[]" class="form-control"
                                    placeholder="Select" multiple>

                                    @foreach ($article_tag as $k => $v)
                                        @if (isset($articles))
                                            @php
                                                
                                                $articleTag = json_decode($articles['tags'], true);
                                                
                                            @endphp
                                            <option value="{{ $v->id }}"
                                                {{ in_array($v->id, $articleTag) ? 'selected' : '' }}>
                                                {{ $v->name }}
                                            </option>
                                        @else
                                        @endif
                                    @endforeach




                                </select>
                            </div>

                            <!-- <div class="form-outline mb-4">
                                        <input type="text" name="tags" id="form4Example2" class="form-control" required />

                                    </div> -->
                        </div>
                    </div>
                    <div class="form-row">

                        <div class="col-md-6">

                            <label class="form-label" for="form4Example3">Short Description</label>
                            <div class="form-outline mb-4">

                                <textarea class="form-control" name="s_description" id="form4Example3" rows="4"
                                    required>{{ $articles->s_description }}</textarea>

                            </div>

                        </div>

                    </div>


                    <div class="form-row">
                        <div class="col-md-12">
                            <label class="form-label" for="form4Example3">Description</label>
                            <div class="form-outline mb-4">

                                <div class="form-outline mb-4">


                                    <textarea name="editor1">{{ $articles->description }}</textarea>
                                    <script>
                                        CKEDITOR.replace('editor1');
                                    </script>


                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="form-row">

                        <div class="col-md-6">

                            <label class="form-label" for="form4Example2">Publish Future Date</label>
                            <div class="form-outline mb-4">
                                <input type="date" id="form4Example2" class="form-control" name="birthday" 
                                value="{{ $articles->future_date }}"    
                                >

                            </div>
                        </div>
                        <div class="col-md-6">

                            <label class="form-label" for="form4Example2">Publication Status</label>
                            <div class="form-outline mb-4">

                                <select name="status" id="" class="form-control">
                                    <option value="publish">Publish</option>
                                    <option value="draft">Draft</option>

                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label class="active_status">Active
                            <input type="radio" checked="checked" name="radio" value="0">
                            <span class="checkmark"></span>
                        </label>
                        <label class="active_status">In-Active

                            <input type="radio" name="radio" value="1">
                            <span class="checkmark"></span>
                        </label>
                    </div>

                    <div class="col-md-6">
                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary mb-4">Update Article</button>
                    </div>

                </form>

            </section>
        </div>
    </div>
    <script src="https://cdn.ckeditor.com/[version.number]/[distribution]/ckeditor.js"></script>

    <script>
        $(document).ready(function() {

            var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
                removeItemButton: true,

            });


        });
    </script>
@endsection
