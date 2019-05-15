@extends('main')
@section('content')

<main id="jf-main" class="jf-main jf-haslayout">
    <div class="jf-haslayout jf-sectionspace">
        <div class="jf-haslayout">
            <div class="container">
                <div class="row">
                    <div id="jf-threecolumns" class="jf-threecolumns">

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 float-left">
                            <div class="jf-featuredjobs jf-featuredjobsvtwo jf-candidatessearchs" id="tag_container">
                                @include('myPanel.productajax')
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
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

            // var data = {};
            // data['filterDEPT'] = $("#filterDEPT").val();
            // data['filterTYPE'] = $("#filterTYPE").val();
            // data['filterZONE'] = $("#filterZONE").val();

            $.ajax(
                {
                    url: '?page=' + page,
                    type: "get",
                    datatype: "html",
                    data:{
                        // filter:data,
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

        {{--// FILTER TENDER--}}
        {{--function filterTender(){--}}
            {{--var data = {};--}}
            {{--data['filterDEPT'] = $("#filterDEPT").val();--}}
            {{--data['filterTYPE'] = $("#filterTYPE").val();--}}
            {{--data['filterZONE'] = $("#filterZONE").val();--}}

            {{--$.ajax({--}}
                {{--type:'POST',--}}
                {{--url:'{{route('tender.filter')}}',--}}
                {{--data:{--}}
                    {{--filter:data,--}}
                    {{--_token:'{{csrf_token()}}'},--}}
                {{--cache: false,--}}
                {{--success:function(data) {--}}
                    {{--$("#tag_container").empty().html(data);--}}
                {{--}--}}
            {{--});--}}
        {{--}--}}
    </script>

@endsection
