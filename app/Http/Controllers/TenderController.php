<?php

namespace App\Http\Controllers;

use App\ApplyTender;
use App\CompanyContactPerson;
use App\Department;
use App\Tender;
use App\TenderType;
use App\Zone;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class TenderController extends Controller
{
    public function getTenders(Request $r){
        $tenders=Tender::where('fkstatusId',5)
            ->leftJoin('tendertype','tendertype.tenderTypeId','tender.fkTenderTypeId')
            ->leftJoin('department','department.departmentId','tender.fkdepartmentId')
            ->paginate(2);

        if ($r->filter['filterDEPT'] != null){
            $tenders = $tenders->where('fkdepartmentId',$r->filter['filterDEPT']);
        }

        if ($r->filter['filterTYPE'] != null){
            $tenders = $tenders->where('fkTenderTypeId',$r->filter['filterTYPE']);
        }

        if ($r->filter['filterZONE'] != null){
            $tenders = $tenders->where('fkzoneId',$r->filter['filterZONE']);
        }

        $departments=Department::get();
        $tenderTypes=TenderType::get();
        $zones=Zone::where('fkstatusId',3)->get();

        if ($r->ajax()) {
            return view('productajax', compact('tenders','departments','tenderTypes','zones'));
        }

        return view('jobsearch',compact('tenders','departments','tenderTypes','zones'));
    }

    public function filterTenders(Request $r){
        $tenders=Tender::where('fkstatusId',5)
            ->leftJoin('tendertype','tendertype.tenderTypeId','tender.fkTenderTypeId')
            ->leftJoin('department','department.departmentId','tender.fkdepartmentId');


        if ($r->filter['filterDEPT'] != null){
            $tenders = $tenders->where('fkdepartmentId',$r->filter['filterDEPT']);
        }

        if ($r->filter['filterTYPE'] != null){
            $tenders = $tenders->where('fkTenderTypeId',$r->filter['filterTYPE']);
        }

        if ($r->filter['filterZONE'] != null){
            $tenders = $tenders->where('fkzoneId',$r->filter['filterZONE']);
        }

        $tenders = $tenders->paginate(2);

        $departments=Department::get();
        $tenderTypes=TenderType::get();
        $zones=Zone::where('fkstatusId',3)->get();

//        if ($r->ajax()) {
//            return view('productajax', compact('tenders','departments','tenderTypes','zones'));
//        }

        return view('productajax',compact('tenders','departments','tenderTypes','zones'));
    }

    public function tenderDetails($id){
        $apply=ApplyTender::where('tender_tenderId',$id)
            ->where('fkUserId',Auth::user()->id)
            ->first();


        $tender=Tender::leftJoin('tendertype','tendertype.tenderTypeId','tender.fkTenderTypeId')
            ->leftJoin('department','department.departmentId','tender.fkdepartmentId')
            ->findOrFail($id);

        return view('tender.tenderDetails',compact('tender','apply'));
    }

    public function apply($id,Request $r){
        $checkApply=ApplyTender::where('tender_tenderId',$id)
            ->where('fkUserId',Auth::user()->id)
            ->first();

        if($checkApply){
            ApplyTender::where('tender_tenderId',$id)
                ->where('fkUserId',Auth::user()->id)
                ->update(['price'=>$r->price]);
        }
        else {
            $company = CompanyContactPerson::where('fkuserId', Auth::user()->id)
                ->first();

            $apply = new ApplyTender();
            $apply->fkUserId = Auth::user()->id;
            $apply->price = $r->price;
            $apply->tender_tenderId = $id;
            $apply->company_companyId = $company->fkcompanyId;
            $apply->status_statusId = 5;
            $apply->save();
        }
        Session::flash('message', 'Applied Successfully!');

        return back();
    }
}
