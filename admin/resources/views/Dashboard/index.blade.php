@extends('Layouts.master')

@section('css')

@endsection


@section('content')

    <div class="card">
        <div class="card-body">
            <h3 class="card-title">
                <div class="row">
                    <div class="col-md-6">
                        <span style="display: inline;">Applied Tender List [Today]</span>
                    </div>

                    {{--<div class="col-md-6">--}}
                    {{--<div style="float: right;">--}}
                    {{--<a type="button" href="{{route('tender.add')}}" class="btn btn-sm btn-info">Add New Tender</a>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                </div>
            </h3>

            <div class="row">
                <div class="col-12 table-responsive">
                    <table id="order-listing" class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Tender Name</th>
                            <th>Tender Type</th>
                            <th>Company</th>
                            <th>Status</th>

                            <th>Department Type</th>
                            <th>Apply Date</th>
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
                "url": "{!! route('tender.applied.list.getAllData.today') !!}",
                "type": "POST",
                data:function (d){
                    d._token="{{csrf_token()}}";
                },
            },
            columns: [
                { data: 'title', name: 'tender.title' },
                { data: 'tenderTypeName', name: 'tendertype.tenderTypeName' },
                { data: 'name', name: 'company.name' },
                { data: 'statusName', name: 'status.statusName' },
                { data: 'departmentName', name: 'department.departmentName' },
                { data: 'applyDate', name: 'apply.applyDate' },

                { "data": function(data)
                    {
                        return '<button class="btn btn-success btn-sm mr-2" data-panel-id="'+data.applyId+'" onclick="showApplied(this)"><i class="far fa-eye"></i>View</button>'
                        // '<button class="btn btn-danger btn-sm" data-panel-id="'+data.applyId+'" onclick="deleteCompany(this)"><i class="fa fa-trash fa-lg"></i>Delete</button>';
                    },
                    "orderable": false, "searchable":false, "name":"selected_rows"
                },
            ]
        } );


    </script>

@endsection