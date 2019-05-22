

@extends('main')
@section('content')

    <!-- The Modal -->
    <div class="modal" id="applyModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <form method="post" action="{{route('tender.apply',['id'=>$tender->tenderId])}}">
                    {{csrf_field()}}
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Apply For {{$tender->title}}</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                   <div class="form-group">
                       <label>Your Price</label>

                       @if(Auth::check())
                           <input type="number" name="price" @if($apply)value="{{$apply->price}}" @endif class="form-control ml-1">
                       @else
                           <input type="number" name="price" class="form-control">
                       @endif

                   </div>
                    @if(Auth::check())
                        @if($apply)
                            <button class="btn btn-sm btn-success">Apply Again</button>
                        @else
                            <button class="btn btn-sm btn-success">Apply</button>
                        @endif
                    @endif

                </div>
                </form>
            </div>
        </div>
    </div>


    <main id="jf-main" class="jf-main jf-haslayout">

        <div class="jf-haslayout jf-sectionspace">
            <div class="container">
                <div class="row">
                    <div id="jf-twocolumns" class="jf-twocolumns">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 float-left">
                            <div class="jf-jobapplycenter jf-jobapplycentervfour">

                                <div class="jf-companycontent">
                                    <div class="jf-jobapplydetails">

                                        <div class="jf-companyname">
                                            <h3><a href="javascript:void(0);">{{$tender->title}}</a></h3>
                                            {{--<span>{{$tender->tenderTypeName}}</span>--}}
                                            <ul class="jf-postarticlemetavthree">
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <i class="lnr lnr-calendar-full"></i>
                                                        <span>Tender Posted {{$tender->published_date}}</span>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="jf-jobapplybtnlike">
                                        <div class="jf-likebtnbox">

                                            @if(Auth::check())
                                                @if($apply)
                                                    <a onclick="apply()" class="jf-btn jf-active">Bid Again</a>

                                                    <p><small style="display: inline-flex;">You have already applied this tender</small></p>
                                                @else
                                                    <a onclick="apply()" class="jf-btn jf-active">Apply Now</a>
                                                @endif
                                            @else
                                                {{--<a onclick="apply()" class="jf-btn jf-active">Apply Now</a>--}}
                                                <a class="jf-btn jf-active" href="{{ route('tender.apply.log_in_first', ['id'=>$tender->tenderId]) }}">Log in to apply</a>
                                            @endif

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="jf-jobdetails">
                                <div class="jf-jobdetails">
                                    <div class="jf-jobdetailinfo">
                                        <div class="jf-title">
                                            <h2>Tender Information</h2>
                                        </div>
                                        <ul>
                                            <li><span>Title:</span><em>{{ $tender->title }}</em></li>
                                            <li><span>Start Date:</span><em>{{ $tender->startdate }}</em></li>
                                            <li><span>End Date:</span><em>{{ $tender->enddate }}</em></li>
                                            <li><span>Publish Date:</span><em>{{ $tender->published_date }}</em></li>
                                            <li><span>Status:</span><em>{{ $tender->statusName }}</em></li>
                                            <li><span>Price:</span><em>{{ $tender->price }}</em></li>
                                            <li><span>Zone:</span><em>{{ $tender->zoneName }}</em></li>
                                            <li><span>Tender Type:</span><em>{{ $tender->tenderTypeName }}</em></li>
                                            <li><span>Department:</span><em>{{ $tender->departmentName }}</em></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="jf-jobrequirment" style="margin-top: 20px;">
                                    <div class="jf-title">
                                        <h2>Tender Description</h2>
                                    </div>
                                    <div class="jf-jobdescription">
                                        {{ $tender->details }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


@endsection
@section('js')
    <script>
       function apply(){
           $('#applyModal').modal();
       }
    </script>


@endsection