<?php

namespace App\Http\Controllers;

use App\Company;
use App\CompanyContactPerson;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyProfileController extends Controller
{
    public function myProfile(){
        $company = CompanyContactPerson::where('fkuserId', Auth::user()->id)->first()->fkcompanyId;
        $contactPersons = CompanyContactPerson::where('fkcompanyId', $company)->get();

        $profile = User::select('users.*','company_contact_person.*','company.*', 'status.*','company.name as companyName')
                       ->leftJoin('company_contact_person', 'company_contact_person.fkuserId', 'users.id')
                       ->leftJoin('company', 'company.companyId', 'company_contact_person.fkcompanyId')
                       ->leftJoin('status', 'status.statusId', 'company.fkstatusId')
                       ->where('users.id', Auth::user()->id)
                       ->first();

        return view('myPanel.myprofile')->with('contact_persons', $contactPersons)
                                        ->with('profile', $profile);
    }

    public function updateMyProfile(Request $r){
        $company = Company::findOrFail($r->id)->first();
        $company->name = $r->companyName;
        $company->address = $r->address;
        $company->save();

        return back();
    }
}
