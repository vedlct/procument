@extends('Layouts.master')

@section('css')

@endsection


@section('content')

    <!-- Add Zone Modal -->
    <div class="modal" id="addCompany" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Zone</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="post" action="{{ route('zone.insert') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" placeholder="Zone Name" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Status</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="status" required>
                                    <option value="">Select Status</option>
                                    @foreach($status as $s)
                                        <option value="{{ $s->statusId }}">{{ $s->statusName }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <button style="float: right;" type="submit" class="btn btn-primary">Add Zone</button>
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
                    <h5 class="modal-title" id="">Change Zone Information</h5>
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
                        <span style="display: inline;">All Zone List</span>
                    </div>

                    <div class="col-md-6">
                        <div style="float: right;">
                            <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#addCompany">Add New Zone</button>
                        </div>
                    </div>
                </div>
            </h3>

            <div class="row">
                <div class="col-12 table-responsive">
                    <table id="order-listing" class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Name</th>
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
                "url": "{!! route('zone.getAllData') !!}",
                "type": "POST",
                data:function (d){
                    d._token="{{csrf_token()}}";
                },
            },
            columns: [
                { data: 'zoneName', name: 'zone.zoneName' },
                { data: 'statusName', name: 'status.statusName' },

                {
                    "data": function(data)
                    {
                        return '<button class="btn btn-success btn-sm mr-2" data-panel-id="'+data.idzone+'" onclick="edit_data(this)"><i class="far fa-edit"></i>Edit</button>'+
                               '<button class="btn btn-danger btn-sm" data-panel-id="'+data.idzone+'" onclick="delete_data(this)"><i class="fa fa-trash fa-lg"></i>Delete</button>';
                    },
                    "orderable": false, "searchable":false, "name":"selected_rows"
                },
            ]
        } );


        function edit_data(x) {
            id = $(x).data('panel-id');

            $.ajax({
                type: 'POST',
                url: "{!! route('zone.edit') !!}",
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

        function delete_data(x) {
            btn = $(x).data('panel-id');
            $.confirm({
                title: 'Confirm!',
                content: 'Are you sure want to delete!',
                buttons: {
                    confirm: function () {
                        // delete
                        $.ajax({
                            type: 'POST',
                            url: "{!! route('zone.delete') !!}",
                            cache: false,
                            data: {
                                _token: "{{csrf_token()}}",
                                'id': btn
                            },
                            success: function (data) {
                                $.alert({
                                    animationBounce: 2,
                                    title: 'Success!',
                                    content: 'Zone Deleted.',
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