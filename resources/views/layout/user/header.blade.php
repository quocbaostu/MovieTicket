
<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i> 0835784337 </a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> tranhuynhquocbao232@gmail.com </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->

    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="{{URL::to('/')}}"><img src="{{('public/user/images/home/logo.jpg')}}" alt="" height="90px"/></a>
                        <a><b>MOVIE TICKETS</b></a>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-user"></i>Tài khoản</a></li>

                            @if(!Session::get('social_id'))
                                <li><a href="{{URL::to('/login')}}"><i class="fa fa-film"></i> Đăng Nhập</a></li>
                            @endif
                            @if(Session::get('social_id'))
                                <li class="dropdown">
                                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                    <span class="username">
                                     <?php
                                        $name = Session::get('social_name');
                                        if($name){
                                            echo $name;
                                        }
                                        ?>
                                    </span>
                                        <b class="caret"></b>
                                    </a>
                                    <ul class="dropdown-menu extended logout">
                                        <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                                        <li><a href="{{URL::to('/logout')}}"><i class="fa fa-key"></i> Log Out</a></li>
                                    </ul>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="{{URL::to('/')}}" class="active">Trang chủ</a></li>
                            <li class="dropdown"><a href="#">Tìm kiếm<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="{{URL::to('phimdc')}}">Phim đang chiếu</a></li>
                                    <li><a href="{{URL::to('phimsc')}}">Phim sắp chiếu</a></li>
                                    <li><a href="{{URL::to('boloc')}}">Bộ lọc</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">Thế giới phim<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="blog.html">Tin tức</a></li>
                                    <li><a href="blog-single.html">Đánh giá</a></li>
                                </ul>
                            </li>
                            <li><a href="contact-us.html">Khuyến mãi</a></li>
                            <li><a href="contact-us.html">Liên hệ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <form action="{{URL::to('search')}}" method="GET">
                        <div class="search_box pull-right">
                            <input type="text" placeholder="Tìm kiếm" name="timkiem"/>
                            <button type="submit">Tìm</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->
