<?php

namespace App\Http\Controllers;

use App\Department;
use App\Tender;
use App\TenderType;
use App\Zone;
use Illuminate\Http\Request;

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
}
