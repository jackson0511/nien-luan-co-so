@extends('client.template.master')
@section('nav')
<div class="collapse navbar-collapse" id="ftco-nav">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a href="{{route('home')}}" class="nav-link">Trang Chủ</a></li>
        <li class="nav-item"><a href="{{route('destination')}}" class="nav-link">Điển đến</a></li>
        <li class="nav-item active"><a href="{{route('blog')}}" class="nav-link">Blog</a></li>
        <li class="nav-item"><a href="{{route('about')}}" class="nav-link">Về chúng tôi</a></li>
        <li class="nav-item"><a href="{{route('contact')}}" class="nav-link">Liên hệ</a></li>
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
                <h1 class="mb-3 bread">Tips &amp; Blog</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="{{route('home')}}">Trang chủ <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog <i class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <a href="{{route('blog-single')}}" class="block-20" style="background-image: url('{{asset('client_template')}}/images/image_1.jpg');">
                    </a>
                    <div class="text mt-3 float-right d-block">
                        <div class="d-flex align-items-center mb-4 topp">
                            <div class="one">
                                <span class="day">21</span>
                            </div>
                            <div class="two">
                                <span class="yr">2020</span>
                                <span class="mos">Tháng 11</span>
                            </div>
                        </div>
                        <h3 class="heading"><a href="{{route('blog-single')}}">Why Lead Generation is Key for Business Growth</a></h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <a href="{{route('blog-single')}}" class="block-20" style="background-image: url('{{asset('client_template')}}/images/image_2.jpg');">
                    </a>
                    <div class="text mt-3 float-right d-block">
                        <div class="d-flex align-items-center mb-4 topp">
                            <div class="one">
                                <span class="day">21</span>
                            </div>
                            <div class="two">
                                <span class="yr">2020</span>
                                <span class="mos">Tháng 11</span>
                            </div>
                        </div>
                        <h3 class="heading"><a href="{{route('blog-single')}}">Why Lead Generation is Key for Business Growth</a></h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry">
                    <a href="{{route('blog-single')}}" class="block-20" style="background-image: url('{{asset('client_template')}}/images/image_3.jpg');">
                    </a>
                    <div class="text mt-3 float-right d-block">
                        <div class="d-flex align-items-center mb-4 topp">
                            <div class="one">
                                <span class="day">21</span>
                            </div>
                            <div class="two">
                                <span class="yr">2020</span>
                                <span class="mos">Tháng 11</span>
                            </div>
                        </div>
                        <h3 class="heading"><a href="{{route('blog-single')}}">Why Lead Generation is Key for Business Growth</a></h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <a href="{{route('blog-single')}}" class="block-20" style="background-image: url('{{asset('client_template')}}/images/image_4.jpg');">
                    </a>
                    <div class="text mt-3 float-right d-block">
                        <div class="d-flex align-items-center mb-4 topp">
                            <div class="one">
                                <span class="day">21</span>
                            </div>
                            <div class="two">
                                <span class="yr">2020</span>
                                <span class="mos">Tháng 11</span>
                            </div>
                        </div>
                        <h3 class="heading"><a href="{{route('blog-single')}}">Why Lead Generation is Key for Business Growth</a></h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <a href="{{route('blog-single')}}" class="block-20" style="background-image: url('{{asset('client_template')}}/images/image_5.jpg');">
                    </a>
                    <div class="text mt-3 float-right d-block">
                        <div class="d-flex align-items-center mb-4 topp">
                            <div class="one">
                                <span class="day">21</span>
                            </div>
                            <div class="two">
                                <span class="yr">2020</span>
                                <span class="mos">Tháng 11</span>
                            </div>
                        </div>
                        <h3 class="heading"><a href="{{route('blog-single')}}">Why Lead Generation is Key for Business Growth</a></h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry">
                    <a href="{{route('blog-single')}}" class="block-20" style="background-image: url('{{asset('client_template')}}/images/image_6.jpg');">
                    </a>
                    <div class="text mt-3 float-right d-block">
                        <div class="d-flex align-items-center mb-4 topp">
                            <div class="one">
                                <span class="day">21</span>
                            </div>
                            <div class="two">
                                <span class="yr">2020</span>
                                <span class="mos">Tháng 11</span>
                            </div>
                        </div>
                        <h3 class="heading"><a href="{{route('blog-single')}}">Why Lead Generation is Key for Business Growth</a></h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col text-center">
                <div class="block-27">
                    <ul>
                        <li><a href="#">&lt;</a></li>
                        <li class="active"><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&gt;</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection