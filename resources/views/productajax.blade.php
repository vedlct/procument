@foreach($tenders as $tender)
    <div class="jf-featurejobholder">
        <div class="jf-featurejob">
            <div class="jf-companycontent">
                <div class="jf-companyhead">
                    <a class="jf-btnjobtag jf-fulltimejob" href="javascript:void(0);">{{$tender->tenderTypeName}}</a>
                    <div class="jf-rightarea">
                        <a class="jf-btnjobtag" href="javascript:void(0);">Apply</a>
                    </div>
                </div>
                <div class="jf-companyname">
                    <h3><a href="javascript:void(0);">{{$tender->title}}</a></h3>
                    <span>{{$tender->departmentName}}</span>
                </div>
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
@endforeach


<nav class="jf-pagination">
    {!! $tenders->render() !!}
{{--    <ul>--}}
{{--        <li class="jf-prevpage"><a href="#"><i class="fa fa-angle-left"></i> Previous</a></li>--}}
{{--        <li class="jf-active"><a href="#">01</a></li>--}}
{{--        <li><a href="#">02</a></li>--}}
{{--        <li><a href="#">03</a></li>--}}
{{--        <li><a href="#">04</a></li>--}}
{{--        <li><a href="#">05</a></li>--}}
{{--        <li><a href="#"></a></li>--}}
{{--        <li class="jf-nextpage"><a href="#">Next <i class="fa fa-angle-right"></i></a></li>--}}
{{--    </ul>--}}
</nav>

