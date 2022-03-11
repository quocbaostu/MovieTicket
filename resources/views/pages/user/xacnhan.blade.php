@extends('pages.user.main')
@section('content')

<section>
    <div class="container">
        <div class="row">
            <h2 class="title text-center">CHỌN GHẾ XEM</h2>
            <div class="col-sm-1"></div>
            <div class="col-sm-3 padding-left">
                <div class="product-details"><!--product-details-->
                    <h3>Thông tin phim:</h3>
                    <div class="row">
                        <div class="col-sm-11">
                            <div class="view-product">
                                <img src="{{asset('public/admin/upload/'.$phim->img)}}" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-11">
                            <div>
                                <h3>{{$phim->phim_name}}</h3>
                                <p><b>Thể loại: </b>{{$theloai->cat_name}}</p>
                                <p><b>Quốc gia: </b>{{$quocgia->qg_name}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="space2"></div>
                </div>
            </div>

            <div class="col-sm-1 vl"></div>
            <div class="col-sm-7">
                <div class="row">
                    <form action="{{URL::to('/hoadon/'.$suat->sc_id)}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row">
                            <div>
                                <div class="col-sm-10">
                                    <h2><i class="fa fa-ticket"></i> Suất: <a>{{$suat->sc_name}}</a></h2>

                                </div>
                            </div>
                        <div>
                            <div class="col-sm-10">
                                <h2><a> {{$phong->phong_name}}</a></h2>
                            </div>
                            <div class="col-sm-9 padding-right">
                                    <div class="panel-body">
                                        {{-- start-row--}}
                                        <div class="row form-group">
                                            <div class="col-md-3">
                                                <label class="control-label">Chọn Ghế</label>
                                            </div>
                                            <div class="col-md-9">
                                                </span>
                                                @php

                                                $ssA1 = Session::get('ssA1');
                                                $ssA2 = Session::get('ssA2');
                                                $ssA3 = Session::get('ssA3');
                                                $ssA4 = Session::get('ssA4');
                                                $ssA5 = Session::get('ssA5');
                                                $ssA6 = Session::get('ssA6');
                                                $ssA7 = Session::get('ssA7');
                                                $ssA8 = Session::get('ssA8');
                                                $ssA9 = Session::get('ssA9');
                                                $ssA10 = Session::get('ssA10');
                                                $ssA11 = Session::get('ssA11');
                                                $ssA12 = Session::get('ssA12');

                                                $ssB1 = Session::get('ssB1');
                                                $ssB2 = Session::get('ssB2');
                                                $ssB3 = Session::get('ssB3');
                                                $ssB4 = Session::get('ssB4');
                                                $ssB5 = Session::get('ssB5');
                                                $ssB6 = Session::get('ssB6');
                                                $ssB7 = Session::get('ssB7');
                                                $ssB8 = Session::get('ssB8');
                                                $ssB9 = Session::get('ssB9');
                                                $ssB10 = Session::get('ssB10');
                                                $ssB11 = Session::get('ssB11');
                                                $ssB12 = Session::get('ssB12');

                                                $ssC1 = Session::get('ssC1');
                                                $ssC2 = Session::get('ssC2');
                                                $ssC3 = Session::get('ssC3');
                                                $ssC4 = Session::get('ssC4');
                                                $ssC5 = Session::get('ssC5');
                                                $ssC6 = Session::get('ssC6');
                                                $ssC7 = Session::get('ssC7');
                                                $ssC8 = Session::get('ssC8');
                                                $ssC9 = Session::get('ssC9');
                                                $ssC10 = Session::get('ssC10');
                                                $ssC11 = Session::get('ssC11');
                                                $ssC12 = Session::get('ssC12');


                                                     $hang = array('A', 'B', 'C');
                                                     $cot = array(1,2,3,4,5,6,7,8,9,10,11,12);

                                                     foreach ($hang as $h)
                                                     {
                                                         echo "<div class='row'>";
                                                         foreach ($cot as $c)
                                                         {
                                                             echo "<div class='col-md-1'>";
                                                             echo "<label for='checkbox$h$c'><span>$h$c</span></label>";
                                                             echo "<br/>";

                                                             if(Session::get('ss'.$h.$c))
                                                             {
                                                                 echo "<input id='checkbox$h$c' type='checkbox' name='ghe[]' value='$h$c' checked disabled>";
                                                                 echo "</div>";
                                                             }   else {
                                                                 echo "<input id='checkbox$h$c' type='checkbox' name='ghe[]' value='$h$c' >";
                                                                 echo "</div>";
                                                             }

                                                         }
                                                         echo "</div>";
                                                     }
                                                @endphp
                                            </div>
                                        </div>
                                        {{--end-row--}}
                                        <?php
                                        $date = getdate();
                                        if(strlen($date['mon'])==1){
                                            $ngayht = $date['year']."-0".$date['mon']."-".$date['mday'];
                                        } else {
                                            $ngayht = $date['year']."-".$date['mon']."-".$date['mday'];
                                        }
                                        echo "<input type='text' name='ngaylaphd' value='$ngayht' hidden>";
                                        ?>

                                        <div class="form-group row">
                                            <div class="col-md-3">
                                            </div>
                                            <div class="col-md-9">
                                                <button type="submit" class="btn btn-primary btn-lg btn-block">Xác Nhận</button>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
