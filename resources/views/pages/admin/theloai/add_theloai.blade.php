@extends('pages.admin.admin_main')
@section('admin_content')
    <section id="main-content">
        <section class="wrapper">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Thêm Thể Loại
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
                            <form role="form" action="{{URL::to('/admin/theloai/add-theloai')}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <label for="matl">Mã Thể Loại</label>
                                    <input type="text" name="matheloai" class="form-control" id="matl">
                                </div>
                                <div class="form-group ">
                                    <label for="tentl">Tên Thể Loại</label>
                                    <input type="text" name="tentheloai" class="form-control" id="tentl">
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






