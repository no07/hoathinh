<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ỐP TƯỜNG HOA THỊNH</title>
    <!-- Stylesheets -->
    <link href="{{asset('frontend')}}/css/bootstrap.css" rel="stylesheet">
    <link href="{{asset('frontend')}}/css/style.css" rel="stylesheet">
    <link href="{{asset('frontend')}}/css/responsive.css" rel="stylesheet">

    <link rel="shortcut icon" href="{{asset('frontend')}}/images/logo-2.png" type="image/x-icon">
    <link rel="icon" href="{{asset('frontend')}}/images/logo-2.png" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv=”X-UA-Compatible” content=”requiresActiveX=true” />
    <meta http-equiv=”content-language” content=”vi” />
    <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″ />
    <link type=”image/x-icon” rel=”shortcut icon” href=”{{asset('frontend')}}/images/logo-2.png”>
    <meta name=”DC.title” content=”Ốp tường Hoa Thịnh” />
    <meta name=”geo.region” content=”VN-HN” />
    <meta name=”geo.placename” content=”Ha Noi” />
    <meta name=”geo.position” content=”10.765604;106.704565″ />
    <meta name=”ICBM” content=”10.765604, 106.704565″ />
    <meta http-equiv=”content-script-type” Content=”text/javascript”>
    <meta http-equiv=”content-style-type” Content=”text/css”>
    <meta name=”distribution” Content=”global”>
    <meta name=”robots” content=”index, follow” />
    <link rel=”canonical” href=”{{asset('/')}}” />
    <link rel=”next” href=”{{asset('/')}}” />
    <link rel=”publisher” href=”{{asset('/')}}”/>

    <meta property=”og:locale” content=”en_US” />
    <meta property=”og:type” content=”website” />
    <meta property=”og:title” content=”ỐP TƯỜNG HOA THỊNH” />
    <meta property=”og:description” content=”ông ty TNHH thương mại và phát triển Hoa Thịnh ( 100% vốn đầu tư của nước ngoài. Chuyên cung cấp
          các vật liệu trang trí nội thất ( Các tấm nhựa ốp tường, Ốp sàn, PVC, Phào..... ) Hiện công ty có một nhà
          máy tại Trung Quốc, được thành lập nhiều năm. Với công nghệ sản xuất đến từ Châu Âu.” />
    <meta property=”og:url” content=”{{asset('/')}}” />
    <meta property=”og:site_name” content=”ỐP TƯỜNG HOA THỊNH” />
    <meta property=”fb:app_id” content=”ỐP TƯỜNG HOA THỊNH ” />
    <meta name=”twitter:card” content=”summary” />
    <meta name=”twitter:title” content=”ỐP TƯỜNG HOA THỊNH” />
    <meta name=”twitter:image” content=”{{asset('frontend')}}/images/logo-2.png” />
    <!--[if lt IE 9]><script src="{{asset('frontend')}}/https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="{{asset('frontend')}}/js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Main Header / Header Style Two-->
    <header class="main-header header-style-two">

        <!--Header-Upper-->
        <div class="header-upper">
            <div class="auto-container">
                <div class="clearfix">

                    <div class="pull-left logo-box">
                        <div class="logo"><a href="{{asset('/')}}"><img src="{{asset('frontend')}}/images/logo-2.png" alt="" title=""></a></div>
                    </div>

                    <div class="nav-outer pull-right clearfix">

                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md">
                            <div class="navbar-header">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li><a href="{{asset('/')}}">Trang chủ</a>

                                    </li>
                                    <li class="dropdown"><a href="#">Sản phẩm</a>
                                        <ul>
                                            @foreach(\App\Category::all() as $category)
                                            <li><a href="{{route('category',['id' => $category->id, 'slug' => str_slug($category->name,'-')])}}">{{$category->name}}</a></li>
                                                @endforeach
                                        </ul>
                                    </li>

                                    <li><a href="{{asset('/')}}#about-us">Giới thiệu</a></li>
                                    <li><a href="{{route('contact')}}">Liên hệ</a></li>
                                </ul>
                            </div>

                        </nav>

                        <!-- Main Menu End-->

                        <!--Button Box-->
                        <div class="outer-box clearfix">
                            <!--Option Box-->
                            <div class="option-box">
                                <!--Search Box-->
                                <div class="search-box-outer">
                                    <div class="dropdown">
                                        <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="dripicons-search"></span></button>
                                        <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                            <li class="panel-outer">
                                                <div class="form-container">
                                                    <form method="post" action="blog.html">
                                                        <div class="form-group">
                                                            <input type="search" name="field-name" value="" placeholder="Search Here" required>
                                                            <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--Button Box-->

                    </div>

                </div>
            </div>
        </div>
        <!--End Header Upper-->

        <!--Sticky Header-->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="{{asset('/')}}" class="img-responsive"><img src="{{asset('frontend')}}/images/logo-small.png" alt="" title=""></a>
                </div>

                <!--Right Col-->
                <div class="right-col pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
                            <ul class="navigation clearfix">
                                <li><a href="{{asset('/')}}">Trang chủ</a>

                                </li>
                                <li class="dropdown"><a href="#">Sản phẩm</a>
                                    <ul>
                                        @foreach(\App\Category::all() as $category)
                                            <li><a href="{{route('category',['id' => $category->id, 'slug' => str_slug($category->name,'-')])}}">{{$category->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>

                                <li><a href="{{asset('/')}}#about-us">Giới thiệu</a></li>
                                <li><a href="{{route('contact')}}">Liên hệ</a></li>
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>

            </div>
        </div>
        <!--End Sticky Header-->

    </header>
    <!--End Main Header -->
    <!--Page Title-->
    <section>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @php
                    $f = 1;
                @endphp
                @foreach(\App\Slide::orderBy('order','desc')->get() as $slide)
                    <div class="carousel-item {{$f == 1? 'active' : ''}}">
                        <img class="d-block w-100" src="{{asset('slides')}}/{{$slide->image}}" alt="{{$slide->name}}">
                    </div>
                    @php
                        $f += 1;
                    @endphp
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <!--End Page Title-->

    <!--Shop Features Section-->
    <section class="shop-features-section">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Feature Block-->
                <div class="feature-block-three col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon dripicons-basket"></span>
                        </div>
                        <h3><a href="#">Chất lượng</a></h3>
                        <div class="text">Chúng tôi cam kết mang sản phẩm chất lượng tốt nhất đến tận tay người tiêu dùng</div>
                    </div>
                </div>

                <!--Feature Block-->
                <div class="feature-block-three col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon dripicons-tags"></span>
                        </div>
                        <h3><a href="#">Nhân viên</a></h3>
                        <div class="text">Đội ngũ nhân viên tư vấn chuyên nghiệp, luôn đặt lợi ích khách hàng hàng đầu</div>
                    </div>
                </div>

                <!--Feature Block-->
                <div class="feature-block-three col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="icon dripicons-home"></span>
                        </div>
                        <h3><a href="#">Thi công</a></h3>
                        <div class="text">Đội ngũ nhân viên thi công lành nghề, đảm bảo thi công chính xác, giá thành hợp lý</div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Shop Features Section-->
    @yield('content')
    <footer class="main-footer">

        <div class="auto-container">

            <!--Widgets Section-->
            <div class="widgets-section">
                <div class="row clearfix">

                    <!--big column-->
                    <div class="big-column col-lg-5 col-md-12 col-sm-12">
                        <div class="row clearfix">

                            <!--Footer Column / Logo Widget-->
                            <div class="footer-column col-lg-7 col-md-7 col-sm-12">
                                <div class="footer-widget logo-widget">
                                    <div class="logo">
                                        <center><a href="index.html"><img src="{{asset('frontend')}}/images/footer-logo.png" alt="" /></a></center>
                                    </div>
                                    <div class="text">
                                        <strong class="text-uppercase">Công ty TNHH thương mại và phát triển Hoa Thịnh </strong> <br>
                                        <strong>Địa chỉ : </strong> Số 72 - TT 20 Khu đô thị mới Văn Phú - Phú La - Hà Đông - Hà Nội<br>
                                        <strong>Email :</strong> vltthuasheng@gmail.com<br>
                                        <strong>Số điện thoại :</strong> 0971 672 945<br>
                                        <strong>Website :</strong> optuonghoathinh.com<br>
                                    </div>
                                    <ul class="social-icon-one">
                                        <li class="facebook"><a href="#"><span class="fa fa-facebook"></span></a></li>
                                        <li class="pinterest"><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                                        <li class="twitter"><a href="#"><span class="fa fa-twitter"></span></a></li>
                                    </ul>
                                </div>
                            </div>

                            <!--Footer Column / Links Widget-->
                            <div class="footer-column col-lg-5 col-md-5 col-sm-12">
                                <div class="footer-widget links-widget">
                                    <h2>Về chúng tôi</h2>
                                    <ul class="list">
                                        <li><a href="{{asset('/')}}#about-us"><i class="fa fa-paper-plane"></i> Giới thiệu</a></li>
                                        <li><a href="{{route('contact')}}"><i class="fa fa-paper-plane"></i> Liên hệ</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!--big column-->
                    <div class="big-column col-lg-7 col-md-12 col-sm-12">
                        <div class="row clearfix">

                            <!--Footer Column / Links Widget-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
                                    <h2>Danh mục sản phẩm</h2>
                                    <ul class="list">
                                        @foreach(\App\Category::all() as $category)
                                            <li><a href="{{route('category',['id' => $category->id, 'slug' => str_slug($category->name,'-')])}}"><i class="fa fa-angellist"></i> {{$category->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>



                            <!--Footer Column / Map Widget-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget map-widget">
                                    <h2>Where we are</h2>
                                    <div class="image">
                                        <img src="{{asset('frontend')}}/images/resource/map.png" alt="" />
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="copyright">&copy; Copyright {{\Carbon\Carbon::now()->year}} , Power by <a href="mailto:nhatquang.vu@gmail.com">nhatquang.vu@gmail.com</a></div>

        </div>
    </footer>

</div>
<!--End pagewrapper-->

<script src="{{asset('frontend')}}/js/jquery.js"></script>
<script src="{{asset('frontend')}}/js/popper.min.js"></script>
<script src="{{asset('frontend')}}/js/bootstrap.min.js"></script>
<script src="{{asset('frontend')}}/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="{{asset('frontend')}}/js/jquery.fancybox.js"></script>
<script src="{{asset('frontend')}}/js/appear.js"></script>
<script src="{{asset('frontend')}}/js/owl.js"></script>
<script src="{{asset('frontend')}}/js/wow.js"></script>
<script src="{{asset('frontend')}}/js/script.js"></script>

</body>
</html>