<!DOCTYPE html>
<head>
    <title>Admin Movies Ticket</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="{{asset('public/admin/css/bootstrap.min.css')}}" >
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="{{asset('public/admin/css/style.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{asset('public/admin/css/style-responsive.css')}}" rel="stylesheet"/>
    <!-- font CSS -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="{{asset('public/admin/css/font.css')}}" type="text/css"/>
    <link href="{{asset('public/admin/css/font-awesome.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('public/admin/css/morris.css')}}" type="text/css"/>
    <!-- Datatable -->
    <link rel="stylesheet" href="{{asset('public/admin/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/admin/css/responsive.bootstrap4.min.css')}}">
    <!--Form Helpers -->
    <link rel="stylesheet" media="screen" href="{{asset('public/admin/css/bootstrap-formhelpers.min.css')}}">
    <!-- //Datatable -->
    <!-- //font-awesome icons -->
    <script src="{{asset('public/admin/js/jquery2.0.3.min.js')}}"></script>
    <script src="{{asset('public/admin/js/raphael-min.js')}}"></script>
    <script src="{{asset('public/admin/js/morris.js')}}"></script>
    <script src="{{asset('public/admin/js/tinymce.min.js')}}"></script>


{{--    <script>tinymce.init({selector:''});</script>--}}
</head>
<body>
<section id="container">
    <!--header start-->
@include('layout.admin.header')

<!--header end-->
    <!--sidebar start-->
@include('layout.admin.sidebar')

<!--sidebar end-->
    <!--main content start-->


    @yield('admin_content')


    <!--main content end-->

    <!-- footer -->


    <!-- / footer -->
</section>
<script src="{{asset('public/admin/js/bootstrap.js')}}"></script>
<script src="{{asset('public/admin/js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('public/admin/js/scripts.js')}}"></script>
<script src="{{asset('public/admin/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('public/admin/js/jquery.nicescroll.js')}}"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="{{asset('public/admin/js/flot-chart/excanvas.min.js')}}"></script><![endif]-->
<script src="{{asset('public/admin/js/jquery.scrollTo.js')}}"></script>
<!-- morris JavaScript -->

<!-- Datatable js -->
<script type="text/javascript" src="{{asset('public/admin/js/responsive.bootstrap4.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/admin/js/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/admin/js/dataTables.bootstrap4.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/admin/js/dataTables.responsive.min.js')}}"></script>
<!--Form Helpers -->
<script type="text/javascript" src="{{asset('public/admin/js/bootstrap-formhelpers.min.js')}}"></script>
<script>
    $(function () {
        $('#phimtable').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
        $('#theloaitable').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
        $('#quocgiatable').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });

</script>


</body>
</html>


