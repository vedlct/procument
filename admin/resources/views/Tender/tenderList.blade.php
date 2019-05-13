@extends('Layouts.master')

@section('css')

@endsection


@section('content')

    <!-- Add Company Modal -->
    {{--<div class="modal" id="addCompany" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
        {{--<div class="modal-dialog modal-lg" role="document">--}}
            {{--<div class="modal-content">--}}
                {{--<div class="modal-header">--}}
                    {{--<h5 class="modal-title" id="exampleModalLabel">Add New Tender</h5>--}}
                    {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                        {{--<span aria-hidden="true">&times;</span>--}}
                    {{--</button>--}}
                {{--</div>--}}
                {{--<div class="modal-body">--}}

                    {{--<form method="post" action="{{ route('tender.insert') }}">--}}
                        {{--@csrf--}}
                        {{--<div class="form-group row">--}}
                            {{--<div class="col-md-12">--}}
                            {{--<label for="inputEmail3" class="col-sm-2 col-form-label">Title</label>--}}
                            {{--<div class="col-sm-10">--}}
                                {{--<input type="text" class="form-control" name="name" placeholder="tender Title" required>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="form-group row">--}}
                            {{--<div class="col-md-6">--}}
                                {{--<label for="inputEmail3" class="col-md-2 col-form-label">Start Date</label>--}}
                                {{--<div class="col-md-10">--}}
                                    {{--<input type="text" class="form-control" name="startdate" placeholder="startdate" required>--}}
                                {{--</div>--}}

                            {{--</div>--}}
                            {{--<div class="col-md-6">--}}
                                {{--<label for="inputEmail3" class="col-sm-2 col-form-label">End Date</label>--}}
                                {{--<div class="col-sm-10">--}}
                                    {{--<input type="text" class="form-control" name="enddate" placeholder="enddate" required>--}}
                                {{--</div>--}}

                            {{--</div>--}}

                        {{--</div>--}}
                        {{--<div class="form-group row">--}}
                            {{--<div class="col-sm-12">--}}
                                {{--<button style="float: right;" type="submit" class="btn btn-primary">Add Department</button>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}

                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    {{-- Edit Modal --}}
    <div class="modal" id="editModal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="">Change Tender Information</h5>
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
                        <span style="display: inline;">All Tender List</span>
                    </div>

                    <div class="col-md-6">
                        <div style="float: right;">
                            <a type="button" href="{{route('tender.add')}}" class="btn btn-sm btn-info">Add New Tender</a>
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
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Publish Date</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Tender Type</th>
                                <th>Department Type</th>
                                <th>Zone</th>
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
            ordering:true,
            type:"POST",
            "ajax":{
                "url": "{!! route('tender.getAllData') !!}",
                "type": "POST",
                data:function (d){
                    d._token="{{csrf_token()}}";
                },
            },
            columns: [
                { data: 'title', name: 'tender.title' },
                { data: 'startdate', name: 'tender.startdate' },
                { data: 'enddate', name: 'tender.enddate' },
                { data: 'published_date', name: 'tender.published_date' },
                { data: 'price', name: 'tender.price' },
                { data: 'statusName', name: 'status.statusName' },
                { data: 'tenderTypeName', name: 'tendertype.tenderTypeName' },
                { data: 'departmentName', name: 'department.departmentName' },
                { data: 'zoneName', name: 'zone.zoneName' },

                { "data": function(data)
                {
                    return '<button class="btn btn-success btn-sm mr-2" data-panel-id="'+data.tenderId+'" onclick="editTender(this)"><i class="far fa-edit"></i>Edit</button>'+
                        '<button class="btn btn-danger btn-sm" data-panel-id="'+data.tenderId+'" onclick="deleteTender(this)"><i class="fa fa-trash fa-lg"></i>Delete</button>';
                },
                    "orderable": false, "searchable":false, "name":"selected_rows"
                },
            ]
        } );


        function editTender(x) {
            id = $(x).data('panel-id');

            var url = "{{ route('tender.edit', ':tenderId') }}";
            url = url.replace(':tenderId', id);
//            document.location.href=url;


            window.location.href = url;


        }

        function deleteTender(x) {
            btn = $(x).data('panel-id');
            $.confirm({
                title: 'Confirm!',
                content: 'Are you sure want to delete!',
                buttons: {
                    confirm: function () {
                        // delete
                        $.ajax({
                            type: 'POST',
                            url: "{!! route('tender.delete') !!}",
                            cache: false,
                            data: {
                                _token: "{{csrf_token()}}",
                                'id': btn
                            },
                            success: function (data) {
                                $.alert({
                                    animationBounce: 2,
                                    title: 'Success!',
                                    content: 'Tender Deleted.',
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