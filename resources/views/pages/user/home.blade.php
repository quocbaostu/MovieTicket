@extends('pages.user.main')
@section('content')

    @include('layout.user.slide')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 padding-right">
                    <div class="category-tab"><!--category-tab-->
                        <div class="col-sm-12">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tshirt" data-toggle="tab">Phim đang chiếu</a></li>
                                <li><a href="#blazers" data-toggle="tab">Phim sắp chiếu</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-12">
                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="tshirt">
                                    <div class="row">
                                        @foreach ($phim_dc as $mv)
                                            <div class="col-sm-3">
                                                <div class="product-image-wrapper">
                                                    <div class="single-products">
                                                        <div class="productinfo text-center">
                                                            <img src="{{asset('public/admin/upload/'.$mv->img)}}" alt="" />
                                                            <h3>{{$mv->phim_name}}</h3>
                                                        </div>
                                                        <div class="product-overlay">
                                                            <div class="overlay-content">
                                                                <a href="{{URL::to('datve/'.$mv->phim_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-ticket"></i>Đặt vé</a>
                                                                <a href="{{URL::to('chitiet/'.$mv->phim_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-film"></i>Chi tiết</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div>
                                        <a href="{{URL::to('phimdc')}}" class="btn btn-primary">Xem thêm</a>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="blazers" >
                                    <div class="row">
                                        @foreach ($phim_sc as $mv)
                                            <div class="col-sm-3">
                                                <div class="product-image-wrapper">
                                                    <div class="single-products">
                                                        <div class="productinfo text-center">
                                                            <img src="{{asset('public/admin/upload/'.$mv->img)}}" alt="" />
                                                            <h3>{{$mv->phim_name}}</h3>
                                                        </div>
                                                        <div class="product-overlay">
                                                            <div class="overlay-content">
                                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-ticket"></i>Đặt vé</a>
                                                                <a href="{{URL::to('chitiet/'.$mv->phim_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-film"></i>Chi tiết</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="row">
                                        <a href="{{URL::to('phimsc')}}" class="btn btn-primary">Xem thêm</a>
                                    </div>

                                </div>
                                <div class="row pagination">
                                    &nbsp;
                                </div>
                            </div>
                        </div>
                    </div><!--/category-tab-->
                </div>
            </div>

            <div class="space"></div>

        </div>

    </section>

@endsection
