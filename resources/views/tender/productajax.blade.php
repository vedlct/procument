@foreach($tenders as $tender)
    <div class="jf-featurejobholder">
        <div class="jf-featurejob">
            <div class="jf-companycontent">

                <div class="jf-companyname" >
                    <div class="row">
                        <div class="col-md-8">
                            <h3><a href="{{route('tender.get',['id'=>$tender->tenderId])}}">{{$tender->title}}</a></h3>
                            <a class=" jf-fulltimejob" style="margin-top: 10px; margin-bottom: 10px; display: block; color: #283c58" href="{{route('tender.get',['id'=>$tender->tenderId])}}"> <b>Department : </b> {{$tender->departmentName}}</a>
                            <a class=" jf-fulltimejob" style="color: #283c58;" href="{{route('tender.get',['id'=>$tender->tenderId])}}"> <b>Type : </b> {{$tender->tenderTypeName}}</a>
                        </div>
                        <div class="col-md-4">
                            <a class="jf-btnjobtag jf-fulltimejob float-right" href="{{route('tender.get',['id'=>$tender->tenderId])}}"> <b>Show Details </b></a>
                        </div>
                    </div>

                    {{--<span>{{$tender->departmentName}}</span>--}}
                </div>

                {{--<div class="jf-companyhead">--}}
                    {{--<a class="jf-btnjobtag jf-fulltimejob float-right ml-2" href="{{route('tender.get',['id'=>$tender->tenderId])}}"> <b>Type : </b> {{$tender->tenderTypeName}}</a>--}}
                    {{--<a class="jf-btnjobtag jf-fulltimejob float-right" href="{{route('tender.get',['id'=>$tender->tenderId])}}"> <b>Department : </b> {{$tender->departmentName}}</a>--}}
                    {{--<div class="jf-rightarea">--}}
                    {{--<a class="jf-btnjobtag" href="{{route('tender.get',['id'=>$tender->tenderId])}}">Apply</a>--}}
                    {{--</div>--}}
                {{--</div>--}}

                <div class="jf-description">
                    <p>{{$tender->details}}</p>
                </div>
            </div>
        </div>
        <ul class="jf-professionalinfo">
            <li><i class="lnr lnr-calendar-full"></i><span>{{$tender->startdate}}</span></li>
            <li><i class="lnr lnr-license"></i><span>{{$tender->enddate}}</span></li>
            <li><i class="lnr lnr-tag"></i><span><a href="javascript:void(0);">{{$tender->price}}</a></span></li>
        </ul>
    </div>

    {{--<script>--}}
        {{--function openDetails(){--}}
            {{--window.location.replace("{{ route('') }}");--}}
        {{--}--}}
    {{--</script>--}}

@endforeach


<nav class="jf-pagination">
    {!! $tenders->links() !!}
</nav>

