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

    public function search(Request $request){
        $keyWord = $request->get('keyWord');
        $search = DB::table('tour')->where('tour_name','like','%'.$keyWord.'%')->get();
        return view('admin.tour.tour',compact('keyWord', 'search'));
    }

    public function store(Request $request){
        try{
            $addTour = DB::table('tour')->insert
            (
                [
                    'tour_name' => $request->tourName,
                    'tour_price' => $request->tourPrice,
                    'tour_status' => $request->tourStatus,
                    'tour_start_location' => $request->startLoc,
                    'tour_end_location' => $request->endLoc,
                    'tour_begin' => $request->timeBegin,
                    'tour_end' => $request->timeEnd,
                    'tour_end' => $request->timeEnd,
                    'tour_picture' => $request->tourPic,
                    'created_at' => Carbon::now()
                ]
            );
            $request->session()->flash('alert', 'Successfully added');
            return redirect()->route('tour-list');
        } catch (\Throwable $th){
            $request->session()->flash('alert-error', 'Adding process error');
            return redirect()->route('tour-list');
        }
    }
}
