<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Session;

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
    
    public function create(){
        $tourTypeList = DB::table('tourtype')->get();
        // $promo = DB::table('promo')->get();
        return view('admin.tour.add',compact('tourTypeList'));
    }
    
    public function store(Request $request){
        $tourAvatar = $request->tourAvatar;
        $tourPhoto = $request->tourPhoto;
        if($tourPhoto || $tourAvatar != null){
            $photoName = $tourPhoto->getClientOriginalName();
            $avatarName = $tourAvatar->getClientOriginalName();
            $tourPhoto->move('tourPhoto', $photoName);
            $tourAvatar->move('tourAvatar', $avatarName);
            $addTour= DB::table('tour')->insert(
                [
                    'tour_name' => $request->tourName,
                    'tour_price' => $request->tourPrice,
                    'tour_seat' => $request->tourSeat,
                    'tour_start_location' => $request->startLoc,
                    'tour_end_location' => $request->endLoc,
                    'tour_begin' => $request->timeBegin,
                    'tour_end' => $request->timeEnd,
                    'tour_picture' => $photoName,
                    'tour_avatar' => $avatarName,
                    'tour_description' => $request->tourProgram,
                    'tour_policies' => $request->tourPolicies,
                    'tour_type_id' => $request->tourType,
                    // 'promo_id' => $request->promo,
                    'created_at' => Carbon::now()
                    ]
                );
                return redirect()->route('tour-list');
            }else{
                $addTour = DB::table('tour')->insert(
                    [
                        'tour_name' => $request->tourName,
                        'tour_price' => $request->tourPrice,
                        'tour_seat' => $request->tourSeat,
                        'tour_start_location' => $request->startLoc,
                        'tour_end_location' => $request->endLoc,
                        'tour_begin' => $request->timeBegin,
                        'tour_end' => $request->timeEnd,
                        'tour_description' => $request->tourProgram,
                        'tour_policies' => $request->tourPolicies,
                        'tour_type_id' => $request->tourType,
                        // 'promo_id' => $request->promo,
                        'created_at' => Carbon::now()
                        ]
                    ); 
                    return redirect()->route('tour-list');
                }
            }
            public function show($id){
                $tourList = DB::table('tour')->where('tour_id', $id)->join('tourtype','tourtype.tour_type_id','tour.tour_type_id')->first();
                // $promo = DB::table('promo')->get();
                $tourTypeList = DB::table('tourtype')->get();
                return view('admin.tour.detail', compact('tourList','tourTypeList'));
            }
            
            
            public function edit($id){
                $tourList = DB::table('tour')->where('tour_id', $id)->first();
                // $promo = DB::table('promo')->get();
                $tourTypeList = DB::table('tourtype')->get();
                return view('admin.tour.edit', compact('tourList','tourTypeList'));
            }
            
            public function update(Request $request, $id){
                $tourAvatar = $request->tourAvatar;
                $tourPhoto = $request->tourPhoto;
                $photoName = $tourPhoto->getClientOriginalName();
                $avatarName = $tourAvatar->getClientOriginalName();
                $tourPhoto->move('tourPhoto', $photoName);
                $tourAvatar->move('tourAvatar', $avatarName);
                $updateTour = DB::table('tour')->where('tour_id', $id)->update(
                    [
                        'tour_name' => $request->tourName,
                        'tour_price' => $request->tourPrice,
                        'tour_seat' => $request->tourSeat,
                        'tour_start_location' => $request->startLoc,
                        'tour_end_location' => $request->endLoc,
                        'tour_begin' => $request->timeBegin,
                        'tour_end' => $request->timeEnd,
                        'tour_picture' => $tourPhoto,
                        'tour_avatar' => $tourAvatar,
                        'tour_description' => $request->tourProgram,
                        'tour_policies' => $request->tourPolicies,
                        'tour_type_id' => $request->tourType,
                        // 'promo_id' => $request->promo,
                        'updated_at' => Carbon::now()
                        ]
                    );
                    Session::flash('alert-update', 'Update Successfully');
                    return redirect()->route('edit-tour');
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
                
                // Client
                public function clientShowInfo(){
                    $tourList = DB::table('tour')->get();
                    // $tourLoc = DB::table('tour')->where('tour_start_location','tour_start_location')->get();
                    $sumTour = DB::table('tour')->where('tour_start_location','abc')->count();
                    // So sánh ngày
                    // Carbon::createFromDate($year, $month, $day);
                    // $formatted_dt1=Carbon::parse('tour_end');
                    // $formatted_dt2=Carbon::parse('tour_begin');
                    // $date_diff=$formatted_dt1->diffInDays($formatted_dt2);
                    return view('client.index', compact('tourList','sumTour'));
                }
            }
