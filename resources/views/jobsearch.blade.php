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
											@foreach($departments as $department)
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-salesexecutive" name="bycondition" value="{{$department->departmentId}}">
                                                    <label for="jf-salesexecutive">
                                                        <span>{{$department->departmentName}}</span>
                                                    </label>
                                                </span>
                                            @endforeach




{{--                                                <a href="javascript:void(0);" class="jf-viewmore">View More</a>--}}
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
                                            @foreach($tenderTypes as $tenderType)
                                                <span class="jf-checkbox">
                                                    <input type="checkbox" id="jf-bangor" name="bycondition" value="{{$tenderType->tenderTypeId}}">
                                                    <label for="jf-bangor">
                                                        <span>{{$tenderType->tenderTypeName}}</span>
                                                    </label>
                                                </span>
                                            @endforeach


{{--                                                <a href="javascript:void(0);" class="jf-viewmore">View More</a>--}}
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
                                                @foreach($zones as $zone)
													<span class="jf-checkbox">
														<input type="checkbox" id="jf-fresh" name="bycondition" value="{{$zone->zoneId}}">
														<label for="jf-fresh">
															<span>{{$zone->zoneName}}</span>
														</label>
													</span>
                                                @endforeach

{{--                                                <a href="javascript:void(0);" class="jf-viewmore">View More</a>--}}
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
                                    @include('productajax')

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