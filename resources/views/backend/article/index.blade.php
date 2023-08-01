@extends('admin.admin_master')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <meta name="csrf-token" content="{{ csrf_token() }}" />


    <style>
        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked+.slider {
            background-color: #2196F3;
        }

        input:focus+.slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked+.slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }

    </style>

    <div class="content-wrapper">
        <div class="container-full">
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    ​
                    <div class="col-12">
                        <div class="box">
                            ​
                            <div class="box-header">
                                <h4 class="box-title align-items-start flex-column">
                                    All Articles
                                    <small class="subtitle">More than 100+ Reviews</small>
                                </h4>
                                <div style="float: right;"> <a href="{{ route('articles.create') }}"
                                        class="btn btn-primary">Add New</a></div>
                            </div>
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table class="table ">
                                        <thead>
                                            <tr class="text-uppercase bg-lightest">
                                                <th style="min-width: 20px;"><span
                                                        class="text-white testimonials-th">id</span></th>
                                                <th style="min-width:140px"><span
                                                        class="text-white testimonials-th">Title</span></th>
                                                <th style="min-width: 140px"><span
                                                        class="text-white testimonials-th">Image</span></th>
                                                <th style="min-width: 480px"><span
                                                        class="text-white testimonials-th">Category</span>
                                                </th>
                                                <th style="min-width: 200px"><span
                                                        class="text-white testimonials-th">Status</span>
                                                </th>
                                                <th style="min-width: 100px"><span
                                                        class="text-white testimonials-th"></span></th>
                                                <th style="min-width: 100px"><span
                                                        class="text-white testimonials-th">Action</span></th>
                                                <th style="min-width:100px"><span class="text-white testimonials-th"></span>
                                                </th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $index = 1; ?>
                                            @foreach ($articles as $articles)
                                                <tr>
                                                    <td style="text-align: center;">
                                                        <div class="">
                                                            <div>
                                                                {{-- <span
                                                                    class="text-white font-weight-400 hover-primary mb-1 font-size-16">{{ $articles->id }}
                                                        </span> --}}
                                                                <span
                                                                    class="text-white font-weight-400 hover-primary mb-1 font-size-16">
                                                                    {{ $index }}
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <?php $index++; ?>

                                                    <td style="text-align: center;">
                                                        <div class="align-items-center">
                                                            <div>
                                                                <span
                                                                    class="text-white font-weight-400 hover-primary mb-1 font-size-16">{{ $articles->title }}
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    ​
                                                    <td style="text-align: center;">
                                                        <div class="d-flex align-items-center">
                                                            <div>
                                                                <img src="{{ asset('backend/images/articles/' . $articles->banner_image) }}"
                                                                    alt="" style="width:150px;height:150px;">
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td style="text-align: center;">
                                                        <div class="align-items-center">
                                                            <div>
                                                                @php
                                                                // dd($articles);
                                                                    $article_category = App\Models\Article_category::whereIN('id', json_decode($articles->category, true))->get();
                                                                    // dd($article_category);
                                                                @endphp
                                                                @foreach ($article_category as $v)
                                                                    @php
                                                                        
                                                                    @endphp
                                                                    <span
                                                                        class="text-white font-weight-400 hover-primary mb-1 font-size-16">{{ $v->category }} , 
                                                                    </span>
                                                                @endforeach

                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td style="text-align: center;">
                                                        <div class="align-items-center">
                                                            <div>
                                                                <span
                                                                    class="text-white font-weight-400 hover-primary mb-1 font-size-16">
                                                                    @if ($articles->active_status == 1)
                                                                        Active
                                                                    @else
                                                                        In-Active
                                                                    @endif
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </td>


                                                    @if ($articles->isDeleted == 1)
                                                        <td></td>
                                                        <td></td>
                                                        <td style="text-align: center;">
                                                            <form action="/articles/active/{{ $articles->id }}"
                                                                method="post">
                                                                @csrf
                                                                <button
                                                                    class="waves-effect waves-light btn btn-successz                                                                                                   btn-circle"
                                                                    style=" margin-top:16px ;">
                                                                    <span class="mdi mdi-restore mdi-18px"></span>
                                                                </button>
                                                            </form>
                                                        </td>
                                                    @else
                                                        <td style="text-align: center;">
                                                            @if ($articles->isHide == 1)
                                                                <form action="/articles/show/{{ $articles->id }}"
                                                                    method="post">
                                                                    @csrf
                                                                    <button
                                                                        class="waves-effect waves-light btn btn-info btn-circle"
                                                                        style=" margin-top:37px;">
                                                                        <span class="mdi mdi-eye-off mdi-18px"></span>
                                                                    </button>
                                                                </form>
                                                            @else
                                                                <form action="/articles/hide/{{ $articles->id }}"
                                                                    id="satyam" method="post">
                                                                    @csrf
                                                                    <button
                                                                        class="waves-effect waves-light btn btn-info btn-circle"
                                                                        style=" margin-top:37px ;">
                                                                        <span class="mdi mdi-eye mdi-18px"></span>
                                                                    </button>
                                                                </form>
                                                            @endif
                                                            ​
                                                        </td>

                                                        <td style="text-align: center;">
                                                            <a href="/articles/{{ $articles->id }}/edit"
                                                                class="waves-effect waves-light btn btn-warning btn-circle"><span
                                                                    class="mdi mdi-account-edit mdi-18px"></span></a>
                                                            {{-- class="mdi  mdi-table-edit mdi-18px"></span></a> --}}

                                                        </td>
                                                        <!-- <td style="text-align: center;">
                                                                        <a href="/articles/{{ $articles->id }}/edit"
                                                                            class="waves-effect waves-light btn btn-success btn-circle"><span
                                                                                class="mdi mdi-account-edit mdi-18px"></span></a>
                                                                        {{-- class="mdi  mdi-table-edit mdi-18px"></span></a> --}}

                                                                    </td> -->
                                                        <td style="text-align: center;">
                                                            <form action="/articles/delete/{{ $articles->id }}"
                                                                method="post">
                                                                @csrf
                                                                <!-- @method('delete') -->
                                                                <button
                                                                    class="waves-effect waves-light btn btn-danger btn-circle"
                                                                    style=" margin-top: 16px;">
                                                                    <span class="mdi mdi-delete mdi-18px"></span>
                                                                </button>
                                                            </form>
                                                        </td>
                                                        <td>
                                                            <label class="switch">
                                                                <input type="checkbox" data-id="{{ $articles->id }}"
                                                                    class="toggle-class" <?php if ($articles['active_status'] == '1') {
    echo 'checked';
} ?>>
                                                                <span class="slider round"></span>
                                                            </label>
                                                        </td>


                                                        <!-- <td>
                                                        <input data-id="{{ $articles->id }}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $articles->active_status ? 'checked' : '' }}>
                                                        </td> -->

                                                        <!-- <td>
                                                            <input data-id="{{ $articles->id }}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $articles->active_status ? 'checked' : '' }}>
                                                        </td> -->

                                                        <!-- <td>
                                                        <input data-id="{{ $articles->id }}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $articles->status ? 'checked' : '' }}>

                                                        </td> -->
                                                    @endif

                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>
    <script>
        $(function() {
            $('.toggle-class').change(function() {

                var active_status = $(this).prop('checked') == true ? 1 : 0;
                // alert(active_status);
                var id = $(this).data('id');
                // alert(active_status);


                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });


                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '/changeStatus',
                    data: {
                        'active_status': active_status,
                        'id': id
                    },
                    success: function(data) {
                        window.location.reload();
                    }
                });
            })
        })
    </script>
@endsection
