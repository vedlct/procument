<?php

namespace App\Http\Controllers;

use App\Company;
use App\ContactPerson;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Session;

class CompanyController extends Controller
{
    public function companies(){
        return view('Company.companyList');
    }

    public function getAllCompanies(){
        $companies = Company::leftJoin('status', 'status.statusId', 'company.fkstatusId')->get();
        $datatables = Datatables::of($companies);
        return $datatables->make(true);
    }

    public function insertCompany(Request $r){
        $company = new Company();
        $company->name = $r->name;
        $company->address = $r->address;
        $company->fkstatusId = 1;
        $company->save();

        Session::flash('message', 'New Company Added!');

        return back();
    }

    public function editCompany(Request $r){
        $company = Company::where('companyId', $r->id)->first();
        return view('Company.companyEdit')->with('company', $company);
    }

    public function updateCompany(Request $r){
        $company = Company::findOrFail($r->id);
        $company->name = $r->name;
        $company->address = $r->address;
        $company->fkstatusId = $r->status;
        $company->save();

        Session::flash('message', 'Company Updated!');

        return back();
    }

    public function deleteCompany(Request $r){
        $company = Company::where('companyId', $r->id)->first();
        $company->delete();

        Session::flash('message', 'Company Deleted!');

        return back();
    }

    public function contactPersonsList($id){
        $company = Company::findOrFail($id);

        return view('Company.companyContactPersons')->with('company', $company);
    }

    public function getAllContactPersonsList(Request $r){
        $persons = ContactPerson::where('fkcompanyId', $r->company_id)->get();

        $datatables = Datatables::of($persons);
        return $datatables->make(true);
    }

}
