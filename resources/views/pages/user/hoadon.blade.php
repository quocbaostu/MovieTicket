@extends('pages.user.main')
@section('content')

<section>
    <div class="container">
        <div class="row">
            <h2 class="title text-center">XÁC NHẬN HOÁ ĐƠN</h2>

            <div class="col-12">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="row p-5">
                            <div class="col-md-6 text-left">
                                <p class="text-muted">{{$hoadonvuatao->ngaylaphd}}</p>
                            </div>
                        </div>

                        <hr class="my-5">

                        <div class="row pb-5 p-5">
                            <div class="col-md-6">
                                <p class="font-weight-bold mb-4">Thông tin khách hàng</p>
                                <p class="mb-1"><?php
                                    $name = Session::get('social_name');
                                    if($name){
                                        echo $name;
                                    }
                                    ?></p>
                            </div>
                        </div>

                        <div class="row p-5">
                            <div class="col-md-12">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="border-0 text-uppercase small font-weight-bold">Tên phim</th>
                                            <th class="border-0 text-uppercase small font-weight-bold">Phòng</th>
                                            <th class="border-0 text-uppercase small font-weight-bold">Thời gian</th>
                                            <th class="border-0 text-uppercase small font-weight-bold">Số vé</th>
                                            <th class="border-0 text-uppercase small font-weight-bold">Đơn vị tính</th>
                                            <th class="border-0 text-uppercase small font-weight-bold">Giá vé</th>
                                            <th class="border-0 text-uppercase small font-weight-bold">Tổng cộng</th>
                                            <input type="checkbox" >
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{$phim->phim_name}}</td>
                                            <td>{{$phong->phong_name}}</td>
                                            <td>{{$suat->sc_name}}</td>
                                            <td>{{$vedamua}}</td>
                                            <td>VND</td>
                                            <td>45.000</td>
                                            <td>{{$tongtien}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="d-flex flex-row-reverse bg-dark text-white p-4">
                            <div class="py-3 px-5 text-right">
                                <div class="mb-2">Thành tiền</div>
                                <div class="h2 font-weight-light">{{$tongtien}} VND</div>

                                <div>
                                    <a  href="{{URL::to('/hoadon/send-mail/'.$hoadonvuatao->hd_id.'/'.$suat->sc_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-money-check"></i>Thanh toán</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
