<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*Users*/
Route::get('/','user\MainController@getHome');
Route::get('/phimdc', 'user\MainController@getPhim_dc');
Route::get('/phimsc', 'user\MainController@getPhim_sc');
Route::get('/boloc', 'user\SearchController@getBoloc');
Route::get('/chitiet/{maphim}', 'user\MainController@getChitiet');
Route::post('/boloc/fr', 'user\SearchController@postBoloc');
Route::get('/boloc/sb/tl/{maloai}', 'user\SearchController@getBoloc_tl');
Route::get('/boloc/sb/qg/{maqg}', 'user\SearchController@getBoloc_qg');
Route::get('/search/', 'user\SearchController@getSearch');
Route::get('/datve/{maphim}', 'user\MainController@getDatve');
Route::get('/xacnhan/{masuat}', 'user\MainController@getXacnhan');
Route::post('/hoadon/{masuat}', 'user\MainController@postHoadon');

//Send-Mail
Route::get('/hoadon/send-mail/{hd_id}/{sc_id}','user\MainController@sendMail');
Route::get('/thankyou','user\MainController@thankYou');


//Login  google
Route::get('/login','user\MainController@login');
Route::get('/login-google','user\MainController@login_google');
Route::get('/google/callback','user\MainController@callback_google');
Route::get('/logout','user\MainController@logout');




/*Admin*/
Route::group(['prefix' => '/admin'], function(){
    Route::get('','admin\AdminController@index');

    Route::get('/admin-home','admin\AdminController@showHome');
    Route::post('/admin-home','admin\AdminController@loginHome');

    Route::get('/admin-home/logout','admin\AdminController@logout');



    Route::group(['prefix' => '/phim'], function (){
        Route::get('/list','admin\PhimController@getList');

        Route::get('/add-phim','admin\PhimController@getAddPhim');
        Route::post('/add-phim','admin\PhimController@postAddPhim');

        Route::get('/edit-phim/{phim_id}','admin\PhimController@getEditPhim');
        Route::post('/edit-phim/{phim_id}','admin\PhimController@postEditPhim');

        Route::get('/delete-phim/{phim_id}', 'admin\PhimController@getDeletePhim');
    });

    Route::group(['prefix' => '/theloai'], function (){
        Route::get('/list','admin\TheLoaiController@getList');

        Route::get('/add-theloai','admin\TheLoaiController@getAddTheLoai');
        Route::post('/add-theloai','admin\TheLoaiController@postAddTheLoai');

        Route::get('/edit-theloai/{cat_id}','admin\TheLoaiController@getEditTheLoai');
        Route::post('/edit-theloai/{cat_id}','admin\TheLoaiController@postEditTheLoai');

        Route::get('/delete-theloai/{cat_id}', 'admin\TheLoaiController@getDeleteTheLoai');
    });

    Route::group(['prefix' => '/quocgia'], function (){
        Route::get('/list','admin\QuocGiaController@getList');

        Route::get('/add-quocgia','admin\QuocGiaController@getAddQuocGia');
        Route::post('/add-quocgia','admin\QuocGiaController@postAddQuocGia');

        Route::get('/edit-quocgia/{qg_id}','admin\QuocGiaController@getEditQuocGia');
        Route::post('/edit-quocgia/{qg_id}','admin\QuocGiaController@postEditQuocGia');

        Route::get('/delete-quocgia/{qg_id}', 'admin\QuocGiaController@getDeleteQuocGia');
    });

    Route::group(['prefix' => '/phong'], function (){
        Route::get('/list','admin\PhongController@getList');

        Route::get('/add-phong','admin\PhongController@getAddPhong');
        Route::post('/add-phong','admin\PhongController@postAddPhong');

        Route::get('/edit-phong/{phong_id}','admin\PhongController@getEditPhong');
        Route::post('/edit-phong/{phong_id}','admin\PhongController@postEditPhong');

        Route::get('/delete-phong/{phong_id}', 'admin\PhongController@getDeletePhong');
    });

    Route::group(['prefix' => '/suatchieu'], function (){
        Route::get('/list','admin\SuatChieuController@getList');

        Route::get('/add-suatchieu','admin\SuatChieuController@getAddSuatChieu');
        Route::post('/add-suatchieu','admin\SuatChieuController@postAddSuatChieu');

        Route::get('/edit-suatchieu/{sc_id}','admin\SuatChieuController@getEditSuatChieu');
        Route::post('/edit-suatchieu/{sc_id}','admin\SuatChieuController@postEditSuatChieu');

        Route::get('/delete-suatchieu/{sc_id}', 'admin\SuatChieuController@getDeleteSuatChieu');
    });
});

