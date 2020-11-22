<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Session;

class TourController extends Controller
{
    public function index(){
        $tourList = DB::table('tour')->join('tourtype','tourtype.tour_type_id','tour.tour_type_id')->join('promo', 'promo.promo_id','tour.promo_id')->get();
        $tourTypeList = DB::table('tourtype')->get();
        return view('admin.tour.tour', compact('tourList','tourTypeList'));
    }
    
    public function search(Request $request){
        $keyWord = $request->get('keyWord');
        $search = DB::table('tour')->where('tour_name','like','%'.$keyWord.'%')->get();
        return view('admin.tour.tour',compact('keyWord', 'search'));
    }
    
    public function create(){
        $tourTypeList = DB::table('tourtype')->get();
        $promo = DB::table('promo')->get();
        return view('admin.tour.add',compact('tourTypeList','promo'));
    }
    
    public function store(Request $request){
        
        $tourPhoto = $request->tourPhoto;
        if($tourPhoto != null){
            $photoName = $tourPhoto->getClientOriginalName();
            $tourPhoto->move('tourPhoto', $photoName);
            $addTour= DB::table('tour')->insert(
                [
                    'tour_name' => $request->tourName,
                    'tour_price' => $request->tourPrice,
                    'tour_status' => $request->tourStatus,
                    'tour_start_location' => $request->startLoc,
                    'tour_end_location' => $request->endLoc,
                    'tour_begin' => $request->timeBegin,
                    'tour_end' => $request->timeEnd,
                    'tour_picture' => $photoName,
                    'tour_type_id' => $request->tourType,
                    'promo_id' => $request->promo,
                    'created_at' => Carbon::now()
                    ]
                );
                return redirect()->route('tour-list');
            }else{
                $addTour = DB::table('tour')->insert(
                    [
                        'tour_name' => $request->tourName,
                        'tour_price' => $request->tourPrice,
                        'tour_status' => $request->tourStatus,
                        'tour_start_location' => $request->startLoc,
                        'tour_end_location' => $request->endLoc,
                        'tour_begin' => $request->timeBegin,
                        'tour_end' => $request->timeEnd,
                        'tour_type_id' => $request->tourType,
                        'promo_id' => $request->promo,
                        'created_at' => Carbon::now()
                        ]
                    ); 
                    return redirect()->route('tour-list');
                }
            }
            public function show($id){
                $tourList = DB::table('tour')->where('tour_id', $id)->join('tourtype','tourtype.tour_type_id','tour.tour_type_id')->join('promo', 'promo.promo_id','tour.promo_id')->first();
                $promo = DB::table('promo')->get();
                $tourTypeList = DB::table('tourtype')->get();
                return view('admin.tour.detail', compact('tourList','tourTypeList','promo'));
            }
            
            
            public function edit($id){
                $tourList = DB::table('tour')->where('tour_id', $id)->join('tourtype','tourtype.tour_type_id','tour.tour_type_id')->join('promo', 'promo.promo_id','tour.promo_id')->first();
                $promo = DB::table('promo')->get();
                $tourTypeList = DB::table('tourtype')->get();
                return view('admin.tour.edit', compact('tourList','tourTypeList','promo'));
            }
            
            public function update(Request $request, $id){
                //Recheck -- did not pop the notification
                try {
                    $updateTour = DB::table('tour')->where('tour_id', $id)->update(
                        [
                        'tour_name' => $request->tourName,
                        'tour_price' => $request->tourPrice,
                        'tour_status' => $request->tourStatus,
                        'tour_start_location' => $request->startLoc,
                        'tour_end_location' => $request->endLoc,
                        'tour_begin' => $request->timeBegin,
                        'tour_end' => $request->timeEnd,
                        'tour_picture' => $request->tourPhoto,
                        'tour_type_id' => $request->tourType,
                        'promo_id' => $request->promo,
                        // 'updated_at' => Carbon::now()
                            ]
                        );
                        Session::flash('alert-update', 'Update Successfully');
                        return redirect()->route('tour-list');
                    } catch (\Throwable $th) {
                        // throw $th;
                        if ($request->tourName == '') {
                            # code...
                            Session::flash('alert-update-error', 'Update process error');
                            return redirect()->route('update-tour');
                        // dd($updateTour);
                        }
                    }
                }

                public function destroy($id){
                    try {
                        $deleteTour = DB::table('tour') ->where('tour_id', $id)->delete();
                        Session::flash('alert-del', 'Successfully Deleted');
                        return redirect()->route('tour-list');
                    } catch (\Throwable $th) {
                        //throw $th;
                        Session::flash('alert-del-error', 'Deleting Process Error');
                        return redirect()->route('tour-list');
                    }
                }
            }
