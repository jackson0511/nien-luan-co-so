<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Carbon\Carbon;

class TourTypeController extends Controller
{
    public function index(){
        $tourTypeList = DB::table('tourtype')->get();
        return view('admin.tourtype.tourtype', compact('tourTypeList'));
    }
    
    public function store(Request $request){
        try {
            $addType = DB::table('tourtype')->insert(
                [
                    'tour_type_name' => $request->typeName,
                    'created_at' => Carbon::now()
                ]
            );
            // dd('Them thanh cong');
            Session::flash('alert', 'Successfully added');
            return redirect()->route('tour-type-list');
        } catch (\Throwable $th) {
            //throw $th;
            Session::flash('alert-error', 'Adding process error');
            return redirect()->route('tour-type-list');
        }
    }

    public function edit($id)
    {
        $tourType = DB::table('tourtype')->where('tour_type_id', $id)->first();
        return view('admin.tourtype.edit', compact('tourType'));
    }

    public function update(Request $request, $id)
    {
        //Recheck -- did not pop the notification
        try {
            $updateTourType = DB::table('tourtype')->where('tour_type_id', $id)->update(['tour_type_name'=>$request->typeName]);
            Session::flash('alert-update', 'Update Successfully');
            return redirect()->route('tour-type-list');
        } catch (\Throwable $th) {
            //throw $th;
            if ($request->typeName == '') {
                # code...
                Session::flash('alert-update-error', 'Update process error');
                return redirect()->route('update-type');
            }
        }
    }

    public function destroy($id)
    {
        try {
            $deleteType = DB::table('tourtype') ->where('tour_type_id', $id)->delete();
            Session::flash('alert-del', 'Successfully Deleted');
            return redirect()->route('tour-type-list');
        } catch (\Throwable $th) {
            //throw $th;
            Session::flash('alert-del-error', 'Deleting Process Error');
            return redirect()->route('tour-type-list');
        }
        
    }

    public function search(Request $request){
        $keyWord = $request->get('keyWord');
        $search = DB::table('tourtype')->where('tour_type_name','like', '%'.$keyWord.'%')->get();
        // dd($timKiem);
        return view('admin.tourtype.search',compact('keyWord', 'search'));
    }
}
