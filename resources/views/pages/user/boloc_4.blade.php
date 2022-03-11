@extends('pages.user.main')
@section('content')
    <section>
        <div class="container">
            <h2 class="title text-center">BỘ LỌC PHIM</h2>
            <div class="row">
                <form action="{{URL::to('boloc/fr')}}" name="form" method="POST">
                    @csrf
                    <div class="col-md-3"></div>
                    <div class="col-md-9">
                        <div class="col-md-4">
                            <select class="form-select" aria-label="Default select example" name="select_theloai">
                                <option value="0" selected>Chọn thể loại...</option>
                                @foreach ($theloai as $tl)
                                    <option value="{{$tl->cat_id}}">{{$tl->cat_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <select class="form-select" aria-label="Default select example" name="select_quocgia">
                                <option value="0" selected>Chọn quốc gia...</option>
                                @foreach ($quocgia as $qg)
                                    <option value="{{$qg->qg_id}}">{{$qg->qg_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn">Tìm kiếm</button>
                    </div>
                </form>
            </div>
            <div class="space"></div>
            <div class="row">
                <div class="col-sm-3">
                    @include('layout.user.sidebar')
                </div>
                <div class="col-sm-9 padding-right">
                    <div class="features_items">
                        @foreach ($phim_search as $mv)
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="{{asset('public/admin/upload/'.$mv->img)}}" alt="" />
                                            <h3>{{$mv->phim_name}}</h3>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <a href="{{URL::to('datve/'.$mv->phim_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-ticket"></i>Đặt vé</a>
                                                <a href="{{URL::to('chitiet/'.$mv->phim_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-flim"></i>Chi tiết</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
