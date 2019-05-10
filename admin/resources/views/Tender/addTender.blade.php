@extends('Layouts.master')

@section('css')

@endsection


@section('content')



    <div class="card">

        <h3 class="card-header">
            <div class="row">
                <div align="center" class="col-md-12">
                    <span style="display: inline;">Add Tender</span>
                </div>

            </div>
        </h3>

        <div class="card-body">



            <form method="post" enctype="multipart/form-data" action="{{ route('tender.insert') }}">
                @csrf




                        <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="title" placeholder="tender Title" required>
                        </div>
                        </div>


                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Start Date</label>
                            <div class="col-sm-9">
                                <input type="text" name="startdate" class="form-control date"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">End Date</label>
                            <div class="col-sm-9">
                                <input type="text" name="enddate" class="form-control date" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Price</label>
                            <div class="col-sm-9">
                                <input type="text" name="price" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Publish Date</label>
                            <div class="col-sm-9">
                                <input class="form-control date" name="published_date"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Status</label>
                            <div class="col-sm-9">
                                <select required name="fkstatusId" class="form-control">
                                    <option value="">select Tender Status</option>
                                    @foreach($tenderStatus as $tS)
                                        <option value="{{$tS->statusId}}">{{$tS->statusName}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tender Type</label>
                            <div class="col-sm-9">
                                <select required name="fkTenderTypeId" class="form-control">
                                    <option value="">select Tender Type</option>
                                    @foreach($tenderType as $tT)
                                        <option value="{{$tT->tenderTypeId}}">{{$tT->tenderTypeName}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Department</label>
                            <div class="col-sm-9">
                                <select required name="fkdepartmentId" class="form-control">
                                    <option value="">select Department</option>
                                    @foreach($department as $d)
                                        <option value="{{$d->departmentId}}">{{$d->departmentName}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">

                                <label class="col-sm-3 col-form-label">File upload</label>

                                <div class="input-group col-sm-9">
                                    <input type="file" name="img[]" multiple class="form-control">
                                    {{--<input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">--}}
                                    {{--<span class="input-group-append">--}}
                                            {{--<button class="file-upload-browse btn btn-primary" type="button">Upload</button>--}}
                                    {{--</span>--}}
                                </div>

                        </div>
                    </div>


                </div>


                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Details</label>
                    <div class="col-sm-10">
                        <textarea rows="5" name="details" class="form-control"></textarea>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-12">
                        <button style="float: right;" type="submit" class="btn btn-primary">Add Tender</button>
                    </div>
                </div>


            </form>

        </div>
    </div>





@endsection


@section('page_scripts')

    <script>

        $('.date').datepicker({
            format: 'yyyy-m-d',
            todayHighlight: true,
            autoclose: true
        });

    </script>


@endsection