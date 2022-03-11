<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\quocgia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Session;

class QuocGiaController extends Controller
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
        $quocgia_list = quocgia::all();
        return view('pages.admin.quocgia.list', compact('quocgia_list'));
    }
    public function getAddQuocGia()
    {
        $this->AuthLogin();
        return view('pages.admin.quocgia.add_quocgia');
    }
    public function postAddQuocGia(Request $request)
    {
        $this->AuthLogin();
        $quocgia = new quocgia();
        $quocgia->qg_id = $request->maquocgia;
        $quocgia->qg_name = $request->tenquocgia;

        $quocgia->save();
        Session::put('message','Thêm quốc gia thành công');
        return back();
    }

    public function getEditQuocGia($qg_id)
    {
        $this->AuthLogin();
        $quocgia_edit =  quocgia::where('qg_id',$qg_id)->first();
        return view('pages.admin.quocgia.edit_quocgia', compact('quocgia_edit'));
    }
    public function postEditQuocGia(Request $request,$qg_id)
    {
        $this->AuthLogin();
        $data = array();
        $data['qg_name'] = $request->tenquocgia;
        DB::table('quocgia')->where('qg_id', $qg_id)->update($data);
        Session::put('message','Sửa quốc gia thành công');
        return back();
    }
    public function getDeleteQuocGia($qg_id)
    {
        $this->AuthLogin();
        $quocgia_delete =  quocgia::where('qg_id',$qg_id);
        $quocgia_delete->delete();
        Session::put('message','Xoá quốc gia thành công');
        return back();
    }
}
