@extends('pages.admin.admin_main')
@section('admin_content')
    <section id="main-content">
        <section class="wrapper">


            <!-- //tasks -->
            <div class="agileits-w3layouts-stats">
                <div class="col-md-12 stats-info stats-last widget-shadow">
                    <div class="stats-last-agile">
                        <form action="{{URL::to('/admin/phim/edit-phim/'.$phim_edit->phim_id)}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <header class="panel-heading">
                                Sửa Phim
                            </header>
                            <div class="panel-body">
                                <?php
                                $message = Session::get('message');
                                if($message){
                                    echo '<span class="text-success">'.$message.'</span>';
                                    Session::put('message',null);
                                }
                                ?>
                                {{-- start-row--}}
                                <div class="row form-group">
                                    <div class="col-md-2">
                                        <label class="control-label">Mã Phim</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" name="maphim" class="form-control" value="{{$phim_edit->phim_id}}" disabled>
                                    </div>

                                    <div class="col-md-2">
                                        <label class="control-label">Poster</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="file" name="poster" id="exampleInputFile">
                                        <img src="{{URL::to('public/admin/upload/'.$phim_edit->img)}}"  width="50" height="50">
                                        {{$phim_edit->img}}
                                        <p class="help-block">*.png or *.jpg here.</p>
                                    </div>
                                </div>
                                {{--end-row--}}

                                {{-- start-row--}}
                                <div class="row form-group">
                                    <div class="col-md-2">
                                        <label class="control-label">Tên Phim</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="text" name="tenphim" class="form-control" value="{{$phim_edit->phim_name}}">
                                    </div>
                                </div>
                                {{--end-row--}}

                                {{-- start-row--}}
                                <div class="row form-group">
                                    <div class="col-md-2">
                                        <label class="control-label">Thể Loại</label>
                                    </div>
                                    <div class="col-md-4">
                                        <select name="theloai" class="form-control m-bot15">
                                            @foreach($theloai as $tl)
                                                @if($tl->cat_id == $phim_edit->cat_id)
                                                    <option value="{{$tl->cat_id}}" selected>{{$tl->cat_name}}</option>
                                                @else
                                                    <option value="{{$tl->cat_id}}">{{$tl->cat_name}}</option>
                                                @endif
                                            @endforeach


                                        </select>
                                    </div>

                                    <div class="col-md-2">
                                        <label class="control-label">Quốc Gia</label>
                                    </div>
                                    <div class="col-md-4">
                                        <select name="quocgia" class="form-control m-bot15">
                                            @foreach($quocgia as $qg)
                                                @if($qg->qg_id == $phim_edit->qg_id)
                                                    <option value="{{$qg->qg_id}}" selected>{{$qg->qg_name}}</option>
                                                @else
                                                    <option value="{{$qg->qg_id}}">{{$qg->qg_name}}</option>
                                                @endif
                                            @endforeach



                                        </select>
                                    </div>
                                </div>
                                {{--end-row--}}

                                {{-- start-row--}}
                                <div class="row form-group">
                                    <div class="col-md-2">
                                        <label class="control-label">Ngày Bắt Đầu</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="date" name="ngaybd" class="form-control" value="{{$phim_edit->ngaybatdau}}">
                                    </div>

                                    <div class="col-md-2">
                                        <label class="control-label">Ngày Kết Thúc</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="date"  name="ngaykt" class="form-control" value="{{$phim_edit->ngayketthuc}}">
                                    </div>
                                </div>
                                {{--end-row--}}

                                {{-- start-row--}}
                                <div class="row form-group">
                                    <div class="col-md-2 ">
                                        <label class="control-label">Trailer</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" name="trailer" class="form-control" value="{{$phim_edit->trailer}}">
                                    </div>

                                    <div class="col-md-2">
                                        <label class="control-label">Trạng Thái</label>
                                    </div>
                                    <div class="col-md-4">
                                        <select name="trangthai" class="form-control m-bot15">
                                            @foreach($danhmuc as $dm)
                                                @if($dm->dm_id == $phim_edit->dm_id)
                                                    <option value="{{$dm->dm_id}}" selected>{{$dm->dm_name}}</option>
                                                @else
                                                    <option value="{{$dm->dm_id}}">{{$dm->dm_name}}</option>
                                                @endif
                                            @endforeach

                                        </select>
                                    </div>


                                </div>
                                {{--end-row--}}

                                {{-- start-row--}}
                                <div class="row form-group">
                                    <div class="col-md-2 ">
                                        <label class="control-label">Mô Tả</label>
                                    </div>
                                    <div class="col-md-10">
                                        <textarea name="mota" id="description"class="form-control ">{{$phim_edit->description}}</textarea>
                                    </div>
                                </div>
                                {{--end-row--}}
                                <div class="form-group row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">Save</button>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </section>

    </section>
@endsection




