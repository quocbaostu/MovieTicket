<div class="left-sidebar">
    <h2>Thể Loại</h2>
    <div class="panel-group category-products" id="accordian">
        @foreach($loai_sidebar as $tloai)
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"><a href="{{URL::to('boloc/sb/tl/'.$tloai->cat_id)}}">{{$tloai->cat_name}}</a></h4>
                </div>
            </div>
        @endforeach
    </div>

    <h2>Quốc gia</h2>
    <div class="panel-group category-products" id="accordian">
        @foreach($quocgia_sidebar as $qgia)
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"><a href="{{URL::to('boloc/sb/qg/'.$qgia->qg_id)}}">{{$qgia->qg_name}}</a></h4>
                </div>
            </div>
        @endforeach
    </div>
</div>

