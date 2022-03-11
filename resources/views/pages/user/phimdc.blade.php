@extends('pages.user.main')
@section('content')

<section>
    <div class="container">
        <h2 class="title text-center">PHIM ĐANG CHIẾu</h2>
        <div class="row">
            <div class="col-sm-12 padding-right">
                @foreach ($phim_dc as $mv)
                <div class=" col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{asset('public/admin/upload/'.$mv->img)}}" alt="" />
                                <h4>{{$mv->phim_name}}</h4>
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
        </div>
    </div>
</section>

@endsection
