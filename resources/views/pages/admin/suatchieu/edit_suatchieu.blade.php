@extends('pages.admin.admin_main')
@section('admin_content')
    <section id="main-content">
        <section class="wrapper">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Sửa Thể Loại
                    </header>
                    <div class="panel-body">
                        <?php
                        $message = Session::get('message');
                        if($message){
                            echo '<span class="text-success">'.$message.'</span>';
                            Session::put('message',null);
                        }
                        ?>
                        <div class="position-center">
                            <form role="form" action="{{URL::to('/admin/suatchieu/edit-suatchieu/'.$suatchieu_edit->sc_id)}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}


                                <div class="row form-group">


                                    <div class="col-md-3">
                                        <label class="control-label">Mã Suất Chiếu</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" name="masuatchieu" class="form-control" value="{{$suatchieu_edit->sc_id}}" disabled>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="control-label">Thời Gian Chiếu</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="time" name="thoigianchieu" class="form-control" id="thoigianchieu" value="{{$suatchieu_edit->sc_name}}">
                                    </div>

                                </div>
                                <div class="row form-group">
                                    <div class="col-md-3">
                                        <label class="control-label">Số Lượng</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control bfh-number"
                                               id="numberinput" name="soluong" value="{{$suatchieu_edit->soluong}}"
                                               data-min="1" data-max="36">
                                    </div>
                                    <div class="col-md-3">
                                        (Tối đa 36 suất)
                                    </div>


                                </div>
                                <div class="row form-group">
                                    <div class="col-md-3">

                                        <label class="control-label">Tên phim</label>
                                    </div>
                                    <div class="col-md-3">
                                        <select name="tenphim" class="form-control m-bot15">
                                            @foreach($phim as $ph)
                                                @if($ph->phim_id == $suatchieu_edit->phim_id)
                                                    <option value="{{$ph->phim_id}}" selected>{{$ph->phim_name}}</option>
                                                @else
                                                    <option value="{{$ph->phim_id}}">{{$ph->phim_name}}</option>
                                                @endif
                                            @endforeach


                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <label class="control-label">Tên Phòng</label>
                                    </div>
                                    <div class="col-md-3">
                                        <select name="tenphong" class="form-control m-bot15">
                                            @foreach($phong as $p)
                                                @if($p->phong_id == $suatchieu_edit->phong_id)
                                                    <option value="{{$p->phong_id}}" selected>{{$p->phong_name}}</option>
                                                @else
                                                    <option value="{{$p->phong_id}}">{{$p->phong_name}}</option>
                                                @endif
                                            @endforeach

                                        </select>
                                    </div>

                                </div>
                                <button type="submit" class="btn btn-info btn-block">Save</button>
                            </form>
                        </div>

                    </div>
                </section>

            </div>
        </section>

    </section>
@endsection






