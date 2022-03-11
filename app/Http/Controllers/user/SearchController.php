<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\phim;
use App\Models\quocgia;
use App\Models\theloai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Collection;

class SearchController extends Controller
{
    public function getBoloc(){
        $theloai = theloai::all();
        $quocgia = quocgia::all();
        $phim_all = phim::paginate(6,['*'],'pag');

        return view('pages.user.boloc_1', compact('theloai', 'quocgia', 'phim_all'));
    }

    public function postBoloc(Request $request){
        $theloai = theloai::all();
        $quocgia = quocgia::all();
        if($request->select_theloai && $request->select_quocgia == 0){
            $phim_form =  DB::table('phim')->where('cat_id', $request->select_theloai)->get();
        }
         else if($request->select_quocgia && $request->select_theloai == 0){
            $phim_form =  DB::table('phim')->where('qg_id',  $request->select_quocgia)->get();
        }
        else if($request->select_theloai &&  $request->select_quocgia){
            $phim_form =  DB::table('phim')->where('qg_id',  $request->select_quocgia)
            ->where('cat_id',  $request->select_theloai)->get();
        }else{
            $phim_form = phim::all();
        }

        $a = theloai::where('cat_id', $request->select_theloai)->first();
        $b = quocgia::where('qg_id', $request->select_quocgia)->first();

        return view('pages.user.boloc_2', compact('theloai', 'quocgia','phim_form', 'a', 'b'));
    }

    public function getBoloc_tl($maloai){
        $theloai = theloai::all();
        $quocgia = quocgia::all();
        $a = DB::table('theloai')->where('cat_id', $maloai)->first();
        $b = null;
        $sidebar_tl = DB::table('phim')->where('cat_id', $maloai)->get();
        $sidebar_qg = null;
        $phim_form = null;
        return view('pages.user.boloc_3', compact('theloai', 'quocgia',
        'sidebar_tl', 'sidebar_qg', 'a', 'b'));
    }

    public function getBoloc_qg($maqg){
        $theloai = theloai::all();
        $quocgia = quocgia::all();
        $a = null;
        $b = DB::table('quocgia')->where('qg_id', $maqg)->first();
        $sidebar_tl = null;
        $sidebar_qg = DB::table('phim')->where('qg_id', $maqg)->get();
        $phim_form = null;
        return view('pages.user.boloc_3', compact('theloai', 'quocgia',
        'sidebar_tl', 'sidebar_qg', 'b', 'a'));
    }


    public function getSearch(Request $request){
        $theloai = theloai::all();
        $quocgia = quocgia::all();
        $phim_search = phim::where('phim_name','like',"%{$request->timkiem}%")->get();
        return view('pages.user.boloc_4', compact('theloai', 'quocgia', 'phim_search'));
    }

}
