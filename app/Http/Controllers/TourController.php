<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TourController extends Controller
{
    public function index(){
        $tour = DB::table('tour')->get();
        return view('admin.tour.tour', compact('tour'));
    }
}
