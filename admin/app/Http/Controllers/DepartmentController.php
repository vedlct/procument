<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Session;

class DepartmentController extends Controller
{
    public function departments(){
        return view('Department.deptList');
    }

    public function getAllDepartments(){
        $depts = Department::all();
        $datatables = Datatables::of($depts);
        return $datatables->make(true);
    }

    public function insertDepartment(Request $r){
        $department = new Department();
        $department->departmentName = $r->name;
        $department->save();

        Session::flash('message', 'New Department Added!');

        return back();
    }

    public function editDepartment(Request $r){
        $department = Department::where('departmentId', $r->id)->first();
        return view('Department.deptEdit')->with('department', $department);
    }

    public function updateDepartment(Request $r){
        $department = Department::findOrFail($r->id);
        $department->departmentName = $r->name;
        $department->save();

        Session::flash('message', 'Department Updated!');

        return back();
    }

    public function deleteDepartment(Request $r){
        $department = Department::where('departmentId', $r->id)->first();
        $department->delete();

        Session::flash('message', 'Department Deleted!');

        return back();
    }
}
