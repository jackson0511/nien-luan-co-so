<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Carbon\Carbon;

class PromoController extends Controller
{
    public function index(){
        $promoList = DB::table('promo')->get();
        return view('admin.promotion.promotion', compact('promoList'));
    }

    public function store(Request $request){
        try{
            $addPromo = DB::table('promo')->insert
            (
                [
                    'promo_name' =>$request->promoName,
                    'promo_begin' =>$request->promoBegin,
                    'promo_end' =>$request->promoEnd,
                    'promo_detail' =>$request->promoDisc,
                    'created_at' =>Carbon::now()
                ]
            );
            Session::flash('alert','Successfully Added');
            return redirect()->route('promo-list');
        }catch(Throwable $th){
            Session::flash('alert-error', 'Adding process error');
            return redirect()->route('promo-list');
        }
    }

    public function show($id){
        $promoList = DB::table('promo')->where('promo_id',$id)->first();
        return view('admin.promotion.detail', compact('promoList'));
    }

    public function edit($id){
        $promoList = DB::table('promo')->where('promo_id',$id)->first();
        return view('admin.promotion.edit', compact('promoList'));
    }

    public function update(Request $request, $id){
        $updatePromo = DB::table('promo')->where('promo_id',$id)->update(
            [
                'promo_name' =>$request->promoName,
                'promo_begin' =>$request->promoBegin,
                'promo_end' =>$request->promoEnd,
                'promo_detail' =>$request->promoDisc
            ]
        );
        Session::flash('alert-update','Update Successfully');
        return redirect()->route('promo-list');
    }

    public function destroy($id){
        try {
            $deletePromo = DB::table('promo') ->where('promo_id', $id)->delete();
            Session::flash('alert-del', 'Successfully Deleted');
            return redirect()->route('promo-list');
        } catch (\Throwable $th) {
            //throw $th;
            Session::flash('alert-del-error', 'Deleting Process Error');
            return redirect()->route('promo-list');
        }
    }

    public function search(Request $request){
        $keyWord = $request->get('keyWord');
        $search = DB::table('promo')->where('promo_name','like', '%'.$keyWord.'%')->get();
        // dd($timKiem);
        return view('admin.promotion.search',compact('keyWord', 'search'));
    }
}
