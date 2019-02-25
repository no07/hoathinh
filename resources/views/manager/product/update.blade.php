@extends('manager.template')
@section('content')

    <!-- Breadcomb area Start-->
    <div class="breadcomb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcomb-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcomb-wp">
                                    <div class="breadcomb-icon">
                                        <i class="notika-icon notika-windows"></i>
                                    </div>
                                    <div class="breadcomb-ctn">
                                        <h2>Thêm sản phẩm</h2>
                                        <p>Thông tin sản phẩm cần chính xác  !</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                                <div class="breadcomb-report">
                                    <a href="{{route('manager::product')}}" data-toggle="tooltip" data-placement="left" title="Quay lại khu quản lý"
                                            class="btn"><i class="notika-icon notika-sent"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcomb area End-->
    <!-- Data Table area Start-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="data-table-list">
                    <div class="basic-tb-hd">
                        @if(\Illuminate\Support\Facades\Session::has('notice'))
                            <center>
                                <h4 class="btn-success text-danger" style="padding: 10px 0">{{\Illuminate\Support\Facades\Session::get('notice')}}</h4>
                            </center>
                        @endif
                        <h2>Quản lý  sản phẩm</h2>
                        <p>Quản lý  sản phẩm. các sản phẩm hiển thị trên trang web chính</p>

                    </div>
                    <form action="{{route('manager::product-update')}}" method="post" enctype="multipart/form-data">
                        @if(isset($product))
                            <input type="hidden" name="id" value="{{$product->id}}">
                        @endif
                        <div class="form-group">
                            <label for="">Tên sản phẩm</label>
                            <input type="text" class="form-control" name="name" required value="{{isset($product) ? $product->name : ''}}">
                        </div>
                        <div class="form-group">
                            <label for="">Hình ảnh sản phẩm</label>
                            <input type="file" name="image" class="form-control" {{isset($product) ? '':'required'}}>
                            @if(isset($product))
                                <img src="{{asset('products')}}/{{$product->image}}" alt="" style="height: 120px; margin-top: 20px;">
                                @endif
                        </div>

                        <div class="form-group">
                            <label for="">Quy cách đóng gói</label>
                            <input type="text" class="form-control" name="pack" value="{{isset($product) ? $product->pack : ''}}">
                        </div>
                        <div class="form-group">
                            <label for="">Giới thiệu sản phẩm</label>
                            <textarea name="description" id="" rows="5" class="form-control">{{isset($product) ? $product->description : ''}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Chi tiết sản phẩm</label>
                            <textarea id="my-editor" class="form-control" name="content" >{{isset($product) ? $product->content : ''}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Danh mục sản phẩm</label>
                            <select name="category_id" id="" class="form-control">
                                @foreach(\App\Category::all() as $category)
                                <option value="{{$category->id}}" {{isset($product) ? ($product->category_id == $category->id? 'selected' : '') : ''}}>{{$category->name}}</option>
                                    @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Sản phẩm hiển thị ở trang chủ</label> <br>
                            <input type="checkbox" class="form-check-input" name="featured" {{isset($product) ? ($product->isFeatured == 1? 'checked' : '') : ''}}>
                        </div>
                        {{csrf_field()}}
                        <div class="form-group">
                            <button class="button btn waves-effect"><i class="notika-icon notika-plus-symbol"></i> Thêm mới</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

    <!-- Data Table area End-->
@endsection