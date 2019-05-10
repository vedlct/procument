
<form method="post" action="{{ route('company.update') }}">
    @csrf
    <input type="hidden" value="{{ $company->companyId }}" name="id">
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="name" value="{{ $company->name }}" placeholder="Company Name" required>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Address</label>
        <div class="col-sm-10">
            <textarea class="form-control" name="address" placeholder="Address">{{ $company->address }}</textarea>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Status</label>
        <div class="col-sm-10">
            <select class="form-control" name="status">
                <option value="1" @if($company->fkstatusId == 1) selected @endif>Active</option>
                <option value="2" @if($company->fkstatusId == 2) selected @endif>Inactive</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-12">
            <button style="float: right;" type="submit" class="btn btn-primary">Save Changes</button>
        </div>
    </div>
</form>