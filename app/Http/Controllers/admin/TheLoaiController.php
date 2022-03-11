<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\theloai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;
use Illuminate\Support\Facades\DB;

class TheLoaiController extends Controller
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
        $theloai_list = theloai::all();
        return view('pages.admin.theloai.list', compact('theloai_list'));
    }
    public function getAddTheLoai()
    {
        $this->AuthLogin();
        return view('pages.admin.theloai.add_theloai');
    }
    public function postAddTheLoai(Request $request)
    {
        $this->AuthLogin();
        $theloai = new theloai();
        $theloai->cat_id = $request->matheloai;
        $theloai->cat_name = $request->tentheloai;

        $theloai->save();
        Session::put('message','Thêm thể loại thành công');
        return back();
    }

    public function getEditTheLoai($cat_id)
    {
        $this->AuthLogin();
        $theloai_edit =  theloai::where('cat_id',$cat_id)->first();
        return view('pages.admin.theloai.edit_theloai', compact('theloai_edit'));
    }
    public function postEditTheLoai(Request $request,$cat_id)
    {
        $this->AuthLogin();
        $data = array();
        $data['cat_name'] = $request->tentheloai;
        DB::table('theloai')->where('cat_id', $cat_id)->update($data);
        Session::put('message','Sửa thể loại thành công');
         return back();
    }
    public function getDeleteTheLoai($cat_id)
    {
        $this->AuthLogin();
        $theloai_delete =  theloai::where('cat_id',$cat_id);
        $theloai_delete->delete();
        Session::put('message','Xoá thể loại thành công');
        return back();
    }


}
