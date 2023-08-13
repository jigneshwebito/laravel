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
                                    All Event
                                    <small class="subtitle">More than 100+ Reviews</small>
                                </h4>
                                <div style="float: right;"> <a href="{{ route('our-events.create') }}"
                                        class="btn btn-primary">Add New</a></div>
                            </div>
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table class="table" id="total_revenue">
                                        <thead>
                                            <tr class="text-uppercase bg-lightest">
                                                <th style="min-width: 20px;"><span
                                                        class="text-white clients-th">id</span></th>
                                                <th style="min-width:140px"><span
                                                        class="text-white clients-th">Event Name</span></th>
                                                <th style="min-width: 140px"><span
                                                        class="text-white clients-th">Event Image</span></th>
                                                
                                                {{-- <th style="min-width: 100px"><span
                                                        class="text-white clients-th">Show</span></th>
                                                <th style="min-width: 100px"><span
                                                        class="text-white clients-th">Edit</span></th> --}}
                                                <th style="min-width:100px"><span
                                                        class="text-white clients-th">Action</span></th>
                                            </tr>
                                        </thead>
                                       <tbody>

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            admin_reward_transcation = $('#total_revenue').DataTable({
                "autoWidth": false,
                "info": true,
                "paging": true,
                "lengthChange": false,
                "pageLength": 10,
                "sDom": 'lfrtip',
                "ordering": true,
                "searching": true,
                "processing": false,
                "serverSide": true,
                "ajax": {
                    url: '{{ url('/employee') }}',
                    type: 'GET',
                    // data: function(data) {
                    //     data.plan_filter = $('#plan_filter').val();
                    //     data.dateFilter = $('#dateFilter').val();
                    // }
                },
                "columns": [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'emp_name',
                        name: 'emp_name'
                    },
                    {
                        data: 'emp_image',
                        name: 'emp_image'
                    },
                    {
                        data: 'emp_position',
                        name: 'emp_position'
                    },
                    {
                            data: 'action',
                            name: 'action',
                            orderable: false,
                            searchable: false
                        },
                ],

            });
           
        });
    </script>
    {{-- @endsection --}}
