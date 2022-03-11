@extends('pages.user.main')
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <h2 class="title text-center">THÔNG TIN CHI TIẾT</h2>
                <div class="col-sm-3">
                    @include('layout.user.sidebar')
                </div>
                <div class="col-sm-9 padding-right">
                    <div class="product-details"><!--product-details-->
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="view-product">
                                    <img src="{{asset('public/admin/upload/'.$phim_ct->img)}}" alt="" />
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div>
                                    <h1>{{$phim_ct->phim_name}}</h1>
                                    <p><b>Thể loại: </b>{{$theloai_ct->cat_name}}</p>
                                    <p><b>Quốc gia: </b>{{$quocgia_ct->qg_name}}</p>
                                    <b>Đánh giá: </b><div id="stars" class="starrr lead"></div>
                                </div>
                                <div>
                                    <a href="{{URL::to('datve/'.$phim_ct->phim_id)}}" class="btn btn-primary btn-lg fa fa-ticket"> ĐẶT VÉ NGAY</a>
                                </div>
                            </div>
                        </div>
                        <div class="space2"></div>
                        <div>
                            <div class="hl"></div>
                            <h3>Tóm tắt nội dung:</h3>
                           <p>{{$phim_ct->description}}</p>




                        </div>
                    </div>

                    <div class="category-tab shop-details-tab"><!--category-tab-->
                        <div class="col-sm-12">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#details" data-toggle="tab">Phim đang chiếu</a></li>
                                <li><a href="#companyprofile" data-toggle="tab">Phim sắp chiếu</a></li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="details" >
                                @foreach ($phim_dc as $mv)
                                    <div class="col-sm-3">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="{{asset('public/admin/upload/'.$mv->img)}}" alt="" />
                                                    <h4>{{$mv->phim_name}}</h4>
                                                    <a href="{{URL::to('chitiet/'.$mv->phim_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-film"></i>Chi tiết</a>
                                                    <a href="{{URL::to('datve/'.$mv->phim_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-ticket"></i>Đặt vé</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="tab-pane fade" id="companyprofile" >
                                @foreach ($phim_sc as $mv)
                                    <div class="col-sm-3">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="{{asset('public/admin/upload/'.$mv->img)}}" alt="" />
                                                    <h4>{{$mv->phim_name}}</h4>
                                                    <a href="{{URL::to('chitiet/'.$mv->phim_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-film"></i>Chi tiết</a>
                                                    <a href="{{URL::to('datve/'.$mv->phim_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-ticket"></i>Đặt vé</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div><!--/category-tab-->
                </div>
            </div>
        </div>
    </section>
@endsection
