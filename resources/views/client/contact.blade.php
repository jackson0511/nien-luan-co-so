@extends('client.template.master')
@section('nav')
<div class="collapse navbar-collapse" id="ftco-nav">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a href="{{route('home')}}" class="nav-link">Trang Chủ</a></li>
        <li class="nav-item"><a href="{{route('destination')}}" class="nav-link">Điển đến</a></li>
        <li class="nav-item"><a href="{{route('blog')}}" class="nav-link">Blog</a></li>
        <li class="nav-item"><a href="{{route('about')}}" class="nav-link">Về chúng tôi</a></li>
        <li class="nav-item active"><a href="{{route('contact')}}" class="nav-link">Liên hệ</a></li>
        <li class="nav-item"><a href="{{route('login')}}" class="nav-link">Đăng nhập</a></li>
    </ul>
</div>
@endsection
@section('content')
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{asset('client_template')}}/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <h1 class="mb-3 bread">Liên hệ</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="{{route('home')}}">Trang chủ <i class="ion-ios-arrow-forward"></i></a></span> <span>Liên hệ <i class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section testimony-section bg-bottom" style="background-image: url({{asset('client_template')}}/images/bg_3.jpg);">
    <div class="container">
        <div class="contact-content">
            <div class="col-md-12 text-center heading-section ftco-animate">
                <h2 class="mb-2">Liên hệ</h2>
                <div class="row contact-form">
                    <form action="" class="form-group col-8 mx-auto">
                        <input type="text" class="form-control" placeholder="Họ & tên">
                        <input type="email" class="form-control mt-2" placeholder="Email">
                        <input type="text" class="form-control mt-2" placeholder="Điện thoại">
                        <input type="text" class="form-control mt-2" placeholder="Địa chỉ">
                        <textarea name="" id="" cols="30" rows="8" class="form-control mt-2" placeholder="Nội dung"></textarea>
                        <button class="btn btn-primary mt-2 col-4">Gửi <span class="icon-paper-plane"></span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="branch-section">
            <div class="col-12 d-flex justify-content-center">
                <div class="col-3 card ftco-animate project-wrap mr-2 ml-2" style="background: rgba(1,1,1,0.5);color:rgb(230, 223, 223)">
                    <h4 class="font-weight-bold" style="color:rgb(230, 223, 223)">Chi nhánh 1</h4>
                    <div class="text-left">
                        <span class="icon-map-signs">  Địa chỉ chi nhánh 1</span><br>
                        <span class="icon-phone">  Tel: Số điện thoại</span><br>
                        <span class="icon-fax">  Fax: Số chuyển fax</span><br>
                        <span class="icon-envelope">  Email: info@vacation.com</span><br>
                    </div>
                </div>
                <div class="col-3 card ftco-animate project-wrap mr-2 ml-2" style="background: rgba(1,1,1,0.5);color:rgb(230, 223, 223)">
                    <h4 class="font-weight-bold" style="color:rgb(230, 223, 223)">Chi nhánh 2</h4>
                    <div class="text-left">
                        <span class="icon-map-signs">  Địa chỉ chi nhánh 2</span><br>
                        <span class="icon-phone">  Tel: Số điện thoại</span><br>
                        <span class="icon-fax">  Fax: Số chuyển fax</span><br>
                        <span class="icon-envelope">  Email: info@vacation.com</span><br>
                    </div>
                </div>
                <div class="col-3 card ftco-animate project-wrap mr-2 ml-2" style="background: rgba(1,1,1,0.5);color:rgb(230, 223, 223)">
                    <h4 class="font-weight-bold" style="color:rgb(230, 223, 223)">Chi nhánh 3</h4>
                    <div class="text-left">
                        <span class="icon-map-signs">  Địa chỉ chi nhánh 3</span><br>
                        <span class="icon-phone">  Tel: Số điện thoại</span><br>
                        <span class="icon-fax">  Fax: Số chuyển fax</span><br>
                        <span class="icon-envelope">  Email: info@vacation.com</span><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container brand-region">
        <div class="col-9 brand-region-detail mx-auto font-weight-bold">
            <h4 class="row font-weight-bold">Khu vực 1</h4>
            <div class="row">
                <div class="col-4 ">
                    <ul class="mb-4">
                        <a href="{{route('contact')}}"><li>Chi nhánh 1</li></a>
                        <a href="{{route('contact')}}"><li>Chi nhánh 2</li></a>
                        <a href="{{route('contact')}}"><li>Chi nhánh 3</li></a>
                        <a href="{{route('contact')}}"><li>Chi nhánh 4</li></a>
                        <a href="{{route('contact')}}"><li>Chi nhánh 5</li></a>
                    </ul>
                </div>
                <div class="col-4 ">
                    <ul class="mb-4">
                        <a href="{{route('contact')}}"><li>Chi nhánh 6</li></a>
                        <a href="{{route('contact')}}"><li>Chi nhánh 7</li></a>
                        <a href="{{route('contact')}}"><li>Chi nhánh 8</li></a>
                        <a href="{{route('contact')}}"><li>Chi nhánh 9</li></a>
                        <a href="{{route('contact')}}"><li>Chi nhánh 10</li></a>
                    </ul>
                </div>
                <div class="col-4 ">
                    <ul class="mb-4">
                        <a href="{{route('contact')}}"><li>Chi nhánh 11</li></a>
                        <a href="{{route('contact')}}"><li>Chi nhánh 12</li></a>
                        <a href="{{route('contact')}}"><li>Chi nhánh 13</li></a>
                        <a href="{{route('contact')}}"><li>Chi nhánh 14</li></a>
                        <a href="{{route('contact')}}"><li>Chi nhánh 15</li></a>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-9 brand-region-detail mx-auto font-weight-bold">
            <h4 class="row font-weight-bold">Khu vực 2</h4>
            <div class="row">
                <div class="col-4 ">
                    <ul class="mb-4">
                        <a href="{{route('contact')}}"><li>Chi nhánh 1</li></a>
                        <a href="{{route('contact')}}"><li>Chi nhánh 2</li></a>
                        <a href="{{route('contact')}}"><li>Chi nhánh 3</li></a>
                        <a href="{{route('contact')}}"><li>Chi nhánh 4</li></a>
                        <a href="{{route('contact')}}"><li>Chi nhánh 5</li></a>
                    </ul>
                </div>
                <div class="col-4 ">
                    <ul class="mb-4">
                        <a href="{{route('contact')}}"><li>Chi nhánh 6</li></a>
                        <a href="{{route('contact')}}"><li>Chi nhánh 7</li></a>
                        <a href="{{route('contact')}}"><li>Chi nhánh 8</li></a>
                        <a href="{{route('contact')}}"><li>Chi nhánh 9</li></a>
                        <a href="{{route('contact')}}"><li>Chi nhánh 10</li></a>
                    </ul>
                </div>
                <div class="col-4 ">
                    <ul class="mb-4">
                        <a href="{{route('contact')}}"><li>Chi nhánh 11</li></a>
                        <a href="{{route('contact')}}"><li>Chi nhánh 12</li></a>
                        <a href="{{route('contact')}}"><li>Chi nhánh 13</li></a>
                        <a href="{{route('contact')}}"><li>Chi nhánh 14</li></a>
                        <a href="{{route('contact')}}"><li>Chi nhánh 15</li></a>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-9 brand-region-detail mx-auto font-weight-bold">
            <h4 class="row font-weight-bold">Khu vực 3</h4>
            <div class="row">
                <div class="col-4 ">
                    <ul class="mb-4">
                        <a href="{{route('contact')}}"><li>Chi nhánh 1</li></a>
                        <a href="{{route('contact')}}"><li>Chi nhánh 2</li></a>
                        <a href="{{route('contact')}}"><li>Chi nhánh 3</li></a>
                        <a href="{{route('contact')}}"><li>Chi nhánh 4</li></a>
                        <a href="{{route('contact')}}"><li>Chi nhánh 5</li></a>
                    </ul>
                </div>
                <div class="col-4 ">
                    <ul class="mb-4">
                        <a href="{{route('contact')}}"><li>Chi nhánh 6</li></a>
                        <a href="{{route('contact')}}"><li>Chi nhánh 7</li></a>
                        <a href="{{route('contact')}}"><li>Chi nhánh 8</li></a>
                        <a href="{{route('contact')}}"><li>Chi nhánh 9</li></a>
                        <a href="{{route('contact')}}"><li>Chi nhánh 10</li></a>
                    </ul>
                </div>
                <div class="col-4 ">
                    <ul class="mb-4">
                        <a href="{{route('contact')}}"><li>Chi nhánh 11</li></a>
                        <a href="{{route('contact')}}"><li>Chi nhánh 12</li></a>
                        <a href="{{route('contact')}}"><li>Chi nhánh 13</li></a>
                        <a href="{{route('contact')}}"><li>Chi nhánh 14</li></a>
                        <a href="{{route('contact')}}"><li>Chi nhánh 15</li></a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection