@extends('pages.admin.admin_main')
@section('admin_content')
    <section id="main-content">
        <section class="wrapper">
            <!-- //market-->
{{--            <div class="market-updates">--}}
{{--                <div class="col-md-4 market-update-gd">--}}
{{--                    <div class="market-update-block clr-block-1">--}}
{{--                        <div class="col-md-4 market-update-right">--}}
{{--                            <i class="fa fa-users" ></i>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-8 market-update-left">--}}
{{--                            <h4>Users</h4>--}}
{{--                            <h3>1,250</h3>--}}
{{--                            <p>Other hand, we denounce</p>--}}
{{--                        </div>--}}
{{--                        <div class="clearfix"> </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4 market-update-gd">--}}
{{--                    <div class="market-update-block clr-block-3">--}}
{{--                        <div class="col-md-4 market-update-right">--}}
{{--                            <i class="fa fa-film"></i>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-8 market-update-left">--}}
{{--                            <h4>Movies</h4>--}}
{{--                            <h3>1,500</h3>--}}
{{--                            <p>Other hand, we denounce</p>--}}
{{--                        </div>--}}
{{--                        <div class="clearfix"> </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4 market-update-gd">--}}
{{--                    <div class="market-update-block clr-block-4">--}}
{{--                        <div class="col-md-4 market-update-right">--}}
{{--                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-8 market-update-left">--}}
{{--                            <h4>Orders</h4>--}}
{{--                            <h3>1,500</h3>--}}
{{--                            <p>Other hand, we denounce</p>--}}
{{--                        </div>--}}
{{--                        <div class="clearfix"> </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="clearfix"> </div>--}}
{{--            </div>--}}
            <!-- //market-->
            <div class="row">
                <div class="panel-body">
                    <div class="col-md-12 w3ls-graph">
                        <!--agileinfo-grap-->
                        <div class="agileinfo-grap">
                            <div class="agileits-box">
                                <header class="agileits-box-header clearfix">
                                    <h3>DANH SÁCH THÀNH VIÊN NHÓM 7</h3>
                                    <div class="toolbar">


                                    </div>
                                </header>
                                <div class="agileits-box-body clearfix">
                                    <div id="hero-area"></div>
                                </div>
                            </div>
                        </div>
                        <!--//agileinfo-grap-->

                    </div>
                </div>
            </div>
            <!-- //tasks -->
            <div class="agileits-w3layouts-stats">
                <div class="col-md-12 stats-info stats-last widget-shadow">
                    <div class="stats-last-agile">
                        <table class="table stats-table ">
                            <thead>
                            <tr>
                                <th>USERNAME</th>
                                <th>NAME</th>
                                <th>EMAIL</th>
                                <th>MSSV</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($admin_list as $adl)
                            <tr>
                                <th scope="row">{{$adl->username}}</th>
                                <td>{{$adl->name}}</td>
                                <td><span>{{$adl->email}}</span></td>
                                <td>{{$adl->mssv}}</td>
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

