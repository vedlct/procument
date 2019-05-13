
<form method="post" action="{{ route('tenderType.update') }}">
    @csrf
    <input type="hidden" value="{{ $tenderType->tenderTypeId }}" name="id">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="name" value="{{ $tenderType->tenderTypeName }}" placeholder="Tender Type Name" required>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-12">
            <button style="float: right;" type="submit" class="btn btn-primary">Save Changes</button>
        </div>
    </div>
</form>