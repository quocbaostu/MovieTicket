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
                            <form role="form" action="{{URL::to('/admin/quocgia/edit-quocgia/'.$quocgia_edit->qg_id)}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <label for="maqg">Mã Thể Loại</label>
                                    <input type="text" name="maquocgia" class="form-control" id="maqg" value="{{$quocgia_edit->qg_id}}" disabled>
                                </div>
                                <div class="form-group ">
                                    <label for="tenqg">Tên Thể Loại</label>
                                    <input type="text" name="tenquocgia" class="form-control" id="tenqg" value="{{$quocgia_edit->qg_name}}">
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






