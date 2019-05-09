
<form method="post" action="{{ route('department.update') }}">
    @csrf
    <input type="hidden" value="{{ $department->departmentId }}" name="id">
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="name" value="{{ $department->departmentName }}" placeholder="Department Name" required>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-12">
            <button style="float: right;" type="submit" class="btn btn-primary">Save Changes</button>
        </div>
    </div>
</form>