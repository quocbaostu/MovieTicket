<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\danhmuc;
use App\Models\phim;
use App\Models\quocgia;
use App\Models\theloai;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;

class PhimController extends Controller
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
        $phim_list = DB::table('phim')->join('theloai','theloai.cat_id','=','phim.cat_id')
        ->join('quocgia','quocgia.qg_id','=','phim.qg_id')
        ->join('danhmuc','danhmuc.dm_id','=','phim.dm_id')->orderby('phim.phim_id','desc')->get();
        return view('pages.admin.phim.list', compact('phim_list'));
    }
    public function getAddPhim()
    {
        $this->AuthLogin();
        $maquocgia = quocgia::all();
        $maloai = theloai::all();
        $madanhmuc = danhmuc::all();
        return view('pages.admin.phim.add_phim', compact('maquocgia','maloai','madanhmuc'));
    }
    public function postAddPhim(Request $request)
    {
        $this->AuthLogin();
        $phim_inlist = phim::all()->where('phim_id',$request->maphim);
        if(!$phim_inlist)
        {
            Session::put('message','Mã phim này đã tồn tại !! Nhập mã phim mới');
            return back();
        } else {
            $phim = new phim();
            $phim->phim_id = $request->maphim;
            $phim->phim_name = $request->tenphim;

            $get_img = $request->file('poster');
            if($get_img)
            {
                $filename = $get_img->getClientOriginalName();
                $name_img = current(explode('.',$filename));
                $extention_img = $get_img->getClientOriginalExtension();

                $new_img = $name_img.rand(0,99).'.'.$extention_img;
                $get_img->move('public/admin/upload', $new_img);
                $phim->img = $new_img;
            }

            $phim->description = $request->mota;
            $phim->trailer = $request->trailer;
            $phim->ngaybatdau = $request->ngaybd;
            $phim->ngayketthuc = $request->ngaykt;
            $phim->qg_id = $request->quocgia;
            $phim->cat_id = $request->theloai;
            $phim->dm_id = $request->trangthai;
            $phim->save();
            Session::put('message','Thêm phim thành công');
            return back();
        }

    }
    public function  getEditPhim($phim_id)
    {
        $this->AuthLogin();
        $quocgia = quocgia::all();
        $theloai = theloai::all();
        $danhmuc = danhmuc::all();
        $phim_edit =  phim::join('quocgia','quocgia.qg_id','=','phim.qg_id')
            ->join('danhmuc','danhmuc.dm_id','=','phim.dm_id')
            ->join('theloai','theloai.cat_id','=','phim.cat_id')->where('phim_id',$phim_id)->first();

        return view('pages.admin.phim.edit_phim', compact('phim_edit','quocgia','theloai','danhmuc'));
    }
    public function postEditPhim(Request $request,$phim_id)
    {
//        $this->validate($request,[
//            ''=>'',
//            ''=>'',
//            ''=>''
//        ],[
//            ''=>'',
//            ''=>'',
//            ''=>''
//        ]);
        $this->AuthLogin();
        $data = array();
        $data['phim_name'] = $request->tenphim;

        $get_img = $request->file('poster');
        if($get_img)
        {
            $filename = $get_img->getClientOriginalName();
            $name_img = current(explode('.',$filename));
            $extention_img = $get_img->getClientOriginalExtension();

            $new_img = $name_img.rand(0,99).'.'.$extention_img;
            $get_img->move('public/admin/upload', $new_img);
            $data['img'] = $new_img;
        }
        $data['description'] = $request->mota;
        $data['trailer'] = $request->trailer;
        $data['ngaybatdau'] = $request->ngaybd;
        $data['ngayketthuc'] = $request->ngaykt;
        $data['qg_id'] = $request->quocgia;
        $data['cat_id'] = $request->theloai;
        $data['dm_id'] = $request->trangthai;
        DB::table('phim')->where('phim_id', $phim_id)->update($data);
        Session::put('message','Sửa phim thành công');
        return back();
    }
    public function getDeletePhim($phim_id)
    {
        $this->AuthLogin();
        $phim_delete =  phim::where('phim_id',$phim_id);

        $phim_delete->delete();
        Session::put('message','Xoá phim thành công');
        return back();
    }
}
