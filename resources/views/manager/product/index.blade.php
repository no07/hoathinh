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
                                        <h2>Quản lý sản phẩm</h2>
                                        <p>Những sản phẩm này sẽ được hiển thị ngoài trang chủ và cá trang chi tiết !</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                                <div class="breadcomb-report text-right">
                                    <a href="{{route('manager::product-update')}}" class="btn btn-outline-danger"><i class="notika-icon notika-plus-symbol"></i> Thêm mới</a>
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
                    <div class="table-responsive">
                        <table id="data-table-basic" class="table table-striped">
                            <thead>
                            <tr>
                                <th>#Id</th>
                                <th>Tên sản phẩm</th>
                                <th>Hình ảnh</th>
                                <th>Danh mục sản phẩm</th>
                                <th>Là sản phẩm nổi bật</th>
                                <th>Thao tác</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{$product->id}}</td>
                                    <td>{{$product->name}}</td>
                                    <td><img src="{{asset('products')}}/{{$product->image}}" alt="" style="height: 30px"></td>
                                    <td>{{$product->category->name}}</td>
                                    <td>{{$product->isFeatured == 1 ? 'Có' : 'Không'}}</td>
                                    <td>
                                        <a href="{{route('manager::product-update',['edit' => $product->id])}}" class=" btn btn-xs btn-success"><i class="notika-icon notika-edit"></i> Sửa</a>
                                        <a href="{{route('manager::category',['del' => $product->id])}}" class="btn-confirm btn btn-xs btn-danger"><i class="notika-icon notika-trash"></i> Xóa</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Hình ảnh</th>
                                <th>Thứ tự</th>
                                <th>Thao tác</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Data Table area End-->
@endsection