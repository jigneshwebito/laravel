@extends('admin.admin_master')
@section('admin')
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
                                    All Testimonials
                                    <small class="subtitle">More than 100+ Reviews</small>
                                </h4>
                                <div style="float: right;"> <a href="{{ route('testimonials.create') }}"
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
                                                        class="text-white testimonials-th">Image</span></th>
                                                <th style="min-width: 140px"><span
                                                        class="text-white testimonials-th">Name</span></th>
                                                <th style="min-width: 480px"><span
                                                        class="text-white testimonials-th">Description</span>
                                                </th>
                                                <th style="min-width: 100px"><span
                                                        class="text-white testimonials-th">Show</span></th>
                                                <th style="min-width: 100px"><span
                                                        class="text-white testimonials-th">Edit</span></th>
                                                <th style="min-width:100px"><span
                                                        class="text-white testimonials-th">Delete</span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $index = 1; ?>
                                            @foreach ($tm as $tm)
                                                <tr>
                                                    <td style="text-align: center;">
                                                        <div class="">
                                                            <div>
                                                                {{-- <span
                                                                    class="text-white font-weight-400 hover-primary mb-1 font-size-16">{{ $tm->id }}
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
                                                        <div class="d-flex align-items-center">
                                                            <div>
                                                                <img src="{{ asset('backend/images/testimonials/' . $tm->images_path) }}"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td style="text-align: center;">
                                                        <div class="align-items-center">
                                                            <div>
                                                                <span
                                                                    class="text-white font-weight-400 hover-primary mb-1 font-size-16 testimonials-th">{{ $tm->name }}
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td style="text-align: center;">
                                                        <div class="align-items-center">
                                                            <div>
                                                                <span
                                                                    class="text-white font-weight-400 hover-primary mb-1 font-size-16">{{ $tm->description }}
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    ​
                                                    @if ($tm->isDeleted == 1)
                                                        <td></td>
                                                        <td></td>
                                                        <td style="text-align: center;">
                                                            <form action="/testimonials/active/{{ $tm->id }}"
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
                                                            @if ($tm->isHide == 1)
                                                                <form action="/testimonials/show/{{ $tm->id }}"
                                                                    method="post">
                                                                    @csrf
                                                                    <button
                                                                        class="waves-effect waves-light btn btn-info btn-circle"
                                                                        style=" margin-top:37px;">
                                                                        <span class="mdi mdi-eye-off mdi-18px"></span>
                                                                    </button>
                                                                </form>
                                                            @else
                                                                <form action="/testimonials/hide/{{ $tm->id }}"
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
                                                            <a href="/testimonials/{{ $tm->id }}/edit"
                                                                class="waves-effect waves-light btn btn-warning btn-circle"><span
                                                                    class="mdi mdi-account-edit mdi-18px"></span></a>
                                                            {{-- class="mdi  mdi-table-edit mdi-18px"></span></a> --}}

                                                        </td>
                                                        <td style="text-align: center;">
                                                            <form action="/testimonials/delete/{{ $tm->id }}"
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
                                                    @endif
                                                    ​
                                                    ​
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
    <h1>satyam</h1>
    {{-- @endsection --}}
