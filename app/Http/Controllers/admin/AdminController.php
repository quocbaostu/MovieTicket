<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
use App\Models\social; //sử dụng model Social
use Laravel\Socialite\Facades\Socialite;



session_start();

class AdminController extends Controller
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


    public function index()
    {
        return view('pages.admin.admin_login');
    }
    public function showHome()
    {
        $this->AuthLogin();
        $admin_list = admin::all();
        return view('pages.admin.admin_home',compact('admin_list'));
    }
    public function  loginHome(Request $request)
    {
        $admin_email =$request->email;
        $admin_password =  md5($request->password);
        $result = DB::table('admin')->where('username',$admin_email)->where('password',$admin_password)->first();
        if($result)
        {
            Session::put('admin_name',$result->name);
            Session::put('admin_username',$result->username);
            return Redirect::to('/admin/admin-home');
        } else {
            Session::put('message','username hoặc password không đúng !');
            return Redirect::to('/admin');
        }
    }
    public function  logout()
    {
        $this->AuthLogin();
        Session::put('admin_name',null);
        Session::put('admin_username',null);
        return Redirect::to('/admin');
    }

}
