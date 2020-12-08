<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="{{asset('admin_template')}}/dist/css/login.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="sidenav">
    {{-- <div class="login-main-text"> --}}
        {{-- <h2>Application<br> Login Page</h2>
        <p>Login or register from here to access.</p> --}}
        <img src="{{asset('admin_template')}}/dist/img/login-bg.jpg" alt="">
    {{-- </div> --}}
</div>
<div class="main">
    <div class="col-md-6 col-sm-12">
        <div class="login-form">
            <form>
                <div class="form-group">
                    <label>Tên đăng nhập</label>
                    <input type="text" class="form-control" placeholder="Nhập tên đăng nhập...">
                </div>
                <div class="form-group">
                    <label>Mật khẩu</label>
                    <input type="password" class="form-control" placeholder="Nhập mật khẩu...">
                </div>
                <button type="submit" class="btn btn-warning">Đăng nhập</button>
            </form>
        </div>
    </div>
</div>