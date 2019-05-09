@extends('Layouts.master')

@section('css')

@endsection


@section('content')

    <!-- Add Company Modal -->
    <div class="modal" id="addCompany" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Company</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="post" action="{{ route('company.insert') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" placeholder="Company Name" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="address" placeholder="Address"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <button style="float: right;" type="submit" class="btn btn-primary">Add Company</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    {{-- Edit Modal --}}
    <div class="modal" id="editModal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="">Change Company Information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="editModalBody">

                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h3 class="card-title">
                <div class="row">
                    <div class="col-md-6">
                        <span style="display: inline;">All Company List</span>
                    </div>

                    <div class="col-md-6">
                        <div style="float: right;">
                            <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#addCompany">Add New Company</button>
                        </div>
                    </div>
                </div>
            </h3>

            <div class="row">
                <div class="col-12 table-responsive">
                    <table id="order-listing" class="table table-bordered">
                        <thead>
                        <tr>
                            {{--<th>Order #</th>--}}
                            <th>Name</th>
                            <th>Address</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>





@endsection


@section('page_scripts')

    <script>

        // $(document).ready(function() {
        //     $('#order-listing').DataTable();
        // } );

        dataTable=  $('#order-listing').DataTable({
            rowReorder: {
                selector: 'td:nth-child(0)'
            },
            responsive: true,
            processing: true,
            serverSide: true,
            Filter: true,
            stateSave: true,
            ordering:false,
            type:"POST",
            "ajax":{
                "url": "{!! route('company.getAllData') !!}",
                "type": "POST",
                data:function (d){
                    d._token="{{csrf_token()}}";
                },
            },
            columns: [
                { data: 'name', name: 'company.name' },
                { data: 'address', name: 'company.address' },
                { data: 'statusName', name: 'company.statusName' },


                { "data": function(data)
                    {
                        return '<button class="btn btn-success btn-sm mr-2" data-panel-id="'+data.companyId+'" onclick="editCompany(this)"><i class="far fa-edit"></i>Edit</button>'+
                               '<button class="btn btn-danger btn-sm" data-panel-id="'+data.companyId+'" onclick="deleteCompany(this)"><i class="fa fa-trash fa-lg"></i>Delete</button>';
                    },
                    "orderable": false, "searchable":false, "name":"selected_rows"
                },
            ]
        } );


        function editCompany(x) {
            id = $(x).data('panel-id');

            $.ajax({
                type: 'POST',
                url: "{!! route('company.edit') !!}",
                cache: false,
                data: {
                    _token: "{{csrf_token()}}",
                    'id': id,
                },
                success: function (data) {
                    $('#editModalBody').html(data);
                    $('#editModal').modal('show');
                }
            });
        }

        function deleteCompany(x) {
            btn = $(x).data('panel-id');
            $.confirm({
                title: 'Confirm!',
                content: 'Are you sure want to delete!',
                buttons: {
                    confirm: function () {
                        // delete
                        $.ajax({
                            type: 'POST',
                            url: "{!! route('company.delete') !!}",
                            cache: false,
                            data: {
                                _token: "{{csrf_token()}}",
                                'id': btn
                            },
                            success: function (data) {
                                $.alert({
                                    animationBounce: 2,
                                    title: 'Success!',
                                    content: 'Company Deleted.',
                                });
                                dataTable.ajax.reload();
                            }
                        });

                    },
                    cancel: function () {

                    },
                }
            });
        }

    </script>

@endsection