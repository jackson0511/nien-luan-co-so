@extends('client.template.master')
@section('nav')
<div class="collapse navbar-collapse" id="ftco-nav">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item active"><a href="{{route('home')}}" class="nav-link">Trang Chủ</a></li>
        <li class="nav-item"><a href="{{route('destination')}}" class="nav-link">Điển đến</a></li>
        <li class="nav-item"><a href="{{route('blog')}}" class="nav-link">Blog</a></li>
        <li class="nav-item"><a href="{{route('about')}}" class="nav-link">Về chúng tôi</a></li>
        <li class="nav-item"><a href="{{route('contact')}}" class="nav-link">Liên hệ</a></li>
        <li class="nav-item"><a href="{{route('login')}}" class="nav-link">Đăng nhập</a></li>
    </ul>
</div>
@endsection
@section('content')
{{-- hero section --}}
<div class="hero-wrap js-fullheight" style="background-image: url('{{asset('client_template')}}/images/bg-4.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-9 text text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                <p class="caps" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Travel to the any corner of the world, without going around in circles</p>
                <h1 data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><b>Make Your Tour Amazing With Us</b></h1>
            </div>
        </div>
    </div>
</div>
{{-- search section --}}
<section class="ftco-section ftco-no-pb ftco-no-pt">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="search-wrap-1 ftco-animate p-4">
                    <form action="#" class="search-property-1">
                        <div class="row">
                            <div class="col-lg align-items-end">
                                <div class="form-group">
                                    <label for="#">Điểm đến</label>
                                    <div class="form-field">
                                        <div class="icon"><span class="ion-ios-search"></span></div>
                                        <input type="text" class="form-control" placeholder="Tìm kiếm địa điểm">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg align-items-end">
                                <div class="form-group">
                                    <label for="#">Từ ngày</label>
                                    <div class="form-field">
                                        <div class="icon"><span class="ion-ios-calendar"></span></div>
                                        <input type="text" class="form-control checkin_date" placeholder="Từ ngày">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg align-items-end">
                                <div class="form-group">
                                    <label for="#">Đến ngày</label>
                                    <div class="form-field">
                                        <div class="icon"><span class="ion-ios-calendar"></span></div>
                                        <input type="text" class="form-control checkout_date" placeholder="Đến ngày">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg align-self-end">
                                <div class="form-group">
                                    <div class="form-field">
                                        <input type="submit" value="Tìm kiếm" class="form-control btn btn-primary">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- destination section --}}
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center pb-4">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h3 class="mb-4"><b>ĐIỂM ĐẾN LÝ TƯỞNG</b></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 ftco-animate">
                <div class="project-destination">
                    <a href="{{route('tour-single')}}" class="img" style="background-image: url({{asset('client_template')}}/images/place-1.jpg);">
                        <div class="text">
                            <h3>Singapore</h3>
                            <span>8 Tours</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3 ftco-animate">
                <div class="project-destination">
                    <a  href="{{route('tour-single')}}" class="img" style="background-image: url({{asset('client_template')}}/images/place-2.jpg);">
                        <div class="text">
                            <h3>Canada</h3>
                            <span>2 Tours</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3 ftco-animate">
                <div class="project-destination">
                    <a  href="{{route('tour-single')}}" class="img" style="background-image: url({{asset('client_template')}}/images/place-3.jpg);">
                        <div class="text">
                            <h3>Thailand</h3>
                            <span>5 Tours</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3 ftco-animate">
                <div class="project-destination">
                    <a  href="{{route('tour-single')}}" class="img" style="background-image: url({{asset('client_template')}}/images/place-4.jpg);">
                        <div class="text">
                            <h3>Autralia</h3>
                            <span>5 Tours</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- Tour section --}}
<section class="ftco-section ftco-no-pt">
    <div class="container">
        <div class="row justify-content-center pb-4">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h3 class="mb-4"><b>TOUR DU LỊCH</b></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 ftco-animate">
                <div class="project-wrap">
                    <a  href="{{route('tour-single')}}" class="img" style="background-image: url({{asset('client_template')}}/images/destination-1.jpg);"></a>
                    <div class="text p-4">
                        <span class="price">$300/người</span>
                        <span class="days">8 Days Tour</span>
                        <h3><a  href="{{route('tour-single')}}">Bali, Indonesia</a></h3>
                        <p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="project-wrap">
                    <a  href="{{route('tour-single')}}" class="img" style="background-image: url({{asset('client_template')}}/images/destination-2.jpg);"></a>
                    <div class="text p-4">
                        <span class="price">$300/người</span>
                        <span class="days">10 Days Tour</span>
                        <h3><a  href="{{route('tour-single')}}">Bali, Indonesia</a></h3>
                        <p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="project-wrap">
                    <a  href="{{route('tour-single')}}" class="img" style="background-image: url({{asset('client_template')}}/images/destination-3.jpg);"></a>
                    <div class="text p-4">
                        <span class="price">$300/người</span>
                        <span class="days">7 Days Tour</span>
                        <h3><a  href="{{route('tour-single')}}">Bali, Indonesia</a></h3>
                        <p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 ftco-animate">
                <div class="project-wrap">
                    <a  href="{{route('tour-single')}}" class="img" style="background-image: url({{asset('client_template')}}/images/destination-4.jpg);"></a>
                    <div class="text p-4">
                        <span class="price">$300/người</span>
                        <span class="days">8 Days Tour</span>
                        <h3><a  href="{{route('tour-single')}}">Bali, Indonesia</a></h3>
                        <p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="project-wrap">
                    <a  href="{{route('tour-single')}}" class="img" style="background-image: url({{asset('client_template')}}/images/destination-5.jpg);"></a>
                    <div class="text p-4">
                        <span class="price">$300/người</span>
                        <span class="days">10 Days Tour</span>
                        <h3><a  href="{{route('tour-single')}}">Bali, Indonesia</a></h3>
                        <p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="project-wrap">
                    <a  href="{{route('tour-single')}}" class="img" style="background-image: url({{asset('client_template')}}/images/destination-6.jpg);"></a>
                    <div class="text p-4">
                        <span class="price">$300/người</span>
                        <span class="days">7 Days Tour</span>
                        <h3><a  href="{{route('tour-single')}}">Bali, Indonesia</a></h3>
                        <p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 ftco-animate">
                <div class="project-wrap">
                    <a  href="{{route('tour-single')}}" class="img" style="background-image: url({{asset('client_template')}}/images/destination-7.jpg);"></a>
                    <div class="text p-4">
                        <span class="price">$300/người</span>
                        <span class="days">8 Days Tour</span>
                        <h3><a  href="{{route('tour-single')}}">Bali, Indonesia</a></h3>
                        <p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="project-wrap">
                    <a  href="{{route('tour-single')}}" class="img" style="background-image: url({{asset('client_template')}}/images/destination-8.jpg);"></a>
                    <div class="text p-4">
                        <span class="price">$300/người</span>
                        <span class="days">10 Days Tour</span>
                        <h3><a  href="{{route('tour-single')}}">Bali, Indonesia</a></h3>
                        <p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="project-wrap">
                    <a  href="{{route('tour-single')}}" class="img" style="background-image: url({{asset('client_template')}}/images/destination-9.jpg);"></a>
                    <div class="text p-4">
                        <span class="price">$300/người</span>
                        <span class="days">7 Days Tour</span>
                        <h3><a  href="{{route('tour-single')}}">Bali, Indonesia</a></h3>
                        <p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 ftco-animate">
                <div class="project-wrap">
                    <a  href="{{route('tour-single')}}" class="img" style="background-image: url{{asset('client_template')}}/images/destination-10.jpg);"></a>
                    <div class="text p-4">
                        <span class="price">$300/người</span>
                        <span class="days">8 Days Tour</span>
                        <h3><a  href="{{route('tour-single')}}">Bali, Indonesia</a></h3>
                        <p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="project-wrap">
                    <a  href="{{route('tour-single')}}" class="img" style="background-image: url({{asset('client_template')}}/images/destination-11.jpg);"></a>
                    <div class="text p-4">
                        <span class="price">$300/người</span>
                        <span class="days">10 Days Tour</span>
                        <h3><a  href="{{route('tour-single')}}">Bali, Indonesia</a></h3>
                        <p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="project-wrap">
                    <a  href="{{route('tour-single')}}" class="img" style="background-image: url({{asset('client_template')}}/images/destination-12.jpg);"></a>
                    <div class="text p-4">
                        <span class="price">$300/người</span>
                        <span class="days">7 Days Tour</span>
                        <h3><a  href="{{route('tour-single')}}">Bali, Indonesia</a></h3>
                        <p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- recent post section --}}
<section class="ftco-section ftco-no-pt">
    <div class="container">
        <div class="row justify-content-center pb-4">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h3 class="mb-4"><b>BÀI ĐĂNG MỚI NHẤT</b></h3>
            </div>
        </div>
        <div class="row d-flex">
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <a href="{{route('blog-single')}}" class="block-20" style="background-image: url('{{asset('client_template')}}/images/image_1.jpg');">
                    </a>
                    <div class="text mt-3 float-right d-block">
                        <div class="d-flex align-items-center mb-4 topp">
                            <div class="one">
                                <span class="day">01</span>
                            </div>
                            <div class="two">
                                <span class="yr">2020</span>
                                <span class="mos">Tháng 12</span>
                            </div>
                        </div>
                        <h3 class="heading"><a  href="{{route('blog-single')}}">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit autem excepturi, sed asperiores molestias deleniti maxime.</p>
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
                                <span class="day">01</span>
                            </div>
                            <div class="two">
                                <span class="yr">2020</span>
                                <span class="mos">Tháng 12</span>
                            </div>
                        </div>
                        <h3 class="heading"><a href="{{route('blog-single')}}">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit autem excepturi, sed asperiores molestias deleniti maxime.</p>
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
                                <span class="day">01</span>
                            </div>
                            <div class="two">
                                <span class="yr">2020</span>
                                <span class="mos">Tháng 12</span>
                            </div>
                        </div>
                        <h3 class="heading"><a href="{{route('blog-single')}}">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit autem excepturi, sed asperiores molestias deleniti maxime.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection