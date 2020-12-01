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
<section class="hero-wrap" style="background-image: url('{{asset('client_template')}}/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <h1 class="mb-3 bread">Tên tour</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="{{route('home')}}">Trang chủ <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="{{route('destination')}}">Tour du lịch <i class="ion-ios-arrow-forward"></i></a></span> <span>Tên tour <i class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 order-md-last ftco-animate py-md-5 md-5">
                <div class="container">
                    <div class="row mb-3">
                        <div class="col-6">
                            <div>
                                <span>Thời gian: </span><span class="font-weight-bold">X ngày X đêm</span>
                            </div>
                            <div>
                                <span>Điểm xuất phát: </span><span class="font-weight-bold">Tên địa điểm</span>
                            </div>
                        </div>
                        <div class="col-5">
                            <div>
                                <span>Phương tiện: </span><span class="font-weight-bold">Tên phương tiện</span>
                            </div>
                            <div>
                                <span>Điểm đến: </span><span class="font-weight-bold">Tên địa điểm</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <table class="bg-light table">
                            <thead class="">
                                <th>Ngày khởi hành</th>
                                <th>Mã tour</th>
                                <th>Giá</th>
                                <th>Giá trẻ em</th>
                                <th>Giá em bé</th>
                                <th></th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>dd/mm/yyyy</td>
                                    <td>Matour</td>
                                    <td>Giá1</td>
                                    <td>Giá2</td>
                                    <td>Giá3</td>
                                    <td><button class="btn btn-primary">Đặt tour</button></td>
                                </tr>
                                <tr>
                                    <td>dd/mm/yyyy</td>
                                    <td>Matour</td>
                                    <td>Giá1</td>
                                    <td>Giá2</td>
                                    <td>Giá3</td>
                                    <td><button class="btn btn-primary">Đặt tour</button></td>
                                </tr>
                                <tr class="border-none">
                                    <td colspan="5"></td>
                                    <td><a href=""><span class="icon-caret-down"></span> Xem thêm</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <p><b>Tour này có gì hay?</b></p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta iusto optio ullam, modi commodi enim, ex ratione corrupti, culpa cum dignissimos repudiandae accusamus vero cumque vitae expedita error numquam ipsa!</p>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-4"><img src="{{asset('client_template')}}/images/destination-1.jpg" alt="Picture 1" style="height:190px;width:250px"></div>
                        <div class="col-4"><img src="{{asset('client_template')}}/images/destination-3.jpg" alt="Picture 2" style="height:190px;width:250px"></div>
                        <div class="col-4"><img src="{{asset('client_template')}}/images/destination-5.jpg" alt="Picture 3" style="height:190px;width:250px"></div>
                    </div>
                    <div class="row d-flex justify-content-center mt-70 mb-70">
                        <div>
                            <div class="main-card mb-3 card">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Lịch trình tour</b></h5>
                                    <div class="vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
                                        <div class="vertical-timeline-item vertical-timeline-element">
                                            <div><span class="vertical-timeline-element-icon bounce-in"> <i class="badge badge-dot badge-dot-xl badge-success"></i> </span>
                                                <div class="vertical-timeline-element-content bounce-in">
                                                    <h4 class="timeline-title pt-1">Địa điểm 1</h4>
                                                    <div class="vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                            <div><span class="vertical-timeline-element-icon bounce-in"> <i class="badge badge-dot badge-dot-xl badge-warning"> </i> </span>
                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                    <h4 class="timeline-title">Hoạt động 1</h4>
                                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates animi eveniet labore beatae nobis tempora provident, nulla commodi soluta! Aliquam commodi quis beatae quia obcaecati voluptatibus molestiae consectetur totam minima?
                                                                        {{-- <span class="text-success">5:00 PM</span> --}}
                                                                    </p> 
                                                                    <span class="vertical-timeline-element-date"><b>Sáng</b></span>
                                                                    <a href="" aria-expanded="false" role="button" aria-controls="collapse-block1" data-toggle="collapse" data-target="#collapse-block1"><span><i class="icon-caret-down"> Xem thêm</i></span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="collapse" id="collapse-block1">
                                                            <div class="vertical-timeline-item vertical-timeline-element">
                                                                <div> <span class="vertical-timeline-element-icon bounce-in"> <i class="badge badge-dot badge-dot-xl badge-danger"> </i> </span>
                                                                    <div class="vertical-timeline-element-content bounce-in">
                                                                        <h4 class="timeline-title">Hoạt động 2</h4>
                                                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non repudiandae animi quaerat expedita assumenda debitis nam atque, aspernatur corrupti consequuntur doloremque quod nulla, itaque, aperiam voluptatem molestiae dolorum quis ab</p> 
                                                                        <span class="vertical-timeline-element-date"><b>Trưa</b></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vertical-timeline-item vertical-timeline-element">
                                                                <div> <span class="vertical-timeline-element-icon bounce-in"> <i class="badge badge-dot badge-dot-xl badge-primary"> </i> </span>
                                                                    <div class="vertical-timeline-element-content bounce-in">
                                                                        <h4 class="timeline-title">Hoạt động 3</h4>
                                                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium omnis sunt, totam officia ab officiis, fuga quae vero asperiores dolores dignissimos blanditiis aperiam. Eligendi at hic aut culpa possimus reiciendis.</p> 
                                                                        <span class="vertical-timeline-element-date"><b>Chiều</b></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vertical-timeline-item vertical-timeline-element">
                                                                <div> <span class="vertical-timeline-element-icon bounce-in"> <i class="badge badge-dot badge-dot-xl badge-success"> </i> </span>
                                                                    <div class="vertical-timeline-element-content bounce-in">
                                                                        <h4 class="timeline-title">Hoạt động 4</h4>
                                                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi saepe alias soluta labore! Nisi, minus ullam. Eum eligendi, facere et quos repellat ad unde, quia id ullam vitae voluptatibus voluptas. 
                                                                            {{-- <a href="javascript:void(0);" data-abc="true">10:00 AM</a> --}}
                                                                        </p> 
                                                                        <span class="vertical-timeline-element-date"><b>Tối</b></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span class="vertical-timeline-element-date" style="font-size:1.3em;color:#414141"><b>Ngày X</b></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
                                        <div class="vertical-timeline-item vertical-timeline-element">
                                            <div><span class="vertical-timeline-element-icon bounce-in"> <i class="badge badge-dot badge-dot-xl badge-success"></i> </span>
                                                <div class="vertical-timeline-element-content bounce-in">
                                                    <h4 class="timeline-title pt-1">Địa điểm 1</h4>
                                                    <div class="vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                            <div><span class="vertical-timeline-element-icon bounce-in"> <i class="badge badge-dot badge-dot-xl badge-warning"> </i> </span>
                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                    <h4 class="timeline-title">Hoạt động 1</h4>
                                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates animi eveniet labore beatae nobis tempora provident, nulla commodi soluta! Aliquam commodi quis beatae quia obcaecati voluptatibus molestiae consectetur totam minima?
                                                                        {{-- <span class="text-success">5:00 PM</span> --}}
                                                                    </p> 
                                                                    <span class="vertical-timeline-element-date"><b>Sáng</b></span>
                                                                    <a href="" aria-expanded="false" role="button" aria-controls="collapse-block2" data-toggle="collapse" data-target="#collapse-block2"><span><i class="icon-caret-down"> Xem thêm</i></span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="collapse" id="collapse-block2">
                                                            <div class="vertical-timeline-item vertical-timeline-element">
                                                                <div> <span class="vertical-timeline-element-icon bounce-in"> <i class="badge badge-dot badge-dot-xl badge-danger"> </i> </span>
                                                                    <div class="vertical-timeline-element-content bounce-in">
                                                                        <h4 class="timeline-title">Hoạt động 2</h4>
                                                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non repudiandae animi quaerat expedita assumenda debitis nam atque, aspernatur corrupti consequuntur doloremque quod nulla, itaque, aperiam voluptatem molestiae dolorum quis ab</p> 
                                                                        <span class="vertical-timeline-element-date"><b>Trưa</b></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vertical-timeline-item vertical-timeline-element">
                                                                <div> <span class="vertical-timeline-element-icon bounce-in"> <i class="badge badge-dot badge-dot-xl badge-primary"> </i> </span>
                                                                    <div class="vertical-timeline-element-content bounce-in">
                                                                        <h4 class="timeline-title">Hoạt động 3</h4>
                                                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium omnis sunt, totam officia ab officiis, fuga quae vero asperiores dolores dignissimos blanditiis aperiam. Eligendi at hic aut culpa possimus reiciendis.</p> 
                                                                        <span class="vertical-timeline-element-date"><b>Chiều</b></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vertical-timeline-item vertical-timeline-element">
                                                                <div> <span class="vertical-timeline-element-icon bounce-in"> <i class="badge badge-dot badge-dot-xl badge-success"> </i> </span>
                                                                    <div class="vertical-timeline-element-content bounce-in">
                                                                        <h4 class="timeline-title">Hoạt động 4</h4>
                                                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi saepe alias soluta labore! Nisi, minus ullam. Eum eligendi, facere et quos repellat ad unde, quia id ullam vitae voluptatibus voluptas. 
                                                                            {{-- <a href="javascript:void(0);" data-abc="true">10:00 AM</a> --}}
                                                                        </p> 
                                                                        <span class="vertical-timeline-element-date"><b>Tối</b></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span class="vertical-timeline-element-date" style="font-size:1.3em;color:#414141"><b>Ngày X</b></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
                                        <div class="vertical-timeline-item vertical-timeline-element">
                                            <div><span class="vertical-timeline-element-icon bounce-in"> <i class="badge badge-dot badge-dot-xl badge-success"></i> </span>
                                                <div class="vertical-timeline-element-content bounce-in">
                                                    <h4 class="timeline-title pt-1">Địa điểm 1</h4>
                                                    <div class="vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                            <div><span class="vertical-timeline-element-icon bounce-in"> <i class="badge badge-dot badge-dot-xl badge-warning"> </i> </span>
                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                    <h4 class="timeline-title">Hoạt động 1</h4>
                                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates animi eveniet labore beatae nobis tempora provident, nulla commodi soluta! Aliquam commodi quis beatae quia obcaecati voluptatibus molestiae consectetur totam minima?
                                                                        {{-- <span class="text-success">5:00 PM</span> --}}
                                                                    </p> 
                                                                    <span class="vertical-timeline-element-date"><b>Sáng</b></span>
                                                                    <a href="" aria-expanded="false" role="button" aria-controls="collapse-block3" data-toggle="collapse" data-target="#collapse-block3"><span><i class="icon-caret-down"> Xem thêm</i></span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="collapse" id="collapse-block3">
                                                            <div class="vertical-timeline-item vertical-timeline-element">
                                                                <div> <span class="vertical-timeline-element-icon bounce-in"> <i class="badge badge-dot badge-dot-xl badge-danger"> </i> </span>
                                                                    <div class="vertical-timeline-element-content bounce-in">
                                                                        <h4 class="timeline-title">Hoạt động 2</h4>
                                                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non repudiandae animi quaerat expedita assumenda debitis nam atque, aspernatur corrupti consequuntur doloremque quod nulla, itaque, aperiam voluptatem molestiae dolorum quis ab</p> 
                                                                        <span class="vertical-timeline-element-date"><b>Trưa</b></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vertical-timeline-item vertical-timeline-element">
                                                                <div> <span class="vertical-timeline-element-icon bounce-in"> <i class="badge badge-dot badge-dot-xl badge-primary"> </i> </span>
                                                                    <div class="vertical-timeline-element-content bounce-in">
                                                                        <h4 class="timeline-title">Hoạt động 3</h4>
                                                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium omnis sunt, totam officia ab officiis, fuga quae vero asperiores dolores dignissimos blanditiis aperiam. Eligendi at hic aut culpa possimus reiciendis.</p> 
                                                                        <span class="vertical-timeline-element-date"><b>Chiều</b></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vertical-timeline-item vertical-timeline-element">
                                                                <div> <span class="vertical-timeline-element-icon bounce-in"> <i class="badge badge-dot badge-dot-xl badge-success"> </i> </span>
                                                                    <div class="vertical-timeline-element-content bounce-in">
                                                                        <h4 class="timeline-title">Hoạt động 4</h4>
                                                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi saepe alias soluta labore! Nisi, minus ullam. Eum eligendi, facere et quos repellat ad unde, quia id ullam vitae voluptatibus voluptas. 
                                                                            {{-- <a href="javascript:void(0);" data-abc="true">10:00 AM</a> --}}
                                                                        </p> 
                                                                        <span class="vertical-timeline-element-date"><b>Tối</b></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span class="vertical-timeline-element-date" style="font-size:1.3em;color:#414141"><b>Ngày X</b></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
                                        <div class="vertical-timeline-item vertical-timeline-element">
                                            <div><span class="vertical-timeline-element-icon bounce-in"> <i class="badge badge-dot badge-dot-xl badge-success"></i> </span>
                                                <div class="vertical-timeline-element-content bounce-in">
                                                    <h4 class="timeline-title pt-1">Địa điểm 1</h4>
                                                    <div class="vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
                                                        <div class="vertical-timeline-item vertical-timeline-element">
                                                            <div><span class="vertical-timeline-element-icon bounce-in"> <i class="badge badge-dot badge-dot-xl badge-warning"> </i> </span>
                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                    <h4 class="timeline-title">Hoạt động 1</h4>
                                                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates animi eveniet labore beatae nobis tempora provident, nulla commodi soluta! Aliquam commodi quis beatae quia obcaecati voluptatibus molestiae consectetur totam minima?
                                                                        {{-- <span class="text-success">5:00 PM</span> --}}
                                                                    </p> 
                                                                    <span class="vertical-timeline-element-date"><b>Sáng</b></span>
                                                                    <a href="" aria-expanded="false" role="button" aria-controls="collapse-block4" data-toggle="collapse" data-target="#collapse-block4"><span><i class="icon-caret-down"> Xem thêm</i></span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="collapse" id="collapse-block4">
                                                            <div class="vertical-timeline-item vertical-timeline-element">
                                                                <div> <span class="vertical-timeline-element-icon bounce-in"> <i class="badge badge-dot badge-dot-xl badge-danger"> </i> </span>
                                                                    <div class="vertical-timeline-element-content bounce-in">
                                                                        <h4 class="timeline-title">Hoạt động 2</h4>
                                                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non repudiandae animi quaerat expedita assumenda debitis nam atque, aspernatur corrupti consequuntur doloremque quod nulla, itaque, aperiam voluptatem molestiae dolorum quis ab</p> 
                                                                        <span class="vertical-timeline-element-date"><b>Trưa</b></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vertical-timeline-item vertical-timeline-element">
                                                                <div> <span class="vertical-timeline-element-icon bounce-in"> <i class="badge badge-dot badge-dot-xl badge-primary"> </i> </span>
                                                                    <div class="vertical-timeline-element-content bounce-in">
                                                                        <h4 class="timeline-title">Hoạt động 3</h4>
                                                                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium omnis sunt, totam officia ab officiis, fuga quae vero asperiores dolores dignissimos blanditiis aperiam. Eligendi at hic aut culpa possimus reiciendis.</p> 
                                                                        <span class="vertical-timeline-element-date"><b>Chiều</b></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="vertical-timeline-item vertical-timeline-element">
                                                                <div> <span class="vertical-timeline-element-icon bounce-in"> <i class="badge badge-dot badge-dot-xl badge-success"> </i> </span>
                                                                    <div class="vertical-timeline-element-content bounce-in">
                                                                        <h4 class="timeline-title">Hoạt động 4</h4>
                                                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi saepe alias soluta labore! Nisi, minus ullam. Eum eligendi, facere et quos repellat ad unde, quia id ullam vitae voluptatibus voluptas. 
                                                                            {{-- <a href="javascript:void(0);" data-abc="true">10:00 AM</a> --}}
                                                                        </p> 
                                                                        <span class="vertical-timeline-element-date"><b>Tối</b></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span class="vertical-timeline-element-date" style="font-size:1.3em;color:#414141"><b>Ngày X</b></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tag-widget post-tag-container mb-5 mt-5">
                    <div class="tagcloud">
                        <a href="#" class="tag-cloud-link">Life</a>
                        <a href="#" class="tag-cloud-link">Sport</a>
                        <a href="#" class="tag-cloud-link">Tech</a>
                        <a href="#" class="tag-cloud-link">Travel</a>
                    </div>
                </div>
            </div> <!-- .col-md-8 -->
            <div class="col-lg-3 sidebar ftco-animate bg-light py-md-5">
                <div class="sidebar-box md-5">
                    <form action="#" class="search-form">
                        <div class="form-group">
                            <span class="icon icon-search"></span>
                            <input type="text" class="form-control" placeholder="Tìm kiếm..">
                        </div>
                    </form>
                </div>
                <div class="sidebar-box ftco-animate border-bottom">
                    <h3 class="border-bottom"><b>Lịch trình tour</b></h3>
                    <div class="mb-4 d-flex">
                        <div class="text">
                            <div><a href="#"><span class="icon-list-ul mr-3"></span> Chi tiết tour</a></div>
                            <div class="mt-1"><a href="#"><span class="icon-warning mr-3"></span> Lưu ý</a></div>
                            <div class="mt-1"><a href="#"><span class="icon-calendar mr-3"></span> Ngày khác</a></div>
                            <div class="mt-1"><a href="#"><span class="icon-comment mr-3"></span> Ý kiến khách hàng</a></div>
                            <div class="mt-1"><a href="#"><span class="icon-phone mr-3"></span> Liên hệ</a></div>
                            <div class="mt-1"><a href="#"><span class="icon-map mr-3"></span> Bản đồ</a></div>
                            <div class="mt-3"><a href="#" class="btn btn-primary"><span class="icon-print mr-3"></span>In lịch trình tour</a></div>
                        </div>
                    </div>
                </div>
                <div class="sidebar-box ftco-animate border-bottom">
                    <h3 class="border-bottom"><b>Dịch vụ đi kèm</b></h3>
                    <div class="mb-4 d-flex">
                        <ul class="pl-3" >
                            <a href=""><li>Bữa ăn theo chương trình</li></a>
                            <a href=""><li>Bảo hiểm</li></a> 
                            <a href=""><li>Hướng dẫn viên</li></a>
                            <a href=""><li>Vé tham quan</li></a>
                            <a href=""><li>Vận chuyển</li></a>
                        </ul>
                    </div>
                </div>
                <div class="sidebar-box ftco-animate border-bottom">
                    <h3 class="border-bottom"><b>Hỗ trợ khách hàng</b></h3>
                    <div class="mb-4 d-flex">
                        <div class="text">
                            <div class="mt-1"><a href="#"><span class="icon-phone mr-3"></span> Hotline: 1900 0000</a></div>
                            <div class="mt-1"><a href="#"><span class="icon-envelope mr-3"></span> Email: info@vacation.com</a></div>
                            <div class="mt-2"><a href="#" class="btn btn-primary"><span class="icon-phone"></span> Bạn muốn được gọi lại?</a></div>
                        </div>
                    </div>
                </div>
                <div class="sidebar-box ftco-animate border-bottom">
                    <h3><b>Từ khóa</b></h3>
                    <div class="tagcloud">
                        <a href="#" class="tag-cloud-link">dish</a>
                        <a href="#" class="tag-cloud-link">menu</a>
                        <a href="#" class="tag-cloud-link">food</a>
                        <a href="#" class="tag-cloud-link">sweet</a>
                        <a href="#" class="tag-cloud-link">tasty</a>
                        <a href="#" class="tag-cloud-link">delicious</a>
                        <a href="#" class="tag-cloud-link">desserts</a>
                        <a href="#" class="tag-cloud-link">drinks</a>
                    </div>
                </div>
                
                <div class="sidebar-box ftco-animate">
                    <h3><b>Paragraph</b></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
                </div>
            </div>
            
        </div>
    </div>
</section> <!-- .section --> <!-- .section -->
{{-- Realated tour section --}}
<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container border-bottom">
        <div class="row pb-4">
            <h4 class="border-bottom">Các tour tương tự</h4>
        </div>
        <div class="row">
            <div class="col-md-3 ftco-animate">
                <div class="project-wrap">
                    <a href="{{route('tour-single')}}" class="img" style="background-image: url({{asset('client_template')}}/images/destination-1.jpg);"></a>
                    <div class="text p-4">
                        <span class="price">$300/person</span>
                        <span class="days">8 Days Tour</span>
                        <h3><a href="{{route('tour-single')}}">Bali, Indonesia</a></h3>
                        <p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 ftco-animate">
                <div class="project-wrap">
                    <a href="{{route('tour-single')}}" class="img" style="background-image: url({{asset('client_template')}}/images/destination-2.jpg);"></a>
                    <div class="text p-4">
                        <span class="price">$300/person</span>
                        <span class="days">10 Days Tour</span>
                        <h3><a href="{{route('tour-single')}}">Bali, Indonesia</a></h3>
                        <p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 ftco-animate">
                <div class="project-wrap">
                    <a href="{{route('tour-single')}}" class="img" style="background-image: url({{asset('client_template')}}/images/destination-3.jpg);"></a>
                    <div class="text p-4">
                        <span class="price">$300/person</span>
                        <span class="days">7 Days Tour</span>
                        <h3><a href="{{route('tour-single')}}">Bali, Indonesia</a></h3>
                        <p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 ftco-animate">
                <div class="project-wrap">
                    <a href="{{route('tour-single')}}" class="img" style="background-image: url({{asset('client_template')}}/images/destination-4.jpg);"></a>
                    <div class="text p-4">
                        <span class="price">$300/person</span>
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
                        <span class="price">$300/person</span>
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
                        <span class="price">$300/person</span>
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
                        <span class="price">$300/person</span>
                        <span class="days">8 Days Tour</span>
                        <h3><a href="{{route('tour-single')}}">Bali, Indonesia</a></h3>
                        <p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 ftco-animate">
                <div class="project-wrap">
                    <a href="{{route('tour-single')}}" class="img" style="background-image: url({{asset('client_template')}}/images/destination-8.jpg);"></a>
                    <div class="text p-4">
                        <span class="price">$300/person</span>
                        <span class="days">10 Days Tour</span>
                        <h3><a href="{{route('tour-single')}}">Bali, Indonesia</a></h3>
                        <p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 ftco-animate">
                <div class="project-wrap">
                    <a href="{{route('tour-single')}}" class="img" style="background-image: url({{asset('client_template')}}/images/destination-9.jpg);"></a>
                    <div class="text p-4">
                        <span class="price">$300/person</span>
                        <span class="days">7 Days Tour</span>
                        <h3><a href="{{route('tour-single')}}">Bali, Indonesia</a></h3>
                        <p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 ftco-animate">
                <div class="project-wrap">
                    <a href="{{route('tour-single')}}" class="img" style="background-image: url({{asset('client_template')}}/images/destination-11.jpg);"></a>
                    <div class="text p-4">
                        <span class="price">$300/person</span>
                        <span class="days">10 Days Tour</span>
                        <h3><a href="{{route('tour-single')}}">Bali, Indonesia</a></h3>
                        <p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 ftco-animate">
                <div class="project-wrap">
                    <a href="{{route('tour-single')}}" class="img" style="background-image: url({{asset('client_template')}}/images/destination-12.jpg);"></a>
                    <div class="text p-4">
                        <span class="price">$300/person</span>
                        <span class="days">7 Days Tour</span>
                        <h3><a href="#">Bali, Indonesia</a></h3>
                        <p class="location"><span class="ion-ios-map"></span> Bali, Indonesia</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section pt-5">
    <div class="container">
        <div class="row">
            <h4 class="border-bottom">Các bài viết liên quan</h4>
        </div>
        <div class="row">
            <div class="col-6">
                <ul class="mb-4">
                    <a href="{{route('blog-single')}}"><li>Bài viết 1</li>
                    </a>
                    <a href="{{route('blog-single')}}">
                        <li>Bài viết 2</li>
                    </a>
                    <a href="{{route('blog-single')}}">
                        <li>Bài viết 3</li>
                    </a>
                    <a href="{{route('blog-single')}}">
                        <li>Bài viết 4</li>
                    </a>
                    <a href="{{route('blog-single')}}">
                        <li>Bài viết 5</li>
                    </a>
                    <a href="{{route('blog-single')}}">
                        <li>Bài viết 6</li>
                    </a>
                    <a href="{{route('blog-single')}}">
                        <li>Bài viết 7</li>
                    </a>
                    <a href="{{route('blog-single')}}">
                        <li>Bài viết 8</li>
                    </a>
                    <a href="{{route('blog-single')}}">
                        <li>Bài viết 9</li>
                    </a>
                    <a href="{{route('blog-single')}}">
                        <li>Bài viết 10</li>
                    </a>
                </ul>
            </div>
            <div class="col-6">
                <ul class="mb-4 ">
                    <a href="{{route('blog-single')}}">
                        <li>Bài viết 01</li>
                    </a>
                    <a href="{{route('blog-single')}}">
                        <li>Bài viết 02</li>
                    </a>
                    <a href="{{route('blog-single')}}">
                        <li>Bài viết 03</li>
                    </a>
                    <a href="{{route('blog-single')}}">
                        <li>Bài viết 04</li>
                    </a>
                    <a href="{{route('blog-single')}}">
                        <li>Bài viết 05</li>
                    </a>
                    <a href="{{route('blog-single')}}">
                        <li>Bài viết 06</li>
                    </a>
                    <a href="{{route('blog-single')}}">
                        <li>Bài viết 07</li>
                    </a>
                    <a href="{{route('blog-single')}}">
                        <li>Bài viết 08</li>
                    </a>
                    <a href="{{route('blog-single')}}">
                        <li>Bài viết 09</li>
                    </a>
                    <a href="{{route('blog-single')}}">
                        <li>Bài viết 10</li>
                    </a>
                </ul>
            </div>
        </div>
    </div>
</div>
</section>
@endsection