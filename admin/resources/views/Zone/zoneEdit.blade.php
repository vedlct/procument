
<form method="post" action="{{ route('zone.update') }}">
    @csrf
    <input type="hidden" value="{{ $zone->zoneId }}" name="id">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="name" value="{{ $zone->zoneName }}" placeholder="Zone Name" required>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Status</label>
        <div class="col-sm-10">
            <select class="form-control" name="status">
                {{--<option value="">Select Status</option>--}}
                @foreach($status as $s)
                    <option value="{{ $s->statusId }}" @if($s->statusId == $zone->fkstatusId) selected @endif>{{ $s->statusName }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-12">
            <button style="float: right;" type="submit" class="btn btn-primary">Save Changes</button>
        </div>
    </div>
</form>