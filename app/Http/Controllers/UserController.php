<?php

namespace App\Http\Controllers;

use App\Company;
use App\CompanyContactPerson;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;

class UserController extends Controller
{
    public function register(Request $r){


        $r->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:6|required_with:password_confirmation|same:password_confirmation',
            'companyName' => 'required',
            'companyAddress' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'nationalIdcard' => 'required',
        ]);

        $user=new User();
        $user->name=$r->name;
        $user->fkusertypeId=2;
        $user->email=$r->email;
        $user->password=Hash::make($r->password);
        $user->save();

        $company=new Company();
        $company->name=$r->companyName;
        $company->address=$r->companyAddress;
        $company->fkstatusId=1;
        $company->save();

        $companyContact=new CompanyContactPerson();
        $companyContact->name=$r->name;
        $companyContact->gender=$r->gender;
        $companyContact->nationalIdcard=$r->nationalIdcard;
        $companyContact->email=$r->email;
        $companyContact->phone=$r->phone;
        $companyContact->fkuserId=$user->id;
        $companyContact->fkcompanyId=$company->companyId;
        $companyContact->save();

        Session::flash('message', 'Register Successful, Please Login !');

        return back();
    }
}
