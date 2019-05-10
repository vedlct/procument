<?php

namespace App\Http\Controllers;

use App\Tender;
use Illuminate\Http\Request;

class TenderController extends Controller
{
    public function getTenders(){
        $tenders=Tender::get();

//        return $tenders;
        return view('jobsearch');
    }
}
