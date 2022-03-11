@extends('pages.admin.admin_main')
@section('admin_content')
    <section id="main-content">
        <section class="wrapper">
            <!-- //tasks -->
            <div class="agileits-w3layouts-stats">
                <div class="col-md-12 stats-info stats-last widget-shadow">
                    <div class="stats-last-agile">

                        <?php
                        $message = Session::get('message');
                        if($message){
                            echo '<span class="text-success">'.$message.'</span>';
                            Session::put('message',null);
                        }
                        ?>
                            <table id="suatchieutable" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>MÃ SUẤT CHIẾU</th>
                                    <th>THỜI GIAN CHIẾU</th>
                                    <th>SỐ LƯỢNG</th>
                                    <th>TÊN PHIM</th>
                                    <th>TÊN PHÒNG</th>
                                    <th>ACTION</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $stt = 1;
                                @endphp
                                @foreach($suatchieu_list as $sc)
                                    <tr>
                                        <th scope="row">{{$stt++}}</th>
                                        <th >{{$sc->sc_id}}</th>
                                        <td>{{$sc->sc_name}}</td>
                                        <td>{{$sc->soluong}}</td>
                                        <td>{{$sc->phim_name}}</td>
                                        <td>{{$sc->phong_name}}</td>
                                        <td><a class="btn btn-warning" href="{{URL::to('admin/suatchieu/edit-suatchieu/'.$sc->sc_id)}}" role="button">Sửa</a>
                                            <a class="btn btn-danger" href="{{URL::to('admin/suatchieu/delete-suatchieu/'.$sc->sc_id)}}" role="button">Xoá</a>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </section>

    </section>
@endsection



