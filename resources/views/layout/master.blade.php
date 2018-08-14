<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$page_title}}</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <script src="{{asset('js/app.js')}}"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-md-3">
                <div class="ml-5">
                    <i class="fas fa-swimmer fa-5x"></i>
                </div>
                <div class="ml-5">
                    <span>Sea Fashion</span>
                </div>
            </div>
            <div class="col-md-6 mt-4">
                <form class="form-inline">
                    <input type="text" class="form-control mr-3 w-75" placeholder="Gõ từ khoá và enter để tìm kiếm">
                    <button type="submit" class="btn btn-outline-primary">Tìm kiếm</button>
                </form>
            </div>
            <div class="col-md-3 mt-4">
                <i class="fas fa-user fa-2x mr-2"></i>
                xuanhung2401 (<a href="">Đăng xuất</a>)
            </div>
        </div>
        <div class="main-content mt-3 row">
            <div class="col-md-3">
                <div class="nav flex-column nav-pills">
                    <a class="nav-link" href="/admin">Trang chủ</a>
                    <a class="nav-link active" href="/admin/product">Quản lý sản phẩm</a>
                    <a class="nav-link" href="/admin/category">Quản lý danh mục</a>
                    <a class="nav-link" href="/admin/order">Quản lý đơn hàng</a>
                    <a class="nav-link" href="/admin/article">Quản lý bài viết</a>
                </div>
            </div>
            <div class="col-md-9">
                @section('content')
                @show()
            </div>
        </div>
        <footer class="text-center mt-5">
            <p>Bản quyền thuộc về FPT Aptech 2018</p>
        </footer>
    </div>
</body>
</html>