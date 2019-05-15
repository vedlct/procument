

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

                       <input type="number" name="price" @if($apply)value="{{$apply->price}}" @endif class="form-control">
                   </div>
                    <button class="btn btn-sm btn-success">Apply</button>
                </div>
                </form>
            </div>
        </div>
    </div>


    <main id="jf-main" class="jf-main jf-haslayout">
        <!--************************************
                Blog Grid Start
        *************************************-->
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
                                            <span>{{$tender->tenderTypeName}}</span>
                                            <ul class="jf-postarticlemetavthree">
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <i class="lnr lnr-calendar-full"></i>
                                                        <span>Posted {{$tender->published_date}}</span>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="jf-jobapplybtnlike">
                                        <div class="jf-likebtnbox">
                                            @if($apply)

                                                <a onclick="apply()" class="jf-btn jf-active">Bid Again</a>

                                                <p><small style="display: inline-flex;">You have already applied this tender</small></p>
                                            @else
                                                <a onclick="apply()" class="jf-btn jf-active">Apply Now</a>
                                            @endif
                                        </div>
                                        <ul class="jf-socialiconssimple">
                                            <li class="jf-sharejob"><span>Share this job</span></li>
                                            <li class="jf-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook-f"></i></a></li>
                                            <li class="jf-twitter"><a href="javascript:void(0);"><i class="fab fa-twitter"></i></a></li>
                                            <li class="jf-linkedin"><a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li class="jf-clone"><a href="javascript:void(0);"><i class="far fa-clone"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="jf-jobdetails">
                                <div class="jf-jobdetaildescription">
                                    <div class="jf-title">
                                        <h2>Job Description</h2>
                                    </div>
                                    <div class="jf-jobdescription">
                                        <span>
                                            {{$tender->details}}
                                        </span>

                                    </div>
                                </div>
                                <div class="jf-jobdetailinfo">
                                    <div class="jf-title">
                                        <h2>Job Description</h2>
                                    </div>
                                    <ul>
                                        <li><span>Salary Range:</span><em>$40,000 - $45,000</em></li>
                                        <li><span>Industry:</span><em>Banking/Financial Services</em></li>
                                        <li><span>Functional Area:</span><em>Computer Networking</em></li>
                                        <li><span>Total Positions:</span><em>1 Post</em></li>
                                        <li><span>Job Shift:</span><em>First Shift (Day)</em></li>
                                        <li><span>Job Type:</span><em>Full Time/Permanent</em></li>
                                        <li><span>Job Location:</span><em>Houston, U.S.A</em></li>
                                        <li><span>Gender:</span><em>Male</em></li>
                                        <li><span>Minimum Education:</span><em>BA/BS</em></li>
                                        <li><span>Career Level:</span><em>Experienced Professional</em></li>
                                        <li><span>Experience:</span><em>2 Years - 10 Years</em></li>
                                        <li><span>Apply Before:</span><em>Jul 27, 2019</em></li>
                                        <li><span>Posting Date:</span><em>Jul 27, 2019</em></li>
                                    </ul>
                                </div>
                                <div class="jf-jobrequirment">
                                    <div class="jf-title">
                                        <h2>Job Requirment</h2>
                                    </div>
                                    <div class="jf-jobdescription">
                                        <span>Labois niisie ut commodo consequat aute</span>
                                        <span>Irure dolor in reprehenderit ineuptate</span>
                                        <span>Velit esse cillum dolore eu fugiat nulla pariatur</span>
                                        <div class="jf-description">
                                            <p>Self Motivated, Energetic, positive, creative, multitasking, Proven English Speaking skills, Good listening skills, Problem solving Skills</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="jf-jobapply">
                                    <div class="jf-jobapplynowbtn">
                                        @if($apply)

                                            <a onclick="apply()" class="jf-btn jf-active">Bid Again</a>

                                            <p><small style="display: inline-flex;">You have already applied this tender</small></p>
                                        @else
                                            <a onclick="apply()" class="jf-btn jf-active">Apply Now</a>
                                        @endif

                                    </div>
                                    <ul class="jf-socialiconssimple">
                                        <li class="jf-sharejob"><span>Share this job</span></li>
                                        <li class="jf-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook-f"></i></a></li>
                                        <li class="jf-twitter"><a href="javascript:void(0);"><i class="fab fa-twitter"></i></a></li>
                                        <li class="jf-linkedin"><a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li class="jf-clone"><a href="javascript:void(0);"><i class="far fa-clone"></i></a></li>
                                    </ul>
                                </div>
                            </div>


                        </div>



                    </div>
                </div>
            </div>
        </div>
        <!--************************************
                Blog Grid End
        *************************************-->
    </main>



@endsection
@section('js')
    <script>
       function apply(){
           $('#applyModal').modal();
       }
    </script>


@endsection