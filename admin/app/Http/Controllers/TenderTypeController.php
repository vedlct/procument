<?php

namespace App\Http\Controllers;

use App\TenderType;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Session;

class TenderTypeController extends Controller
{
    public function tenderTypes(){
        return view('TenderType.tenderTypeList');
    }

    public function getAlltenderType(){
        $tenderTypes = TenderType::all();
        $datatables = Datatables::of($tenderTypes);
        return $datatables->make(true);
    }

    public function insertTenderType(Request $r){
        $tenderType = new TenderType();
        $tenderType->tenderTypeName = $r->name;
        $tenderType->save();

        Session::flash('message', 'New Tender Type Added!');

        return back();
    }

    public function editTenderType(Request $r){
        $tenderType = TenderType::where('tenderTypeId', $r->id)->first();
        return view('TenderType.tenderTypeEdit')->with('tenderType', $tenderType);
    }

    public function updateTenderType(Request $r){
        $tenderType = TenderType::findOrFail($r->id);
        $tenderType->tenderTypeName = $r->name;
        $tenderType->save();

        Session::flash('message', 'Tender Type Updated!');

        return back();
    }

    public function deleteTenderType(Request $r){
        $tenderType = TenderType::where('tenderTypeId', $r->id)->first();
        $tenderType->delete();

        Session::flash('message', 'Tender Type Deleted!');

        return back();
    }
}
