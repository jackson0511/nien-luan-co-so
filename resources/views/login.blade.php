<!DOCTYPE html>
<html lang="en">
<head>
    <title>Vacation</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include('client.template.css')
    <link rel="stylesheet" href="{{asset('client_template')}}/css/login.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{route('blog-single')}}">Vacation<span>Travel Agency</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>
            
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="{{route('home')}}" class="nav-link">Trang Chủ</a></li>
                    <li class="nav-item"><a href="{{route('destination')}}" class="nav-link">Điển đến</a></li>
                    <li class="nav-item"><a href="{{route('blog')}}" class="nav-link">Blog</a></li>
                    <li class="nav-item"><a href="{{route('about')}}" class="nav-link">Về chúng tôi</a></li>
                    <li class="nav-item"><a href="{{route('contact')}}" class="nav-link">Liên hệ</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{asset('client_template')}}/images/login_bg.jpg');">
        <div class="container">
            <div class="d-flex justify-content-center h-100">
                <div class="card">
                    <div class="card-header">
                        <h3>Xin chào</h3>
                        <p>Đăng nhập vào tài khoản của bạn</p>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><ion-icon name="person-circle-outline"></ion-icon></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Nhập username">
                                
                            </div>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><ion-icon name="key-outline"></ion-icon></span>
                                </div>
                                <input type="password" class="form-control" placeholder="Nhập mật khẩu">
                            </div>
                            <div class="row align-items-center remember">
                                <input type="checkbox">Nhớ mật khẩu
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Đăng nhập" class="btn float-right login_btn">
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-center links">
                            Tạo tài khoản mới?<a href="{{route('register')}}">Đăng ký</a>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="{{route('forgot')}}">Quên mật khẩu?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
    
    @include('client.template.js')
    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
</body>
</html>