@extends('client.template.master')
@section('nav')
<div class="collapse navbar-collapse" id="ftco-nav">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a href="{{route('home')}}" class="nav-link">Trang Chủ</a></li>
        <li class="nav-item active"><a href="{{route('destination')}}" class="nav-link">Điển đến</a></li>
        <li class="nav-item"><a href="{{route('blog')}}" class="nav-link">Blog</a></li>
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
                <h1 class="mb-3 bread">Điểm đến</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Trang chủ <i class="ion-ios-arrow-forward"></i></a></span> <span>Điểm đến <i class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>

{{-- Destination section --}}
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center pb-4">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h2 class="mb-4">Điểm đến lý tưởng</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 ftco-animate">
                <div class="project-destination">
                    <a href="#" class="img" style="background-image: url({{asset('client_template')}}/images/place-1.jpg);">
                        <div class="text">
                            <h3>Singapore</h3>
                            <span>8 Tours</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3 ftco-animate">
                <div class="project-destination">
                    <a href="#" class="img" style="background-image: url({{asset('client_template')}}/images/place-2.jpg);">
                        <div class="text">
                            <h3>Canada</h3>
                            <span>2 Tours</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3 ftco-animate">
                <div class="project-destination">
                    <a href="#" class="img" style="background-image: url({{asset('client_template')}}/images/place-3.jpg);">
                        <div class="text">
                            <h3>Thailand</h3>
                            <span>5 Tours</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3 ftco-animate">
                <div class="project-destination">
                    <a href="#" class="img" style="background-image: url({{asset('client_template')}}/images/place-4.jpg);">
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

{{-- Search Section --}}
<section class="ftco-section ">
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

{{-- Tour section --}}
<section class="ftco-section ftco-no-pt">
    <div class="container">
        <div class="row justify-content-center pb-4">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h2 class="mb-4">Điểm đến du lịch</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 ftco-animate">
                <div class="project-wrap">
                    <a href="{{route('tour-single')}}" class="img" style="background-image: url({{asset('client_template')}}/images/destination-1.jpg);"></a>
                    <div class="text p-4">
                        <span class="price">$300/người</span>
                        <span class="days">8 Days Tour</span>
                        <h3><a href="{{route('tour-single')}}">Bali, Indonesia</a></h3>
                        <p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="project-wrap">
                    <a href="{{route('tour-single')}}" class="img" style="background-image: url({{asset('client_template')}}/images/destination-2.jpg);"></a>
                    <div class="text p-4">
                        <span class="price">$300/người</span>
                        <span class="days">10 Days Tour</span>
                        <h3><a href="{{route('tour-single')}}">Bali, Indonesia</a></h3>
                        <p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="project-wrap">
                    <a href="{{route('tour-single')}}" class="img" style="background-image: url({{asset('client_template')}}/images/destination-3.jpg);"></a>
                    <div class="text p-4">
                        <span class="price">$300/người</span>
                        <span class="days">7 Days Tour</span>
                        <h3><a href="{{route('tour-single')}}">Bali, Indonesia</a></h3>
                        <p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 ftco-animate">
                <div class="project-wrap">
                    <a href="{{route('tour-single')}}" class="img" style="background-image: url({{asset('client_template')}}/images/destination-4.jpg);"></a>
                    <div class="text p-4">
                        <span class="price">$300/người</span>
                        <span class="days">8 Days Tour</span>
                        <h3><a href="{{route('tour-single')}}">Bali, Indonesia</a></h3>
                        <p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="project-wrap">
                    <a href="{{route('tour-single')}}" class="img" style="background-image: url({{asset('client_template')}}/images/destination-5.jpg);"></a>
                    <div class="text p-4">
                        <span class="price">$300/người</span>
                        <span class="days">10 Days Tour</span>
                        <h3><a href="{{route('tour-single')}}">Bali, Indonesia</a></h3>
                        <p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="project-wrap">
                    <a href="{{route('tour-single')}}" class="img" style="background-image: url({{asset('client_template')}}/images/destination-6.jpg);"></a>
                    <div class="text p-4">
                        <span class="price">$300/người</span>
                        <span class="days">7 Days Tour</span>
                        <h3><a href="{{route('tour-single')}}">Bali, Indonesia</a></h3>
                        <p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 ftco-animate">
                <div class="project-wrap">
                    <a href="{{route('tour-single')}}" class="img" style="background-image: url({{asset('client_template')}}/images/destination-7.jpg);"></a>
                    <div class="text p-4">
                        <span class="price">$300/người</span>
                        <span class="days">8 Days Tour</span>
                        <h3><a href="{{route('tour-single')}}">Bali, Indonesia</a></h3>
                        <p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="project-wrap">
                    <a href="{{route('tour-single')}}" class="img" style="background-image: url({{asset('client_template')}}/images/destination-8.jpg);"></a>
                    <div class="text p-4">
                        <span class="price">$300/người</span>
                        <span class="days">10 Days Tour</span>
                        <h3><a href="{{route('tour-single')}}">Bali, Indonesia</a></h3>
                        <p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="project-wrap">
                    <a href="{{route('tour-single')}}" class="img" style="background-image: url({{asset('client_template')}}/images/destination-9.jpg);"></a>
                    <div class="text p-4">
                        <span class="price">$300/người</span>
                        <span class="days">7 Days Tour</span>
                        <h3><a href="{{route('tour-single')}}">Bali, Indonesia</a></h3>
                        <p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 ftco-animate">
                <div class="project-wrap">
                    <a href="{{route('tour-single')}}" class="img" style="background-image: url{{asset('client_template')}}/images/destination-10.jpg);"></a>
                    <div class="text p-4">
                        <span class="price">$300/người</span>
                        <span class="days">8 Days Tour</span>
                        <h3><a href="{{route('tour-single')}}">Bali, Indonesia</a></h3>
                        <p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="project-wrap">
                    <a href="{{route('tour-single')}}" class="img" style="background-image: url({{asset('client_template')}}/images/destination-11.jpg);"></a>
                    <div class="text p-4">
                        <span class="price">$300/người</span>
                        <span class="days">10 Days Tour</span>
                        <h3><a href="{{route('tour-single')}}">Bali, Indonesia</a></h3>
                        <p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ftco-animate">
                <div class="project-wrap">
                    <a href="{{route('tour-single')}}" class="img" style="background-image: url({{asset('client_template')}}/images/destination-12.jpg);"></a>
                    <div class="text p-4">
                        <span class="price">$300/người</span>
                        <span class="days">7 Days Tour</span>
                        <h3><a href="{{route('tour-single')}}">Bali, Indonesia</a></h3>
                        <p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
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