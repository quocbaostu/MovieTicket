@extends('pages.user.main')
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">

                    @include('layout.user.sidebar')
                </div>

                <div class="col-sm-9 padding-right">
                    <form action="{{URL::to('/admin/phim/add-phim')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <header class="panel-heading">
                            Tiêu Đề Là Cái Gì Đó
                        </header>
                        <div class="panel-body">
                            {{-- start-row--}}
                            <div class="row form-group">
                                <div class="col-md-2">
                                    <label class="control-label">Anything</label>
                                </div>
                                <div class="col-md-10">
                                    <input type="text" name="maphim" class="form-control">
                                </div>
                            </div>
                            {{--end-row--}}

                            {{-- start-row--}}
                            <div class="row form-group">
                                <div class="col-md-2">
                                    <label class="control-label">Chọn Ghế</label>
                                </div>
                                <div class="col-md-10">
                                @php
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
                                            echo "<input id='checkbox$h$c' type='checkbox' name='ghe[]' value='$h$c' >";
                                            echo "</div>";
                                        }
                                        echo "</div>";
                                    }
                                @endphp
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
        </div>
    </section>

@endsection
