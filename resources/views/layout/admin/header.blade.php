<header class="header fixed-top clearfix">
    <!--logo start-->
    <div class="brand">
        <a href="{{URL::to('/admin/admin-home')}}" class="logo">
            MOVIES AD
        </a>
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars"></div>
        </div>
    </div>
    <!--logo end-->
    <div class="nav notify-row" id="top_menu">
        <ul class="nav pull-left top-menu">
            <li>
                <h3 class="text-uppercase light-blue">  Welcome to Admin Page !!</h3>
            </li>

        </ul>
    </div>
    <div class="top-nav clearfix">
        <!--search & user info start-->
        <ul class="nav pull-right top-menu">
            <li>
                <input type="text" class="form-control search" placeholder=" Search">
            </li>
            <!-- user login dropdown start-->
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <img alt="admin-avatar" src="{{asset('public/admin/images/admin-avatar-default.png')}}">
                    <span class="username">
                     <?php
                        $admin_name = Session::get('admin_name');
                        if($admin_name){
                            echo $admin_name;
                        }
                     ?>
                    </span>
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu extended logout">
                    <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                    <li><a href="{{URL::to('/admin/admin-home/logout')}}"><i class="fa fa-key"></i> Log Out</a></li>
                </ul>
            </li>
            <!-- user login dropdown end -->

        </ul>
        <!--search & user info end-->
    </div>
</header>
