<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\phong;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Session;

class PhongController extends Controller
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
        $phong_list = phong::all();
        return view('pages.admin.phong.list', compact('phong_list'));
    }

    public function getAddphong()
    {
        $this->AuthLogin();
        return view('pages.admin.phong.add_phong');
    }
    public function postAddPhong(Request $request)
    {
        $this->AuthLogin();
        $phong = new phong();
        $phong->phong_id = $request->maphong;
        $phong->phong_name = $request->tenphong;

        $phong->save();
        Session::put('message','Thêm phòng thành công');
        return back();
    }

    public function getEditPhong($phong_id)
    {
        $this->AuthLogin();
        $phong_edit =  phong::where('phong_id',$phong_id)->first();
        return view('pages.admin.phong.edit_phong', compact('phong_edit'));
    }
    public function postEditPhong(Request $request,$phong_id)
    {
        $this->AuthLogin();
        $data = array();
        $data['phong_name'] = $request->tenphong;
        DB::table('phong')->where('phong_id', $phong_id)->update($data);
        Session::put('message','Sửa phòng thành công');
        return back();
    }
    public function getDeletePhong($phong_id)
    {
        $this->AuthLogin();
        $quocgia_delete =  phong::where('phong_id',$phong_id);
        $quocgia_delete->delete();
        Session::put('message','Xoá quốc gia thành công');
        return back();
    }
}
