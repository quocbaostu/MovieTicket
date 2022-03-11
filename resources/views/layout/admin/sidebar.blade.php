<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Quản Lý Phim</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{URL::to('/admin/phim/add-phim')}}">Thêm Phim</a></li>
                        <li><a href="{{URL::to('/admin/phim/list')}}">Danh Sách Phim</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>Quản Lý Loại Phim</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{URL::to('/admin/theloai/add-theloai')}}">Thêm Thể Loại</a></li>
                        <li><a href="{{URL::to('/admin/theloai/list')}}">Danh Sách Thể Loại</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>Quản Lý Quốc Gia</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{URL::to('/admin/quocgia/add-quocgia')}}">Thêm Quốc Gia</a></li>
                        <li><a href="{{URL::to('/admin/quocgia/list')}}">Danh Sách Quốc Gia</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>Quản Lý Phòng</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{URL::to('/admin/phong/add-phong')}}">Thêm Phòng</a></li>
                        <li><a href="{{URL::to('/admin/phong/list')}}">Danh Sách Phòng</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>Quản Lý Suất chiếu</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{URL::to('/admin/suatchieu/add-suatchieu')}}">Thêm Suất Chiếu</a></li>
                        <li><a href="{{URL::to('/admin/suatchieu/list')}}">Danh Sách Suất chiếu</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- sidebar menu end-->
    </div>
</aside>
