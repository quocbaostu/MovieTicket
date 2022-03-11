@extends('pages.admin.admin_main')
@section('admin_content')
    <section id="main-content">
        <section class="wrapper">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Sửa Phòng
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
                            <form role="form" action="{{URL::to('/admin/phong/edit-phong/'.$phong_edit->phong_id)}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <label for="maphong">Mã Phòng</label>
                                    <input type="text" name="maphong" class="form-control" id="maphong" value="{{$phong_edit->phong_id}}" disabled>
                                </div>
                                <div class="form-group ">
                                    <label for="tenphong">Tên Phòng</label>
                                    <input type="text" name="tenphong" class="form-control" id="tenphong" value="{{$phong_edit->phong_name}}">
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






