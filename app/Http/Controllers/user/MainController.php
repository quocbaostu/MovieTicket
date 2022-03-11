<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\ve;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Laravel\Socialite\Facades\Socialite;
use App\Models\phim;
use App\Models\theloai;
use App\Models\quocgia;
use App\Models\suatchieu;
use App\Models\phong;
use DB;
use Session;
use Illuminate\Support\Facades\Mail;


class MainController extends Controller
{
    public function getHome(){
        $phim_dc = phim::where('dm_id','pc')->paginate(4);
        $phim_sc = phim::where('dm_id','psc')->paginate(4);
        return view('pages.user.home', compact('phim_dc', 'phim_sc'));
    }

    public function getPhim_dc(){
        $phim_dc = phim::where('dm_id', 'pc')->get();
        return view('pages.user.phimdc', compact('phim_dc'));
    }

    public function getPhim_sc(){

        $phim_sc = phim::where('dm_id', 'psc')->get();
        return view('pages.user.phimsc', compact('phim_sc'));
    }

    public function getChitiet($maphim){

        $phim_ct = DB::table('phim')->where('phim_id', $maphim)->first();
        $theloai_ct = theloai::where('cat_id', $phim_ct->cat_id)->first();
        $quocgia_ct = quocgia::where('qg_id', $phim_ct->qg_id)->first();
        $phim_dc = phim::where('dm_id','pc')->get();
        $phim_sc = phim::where('dm_id','psc')->get();
        return view('pages.user.chitiet', compact('phim_ct', 'theloai_ct', 'quocgia_ct', 'phim_dc', 'phim_sc'));
    }

    public function getDatve($maloai){
        $this->AuthLogin();
        $phim_ct = phim::where('phim_id', $maloai)->first();
        $suat_ct = suatchieu::where('phim_id', $phim_ct->phim_id)->get();
        $phong_all = phong::all();
        $theloai_ct = theloai::where('cat_id', $phim_ct->cat_id)->first();
        $quocgia_ct = quocgia::where('qg_id', $phim_ct->qg_id)->first();
        return view('pages.user.datve', compact('phim_ct', 'theloai_ct', 'quocgia_ct', 'suat_ct', 'phong_all'));
    }

    public function getXacnhan($masuat){
        $this->AuthLogin();
        $suat = suatchieu::where('sc_id', $masuat)->first();
        $phim = phim::where('phim_id', $suat->phim_id)->first();
        $theloai = theloai::where('cat_id', $phim->cat_id)->first();
        $quocgia = quocgia::where('qg_id', $phim->qg_id)->first();
        $phong = phong::where('phong_id', $suat->phong_id)->first();
        return view('pages.user.xacnhan', compact('suat', 'phim', 'theloai', 'quocgia', 'phong'));
    }

    public function postHoadon(Request $request, $masuat){
        $this->AuthLogin();
        $suat = suatchieu::where('sc_id', $masuat)->first();
        $phim = phim::where('phim_id', $suat->phim_id)->first();
        $phong = phong::where('phong_id', $suat->phong_id)->first();
        $vedamua = $temp = 0;
        $a1='';
        $a2='';
        $a3='';
        $a4='';
        $a5='';
        $a6='';
        $a7='';
        $a8='';
        $a9='';
        $a10='';
        $a11='';
        $a12='';
        $b1='';
        $b2='';
        $b3='';
        $b4='';
        $b5='';
        $b6='';
        $b7='';
        $b8='';
        $b9='';
        $b10='';
        $b11='';
        $b12='';
        $c1='';
        $c2='';
        $c3='';
        $c4='';
        $c5='';
        $c6='';
        $c7='';
        $c8='';
        $c9='';
        $c10='';
        $c11='';
        $c12='';
        $ssA1='';
        $ssA2='';
        $ssA3='';
        $ssA4='';
        $ssA5='';
        $ssA6='';
        $ssA7='';
        $ssA8='';
        $ssA9='';
        $ssA10='';
        $ssA11='';
        $ssA12='';
        $ssB1='';
        $ssB2='';
        $ssB3='';
        $ssB4='';
        $ssB5='';
        $ssB6='';
        $ssB7='';
        $ssB8='';
        $ssB9='';
        $ssB10='';
        $ssB11='';
        $ssB12='';
        $ssC1='';
        $ssC2='';
        $ssC3='';
        $ssC4='';
        $ssC5='';
        $ssC6='';
        $ssC7='';
        $ssC8='';
        $ssC9='';
        $ssC10='';
        $ssC11='';
        $ssC12='';
        if(in_array('A1', $request->get('ghe'))){
            $vedamua++;
            $a1 = "A1";
            $ssA1 = "checked disabled";
        }else{
            $temp++;
        }
        if(in_array('A2', $request->get('ghe'))){
            $vedamua++;
            $a2 = "A2";
            $ssA2 = "checked disabled";
        }else{
            $temp++;
        }
        if(in_array('A3', $request->get('ghe'))){
            $vedamua++;
            $a3 = "A3";
            $ssA3 = "checked disabled";
        }else{
            $temp++;
        }
        if(in_array('A4', $request->get('ghe'))){
            $vedamua++;
            $a4 = "A4";
            $ssA4 = "checked disabled";
        }else{
            $temp++;
        }
        if(in_array('A5', $request->get('ghe'))){
            $vedamua++;
            $a5 = "A5";
            $ssA5 = "checked disabled";
        }else{
            $temp++;
        }
        if(in_array('A6', $request->get('ghe'))){
            $vedamua++;
            $a6 = "A6";
            $ssA6 = "checked disabled";
        }else{
            $temp++;
        }
        if(in_array('A7', $request->get('ghe'))){
            $vedamua++;
            $a7 = "A7";
            $ssA7 = "checked disabled";
        }else{
            $temp++;
        }
        if(in_array('A8', $request->get('ghe'))){
            $vedamua++;
            $a8 = "A8";
            $ssA8 = "checked disabled";
        }else{
            $temp++;
        }
        if(in_array('A9', $request->get('ghe'))){
            $vedamua++;
            $a9 = "A9";
            $ssA9 = "checked disabled";
        }else{
            $temp++;
        }
        if(in_array('A10', $request->get('ghe'))){
            $vedamua++;
            $a10 = "A10";
            $ssA10 = "checked disabled";
        }else{
            $temp++;
        }
        if(in_array('A11', $request->get('ghe'))){
            $vedamua++;
            $a11 = "A11";
            $ssA11 = "checked disabled";
        }else{
            $temp++;
        }
        if(in_array('A12', $request->get('ghe'))){
            $vedamua++;
            $a12 = "A12";
            $ssA12 = "checked disabled";
        }else{
            $temp++;
        }
        if(in_array('B1', $request->get('ghe'))){
            $vedamua++;
            $b1 = "B1";
            $ssB1 = "checked disabled";
        }else{
            $temp++;
        }
        if(in_array('B2', $request->get('ghe'))){
            $vedamua++;
            $b2 = "B2";
            $ssB2 = "checked disabled";
        }else{
            $temp++;
        }
        if(in_array('B3', $request->get('ghe'))){
            $vedamua++;
            $b3 = "B3";
            $ssB3 = "checked disabled";
        }else{
            $temp++;
        }
        if(in_array('B4', $request->get('ghe'))){
            $vedamua++;
            $b4 = "B4";
            $ssB4 = "checked disabled";
        }else{
            $temp++;
        }
        if(in_array('B5', $request->get('ghe'))){
            $vedamua++;
            $b5 = "B5";
            $ssB5 = "checked disabled";
        }else{
            $temp++;
        }
        if(in_array('B6', $request->get('ghe'))){
            $vedamua++;
            $b6 = "B6";
            $ssB6 = "checked disabled";
        }else{
            $temp++;
        }
        if(in_array('B7', $request->get('ghe'))){
            $vedamua++;
            $b7 = "B7";
            $ssB7 = "checked disabled";
        }else{
            $temp++;
        }
        if(in_array('B8', $request->get('ghe'))){
            $vedamua++;
            $b8 = "B8";
            $ssB8 = "checked disabled";
        }else{
            $temp++;
        }
        if(in_array('B9', $request->get('ghe'))){
            $vedamua++;
            $b9 = "B9";
            $ssB9 = "checked disabled";
        }else{
            $temp++;
        }
        if(in_array('B10', $request->get('ghe'))){
            $vedamua++;
            $b10 = "B10";
            $ssB10 = "checked disabled";
        }else{
            $temp++;
        }
        if(in_array('B11', $request->get('ghe'))){
            $vedamua++;
            $b11 = "B11";
            $ssB11 = "checked disabled";
        }else{
            $temp++;
        }
        if(in_array('B12', $request->get('ghe'))){
            $vedamua++;
            $b12 = "B12";
            $ssB12 = "checked disabled";
        }else{
            $temp++;
        }
        if(in_array('C1', $request->get('ghe'))){
            $vedamua++;
            $C1 = "C1";
            $ssC1 = "checked disabled";
        }else{
            $temp++;
        }
        if(in_array('C2', $request->get('ghe'))){
            $vedamua++;
            $c2 = "C2";
            $ssC2 = "checked disabled";
        }else{
            $temp++;
        }
        if(in_array('C3', $request->get('ghe'))){
            $vedamua++;
            $c3 = "C3";
            $ssC3 = "checked disabled";
        }else{
            $temp++;
        }
        if(in_array('C4', $request->get('ghe'))){
            $vedamua++;
            $c4 = "C4";
            $ssC4 = "checked disabled";
        }else{
            $temp++;
        }
        if(in_array('C5', $request->get('ghe'))){
            $vedamua++;
            $c5 = "C5";
            $ssC5 = "checked disabled";
        }else{
            $temp++;
        }
        if(in_array('C6', $request->get('ghe'))){
            $vedamua++;
            $c6 = "C6";
            $ssC6 = "checked disabled";
        }else{
            $temp++;
        }
        if(in_array('C7', $request->get('ghe'))){
            $vedamua++;
            $c7 = "C7";
            $ssC7 = "checked disabled";
        }else{
            $temp++;
        }
        if(in_array('C8', $request->get('ghe'))){
            $vedamua++;
            $c8 = "C8";
            $ssC8 = "checked disabled";
        }else{
            $temp++;
        }
        if(in_array('C9', $request->get('ghe'))){
            $vedamua++;
            $c9 = "C9";
            $ssC9 = "checked disabled";
        }else{
            $temp++;
        }
        if(in_array('C10', $request->get('ghe'))){
            $vedamua++;
            $c10 = "C10";
            $ssC10 = "checked disabled";
        }else{
            $temp++;
        }
        if(in_array('C11', $request->get('ghe'))){
            $vedamua++;
            $c11 = "C11";
            $ssC11 = "checked disabled";
        }else{
            $temp++;
        }
        if(in_array('C12', $request->get('ghe'))){
            $vedamua++;
            $c12 = "C12";
            $ssC12 = "checked disabled";
        }else{
            $temp++;
        }
        $soghedachon = $a1.$a2.$a3.$a4.$a5.$a6.$a7.$a8.$a9.$a10.$a11.$a12
            .$b1.$b2.$b3.$b4.$b5.$b6.$b7.$b8.$b9.$b10.$b11.$b12
            .$c1.$c2.$c3.$c4.$c5.$c6.$c7.$c8.$c9.$c10.$c11.$c12;

        $tongtien = $vedamua * 45000;
        $data_hoadonve = array();
        $data_hoadonve['dongia'] = $tongtien;
        $data_hoadonve['ngaylaphd'] = $request->ngaylaphd;
        $data_hoadonve['social_id'] = Session::get('social_id');
        DB::table('hoadon')->insert($data_hoadonve);

        $hoadonvuatao = DB::table('hoadon')->where('dongia',$tongtien)
            ->where('ngaylaphd',$request->ngaylaphd)
            ->where('social_id',Session::get('social_id'))->first();

        $data_velist = array();
        $data_velist['giave'] = 45000;
        $data_velist['soghe'] = $soghedachon;
        $data_velist['sophong'] = $phong->phong_id;
        $data_velist['sc_id'] = $suat->sc_id;
        $data_velist['hd_id'] = $hoadonvuatao->hd_id;
        DB::table('vephim')->insert($data_velist);

        $data_update_soluong_sc = array();
        $data_update_soluong_sc['soluong'] = $suat->soluong - $vedamua;
        DB::table('suatchieu')->where('sc_id',$suat->sc_id)->update($data_update_soluong_sc);


        Session::put('ssA1',$ssA1);
        Session::put('ssA2',$ssA2);
        Session::put('ssA3',$ssA3);
        Session::put('ssA4',$ssA4);
        Session::put('ssA5',$ssA5);
        Session::put('ssA6',$ssA6);
        Session::put('ssA7',$ssA7);
        Session::put('ssA8',$ssA8);
        Session::put('ssA9',$ssA9);
        Session::put('ssA10',$ssA10);
        Session::put('ssA11',$ssA11);
        Session::put('ssA12',$ssA12);

        Session::put('ssB1',$ssB1);
        Session::put('ssB2',$ssB2);
        Session::put('ssB3',$ssB3);
        Session::put('ssB4',$ssB4);
        Session::put('ssB5',$ssB5);
        Session::put('ssB6',$ssB6);
        Session::put('ssB7',$ssB7);
        Session::put('ssB8',$ssB8);
        Session::put('ssB9',$ssB9);
        Session::put('ssB10',$ssB10);
        Session::put('ssB11',$ssB11);
        Session::put('ssB12',$ssB12);

        Session::put('ssC1',$ssC1);
        Session::put('ssC2',$ssC2);
        Session::put('ssC3',$ssC3);
        Session::put('ssC4',$ssC4);
        Session::put('ssC5',$ssC5);
        Session::put('ssC6',$ssC6);
        Session::put('ssC7',$ssC7);
        Session::put('ssC8',$ssC8);
        Session::put('ssC9',$ssC9);
        Session::put('ssC10',$ssC10);
        Session::put('ssC11',$ssC11);
        Session::put('ssC12',$ssC12);


        return view('pages.user.hoadon', compact('suat', 'phim', 'phong', 'vedamua', 'tongtien','hoadonvuatao'));
    }
    public function login()
    {
        return view('pages.user.login');
    }
    public function AuthLogin()
    {
        $social_id = Session::get('social_id');
        if($social_id)
        {
            return Redirect::to('/');
        } else {
            return Redirect::to('')->send();
        }
    }

    public function login_google(){
        return Socialite::driver('google')->redirect();
    }
    public function callback_google(){
        $users = Socialite::driver('google')->stateless()->user();
        $authUser =  DB::table('social')->where('provider_user_id',$users->id)->first();

        if(!$authUser){
            $google_user_detail = array();
            $google_user_detail['provider_user_id'] =$users->id;
            $google_user_detail['provider']= 'google';
            $google_user_detail['social_name']= $users->name;
            $google_user_detail['social_email']= $users->email;
            DB::table('social')->insert($google_user_detail);
            Session::put('social_name',$users->name);
            Session::put('social_id',$users->id);
            return Redirect::to('/');
        } else {
            Session::put('social_name',$authUser->social_name);
            Session::put('social_id',$authUser->social_id);
            return Redirect::to('/');
        }
    }
    public function  logout()
    {
        $this->AuthLogin();
        Session::put('social_name',null);
        Session::put('social_id',null);
        return Redirect::to('/');
    }

    public function  sendMail($hd_id, $sc_id)
    {
        $this->AuthLogin();
        $hoadonemail = DB::table('hoadon')
            ->where('hd_id',$hd_id)
            ->where('social_id',Session::get('social_id'))->first();

        $suat = suatchieu::where('sc_id', $sc_id)->first();
        $phim = phim::where('phim_id', $suat->phim_id)->first();
        $phong = phong::where('phong_id', $suat->phong_id)->first();
        $ve = DB::table('vephim')->where('hd_id',$hd_id)->first();
        $getve = ve::where('hd_id',$hd_id)->get();
        $sove = $getve->count();
        $soghe = $ve->soghe;

        $authUser =  DB::table('social')->where('social_id',Session::get('social_id'))->first();
        //send mail
        $to_name = "Web Bán Vé MoviesTicket";
        $to_email = $authUser->social_email;//send to this email


        $data = array("mahoadon"=>$hoadonemail->hd_id,
            "suatname" => $suat->sc_name,
            "phimname"=> $phim->phim_name ,
            "phongname"=>$phong->phong_name,
            "sove" => $sove,
            "soghe" => $soghe,
            "dongia"=>$hoadonemail->dongia,
            ); //body of mail.blade.php

        Mail::send('pages.user.send_mail',$data,function($message) use ($to_name,$to_email){
            $message->to($to_email)->subject('Hoá đơn cho đơn hàng vừa thực hiện thanh toán.');//send this mail with subject
            $message->from($to_email,$to_name);//send from this mail
        });
        //--send mail
        return Redirect::to('/thankyou')->with('mes','');
    }

    public function thankYou()
    {
        $this->AuthLogin();
        return view('pages.user.thankyou');
    }
}
