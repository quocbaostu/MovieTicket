<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\phim;
use App\Models\phong;
use Illuminate\Http\Request;
use Session;
use App\Models\suatchieu;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class SuatChieuController extends Controller
{
    public function AuthLogin()
    {
        $admin_username = Session::get('admin_username');
        if($admin_username)
        {
            return Redirect::to('admin.admin-home');
        } else {
            return Redirect::to('admin')->send();
        }
    }
    public function getList()
    {
        $this->AuthLogin();

        $suatchieu_list = DB::table('suatchieu')->join('phim','phim.phim_id','=','suatchieu.phim_id')
            ->join('phong','phong.phong_id','=','suatchieu.phong_id')->get();
        return view('pages.admin.suatchieu.list', compact('suatchieu_list'));
    }

    public function getAddSuatChieu()
    {
        $this->AuthLogin();

        $maphim = phim::all();
        $maphong = phong::all();
        return view('pages.admin.suatchieu.add_suatchieu', compact('maphim','maphong'));
    }
    public function postAddSuatChieu(Request $request)
    {
        $this->AuthLogin();
        $suatchieu = new suatchieu();
        $suatchieu->sc_id = $request->masuatchieu;
        $suatchieu->sc_name = $request->tensuatchieu;
        $suatchieu->soluong = $request->soluong;
        $suatchieu->phim_id = $request->tenphim;
        $suatchieu->phong_id = $request->tenphong;
        $suatchieu->save();
        Session::put('message','Thêm suất chiếu thành công');
        return back();
    }

    public function getEditSuatChieu($sc_id)
    {
        $this->AuthLogin();
        $phim = phim::all();
        $phong = phong::all();
        $suatchieu_edit =  suatchieu::join('phim','phim.phim_id','=','suatchieu.phim_id')
            ->join('phong','phong.phong_id','=','suatchieu.phong_id')
            ->where('sc_id',$sc_id)->first();

        return view('pages.admin.suatchieu.edit_suatchieu', compact('suatchieu_edit','phim','phong'));
    }
    public function postEditSuatChieu(Request $request,$sc_id)
    {
        $this->AuthLogin();
        $data = array();
        $data['sc_name'] = $request->thoigianchieu;
        $data['soluong'] = $request->soluong;
        $data['phim_id'] = $request->tenphim;
        $data['phong_id'] = $request->tenphong;
        DB::table('suatchieu')->where('sc_id', $sc_id)->update($data);
        Session::put('message','Sửa suất chiếu thành công');
        return back();
    }
    public function getDeleteSuatChieu($sc_id)
    {
        $this->AuthLogin();
        $suatchieu_delete =  suatchieu::where('sc_id',$sc_id);
        $suatchieu_delete->delete();
        Session::put('message','Xoá suất chiếu thành công');
        return back();
    }
}
