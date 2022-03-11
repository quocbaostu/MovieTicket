@extends('pages.user.main')
@section('content')

    @include('layout.user.slide')
    <section>
        <div class="container">
            <div class="row panel">
                <div class="col-md-3 panel-body">
                    @include('layout.user.sidebar')
                </div>
                <div class="panel-body col-md-9">
                    <h1>Cảm Ơn Bạn Đã Ủng Hộ Movies Ticket <i class="fa fa-heart"></i></h1>
                    <br>
                    <h4>Xem Hoá Đơn Tại Gmail của bạn</h4>
                    <br>
                    <a href="{{URL::to('boloc')}}" class="btn btn-default">Tìm Phim Khác</a>
                </div>
            </div>

            <div class="space"></div>

        </div>

    </section>

@endsection
