<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Quản lý website Hoa Thịnh</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('manager/')}}/css/bootstrap.min.css">
    <!-- font awesome CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('manager/')}}/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('manager/')}}/css/owl.carousel.css">
    <link rel="stylesheet" href="{{asset('manager/')}}/css/owl.theme.css">
    <link rel="stylesheet" href="{{asset('manager/')}}/css/owl.transitions.css">
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('manager/')}}/css/meanmenu/meanmenu.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('manager/')}}/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('manager/')}}/css/normalize.css">
    <!-- wave CSS
        ============================================ -->
    <link rel="stylesheet" href="{{asset('manager/')}}/css/wave/waves.min.css">
    <link rel="stylesheet" href="{{asset('manager/')}}/css/wave/button.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('manager/')}}/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- Notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('manager/')}}/css/notika-custom-icon.css">
    <!-- Data Table JS
		============================================ -->
    <link rel="stylesheet" href="{{asset('manager/')}}/css/jquery.dataTables.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('manager/')}}/css/main.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('manager/')}}/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('manager/')}}/css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <!-- modernizr JS
		============================================ -->
    <script src="{{asset('manager/')}}/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!-- Start Header Top Area -->
<div class="header-top-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="logo-area">
                    <a href="{{route('manager::dashboard')}}"><img src="{{asset('manager/')}}/img/logo/logo.png" alt="" /></a>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="header-top-menu">
                    <ul class="nav navbar-nav notika-top-nav">
                        <li class="nav-item dropdown">
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-search"></i></span></a>
                            <div role="menu" class="dropdown-menu search-dd animated flipInX">
                                <div class="search-input">
                                    <i class="notika-icon notika-left-arrow"></i>
                                    <input type="text" />
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Header Top Area -->
<!-- Mobile Menu start -->
<div class="mobile-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul class="mobile-menu-nav">
                            <li><a data-toggle="collapse" data-target="#Charts" href="#">Home</a>
                                <ul class="collapse dropdown-header-top">
                                    <li><a href="index.html">Dashboard One</a></li>
                                    <li><a href="index-2.html">Dashboard Two</a></li>
                                    <li><a href="index-3.html">Dashboard Three</a></li>
                                    <li><a href="index-4.html">Dashboard Four</a></li>
                                    <li><a href="analytics.html">Analytics</a></li>
                                    <li><a href="widgets.html">Widgets</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mobile Menu end -->
<!-- Main Menu area start-->
<div class="main-menu-area mg-tb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                    <li><a href="{{route('manager::dashboard')}}"><i class="notika-icon notika-house"></i> Quản lý Slide</a>
                    </li>
                    <li><a href="{{route('manager::category')}}"><i class="notika-icon notika-edit"></i> Quản lý Danh mục</a>
                    </li>
                    <li><a href="{{route('manager::product')}}"><i class="notika-icon notika-edit"></i> Quản lý sản phẩm</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Main Menu area End-->
@yield('content')
<!-- Start Footer area-->
<div class="footer-copyright-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="footer-copy-right">
                    <p>Copyright © {{\Carbon\Carbon::now()->year}}
                        . All rights reserved. Template by <a href="mailto:nhatquang.vu@gmail.com">nhatquang.vu@gmail.com</a>.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Footer area-->
<!-- jquery
    ============================================ -->
<script src="{{asset('manager/')}}/js/vendor/jquery-1.12.4.min.js"></script>
<!-- bootstrap JS
    ============================================ -->
<script src="{{asset('manager/')}}/js/bootstrap.min.js"></script>
<!-- wow JS
    ============================================ -->
<script src="{{asset('manager/')}}/js/wow.min.js"></script>
<!-- price-slider JS
    ============================================ -->
<script src="{{asset('manager/')}}/js/jquery-price-slider.js"></script>
<!-- owl.carousel JS
    ============================================ -->
<script src="{{asset('manager/')}}/js/owl.carousel.min.js"></script>
<!-- scrollUp JS
    ============================================ -->
<script src="{{asset('manager/')}}/js/jquery.scrollUp.min.js"></script>
<!-- meanmenu JS
    ============================================ -->
<script src="{{asset('manager/')}}/js/meanmenu/jquery.meanmenu.js"></script>
<!-- counterup JS
    ============================================ -->
<script src="{{asset('manager/')}}/js/counterup/jquery.counterup.min.js"></script>
<script src="{{asset('manager/')}}/js/counterup/waypoints.min.js"></script>
<script src="{{asset('manager/')}}/js/counterup/counterup-active.js"></script>
<!-- mCustomScrollbar JS
    ============================================ -->
<script src="{{asset('manager/')}}/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<!-- sparkline JS
    ============================================ -->
<script src="{{asset('manager/')}}/js/sparkline/jquery.sparkline.min.js"></script>
<script src="{{asset('manager/')}}/js/sparkline/sparkline-active.js"></script>
<!-- flot JS
    ============================================ -->
<script src="{{asset('manager/')}}/js/flot/jquery.flot.js"></script>
<script src="{{asset('manager/')}}/js/flot/jquery.flot.resize.js"></script>
<script src="{{asset('manager/')}}/js/flot/flot-active.js"></script>
<!-- knob JS
    ============================================ -->
<script src="{{asset('manager/')}}/js/knob/jquery.knob.js"></script>
<script src="{{asset('manager/')}}/js/knob/jquery.appear.js"></script>
<script src="{{asset('manager/')}}/js/knob/knob-active.js"></script>
<!--  Chat JS
    ============================================ -->
<script src="{{asset('manager/')}}/js/chat/jquery.chat.js"></script>
<!--  todo JS
    ============================================ -->
<script src="{{asset('manager/')}}/js/todo/jquery.todo.js"></script>
<!--  wave JS
    ============================================ -->
<script src="{{asset('manager/')}}/js/wave/waves.min.js"></script>
<script src="{{asset('manager/')}}/js/wave/wave-active.js"></script>
<!-- plugins JS
    ============================================ -->
<script src="{{asset('manager/')}}/js/plugins.js"></script>
<!-- Data Table JS
    ============================================ -->
<script src="{{asset('manager/')}}/js/data-table/jquery.dataTables.min.js"></script>
<script src="{{asset('manager/')}}/js/data-table/data-table-act.js"></script>
<!-- main JS
    ============================================ -->
<script src="{{asset('manager/')}}/js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<script>
    $('.btn-confirm').confirm({
        title: 'Xác nhận',
        content: 'Bạn có chắc chắn thực hiện thao tác này không?'
    });
</script>
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>

<script>
    var options = {
        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
    };
    CKEDITOR.replace('my-editor', options);

</script>
<!-- tawk chat JS
    ============================================ -->
</body>

</html>