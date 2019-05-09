<?php

namespace App\Http\Controllers;


use App\Status;

use App\Apply;

use App\Tender;
use App\TenderType;
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

            ->leftJoin('tendertype', 'tendertype.tenderTypeId', '=', 'tender.fkTenderTypeId')
            ->leftJoin('department', 'department.departmentId', '=', 'tender.fkdepartmentId')
            ->leftJoin('status', 'status.statusId', '=', 'tender.fkstatusId');


        $datatables = Datatables::of($tender);
        return $datatables->make(true);

    }

    public function addTender(){


        $tenderType=TenderType::select('tenderTypeId','tenderTypeName')->get();
        $tenderStatus=Status::select('statusId','statusName')->where('statusType','tender_status')->get();
        $department=Department::select('departmentId','departmentName')->get();
        return view('Tender.addTender')
            ->with('tenderType',$tenderType)
            ->with('tenderStatus',$tenderStatus)
            ->with('department',$department);



    }



    public function appliedTenderlist(){
        return view('AppliedTender.appliedList');
    }

    public function insertTender(Request $r)
    {


        $tender = new Tender();

        $tender->title = $r->title;
        $tender->details = $r->details;
        $tender->startdate = $r->startdate;
        $tender->enddate = $r->enddate;
        $tender->published_date = $r->published_date;
        $tender->fkstatusId = $r->fkstatusId;
        $tender->price = $r->price;
        $tender->fkTenderTypeId = $r->fkTenderTypeId;
        $tender->fkdepartmentId = $r->fkdepartmentId;

        $tender->save();

        Session::flash('message', 'New Tender Added!');

        return redirect()->route('tender.index');
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
