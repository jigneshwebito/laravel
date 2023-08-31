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
                                    All Employee
                                    <small class="subtitle">More than 100+ Reviews</small>
                                </h4>
                                <div style="float: right;"> <a href="{{ route('employee.create') }}"
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
                                                        class="text-white clients-th">Employee Name</span></th>
                                                <th style="min-width: 140px"><span
                                                        class="text-white clients-th">Employee Image</span></th>
                                                <th style="min-width: 140px"><span
                                                        class="text-white clients-th">Employee Position</span></th>
                                           
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
            <div class="modal fade" id="deleteClientModel" role="dialog" aria-labelledby="smallModalLabel"
            aria-hidden="true">
            <div class="modal d-block pos-static">
                <div class="modal-dialog" role="document">
                    <div class="modal-content modal-content-demo">
                        <div class="modal-header">
                            <h6 class="modal-title">Delete Client</h6><button aria-label="Close" class="close"
                                data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <h6>Are You Sure You Want To Delete This Client ?</h6>
                        </div>
                        <div class="modal-footer">
                            <form id="delete_user" method="post">
                                @csrf
                                <button class="btn btn-success" type="submit" value='success alert'
                                    id='click'>Delete
                                </button>
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!-- /.content -->
        </div>
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>
        $('body').on('click', '.deleteClient', function() {
            var delete_url = $(this).data('href');
            $('#delete_user').attr('action', delete_url);
        });
    </script>
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
