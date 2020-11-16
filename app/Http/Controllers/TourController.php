<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TourController extends Controller
{
    public function index(){
        $tourList = DB::table('tour')->join('tourtype','tourtype.tour_type_id','tour.tour_type_id')->get();
        $tourTypeList = DB::table('tourtype')->get();
        return view('admin.tour.tour', compact('tourList','tourTypeList'));
    }
}
