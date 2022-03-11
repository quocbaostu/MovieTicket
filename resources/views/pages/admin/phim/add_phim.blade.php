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
                        <form action="{{URL::to('/admin/phim/add-phim')}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <header class="panel-heading">
                                Thêm Phim
                            </header>
                            <div class="panel-body">

                                {{-- start-row--}}
                                <div class="row form-group">
                                    <div class="col-md-2">
                                        <label class="control-label">Mã Phim</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" name="maphim" class="form-control">
                                    </div>

                                    <div class="col-md-2">
                                        <label class="control-label">Poster</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="file" name="poster" id="exampleInputFile">
                                        <p class="help-block">*.png or *.jpg here.</p>
                                    </div>
                                </div>
                                {{--end-row--}}

                                {{-- start-row--}}
                                <div class="row form-group">
                                    <div class="col-md-2 form-group">
                                        <label class="control-label">Tên Phim</label>
                                    </div>
                                    <div class="col-md-10 form-group">
                                        <input type="text" name="tenphim" class="form-control">
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
                                            @foreach($maloai as $cat_id)
                                            <option value="{{$cat_id->cat_id}}">{{$cat_id->cat_name}}</option>
                                            @endforeach

                                        </select>
                                    </div>

                                    <div class="col-md-2">
                                        <label class="control-label">Quốc Gia</label>
                                    </div>
                                    <div class="col-md-4">
                                        <select name="quocgia" class="form-control m-bot15">
                                            @foreach($maquocgia as $qg_id)
                                                <option value="{{$qg_id->qg_id}}">{{$qg_id->qg_name}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                                {{--end-row--}}

                                {{-- start-row--}}
                                <div class="row form-group">
                                    <div class="col-md-2 form-group">
                                        <label class="control-label">Ngày Bắt Đầu</label>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <input type="date" name="ngaybd" class="form-control">
                                    </div>

                                    <div class="col-md-2 form-group">
                                        <label class="control-label">Ngày Kết Thúc</label>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <input type="date"  name="ngaykt" class="form-control">
                                    </div>
                                </div>
                                {{--end-row--}}

                                {{-- start-row--}}
                                <div class="row form-group">
                                    <div class="col-md-2 ">
                                        <label class="control-label">Trailer</label>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" name="trailer" class="form-control">
                                    </div>

                                    <div class="col-md-2">
                                        <label class="control-label">Trạng Thái</label>
                                    </div>
                                    <div class="col-md-4">
                                        <select name="trangthai" class="form-control m-bot15">
                                            @foreach($madanhmuc as $dm_id)
                                                <option value="{{$dm_id->dm_id}}">{{$dm_id->dm_name}}</option>
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
                                        <textarea name="mota" id="description"class="form-control "></textarea>
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




