@extends('layout.master',['page_title'=>'Danh sách sản phẩm | Sea Fashion'])
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="float-left">
                <h2 class="card-title">Danh sách sản phẩm</h2>
                <h6 class="card-subtitle mb-2 text-muted">Hiển thị sản phẩm sắp xếp theo thời gian mới nhất</h6>
            </div>
            <div class="float-right mr-4">
                <a href="/admin/product/create" title="Tạo mới sản phẩm"><i class="fas fa-plus-square"></i> Tạo mới</a>
            </div>
            <div class="clearfix"></div>
            <div class="card-body">
                @if($foods->count()>0)
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Ảnh đại diện</th>
                            <th scope="col">Tên</th>
                            <th scope="col">Gía</th>
                            <th scope="col">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($foods as $food)
                        <tr>
                            <th scope="row">{{$food->id}}</th>
                            <td>
                                <div class="card" style="width: 90px;height: 70px;background-image: url('{{$food->image}}'); background-size: cover">
                                </div>
                            </td>
                            <td>{{$food->name}}</td>
                            <td>{{$food->price}}</td>
                            <td>
                                <a href="" class="btn btn-outline-primary">Sửa</a>&nbsp;&nbsp;
                                <a href="" class="btn btn-outline-danger">Xoá</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                    <div class="alert alert-primary" role="alert">
                        Hiện tại chưa có sản phẩm nào, vui lòng <a href="/admin/product/create">thêm sản phẩm</a> mới.
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection