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
                                        <h2>Quản lý slider trang chủ</h2>
                                        <p>Những hình ảnh động phía ngoài trang chủ !</p>
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
                            <h2>Thêm mới slide</h2>
                            <hr>
                        </div>
                        <form action="{{route('manager::dashboard')}}" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Thêm hình ảnh</label>
                                <input type="file" class="form-control" name="slide" required>
                            </div>
                            <div class="form-group">
                                <label>Thứ tự</label>
                                <input type="number" class="form-control" value="{{$slides->count()}}" name="order" required>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success waves-effect"><i class="notika-icon notika-app"></i> Upload</button>
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
                            <h2>Quản lý slider trang chủ</h2>
                            <p>Những hình ảnh chạy liên tục trên trang chủ, sắp xếp theo thứ tự .</p>

                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                <tr>
                                    <th width="40px">#ID</th>
                                    <th>Hình ảnh</th>
                                    <th>Thứ tự</th>
                                    <th>Thao tác</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($slides as $slide)
                                <tr>
                                    <td>{{$slide->id}}</td>
                                    <td><img src="{{asset('slides')}}/{{$slide->image}}" alt="" style="max-width: 250px"></td>
                                    <td>{{$slide->order}}</td>
                                    <td><a href="{{route('manager::dashboard',['del' => $slide->id])}}" class="btn-confirm btn btn-xs btn-danger"><i class="notika-icon notika-trash"></i> Xóa</a></td>
                                </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>#Id</th>
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