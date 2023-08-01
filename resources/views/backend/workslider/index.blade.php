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
                                    All Work Slider
                                </h4>
                                <div style="float: right;"> <a href="{{ route('work-slider.create') }}"
                                        class="btn btn-primary">Add New</a></div>
                            </div>
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table class="table ">
                                        <thead>
                                            <tr class="text-uppercase bg-lightest">
                                                <th style="min-width: 20px;"><span
                                                        class="text-white Work Slider-th">id</span></th>
                                                <th style="min-width:140px"><span
                                                        class="text-white Work Slider-th">Image</span></th>
                                                <th><span
                                                        class="text-white Work Slider-th">Name</span></th>
                                                <th><span
                                                        class="text-white Work Slider-th">Year</span></th>
                                                <th><span
                                                        class="text-white Work Slider-th">Review</span></th>
                                                <th><span class="text-white Work Slider-th">Edit</span>
                                                <th><span class="text-white Work Slider-th">Delete</span>
                                                </th>

                                                <!-- <th style="min-width: 100px"><span
                                                            class="text-white Work Slider-th">Show</span></th>
                                                    <th style="min-width: 100px"><span
                                                            class="text-white Work Slider-th">Edit</span></th>
                                                    <th style="min-width:100px"><span
                                                            class="text-white Work Slider-th">Delete</span></th>
                                                    <th style="min-width:100px"><span
                                                            class="text-white Work Slider-th">Publish</span></th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $index = 1; ?>
                                            @foreach ($tm as $tags)
                                                <tr>
                                                    <td style="text-align: left;">
                                                        <div class="">
                                                            <div>
                                                                {{-- <span
                                                                    class="text-white font-weight-400 hover-primary mb-1 font-size-16">{{ $tags->id }}
                                                                </span> --}}
                                                                <span
                                                                    class="text-white font-weight-400 hover-primary mb-1 font-size-16">
                                                                    {{ $index }}
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <?php $index++; ?>

                                                    <td style="text-align: left;">
                                                        <div class="align-items-left">
                                                            <div>
                                                                {{-- <span
                                                                    class="text-white font-weight-400 hover-primary mb-1 font-size-16">{{ $tags->image }}
                                                                </span> --}}
                                                                <img src="{{ asset('/assets/img/Portfolio/app/' . $tags->image) }}"
                                                                    alt="" style="height:10rem;">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td style="text-align: left;">
                                                        <div class="align-items-left">
                                                            <div>
                                                                <span
                                                                    class="text-white font-weight-400 hover-primary mb-1 font-size-16">{{ $tags->name }}
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td style="text-align: left;">
                                                        <div class="align-items-left">
                                                            <div>
                                                                <span
                                                                    class="text-white font-weight-400 hover-primary mb-1 font-size-16">{{ $tags->year }}
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td style="text-align: left;">
                                                        <div class="align-items-left">
                                                            <div>
                                                                <span
                                                                    class="text-white font-weight-400 hover-primary mb-1 font-size-16">{{ $tags->review }}
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td style="text-align: left;">
                                                        <a href="/work-slider/{{ $tags->id }}/edit"
                                                            class="waves-effect waves-light btn btn-warning btn-circle"><span
                                                                class="mdi mdi-account-edit mdi-18px"></span></a>
                                                        {{-- class="mdi  mdi-table-edit mdi-18px"></span></a> --}}

                                                    </td>
                                                    <!-- <td style="text-align: center;">
                                                                <a href="/work-slider/{{ $tags->id }}/edit"
                                                                    class="waves-effect waves-light btn btn-success btn-circle"><span
                                                                        class="mdi mdi-account-edit mdi-18px"></span></a>
                                                                {{-- class="mdi  mdi-table-edit mdi-18px"></span></a> --}}

                                                            </td> -->
                                                    <td style="text-align: left;">
                                                        <form action="/work-slider/delete/{{ $tags->id }}"
                                                            method="post">
                                                            @csrf
                                                            <button
                                                                class="waves-effect waves-light btn btn-danger btn-circle"
                                                                style=" margin-top: 16px;">
                                                                <span class="mdi mdi-delete mdi-18px"></span>
                                                            </button>
                                                        </form>
                                                    </td>
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
                    url: '/changeCategoryTagStatus',
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
