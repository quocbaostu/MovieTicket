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
                        <table id="theloaitable" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>MÃ THỂ LOẠI</th>
                                <th>TÊN THỂ LOẠI</th>
                                <th>ACTION</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $stt = 1;
                            @endphp
                            @foreach($theloai_list as $tl)
                                <tr>
                                    <th  scope="row">{{$stt++}}</th>
                                    <th>{{$tl->cat_id}}</th>
                                    <td>{{$tl->cat_name}}</td>
                                    <td><a class="btn btn-warning" href="{{URL::to('admin/theloai/edit-theloai/'.$tl->cat_id)}}" role="button">Sửa</a>

                                        <a class="btn btn-danger" href="{{URL::to('admin/theloai/delete-theloai/'.$tl->cat_id)}}" role="button">Xoá</a>
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

