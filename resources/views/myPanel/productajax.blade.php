@foreach($appliedTenders as $tender)
    <div class="jf-candidatessearch">
        <div class="jf-angrycreativelist">
            <div class="jf-employerdetails">
                <h3>{{ $tender->title }}</h3>
                <br>
                <h4> <span> <b>Tender Type :</b> {{ $tender->tenderTypeName }}</span></h4>
                <h4> <span> <b>Department :</b> {{ $tender->departmentName }}</span></h4>
                <div class="jf-viewprofile">
                    <a href="{{ route('myApplied.tender.details', ['id' => $tender->tenderId]) }}" class="jf-btn">Details</a>
                </div>
            </div>
        </div>
        <ul class="jf-professionalinfo">
            <li><i class="lnr lnr-briefcase"></i><span> <b>Start Date :</b> {{ $tender->startdate }}</span></li>
            <li><i class="lnr lnr-briefcase"></i><span> <b>End Date :</b> {{ $tender->enddate }}</span></li>
            {{--<li><i class="lnr lnr-map-marker"></i><span>Chicago, USA</span></li>--}}
            <li><i class="lnr lnr-tag"></i><span> <b>Status :</b> {{ $tender->statusName }}</span></li>
        </ul>
    </div>
    {{--{{ $tender->title }}--}}
@endforeach


<nav class="jf-pagination">
    {!! $appliedTenders->links()!!}
</nav>

