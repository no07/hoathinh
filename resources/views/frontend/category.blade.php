@extends('frontend.template')
@section('content')

    <!--Shop Page Section-->
    <section class="shop-page-section">
        <div class="auto-container">
            <div class="sec-title">
                <h3 class="font-weight-bold text-uppercase">{{$category->name}}</h3>
            </div>

            <div class="row clearfix">
            @foreach($category->products as $product)
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