@extends('layout.master',['page_title'=>'Tạo mới sản phẩm | Sea Fashion'])
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="float-left">
                <h2 class="card-title">Tạo mới sản phẩm</h2>
                <h6 class="card-subtitle mb-2 text-muted">Vui lòng nhập đầy đủ các thông tin bên dưới</h6>
            </div>
            <div class="float-right mr-4">
                <a href="/admin/product" title="Danh sách sản phẩm"><i class="fas fa-list"></i> Danh sách sản phẩm</a>
            </div>
            <div class="clearfix"></div>
            <div class="card-body">
                <form action="/admin/product" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>Tên sản phẩm :</label>
                        <input type="text" name="name" class="form-control w-50">
                    </div>
                    <div class="form-group">
                        <label>Danh mục</label>
                        <select name="categoryId" class="form-control">
                            <option value="1">Category 1</option>
                            <option value="2">Category 2</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Mô tả :</label>
                        <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Giá :</label>
                        <input type="number" name="price" class="form-control w-25">
                    </div>
                    <div class="form-group">
                        <label>Ảnh :</label>
                        <input type="text" name="thumbnail" class="form-control w-50">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Lưu thông tin" class="btn btn-outline-primary">
                        <input type="reset" value="Làm lại" class="btn btn-outline-dark">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection