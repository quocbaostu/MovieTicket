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
                        <table id="phimtable" class="table table-bordered table-striped">
                            <thead>

                            <tr>
                                <th>STT</th>
                                <th>NAME</th>
                                <th>IMG</th>
                                <th>NGAYBD</th>
                                <th>NGAYKT</th>
                                <th>QUOCGIA</th>
                                <th>THELOAI</th>
                                <th>STATUS</th>
                                <th>ACTION</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                            $stt = 1;
                            @endphp
                            @foreach($phim_list as $pl)
                                <tr>
                                    <th scope="row">{{$stt++}}</th>
                                    <td>{{$pl->phim_name}}</td>
                                    <td><img src="{{URL::to('public/admin/upload/'.$pl->img)}}"  width="50" height="50"></td>
                                    <td>{{$pl->ngaybatdau}}</td>
                                    <td>{{$pl->ngayketthuc}}</td>
                                    <td>{{$pl->qg_name}}</td>
                                    <td>{{$pl->cat_name}}</td>
                                    <td>{{$pl->dm_name}}</td>
                                    <td><a class="btn btn-warning" href="{{URL::to('admin/phim/edit-phim/'.$pl->phim_id)}}" role="button">Sửa</a>
                                        <a class="btn btn-danger" href="{{URL::to('admin/phim/delete-phim/'.$pl->phim_id)}}" role="button">Xoá</a>
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

