<?php

namespace App\Http\Controllers;

use App\Status;
use App\Zone;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Session;

class ZoneController extends Controller
{
    public function zones(){
        $status = Status::where('statusType', 'zone_status')->get();
        return view('Zone.zoneList')->with('status', $status);
    }

    public function getAllZones(){
        $zones = Zone::leftJoin('status', 'status.statusId', 'zone.fkstatusId')->get();
        $datatables = Datatables::of($zones);
        return $datatables->make(true);
    }

    public function insertZone(Request $r){
        $zone = new Zone();
        $zone->zoneName = $r->name;
        $zone->fkstatusId = $r->status;
        $zone->save();

        Session::flash('message', 'New Zone Added!');

        return back();
    }

    public function editZone(Request $r){
        $status = Status::where('statusType', 'zone_status')->get();
        $zone = Zone::where('idzone', $r->id)->first();

        return view('Zone.zoneEdit')->with('zone', $zone)
                                         ->with('status', $status);
    }

    public function updateZone(Request $r){
        $zone = Zone::findOrFail($r->id);
        $zone->zoneName = $r->name;
        $zone->fkstatusId = $r->status;
        $zone->save();

        Session::flash('message', 'Zone Updated!');

        return back();
    }

    public function deleteZone(Request $r){
        $zone = Zone::where('idzone', $r->id)->first();
        $zone->delete();

        Session::flash('message', 'Zone Deleted!');

        return back();
    }
}
