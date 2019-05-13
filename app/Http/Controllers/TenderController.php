<?php

namespace App\Http\Controllers;

use App\Department;
use App\Tender;
use App\TenderType;
use App\Zone;
use Illuminate\Http\Request;

class TenderController extends Controller
{
    public function getTenders(){
        $tenders=Tender::where('fkstatusId',5)
            ->leftJoin('tendertype','tendertype.tenderTypeId','tender.fkTenderTypeId')
            ->leftJoin('department','department.departmentId','tender.fkdepartmentId')
            ->paginate(1);


        $departments=Department::get();
        $tenderTypes=TenderType::get();
        $zones=Zone::where('fkstatusId',3)->get();

//        return $zones;
        return view('jobsearch',compact('tenders','departments','tenderTypes','zones'));
    }
}
