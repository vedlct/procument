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

                                        <div class="form-group jf-inputwithicon">
                                            <i class="lnr lnr-start"></i>
                                            <span class="jf-select">
                                                <select class="form-control" id="filterDEPT" onchange="filterTender()">
                                                    <option value="">Select Department Type</option>
                                                    @foreach($departments as $department)
                                                        <option value="{{$department->departmentId}}">{{$department->departmentName}}</option>
                                                    @endforeach
                                                </select>
                                            </span>
                                        </div>

                                        <div class="jf-widget jf-themecollapsetitle">
                                            <div class="jf-widgettitle">
                                                <h3>Tender Type</h3>
                                                <span class="fa fa-chevron-right"></span>
                                            </div>
                                        </div>
                                        <div class="form-group jf-inputwithicon">
                                            <i class="lnr lnr-start"></i>
                                            <span class="jf-select">
                                                <select class="form-control" id="filterTYPE" onchange="filterTender()">
                                                    <option value="">Select Tender Type</option>
                                                    @foreach($tenderTypes as $tenderType)
                                                            <option value="{{$tenderType->tenderTypeId}}">{{$tenderType->tenderTypeName}}</option>
                                                        @endforeach
                                                </select>
                                            </span>
                                        </div>


                                        <div class="jf-widget jf-themecollapsetitle">
                                            <div class="jf-widgettitle">
                                                <h3>Zone</h3>
                                                <span class="fa fa-chevron-right"></span>
                                            </div>
                                        </div>
                                        <div class="form-group jf-inputwithicon">
                                            <i class="lnr lnr-start"></i>
                                            <span class="jf-select">
                                                <select class="form-control" id="filterZONE" onchange="filterTender()">
                                                    <option value="">Select Zone</option>
                                                    @foreach($zones as $zone)
                                                            <option value="{{$zone->zoneId}}">{{$zone->zoneName}}</option>
                                                        @endforeach
                                                </select>
                                            </span>
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

                                <div class="jf-featuredjobs jf-featuredjobsvtwo jf-featuredjobsvthree" id="tag_container">
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


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

@section('js')



    <script type="text/javascript">
        $(window).on('hashchange', function() {
            if (window.location.hash) {
                var page = window.location.hash.replace('#', '');
                if (page == Number.NaN || page <= 0) {
                    return false;
                }else{
                    getData(page);
                }
            }
        });

        $(document).ready(function()
        {
            $(document).on('click', '.pagination a',function(event)
            {
                event.preventDefault();

                $('li').removeClass('active');
                $(this).parent('li').addClass('active');

                var myurl = $(this).attr('href');
                var page=$(this).attr('href').split('page=')[1];

                getData(page);
            });

        });

        function getData(page){

            var data = {};
            data['filterDEPT'] = $("#filterDEPT").val();
            data['filterTYPE'] = $("#filterTYPE").val();
            data['filterZONE'] = $("#filterZONE").val();

            $.ajax(
                {
                    url: '?page=' + page,
                    type: "get",
                    datatype: "html",
                    data:{
                        filter:data,
                        _token:'{{csrf_token()}}',
                    },
                }).done(function(data)
                {

                    $("#tag_container").empty().html(data);
                    location.hash = page;

                }).fail(function(jqXHR, ajaxOptions, thrownError)
                {
                    alert('No response from server');
                });
        }

        // FILTER TENDER
        function filterTender(){
            var data = {};
            data['filterDEPT'] = $("#filterDEPT").val();
            data['filterTYPE'] = $("#filterTYPE").val();
            data['filterZONE'] = $("#filterZONE").val();

            $.ajax({
                type:'POST',
                url:'{{route('tender.filter')}}',
                data:{
                    filter:data,
                    _token:'{{csrf_token()}}'},
                cache: false,
                success:function(data) {
                    $("#tag_container").empty().html(data);
                }
            });
        }
    </script>

@endsection

