<?php

namespace App\Http\Controllers;

use App\Company;
use App\CompanyContactPerson;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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


    public function addContactPerson(Request $r){

        $r->validate([
            'Password' => 'required|same:Confirm_Password',
            'email' => 'required|unique:users,email',
        ]);

        $user = new User();
        $user->name = $r->name;
        $user->email = $r->email;
        $user->fkusertypeId = 2;
        $user->password = Hash::make($r->Password);
        $user->created_at = date("Y-m-d H:i:s");;
        $user->updated_at = date("Y-m-d H:i:s");;
        $user->save();

        $contactPerson = new CompanyContactPerson();
        $contactPerson->name = $r->name;
        $contactPerson->gender = $r->gender;
        $contactPerson->nationalIdcard = $r->nid;
        $contactPerson->email = $r->email;
        $contactPerson->phone = $r->phone;
        $contactPerson->fkcompanyId = CompanyContactPerson::where('fkuserId', Auth::user()->id)->first()->fkcompanyId;
        $contactPerson->fkuserId = $user->id;
        $contactPerson->save();

        return back();
    }

}
