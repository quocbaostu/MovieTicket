@extends('pages.user.main')
@section('content')

<section>
    <div class="container">
        <div class="row">
            <h2 class="title text-center">TRANG ĐẶT VÉ</h2>
            <div class="col-sm-1"></div>
            <div class="col-sm-3 padding-left">
                <div class="product-details"><!--product-details-->
                    <h3>Thông tin phim:</h3>
                    <div class="row">
                        <div class="col-sm-11">
                            <div class="view-product">
                                <img src="{{asset('public/admin/upload/'.$phim_ct->img)}}" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-11">
                            <div>
                                <h3>{{$phim_ct->phim_name}}</h3>
                                <p><b>Thể loại: </b>{{$theloai_ct->cat_name}}</p>
                                <p><b>Quốc gia: </b>{{$quocgia_ct->qg_name}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="space2"></div>
                </div>
            </div>
            <div class="col-sm-1 vl"></div>
            <div class="col-sm-7">
                <div class="row">
                    @foreach ($suat_ct as $s)
                    <div class="col-sm-4">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title"><b>Suất: </b>{{$s->sc_name}}</h5>
                                <h6 class="card-subtitle mb-2 text-muted"><b>Mã suất: </b>{{$s->sc_id}}</h6>
                                <p><b>Số lượng vé: </b>{{$s->soluong}}</p>
                                <p><b>Phòng: </b>
                                    @foreach ($phong_all as $phong)
                                        @if ($phong->phong_id == $s->phong_id)
                                            {{$phong->phong_name}}
                                        @endif
                                    @endforeach
                                </p>
                                <a href="{{URL::to('xacnhan/'.$s->sc_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-ticket"></i>Chọn suất</a>
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
