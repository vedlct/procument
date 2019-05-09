<?php

namespace App\Http\Controllers;

use App\Tender;
use Illuminate\Http\Request;
use App\Department;

use Yajra\DataTables\DataTables;
use Session;

class TenderController extends Controller
{
    //
    public function tenderShow(){

        return view('Tender.tenderList');
    }
    public function getAlltenderShow(){

        $tender = Tender::select('tender.*','tendertype.tenderTypeName','department.departmentName','status.statusName')
            ->leftJoin('tendertype', 'tendertype.tenderTypeId', '=', 'tender.tenderId')
            ->leftJoin('department', 'department.departmentId', '=', 'tender.fkdepartmentId')
            ->leftJoin('status', 'status.statusId', '=', 'tender.fkstatusId');

        $datatables = Datatables::of($tender);
        return $datatables->make(true);

    }
    public function addTender(){


        return view('Tender.addTender');


    }
    public function insertTender(){



    }
}
