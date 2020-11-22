<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Carbon\Carbon;

class TransportController extends Controller
{
    public function index(){
        $transportList = DB::table('transport')->get();
        return view('admin.transport.transport',compact('transportList'));
    }

    public function store(Request $request){
        try {
            $addType = DB::table('transport')->insert(
                [
                    'transport_name' => $request->transName,
                    'transport_brand' => $request->transBrand,
                    'transport_color' => $request->transColor,
                    'created_at' => Carbon::now()
                ]
            );
            // dd('Them thanh cong');
            Session::flash('alert', 'Successfully added');
            return redirect()->route('transport-list');
        } catch (\Throwable $th) {
            //throw $th;
            Session::flash('alert-error', 'Adding process error');
            return redirect()->route('transport-list');
        }
    }

    public function edit($id){
        $transportList = DB::table('transport')->where('transport_id', $id)->first();
        return view('admin.transport.edit', compact('transportList'));
    }

    public function update(Request $request, $id){
        try {
            $updateTransport = DB::table('transport')->where('transport_id', $id)->update(
                [
                    'transport_name'=>$request->transName,
                    'transport_brand'=>$request->transBrand,
                    'transport_color'=>$request->transColor
                ]
            );
            Session::flash('alert-update', 'Update Successfully');
            return redirect()->route('transport-list');
        } catch (\Throwable $th) {
            //throw $th;
            if ($request->typeName == '') {
                # code...
                Session::flash('alert-update-error', 'Update process error');
                return redirect()->route('update-transport');
            }
        }
    }

    public function destroy($id){
        try {
            $deleteTransport = DB::table('transport') ->where('transport_id', $id)->delete();
            Session::flash('alert-del', 'Successfully Deleted');
            return redirect()->route('transport-list');
        } catch (\Throwable $th) {
            //throw $th;
            Session::flash('alert-del-error', 'Deleting Process Error');
            return redirect()->route('transport-list');
        }
    }

    public function search(Request $request){
        $keyWord = $request->get('keyWord');
        $search = DB::table('transport')->where('transport_name','like', '%'.$keyWord.'%')->get();
        return view('admin.transport.search',compact('keyWord', 'search'));
    }
}
