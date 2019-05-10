<?php

namespace App\Http\Controllers;


use App\Document;
use App\Status;

use App\Apply;

use App\Tender;
use App\TenderType;
use App\Zone;
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

        $departments=Department::get();
        $tenderTypes=TenderType::get();
        $zones=Zone::where('fkstatusId',3)->get();

//        return $zones;

        return view('AppliedTender.appliedList',compact('departments','tenderTypes','zones'));
    }
    public function deleteTender(Request $r){

        $tender= Tender::where('tenderId', $r->id)->first();

        $tender->delete();

        Session::flash('message', 'tender Deleted!');

        return back();
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

        if($r->hasFile('img')){


            $images =$r->file('img') ;




            foreach ($images as $img){

                $tenderDoc=new Document();

                $filename= $img->getClientOriginalName().'.'.$img->getClientOriginalExtension();

                $tenderDoc->documentName=$filename;
                $tenderDoc->fktenderId=$tender->tenderId;
                $location = public_path('tenderDoc'.'/');
                $upload_success = $img->move($location, $filename);
                $tenderDoc->save();


            }


        }


        Session::flash('message', 'New Tender Added!');

        return redirect()->route('tender.index');
    }
    public function updateTender(Request $r)
    {


        $tender = Tender::findOrFail($r->tenderId);

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

        if($r->hasFile('img')){


            $images =$r->file('img') ;




            foreach ($images as $img){

                $tenderDoc=new Document();

                $filename= $img->getClientOriginalName().'.'.$img->getClientOriginalExtension();
                $tenderDoc->documentName=$filename;
                $tenderDoc->fktenderId=$tender->tenderId;
                $location = public_path('tenderDoc'.'/');
                $upload_success = $img->move($location, $filename);
                $tenderDoc->save();


            }


        }


        Session::flash('message', 'Tender updated!');

        return redirect()->route('tender.index');
    }



    public function getAppliedTenderlist(Request $r){


        $appliedTender = Apply::select('tender.title', 'tendertype.tenderTypeName','company.name', 'status.statusName',
            'department.departmentName', 'apply.*','zone.zoneName')
                               ->leftJoin('tender', 'tender.tenderId', 'apply.tender_tenderId')
                               ->leftJoin('company', 'company.companyId', 'apply.company_companyId')
                               ->leftJoin('department', 'tender.fkdepartmentId', 'department.departmentId')
                               ->leftJoin('tendertype', 'tendertype.tenderTypeId', 'tender.fkTenderTypeId')
                               ->leftJoin('status', 'tender.fkstatusId', 'status.statusId')
                               ->leftJoin('zone', 'zone.zoneId', 'tender.fkzoneId');
        if($r->zone){
            $appliedTender=$appliedTender->where('zone.zoneId',$r->zone);
        }
        if($r->department){
            $appliedTender=$appliedTender->where('department.departmentId',$r->department);
        }
        if($r->tenderType){
            $appliedTender=$appliedTender->where('tender.fkTenderTypeId',$r->tenderType);
        }


        $datatables = Datatables::of($appliedTender);
        return $datatables->make(true);
    }
    public function editTender($tenderId){

        $tenderType=TenderType::select('tenderTypeId','tenderTypeName')->get();
        $tenderStatus=Status::select('statusId','statusName')->where('statusType','tender_status')->get();
        $department=Department::select('departmentId','departmentName')->get();
        $tenderDoc=Document::select('*')->where('fktenderId',$tenderId)->get();

        $tenderInfo=Tender::leftJoin('tendertype', 'tendertype.tenderTypeId', '=', 'tender.fkTenderTypeId')
            ->leftJoin('department', 'department.departmentId', '=', 'tender.fkdepartmentId')
            ->leftJoin('status', 'status.statusId', '=', 'tender.fkstatusId')
            ->findOrFail($tenderId,array('tender.*','tendertype.tenderTypeName','department.departmentName','status.statusName'));

        return view('Tender.editTender')
            ->with('tenderType',$tenderType)
            ->with('tenderStatus',$tenderStatus)
            ->with('tenderInfo',$tenderInfo)
            ->with('tenderDoc',$tenderDoc)
            ->with('department',$department);
    }
    public function deleteTenderDoc($docId){


        $fileInfo=Document::findOrfail($docId);

        $Path = public_path('tenderDoc'.'/'.$fileInfo->documentName);

        if (file_exists($Path))
        {
            if (unlink($Path)) {
                Session::flash('message', 'Document Deleted!');
            } else {
                Session::flash('message', 'Document could not Deleted ,try again!');
            }
        }
        else
        {
            Session::flash('message', 'Document not exist!');
        }

        $fileInfo->delete();

        return back();


    }
}
