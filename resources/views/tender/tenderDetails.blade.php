@extends('main')
@section('content')

    <main id="jf-main" class="jf-main jf-haslayout">
        <!--************************************
                Blog Grid Start
        *************************************-->
        <div class="jf-haslayout jf-sectionspace">
            <div class="container">
                <div class="row">
                    <div id="jf-twocolumns" class="jf-twocolumns">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-9 float-left">
                            <div class="jf-jobapplycenter jf-jobapplycentervfour">
{{--                                <figure class="jf-companyimg">--}}
{{--                                    <img src="images/topcompanies/img-05.png" alt="image description">--}}
{{--                                </figure>--}}
                                <div class="jf-companycontent">
                                    <div class="jf-jobapplydetails">
                                        <div class="jf-companyhead">
                                            <a class="jf-btnjobtag jf-fulltimejob" href="javascript:void(0);">{{$tender->tenderTypeName}}</a>
{{--                                            <a class="jf-tagfeature" href="javascript:void(0);">feature</a>--}}
                                        </div>
                                        <div class="jf-companyname">
                                            <h3><a href="javascript:void(0);">{{$tender->title}}</a></h3>
                                            <span>{{$tender->departmentName}}</span>
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
                                            <a href="javascript:void(0);" class="jf-btn jf-active">Apply Now</a>
{{--                                            <a class="jf-btnlike jf-btnliked" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>--}}
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
                                        <h2>Tender Description</h2>
                                    </div>
                                    <div class="jf-jobdescription">
                                        <span>
                                            {{$tender->details}}
                                        </span>

                                    </div>
                                </div>
{{--                                <div class="jf-jobdetailinfo">--}}
{{--                                    <div class="jf-title">--}}
{{--                                        <h2>Job Description</h2>--}}
{{--                                    </div>--}}
{{--                                    <ul>--}}
{{--                                        <li><span>Salary Range:</span><em>$40,000 - $45,000</em></li>--}}
{{--                                        <li><span>Industry:</span><em>Banking/Financial Services</em></li>--}}
{{--                                        <li><span>Functional Area:</span><em>Computer Networking</em></li>--}}
{{--                                        <li><span>Total Positions:</span><em>1 Post</em></li>--}}
{{--                                        <li><span>Job Shift:</span><em>First Shift (Day)</em></li>--}}
{{--                                        <li><span>Job Type:</span><em>Full Time/Permanent</em></li>--}}
{{--                                        <li><span>Job Location:</span><em>Houston, U.S.A</em></li>--}}
{{--                                        <li><span>Gender:</span><em>Male</em></li>--}}
{{--                                        <li><span>Minimum Education:</span><em>BA/BS</em></li>--}}
{{--                                        <li><span>Career Level:</span><em>Experienced Professional</em></li>--}}
{{--                                        <li><span>Experience:</span><em>2 Years - 10 Years</em></li>--}}
{{--                                        <li><span>Apply Before:</span><em>Jul 27, 2019</em></li>--}}
{{--                                        <li><span>Posting Date:</span><em>Jul 27, 2019</em></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                                <div class="jf-jobrequirment">--}}
{{--                                    <div class="jf-title">--}}
{{--                                        <h2>Job Requirment</h2>--}}
{{--                                    </div>--}}
{{--                                    <div class="jf-jobdescription">--}}
{{--                                        <span>Labois niisie ut commodo consequat aute</span>--}}
{{--                                        <span>Irure dolor in reprehenderit ineuptate</span>--}}
{{--                                        <span>Velit esse cillum dolore eu fugiat nulla pariatur</span>--}}
{{--                                        <div class="jf-description">--}}
{{--                                            <p>Self Motivated, Energetic, positive, creative, multitasking, Proven English Speaking skills, Good listening skills, Problem solving Skills</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}


                            </div>

                            <div class="jf-aboutcompany">
                                <div class="jf-sectionhead">
                                    <h2>About Company</h2>
                                </div>
                                <div class="jf-aboutcompanybox">
                                    <figure class="jf-aboutimg">
                                        <img src="images/topcompanies/img-05.png" alt="image description">
                                    </figure>
                                    <div class="jf-aboutdetails">
                                        <div class="jf-aboutdetailsfeature">
                                            <a class="jf-tagfeature" href="javascript:void(0);">feature</a>
                                            <a class="jf-btnlike jf-btnliked" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
                                        </div>
                                        <h3>Sass Perfume &amp; Clothes, Houston</h3>
                                        <h4><span>Member Since: Jun 27, 2010</span><span><i class="lnr lnr-eye"></i>1,744,588 views</span></h4>
                                        <ul class="jf-employerjobs">
                                            <li><a href="javascript:void(0);">Open Jobs</a></li>
                                            <li><a href="javascript:void(0);">Reviews</a></li>
                                            <li><a href="javascript:void(0);">Q &amp; A</a></li>
                                        </ul>
                                        <a href="javascript:void(0);" class="jf-btn">View Full Profile</a>
                                    </div>
                                    <div class="jf-description">
                                        <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adanim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat aute irure dolor aderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur...<a href="javascript:void(0);">read more</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="jf-similarjobs">
                                <div class="jf-sectionhead">
                                    <h2>Similar Jobs</h2>
                                    <a class="jf-btnviewall" href="javascript:void(0);">View All</a>
                                </div>
                                <div class="jf-featuredjobs">
                                    <div class="jf-featurejobholder">
                                        <div class="jf-featurejob">
                                            <figure class="jf-companyimg">
                                                <img src="images/topcompanies/img-01.png" alt="image description">
                                            </figure>
                                            <div class="jf-companycontent">
                                                <div class="jf-companyhead">
                                                    <a class="jf-btnjobtag jf-fulltimejob" href="javascript:void(0);">Full Time</a>
                                                    <div class="jf-rightarea">
                                                        <a class="jf-tagfeature" href="javascript:void(0);">feature</a>
                                                        <a class="jf-btnlike jf-btnliked" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                                <div class="jf-companyname">
                                                    <h3><a href="javascript:void(0);">Sales Executive - Call Center</a></h3>
                                                    <span>Angry Creative Bears, Chicago</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="jf-featurejobholder">
                                        <div class="jf-featurejob">
                                            <figure class="jf-companyimg">
                                                <img src="images/topcompanies/img-02.png" alt="image description">
                                            </figure>
                                            <div class="jf-companycontent">
                                                <div class="jf-companyhead">
                                                    <a class="jf-btnjobtag jf-parttimejob" href="javascript:void(0);">Part time</a>
                                                    <div class="jf-rightarea">
                                                        <a class="jf-tagfeature" href="javascript:void(0);">feature</a>
                                                        <a class="jf-btnlike" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                                <div class="jf-companyname">
                                                    <h3><a href="javascript:void(0);">Sales And Marketing Head</a></h3>
                                                    <span>Aviato Group of Company, Austin</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="jf-featurejobholder">
                                        <div class="jf-featurejob">
                                            <figure class="jf-companyimg">
                                                <img src="images/topcompanies/img-06.png" alt="image description">
                                            </figure>
                                            <div class="jf-companycontent">
                                                <div class="jf-companyhead">
                                                    <a class="jf-btnjobtag jf-internship" href="javascript:void(0);">Internship</a>
                                                    <div class="jf-rightarea">
                                                        <a class="jf-tagfeature" href="javascript:void(0);">feature</a>
                                                        <a class="jf-btnlike" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                                <div class="jf-companyname">
                                                    <h3><a href="javascript:void(0);">Sales Executive - Call Center</a></h3>
                                                    <span>Fast Run Cargo &amp; Movers, San Diego</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="jf-featurejobholder">
                                        <div class="jf-featurejob">
                                            <figure class="jf-companyimg">
                                                <img src="images/topcompanies/img-04.png" alt="image description">
                                            </figure>
                                            <div class="jf-companycontent">
                                                <div class="jf-companyhead">
                                                    <a class="jf-btnjobtag jf-projectbasejob" href="javascript:void(0);">Project Base</a>
                                                    <div class="jf-rightarea">
                                                        <a class="jf-tagfeature" href="javascript:void(0);">feature</a>
                                                        <a class="jf-btnlike jf-btnliked" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                                <div class="jf-companyname">
                                                    <h3><a href="javascript:void(0);">Sales And Marketing Head</a></h3>
                                                    <span>VAV of Oceans, Los Angeles</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-3 float-left">
                            <aside id="jf-sidebar" class="jf-sidebar jf-sidebarvtwo">
                                <div class="jf-widget jf-myrecentrearches">
                                    <div class="jf-widgettitle">
                                        <h3>My Recent Searches</h3>
                                    </div>
                                    <ul class="jf-recentsearches">
                                        <li><a href="javascript:void(0);">php developer</a></li>
                                        <li><a href="javascript:void(0);">sale associate</a></li>
                                        <li><a href="javascript:void(0);">Graphic Designer</a></li>
                                        <li><a href="javascript:void(0);">Graphic Designer</a></li>
                                        <li><a href="javascript:void(0);">Graphic Designer</a></li>
                                        <li><a href="javascript:void(0);" class="jf-clearsearches"><span class="lnr lnr-cross"></span>Clear Searches</a></li>
                                    </ul>
                                </div>
                                <div class="jf-widget jf-employerweek">
                                    <div class="jf-widgettitle">
                                        <h3>Employer Of The Week</h3>
                                    </div>
                                    <div class="jf-angrycreative">
                                        <span class="fab fa-angrycreative"></span>
                                    </div>
                                    <div class="jf-employerdetails">
                                        <h3>Angry Creative Bears</h3>
                                        <h4><span>Member Since: Jun 27, 2010</span><span><i class="lnr lnr-eye"></i>1,744,588 views</span></h4>
                                        <ul class="jf-employerjobs">
                                            <li><a href="javascript:void(0);">Open Jobs</a></li>
                                            <li><a href="javascript:void(0);">Reviews</a></li>
                                            <li><a href="javascript:void(0);">Q &amp; A</a></li>
                                        </ul>
                                        <a href="javascript:void(0);" class="jf-btn">View Full Profile</a>
                                    </div>
                                </div>
                                <div class="jf-adds jf-jobsearchadd">
                                    <a href="javascript:void(0);" title="">
                                        <figure>
                                            <img src="images/adds-02.jpg" alt="img description">
                                        </figure>
                                    </a>
                                    <span>Advertisement  540px X 80px</span>
                                </div>
                            </aside>
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