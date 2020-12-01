@extends('client.template.master')
@section('nav')
<div class="collapse navbar-collapse" id="ftco-nav">
  <ul class="navbar-nav ml-auto">
    <li class="nav-item"><a href="{{route('home')}}" class="nav-link">Trang Chủ</a></li>
    <li class="nav-item"><a href="{{route('destination')}}" class="nav-link">Điển đến</a></li>
    <li class="nav-item"><a href="{{route('blog')}}" class="nav-link">Blog</a></li>
    <li class="nav-item active"><a href="{{route('about')}}" class="nav-link">Về chúng tôi</a></li>
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
        <h1 class="mb-3 bread">Về chúng tôi</h1>
        <p class="breadcrumbs"><span class="mr-2"><a href="{{route('home')}}">Trang chủ <i class="ion-ios-arrow-forward"></i></a></span> <span>Về chúng tôi <i class="ion-ios-arrow-forward"></i></span></p>
      </div>
    </div>
  </div>
</section>
<section class="ftco-section services-section bg-light">
  <div class="container">
    <div class="row d-flex">
      <div class="col-md-6 order-md-last heading-section pl-md-5 ftco-animate">
        <h2 class="mb-4">Đã đến lúc bắt đầu cuộc hành trình của bạn</h2>
        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
          A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
        <p><a href="{{route('destination')}}" class="btn btn-primary py-3 px-4">Tìm kiếm địa điểm</a></p>
      </div>
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-6 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-paragliding"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Hoạt động</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary</p>
              </div>
            </div>      
          </div>
          <div class="col-md-6 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-route"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Sắp xếp lịch trình</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary</p>
              </div>
            </div>    
          </div>
          <div class="col-md-6 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-tour-guide"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Hướng dẫn viên chuyên nghiệp</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary</p>
              </div>
            </div>      
          </div>
          <div class="col-md-6 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-map"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Quản lý địa điểm</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  
<section class="ftco-counter img" id="section-counter">
  <div class="container">
    <div class="row d-flex">
      <div class="col-md-6 d-flex">
        <div class="img d-flex align-self-stretch" style="background-image:url({{asset('client_template')}}/images/about.jpg);"></div>
      </div>
      <div class="col-md-6 pl-md-5 py-5">
        <div class="row justify-content-start pb-3">
          <div class="col-md-12 heading-section ftco-animate">
            <h2 class="mb-4">Làm cho chuyến đi của bạn an toàn và đáng nhớ cùng chúng tôi</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center mb-4">
              <div class="text">
                <strong class="number" data-number="300">0</strong>
                <span>Tổng số tour</span>
              </div>
            </div>
          </div>
          <div class="col-md-4 justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center mb-4">
              <div class="text">
                <strong class="number" data-number="24000">0</strong>
                <span>Lượng khách</span>
              </div>
            </div>
          </div>
          <div class="col-md-4 justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center mb-4">
              <div class="text">
                <strong class="number" data-number="200">0</strong>
                <span>Nơi để khám phá</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  
<section class="ftco-section testimony-section bg-bottom" style="background-image: url({{asset('client_template')}}/images/bg_3.jpg);">
  <div class="container">
    <div class="row justify-content-center pb-4">
      <div class="col-md-7 text-center heading-section ftco-animate">
        <h2 class="mb-4">Phản hồi từ khách hàng</h2>
      </div>
    </div>
    <div class="row ftco-animate">
      <div class="col-md-12">
        <div class="carousel-testimony owl-carousel ftco-owl">
          <div class="item">
            <div class="testimony-wrap py-4">
              <div class="text">
                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <div class="d-flex align-items-center">
                  <div class="user-img" style="background-image: url({{asset('client_template')}}/images/person_1.jpg)"></div>
                  <div class="pl-3">
                    <p class="name">Roger Scott</p>
                    <span class="position">Trưởng phòng Marketing</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap py-4">
              <div class="text">
                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <div class="d-flex align-items-center">
                  <div class="user-img" style="background-image: url({{asset('client_template')}}/images/person_2.jpg)"></div>
                  <div class="pl-3">
                    <p class="name">Roger Scott</p>
                    <span class="position">Trưởng phòng Marketing</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap py-4">
              <div class="text">
                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <div class="d-flex align-items-center">
                  <div class="user-img" style="background-image: url({{asset('client_template')}}/images/person_3.jpg)"></div>
                  <div class="pl-3">
                    <p class="name">Roger Scott</p>
                    <span class="position">Trưởng phòng Marketing</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap py-4">
              <div class="text">
                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <div class="d-flex align-items-center">
                  <div class="user-img" style="background-image: url({{asset('client_template')}}/images/person_1.jpg)"></div>
                  <div class="pl-3">
                    <p class="name">Roger Scott</p>
                    <span class="position">Trưởng phòng Marketing</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap py-4">
              <div class="text">
                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <div class="d-flex align-items-center">
                  <div class="user-img" style="background-image: url({{asset('client_template')}}/images/person_2.jpg)"></div>
                  <div class="pl-3">
                    <p class="name">Roger Scott</p>
                    <span class="position">Trưởng phòng Marketing</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection