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
                    <h3><a href="#">Free Shipping</a></h3>
                    <div class="text">Duis aute irure dolor in reprehend erit in voluptate velit esse cillu.</div>
                </div>
            </div>

            <!--Feature Block-->
            <div class="feature-block-three col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="icon-box">
                        <span class="icon dripicons-tags"></span>
                    </div>
                    <h3><a href="#">Sale 15% Off</a></h3>
                    <div class="text">Duis aute irure dolor in reprehend erit in voluptate velit esse cillu.</div>
                </div>
            </div>

            <!--Feature Block-->
            <div class="feature-block-three col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="icon-box">
                        <span class="icon dripicons-home"></span>
                    </div>
                    <h3><a href="#">New Arriaval</a></h3>
                    <div class="text">Duis aute irure dolor in reprehend erit in voluptate velit esse cillu.</div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--End Shop Features Section-->