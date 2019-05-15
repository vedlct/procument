@foreach($tenders as $tender)
    <div class="jf-featurejobholder">
        <div class="jf-featurejob">
            <div class="jf-companycontent">
                <div class="jf-companyhead">
                    <a class="jf-btnjobtag jf-fulltimejob" href="{{route('tender.get',['id'=>$tender->tenderId])}}">{{$tender->tenderTypeName}}</a>
                    <div class="jf-rightarea">
                        <a class="jf-btnjobtag" href="{{route('tender.get',['id'=>$tender->tenderId])}}">Apply</a>
                    </div>
                </div>
                <div class="jf-companyname">
                    <h3><a href="{{route('tender.get',['id'=>$tender->tenderId])}}">{{$tender->title}}</a></h3>
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

</nav>

