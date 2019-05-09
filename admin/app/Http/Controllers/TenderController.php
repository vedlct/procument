<?php

namespace App\Http\Controllers;

use App\Apply;
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


    public function appliedTenderlist(){
        return view('AppliedTender.appliedList');
    }

    public function getAppliedTenderlist(){
        $appliedTender = Apply::select('tender.title','company.name', 'status.statusName', 'department.departmentName', 'apply.*')
                               ->leftJoin('tender', 'tender.tenderId', 'apply.tender_tenderId')
                               ->leftJoin('company', 'company.companyId', 'apply.company_companyId')
                               ->leftJoin('department', 'tender.fkdepartmentId', 'department.departmentId')
                               ->leftJoin('status', 'tender.fkstatusId', 'status.statusId');


        $datatables = Datatables::of($appliedTender);
        return $datatables->make(true);
    }
}
