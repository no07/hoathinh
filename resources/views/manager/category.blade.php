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
                                        <h2>Quản lý danh mục sản phẩm</h2>
                                        <p>Những danh mục sản phẩm này sẽ được hiển thị ngoài tra chủ và cá trang chi tiết !</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                                <div class="breadcomb-report">
                                    <button data-toggle="tooltip" data-placement="left" title="Download Report"
                                            class="btn"><i class="notika-icon notika-sent"></i></button>
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
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="data-table-list">
                    <div class="basic-tb-hd">
                        <h2>Thêm mới danh mục sản phẩm</h2>
                        <hr>
                    </div>
                    <form action="{{route('manager::category')}}" method="POST" enctype="multipart/form-data">
                        @if(isset($category))
                            <input type="hidden" value="{{$category->id}}" name="id">
                            @endif
                        <div class="form-group">
                            <label>Thêm danh mục sản phẩm</label>
                            <input type="text" class="form-control" name="name" value="{{isset($category) ? $category->name : ''}}">
                        </div>
                        <div class="form-group">
                            <label>Thứ tự</label>
                            <input type="number" class="form-control" value="{{isset($category) ? $category->order : $categories->count()}}" name="order">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success waves-effect"><i class="notika-icon notika-app"></i> Cập nhập</button>
                        </div>
                        {{csrf_field()}}
                    </form>
                </div>
            </div>

            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="data-table-list">
                    <div class="basic-tb-hd">
                        @if(\Illuminate\Support\Facades\Session::has('notice'))
                            <center>
                                <h4 class="btn-success text-danger" style="padding: 10px 0">{{\Illuminate\Support\Facades\Session::get('notice')}}</h4>
                            </center>
                        @endif
                        <h2>Quản lý danh mục sản phẩm</h2>
                        <p>Quản lý danh mục sản phẩm. các danh mục hiển thị trên trang web chính</p>

                    </div>
                    <div class="table-responsive">
                        <table id="data-table-basic" class="table table-striped">
                            <thead>
                            <tr>
                                <th>#Id</th>
                                <th>Tên</th>
                                <th>Thứ tự</th>
                                <th>Thao tác</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{$category->id}}</td>
                                    <td>{{$category->name}}</td>
                                    <td>{{$category->order}}</td>
                                    <td>
                                        <a href="{{route('manager::category',['edit' => $category->id])}}" class=" btn btn-xs btn-success"><i class="notika-icon notika-edit"></i> Sửa</a>
                                        <a href="{{route('manager::category',['del' => $category->id])}}" class="btn-confirm btn btn-xs btn-danger"><i class="notika-icon notika-trash"></i> Xóa</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>#ID</th>
                                <th>Tên</th>
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