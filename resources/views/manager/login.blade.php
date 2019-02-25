<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Vật liệu xây dựng hoa thịnh</title>
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
    <link rel="stylesheet" href="{{asset('/')}}/manager/css/bootstrap.min.css">
    <!-- font awesome CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('/')}}/manager/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('/')}}/manager/css/owl.carousel.css">
    <link rel="stylesheet" href="{{asset('/')}}/manager/css/owl.theme.css">
    <link rel="stylesheet" href="{{asset('/')}}/manager/css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('/')}}/manager/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('/')}}/manager/css/normalize.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('/')}}/manager/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('/')}}/manager/css/wave/waves.min.css">
    <!-- Notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('/')}}/manager/css/notika-custom-icon.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('/')}}/manager/css/main.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('/')}}/manager/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('/')}}/manager/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="{{asset('/')}}/manager/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!-- Login Register area Start-->
<div class="login-content">
    <!-- Login -->
        <div class="nk-block toggled" id="l-login">
            @if(\Illuminate\Support\Facades\Session::has('notice'))
                <center>
                   <p class="text-danger">{{\Illuminate\Support\Facades\Session::get('notice')}}</p>
                </center>
                @endif
            <div class="nk-form">
                <form action="{{route('manager::login')}}" method="POST" enctype="multipart/form-data">

                <div class="input-group">
                    <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-support"></i></span>
                    <div class="nk-int-st">
                        <input type="text" class="form-control" placeholder="Username" name="name">
                    </div>
                </div>
                <div class="input-group mg-t-15">
                    <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-edit"></i></span>
                    <div class="nk-int-st">
                        <input type="password" class="form-control" placeholder="Password" name="password">
                    </div>
                </div>

                <button href="#l-register" type="submit" class="btn btn-login btn-success btn-float"><i class="notika-icon notika-right-arrow right-arrow-ant"></i></>
                {{csrf_field()}}
                </form>

            </div>

            <div class="nk-navigation nk-lg-ic">
                <a href="mailto:nhatquang.vu@gmail.com"><i class="notika-icon notika-plus-symbol"></i></a>
            </div>
        </div>


</div>
<!-- Login Register area End-->
<!-- jquery
    ============================================ -->
<script src="{{asset('/')}}/manager/js/vendor/jquery-1.12.4.min.js"></script>
<!-- bootstrap JS
    ============================================ -->
<script src="{{asset('/')}}/manager/js/bootstrap.min.js"></script>
<!-- wow JS
    ============================================ -->
<script src="{{asset('/')}}/manager/js/wow.min.js"></script>
<!-- price-slider JS
    ============================================ -->
<script src="{{asset('/')}}/manager/js/jquery-price-slider.js"></script>
<!-- owl.carousel JS
    ============================================ -->
<script src="{{asset('/')}}/manager/js/owl.carousel.min.js"></script>
<!-- scrollUp JS
    ============================================ -->
<script src="{{asset('/')}}/manager/js/jquery.scrollUp.min.js"></script>
<!-- meanmenu JS
    ============================================ -->
<script src="{{asset('/')}}/manager/js/meanmenu/jquery.meanmenu.js"></script>
<!-- counterup JS
    ============================================ -->
<script src="{{asset('/')}}/manager/js/counterup/jquery.counterup.min.js"></script>
<script src="{{asset('/')}}/manager/js/counterup/waypoints.min.js"></script>
<script src="{{asset('/')}}/manager/js/counterup/counterup-active.js"></script>
<!-- mCustomScrollbar JS
    ============================================ -->
<script src="{{asset('/')}}/manager/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<!-- sparkline JS
    ============================================ -->
<script src="{{asset('/')}}/manager/js/sparkline/jquery.sparkline.min.js"></script>
<script src="{{asset('/')}}/manager/js/sparkline/sparkline-active.js"></script>
<!-- flot JS
    ============================================ -->
<script src="{{asset('/')}}/manager/js/flot/jquery.flot.js"></script>
<script src="{{asset('/')}}/manager/js/flot/jquery.flot.resize.js"></script>
<script src="{{asset('/')}}/manager/js/flot/flot-active.js"></script>
<!-- knob JS
    ============================================ -->
<script src="{{asset('/')}}/manager/js/knob/jquery.knob.js"></script>
<script src="{{asset('/')}}/manager/js/knob/jquery.appear.js"></script>
<script src="{{asset('/')}}/manager/js/knob/knob-active.js"></script>
<!--  Chat JS
    ============================================ -->
<script src="{{asset('/')}}/manager/js/chat/jquery.chat.js"></script>
<!--  wave JS
    ============================================ -->
<script src="{{asset('/')}}/manager/js/wave/waves.min.js"></script>
<script src="{{asset('/')}}/manager/js/wave/wave-active.js"></script>
<!-- icheck JS
    ============================================ -->
<script src="{{asset('/')}}/manager/js/icheck/icheck.min.js"></script>
<script src="{{asset('/')}}/manager/js/icheck/icheck-active.js"></script>
<!--  todo JS
    ============================================ -->
<script src="{{asset('/')}}/manager/js/todo/jquery.todo.js"></script>
<!-- Login JS
    ============================================ -->
<script src="{{asset('/')}}/manager/js/login/login-action.js"></script>
<!-- plugins JS
    ============================================ -->
<script src="{{asset('/')}}/manager/js/plugins.js"></script>
<!-- main JS
    ============================================ -->
<script src="{{asset('/')}}/manager/js/main.js"></script>
</body>

</html>