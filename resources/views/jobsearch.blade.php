@extends('main')
@section('content')

    <main id="jf-main" class="jf-main jf-haslayout">
        <div class="jf-sectionspace jf-haslayout">

            <!--************************************
                    Blog Grid Start
            *************************************-->
            
            <div class="jf-haslayout">
                <div class="container">
                    <div class="row">
                        <div id="jf-threecolumns" class="jf-threecolumns">
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-3 float-left">
                                <aside id="jf-sidebar" class="jf-sidebar jf-sidebarcol">

                                    <div id="jf-narrowsearchcollapse" class="jf-themecollapse jf-narrowsearchcollapse">
                                        <div class="jf-widget jf-themecollapsetitle">
                                            <div class="jf-widgettitle">
                                                <h3>Department</h3>
                                                <span class="fa fa-chevron-right"></span>
                                            </div>
                                        </div>
                                        <div class="jf-widget jf-themecollapsecontent">
                                            <div class="jf-checkboxgroup">
													<span class="jf-checkbox">
														<input type="checkbox" id="jf-salesexecutive" name="bycondition" value="Sales Executive">
														<label for="jf-salesexecutive">
															<span>Sales Executive</span>
														</label>
													</span>
                                                <span class="jf-checkbox">
														<input type="checkbox" id="jf-graphicdesigner" name="bycondition" value="Graphic Designer" checked="">
														<label for="jf-graphicdesigner">
															<span>Graphic Designer</span>
														</label>
													</span>
                                                <span class="jf-checkbox">
														<input type="checkbox" id="jf-marketingexecutive" name="bycondition" value="Marketing Executive">
														<label for="jf-marketingexecutive">
															<span>Marketing Executive</span>
														</label>
													</span>
                                                <span class="jf-checkbox">
														<input type="checkbox" id="jf-accountant" name="bycondition" value="Accountant">
														<label for="jf-accountant">
															<span>Accountant</span>
														</label>
													</span>
                                                <span class="jf-checkbox">
														<input type="checkbox" id="jf-salesmarketingexecutive" name="bycondition" value="Sales / Marketing Executive">
														<label for="jf-salesmarketingexecutive">
															<span>Sales / Marketing Executive</span>
														</label>
													</span>
                                                <a href="javascript:void(0);" class="jf-viewmore">View More</a>
                                            </div>
                                        </div>
                                        <div class="jf-widget jf-themecollapsetitle">
                                            <div class="jf-widgettitle">
                                                <h3>Tender Type</h3>
                                                <span class="fa fa-chevron-right"></span>
                                            </div>
                                        </div>
                                        <div class="jf-widget jf-themecollapsecontent">
                                            <div class="jf-checkboxgroup">
													<span class="jf-checkbox">
														<input type="checkbox" id="jf-armagh" name="bycondition" value="Armagh">
														<label for="jf-armagh">
															<span>Armagh</span>
														</label>
													</span>
                                                <span class="jf-checkbox">
														<input type="checkbox" id="jf-bangor" name="bycondition" value="bangor" checked="">
														<label for="jf-bangor">
															<span>Bangor</span>
														</label>
													</span>
                                                <span class="jf-checkbox">
														<input type="checkbox" id="jf-bath" name="bycondition" value="Bath">
														<label for="jf-bath">
															<span>Bath</span>
														</label>
													</span>
                                                <span class="jf-checkbox">
														<input type="checkbox" id="jf-belfast" name="bycondition" value="belfast">
														<label for="jf-belfast">
															<span>Belfast</span>
														</label>
													</span>
                                                <span class="jf-checkbox">
														<input type="checkbox" id="jf-cambridge" name="bycondition" value="cambridge">
														<label for="jf-cambridge">
															<span>Cambridge</span>
														</label>
													</span>
                                                <a href="javascript:void(0);" class="jf-viewmore">View More</a>
                                            </div>
                                        </div>
                                        <div class="jf-widget jf-themecollapsetitle">
                                            <div class="jf-widgettitle">
                                                <h3>Zone</h3>
                                                <span class="fa fa-chevron-right"></span>
                                            </div>
                                        </div>
                                        <div class="jf-widget jf-themecollapsecontent">
                                            <div class="jf-checkboxgroup">
													<span class="jf-checkbox">
														<input type="checkbox" id="jf-fresh" name="bycondition" value="fresh">
														<label for="jf-fresh">
															<span>Fresh</span>
														</label>
													</span>
                                                <span class="jf-checkbox">
														<input type="checkbox" id="jf-lessthan" name="bycondition" value="lessthan" checked="">
														<label for="jf-lessthan">
															<span>Less than 1 Year</span>
														</label>
													</span>
                                                <span class="jf-checkbox">
														<input type="checkbox" id="jf-1year" name="bycondition" value="1year">
														<label for="jf-1year">
															<span>1 Year</span>
														</label>
													</span>
                                                <span class="jf-checkbox">
														<input type="checkbox" id="jf-2years" name="bycondition" value="2years">
														<label for="jf-2years">
															<span>2 Years</span>
														</label>
													</span>
                                                <span class="jf-checkbox">
														<input type="checkbox" id="jf-3years" name="bycondition" value="3years">
														<label for="jf-3years">
															<span>3 Years</span>
														</label>
													</span>
                                                <a href="javascript:void(0);" class="jf-viewmore">View More</a>
                                            </div>
                                        </div>




                                        <div class="jf-widget jf-Jobssearch">
                                            <div class="jf-Jobssearchbtn">
                                                <a href="javascript:void(0);" class="jf-btn jf-active">Search Jobs Now</a>
                                                <a href="javascript:void(0);" class="jf-btnreset">Reset Search</a>
                                            </div>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-6 float-left">

                                <div class="jf-featuredjobs jf-featuredjobsvtwo jf-featuredjobsvthree">
                                    <div class="jf-featurejobholder">
                                        <div class="jf-featurejob">
                                            <div class="jf-companycontent">
                                                <div class="jf-companyhead">
                                                    <a class="jf-btnjobtag jf-fulltimejob" href="javascript:void(0);">Full Time</a>
                                                    <div class="jf-rightarea">
                                                        <a class="jf-btnjobtag" href="javascript:void(0);">Apply</a>
                                                    </div>
                                                </div>
                                                <div class="jf-companyname">
                                                    <h3><a href="javascript:void(0);">Sales Executive - Call Center</a></h3>
                                                    <span>Angry Creative Bears, Chicago</span>
                                                </div>
                                                <div class="jf-description">
                                                    <p>We are looking for 6 months experienced candidate who must have sound background and basic knowledge</p>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="jf-professionalinfo">
                                            <li><i class="lnr lnr-calendar-full"></i><span>Jun 27, 2019</span></li>
                                            <li><i class="lnr lnr-license"></i><span>Less than 1 Year</span></li>
                                            <li><i class="lnr lnr-tag"></i><span><a href="javascript:void(0);">$600 - $900</a></span></li>
                                        </ul>
                                    </div>
                                    <div class="jf-featurejobholder">
                                        <div class="jf-featurejob">
                                            <div class="jf-companycontent">
                                                <div class="jf-companyhead">
                                                    <a class="jf-btnjobtag jf-fulltimejob" href="javascript:void(0);">Full Time</a>
                                                    <div class="jf-rightarea">
                                                        <a class="jf-btnjobtag" href="javascript:void(0);">Apply</a>
                                                    </div>
                                                </div>
                                                <div class="jf-companyname">
                                                    <h3><a href="javascript:void(0);">Sales Executive - Call Center</a></h3>
                                                    <span>Angry Creative Bears, Chicago</span>
                                                </div>
                                                <div class="jf-description">
                                                    <p>We are looking for 6 months experienced candidate who must have sound background and basic knowledge</p>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="jf-professionalinfo">
                                            <li><i class="lnr lnr-calendar-full"></i><span>Jun 27, 2019</span></li>
                                            <li><i class="lnr lnr-license"></i><span>Less than 1 Year</span></li>
                                            <li><i class="lnr lnr-tag"></i><span><a href="javascript:void(0);">$600 - $900</a></span></li>
                                        </ul>
                                    </div>
                                    <div class="jf-featurejobholder">
                                        <div class="jf-featurejob">
                                            <div class="jf-companycontent">
                                                <div class="jf-companyhead">
                                                    <a class="jf-btnjobtag jf-fulltimejob" href="javascript:void(0);">Full Time</a>
                                                    <div class="jf-rightarea">
                                                        <a class="jf-btnjobtag" href="javascript:void(0);">Apply</a>
                                                    </div>
                                                </div>
                                                <div class="jf-companyname">
                                                    <h3><a href="javascript:void(0);">Sales Executive - Call Center</a></h3>
                                                    <span>Angry Creative Bears, Chicago</span>
                                                </div>
                                                <div class="jf-description">
                                                    <p>We are looking for 6 months experienced candidate who must have sound background and basic knowledge</p>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="jf-professionalinfo">
                                            <li><i class="lnr lnr-calendar-full"></i><span>Jun 27, 2019</span></li>
                                            <li><i class="lnr lnr-license"></i><span>Less than 1 Year</span></li>
                                            <li><i class="lnr lnr-tag"></i><span><a href="javascript:void(0);">$600 - $900</a></span></li>
                                        </ul>
                                    </div>
                                    <div class="jf-featurejobholder">
                                        <div class="jf-featurejob">
                                            <div class="jf-companycontent">
                                                <div class="jf-companyhead">
                                                    <a class="jf-btnjobtag jf-fulltimejob" href="javascript:void(0);">Full Time</a>
                                                    <div class="jf-rightarea">
                                                        <a class="jf-btnjobtag" href="javascript:void(0);">Apply</a>
                                                    </div>
                                                </div>
                                                <div class="jf-companyname">
                                                    <h3><a href="javascript:void(0);">Sales Executive - Call Center</a></h3>
                                                    <span>Angry Creative Bears, Chicago</span>
                                                </div>
                                                <div class="jf-description">
                                                    <p>We are looking for 6 months experienced candidate who must have sound background and basic knowledge</p>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="jf-professionalinfo">
                                            <li><i class="lnr lnr-calendar-full"></i><span>Jun 27, 2019</span></li>
                                            <li><i class="lnr lnr-license"></i><span>Less than 1 Year</span></li>
                                            <li><i class="lnr lnr-tag"></i><span><a href="javascript:void(0);">$600 - $900</a></span></li>
                                        </ul>
                                    </div>
                                    <div class="jf-featurejobholder">
                                        <div class="jf-featurejob">
                                            <div class="jf-companycontent">
                                                <div class="jf-companyhead">
                                                    <a class="jf-btnjobtag jf-fulltimejob" href="javascript:void(0);">Full Time</a>
                                                    <div class="jf-rightarea">
                                                        <a class="jf-btnjobtag" href="javascript:void(0);">Apply</a>
                                                    </div>
                                                </div>
                                                <div class="jf-companyname">
                                                    <h3><a href="javascript:void(0);">Sales Executive - Call Center</a></h3>
                                                    <span>Angry Creative Bears, Chicago</span>
                                                </div>
                                                <div class="jf-description">
                                                    <p>We are looking for 6 months experienced candidate who must have sound background and basic knowledge</p>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="jf-professionalinfo">
                                            <li><i class="lnr lnr-calendar-full"></i><span>Jun 27, 2019</span></li>
                                            <li><i class="lnr lnr-license"></i><span>Less than 1 Year</span></li>
                                            <li><i class="lnr lnr-tag"></i><span><a href="javascript:void(0);">$600 - $900</a></span></li>
                                        </ul>
                                    </div>








                                    <nav class="jf-pagination">
                                        <ul>
                                            <li class="jf-prevpage"><a href="#"><i class="fa fa-angle-left"></i> Previous</a></li>
                                            <li class="jf-active"><a href="#">01</a></li>
                                            <li><a href="#">02</a></li>
                                            <li><a href="#">03</a></li>
                                            <li><a href="#">04</a></li>
                                            <li><a href="#">05</a></li>
                                            <li><a href="#"></a></li>
                                            <li class="jf-nextpage"><a href="#">Next <i class="fa fa-angle-right"></i></a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 float-left">
                                <aside id="jf-sidebarvtwo" class="jf-sidebar jf-sidebarvtwo">
                                    
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--************************************
                    Blog Grid End
            *************************************-->
        </div>
    </main>





@endsection