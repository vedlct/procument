<?php

namespace App\Http\Controllers;

use App\CompanyContactPerson;
use App\Tender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyPanelController extends Controller
{
    public function myAppliedTenders(Request $r){

        $userCompanyId = CompanyContactPerson::where('fkuserId', Auth::user()->id)->first()->fkcompanyId;

        $appliedTenders = Tender::leftJoin('apply', 'apply.tender_tenderId', 'tender.tenderId')
                                ->leftJoin('tendertype', 'tendertype.tenderTypeId', 'tender.fkTenderTypeId')
                                ->leftJoin('department', 'department.departmentId', 'tender.fkdepartmentId')
                                ->leftJoin('status', 'status.statusId', 'tender.fkstatusId')
                                ->where('apply.company_companyId', $userCompanyId)
                                ->paginate(2);



        if ($r->ajax()) {
            return view('myPanel.productajax', compact('appliedTenders'));
        }

        return view('myPanel.appliedtender',compact('appliedTenders'));
    }
}
