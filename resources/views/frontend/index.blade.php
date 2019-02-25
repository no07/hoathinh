@extends('frontend.template')
@section('content')
    <div class="auto-container" id="about-us">
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <div class="sec-title pt-lg-4">
                    <h3 class="font-weight-bold text-uppercase">Về chúng tôi</h3>
                </div>
                <p>Công ty TNHH thương mại và phát triển Hoa Thịnh ( 100% vốn đầu tư của nước ngoài. Chuyên cung cấp
                    các vật liệu trang trí nội thất ( Các tấm nhựa ốp tường, Ốp sàn, PVC, Phào..... ) Hiện công ty có một nhà
                    máy tại Trung Quốc, được thành lập nhiều năm. Với công nghệ sản xuất đến từ Châu Âu.
                    Công ty TNHH thương mại và phát triển Hoa Thịnh với phường trâm “ Uy tín và chất lượng ” Chúng tôi
                    cam đoan sẽ đảm bảo chất lượng với người tiêu dùng, đồng thời sẽ làm thật tốt khâu phục vụ để khiến
                    cho các bạn hài lòng nhất.</p>
            </div>
            <div class="col-md-6 col-xs-12">
                <img src="{{asset('frontend')}}/images/about-us.png" alt="" class="img-responsive pt-lg-4">
            </div>
            <div class="col-md-12">
                <hr></div>
        </div>
    </div>
    <!--Shop Page Section-->
    <section class="shop-page-section">
        <div class="auto-container">
            <div class="sec-title">
                <h3 class="font-weight-bold text-uppercase">Sản phẩm nổi bật</h3>
            </div>

            <div class="row clearfix">
                @foreach(\App\Product::where('isFeatured','=',1)->take(8)->get() as $product)
                <!--Shop Item-->
                <div class="shop-item col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="{{route('product',['id' => $product->id, 'slug' => str_slug($product->name, '-')])}}"><img src="{{asset('products')}}/{{$product->image}}" alt="" /></a>

                        </div>
                        <div class="lower-content">
                            <h3><a href="{{route('product',['id' => $product->id, 'slug' => str_slug($product->name, '-')])}}">{{$product->name}}</a></h3>


                        </div>
                    </div>
                </div>
                    @endforeach

            </div>

        </div>
    </section>
    <!--End Shop Page Section-->

@endsection