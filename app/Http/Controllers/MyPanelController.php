<?php

namespace App\Http\Controllers;

use App\CompanyContactPerson;
use App\Tender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyPanelController extends Controller
{
    public function myAppliedTenders(){

//        $userCompanyId = CompanyContactPerson::where('fkuserId', Auth::user()->id)->fkcompanyId;

        dd(Auth::user());


        $appliedTenders = Tender::leftJoin('apply', 'apply.tender_tenderId', 'tender.tenderId')
            ->where('apply.company_companyId', )
            ->get();
        return view('myPanel.appliedtender');
    }
}
