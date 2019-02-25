@extends('frontend.template')
@section('content')

    <!--Shop Page Section-->
    <section class="shop-page-section">
        <div class="auto-container">
            <div class="sec-title">
                <h3 class="font-weight-bold text-uppercase">CHI TIẾT SẢN PHẨM</h3>
            </div>

            <div class="row clearfix">
                <div class="col-md-9 col-xs-12">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{asset('products')}}/{{$product->image}}" alt="" class="img-responsive">
                        </div>
                        <div class="col-md-6">
                            <h5 class="text-uppercase font-weight-bold">{{$product->name}}</h5>
                            <p>{{$product->description}}</p>
                            <p><strong>Quy cách :</strong> {{$product->pack}}</p>
                            <button class="btn btn-sm btn-block btn-danger"><i class="fa fa-phone-square"></i> 0971 672 945</button>
                            <button class="btn btn-sm btn-block btn-success"><i class="fa fa-envelope"></i> vltthuasheng@gmail.com</button>
                        </div>
                        <div class="col-md-12">
                            <hr>
                            <h6 class="text-uppercase font-weight-bold">Giới thiệu về sản phẩm</h6>
                            {!! $product->content !!}
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12">
                    <h5 class="text-uppercase font-weight-bold">Sản phẩm liên quan</h5>
                    <hr>
                    @foreach($product->category->products->take(5) as $item)
                        @if($product->id <> $item->id)
                            <div class="item-list">
                                <a href="{{route('product',['id' => $item->id, 'slug' => str_slug($item->name, '-')])}}"><img src="{{asset('products')}}/{{$item->image}}" alt=""></a>
                            <p class="text-center"><a href="{{route('product',['id' => $item->id, 'slug' => str_slug($item->name, '-')])}}"><strong class="text-uppercase">{{$item->name}}</strong></a></p> </div>
                        @endif
                    @endforeach
                </div>

            </div>

        </div>
    </section>
    <!--End Shop Page Section-->

@endsection