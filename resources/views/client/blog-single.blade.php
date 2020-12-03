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
        <h1 class="mb-3 bread">Tên blog</h1>
        <p class="breadcrumbs"><span class="mr-2"><a href="{{route('home')}}">Trang chủ <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="blog.html">Blog <i class="ion-ios-arrow-forward"></i></a></span> <span>Tên blog <i class="ion-ios-arrow-forward"></i></span></p>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 order-md-last ftco-animate py-md-5 mt-md-5">
        <h2 class="mb-3"><b>Tiêu đề blog</b></h2>
        <div class="meta mb-2">
          <a href="#" class="mr-3"><span class="icon-calendar"></span> 21 Tháng 11, 2020</a>
          <a href="#" class="mr-3"><span class="icon-person"></span> Admin</a>
          <a href="#comment"><span class="icon-chat"></span> 19</a>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, eius mollitia suscipit, quisquam doloremque distinctio perferendis et doloribus unde architecto optio laboriosam porro adipisci sapiente officiis nemo accusamus ad praesentium? Esse minima nisi et. Dolore perferendis, enim praesentium omnis, iste doloremque quia officia optio deserunt molestiae voluptates soluta architecto tempora.</p>
        <p>
          <img src="{{asset('client_template')}}/images/image_6.jpg" alt="" class="img-fluid">
        </p>
        <p>Molestiae cupiditate inventore animi, maxime sapiente optio, illo est nemo veritatis repellat sunt doloribus nesciunt! Minima laborum magni reiciendis qui voluptate quisquam voluptatem soluta illo eum ullam incidunt rem assumenda eveniet eaque sequi deleniti tenetur dolore amet fugit perspiciatis ipsa, odit. Nesciunt dolor minima esse vero ut ea, repudiandae suscipit!</p>
        <h2 class="mb-3 mt-5">#2. Creative WordPress Themes</h2>
        <p>Temporibus ad error suscipit exercitationem hic molestiae totam obcaecati rerum, eius aut, in. Exercitationem atque quidem tempora maiores ex architecto voluptatum aut officia doloremque. Error dolore voluptas, omnis molestias odio dignissimos culpa ex earum nisi consequatur quos odit quasi repellat qui officiis reiciendis incidunt hic non? Debitis commodi aut, adipisci.</p>
        <p>
          <img src="{{asset('client_template')}}/images/image_4.jpg" alt="" class="img-fluid">
        </p>
        <p>Quisquam esse aliquam fuga distinctio, quidem delectus veritatis reiciendis. Nihil explicabo quod, est eos ipsum. Unde aut non tenetur tempore, nisi culpa voluptate maiores officiis quis vel ab consectetur suscipit veritatis nulla quos quia aspernatur perferendis, libero sint. Error, velit, porro. Deserunt minus, quibusdam iste enim veniam, modi rem maiores.</p>
        <p>Odit voluptatibus, eveniet vel nihil cum ullam dolores laborum, quo velit commodi rerum eum quidem pariatur! Quia fuga iste tenetur, ipsa vel nisi in dolorum consequatur, veritatis porro explicabo soluta commodi libero voluptatem similique id quidem? Blanditiis voluptates aperiam non magni. Reprehenderit nobis odit inventore, quia laboriosam harum excepturi ea.</p>
        <p>Adipisci vero culpa, eius nobis soluta. Dolore, maxime ullam ipsam quidem, dolor distinctio similique asperiores voluptas enim, exercitationem ratione aut adipisci modi quod quibusdam iusto, voluptates beatae iure nemo itaque laborum. Consequuntur et pariatur totam fuga eligendi vero dolorum provident. Voluptatibus, veritatis. Beatae numquam nam ab voluptatibus culpa, tenetur recusandae!</p>
        <p>Voluptas dolores dignissimos dolorum temporibus, autem aliquam ducimus at officia adipisci quasi nemo a perspiciatis provident magni laboriosam repudiandae iure iusto commodi debitis est blanditiis alias laborum sint dolore. Dolores, iure, reprehenderit. Error provident, pariatur cupiditate soluta doloremque aut ratione. Harum voluptates mollitia illo minus praesentium, rerum ipsa debitis, inventore?</p>
        
        <div class="about-author d-flex p-4 bg-light">
          <div class="bio mr-5">
            <img src="{{asset('client_template')}}/images/person_1.jpg" alt="Image placeholder" class="img-fluid mb-4">
          </div>
          <div class="desc">
            <h3>George Washington</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
          </div>
        </div>
        
        
        <div class="pt-5 mt-5" id="comment">
          <h3 class="mb-5">6 Bình luận</h3>
          <ul class="comment-list">
            <li class="comment">
              <div class="vcard bio">
                <img src="{{asset('client_template')}}/images/person_1.jpg" alt="Image placeholder">
              </div>
              <div class="comment-body">
                <h3>Jackson</h3>
                <div class="meta">03, Tháng 11, 2020 - 2:21pm</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                <p><a href="#" class="reply">Trả lời</a></p>
              </div>
            </li>
            
            <li class="comment">
              <div class="vcard bio">
                <img src="{{asset('client_template')}}/images/person_1.jpg" alt="Image placeholder">
              </div>
              <div class="comment-body">
                <h3>Jackson</h3>
                <div class="meta">03, Tháng 11, 2020 - 2:21pm</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                <p><a href="#" class="reply">Trả lời</a></p>
              </div>
              
              <ul class="children">
                <li class="comment">
                  <div class="vcard bio">
                    <img src="{{asset('client_template')}}/images/person_1.jpg" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3>Jackson</h3>
                    <div class="meta">03, Tháng 11, 2020 - 2:21pm</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                    <p><a href="#" class="reply">Trả lời</a></p>
                  </div>
                  
                  
                  <ul class="children">
                    <li class="comment">
                      <div class="vcard bio">
                        <img src="{{asset('client_template')}}/images/person_1.jpg" alt="Image placeholder">
                      </div>
                      <div class="comment-body">
                        <h3>Jackson</h3>
                        <div class="meta">03, Tháng 11, 2020 - 2:21pm</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                        <p><a href="#" class="reply">Trả lời</a></p>
                      </div>
                      
                      <ul class="children">
                        <li class="comment">
                          <div class="vcard bio">
                            <img src="{{asset('client_template')}}/images/person_1.jpg" alt="Image placeholder">
                          </div>
                          <div class="comment-body">
                            <h3>Jackson</h3>
                            <div class="meta">03, Tháng 11, 2020 - 2:21pm</div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                            <p><a href="#" class="reply">Trả lời</a></p>
                          </div>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            
            <li class="comment">
              <div class="vcard bio">
                <img src="{{asset('client_template')}}/images/person_1.jpg" alt="Image placeholder">
              </div>
              <div class="comment-body">
                <h3>Jackson</h3>
                <div class="meta">03, Tháng 11, 2020 - 2:21pm</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                <p><a href="#" class="reply">Trả lời</a></p>
              </div>
            </li>
          </ul>
          <!-- END comment-list -->
          
          <div class="comment-form-wrap pt-5">
            <h3><b>Bình luận</b></h3>
            <form action="#" class="p-5 bg-light">
              <div class="form-group">
                <label for="name">Họ tên *</label>
                <input type="text" class="form-control" id="name">
              </div>
              <div class="form-group">
                <label for="email">Email *</label>
                <input type="email" class="form-control" id="email">
              </div>
              <div class="form-group">
                <label for="website">Website</label>
                <input type="url" class="form-control" id="website">
              </div>
              
              <div class="form-group">
                <label for="message">Lời nhắn</label>
                <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Bình luận" class="btn py-3 px-4 btn-primary">
              </div>
              
            </form>
          </div>
        </div>
        
      </div> <!-- .col-md-8 -->
      <div class="col-lg-4 sidebar ftco-animate bg-light py-md-5">
        <div class="sidebar-box pt-md-5">
          <form action="#" class="search-form">
            <div class="form-group">
              <span class="icon icon-search"></span>
              <input type="text" class="form-control" placeholder="Tour du lịch, điểm đến,...">
            </div>
          </form>
        </div>
        <div class="sidebar-box ftco-animate">
          <div class="categories">
              <h3>Categories</h3>
              <li><a href="#">Travel <span>(12)</span></a></li>
              <li><a href="#">Tour <span>(22)</span></a></li>
              <li><a href="#">Destination <span>(37)</span></a></li>
              <li><a href="#">Drinks <span>(42)</span></a></li>
              <li><a href="#">Foods <span>(14)</span></a></li>
              <li><a href="#">Travel <span>(140)</span></a></li>
          </div>
      </div>
        <div class="sidebar-box ftco-animate">
          <h3>Tin mới nhất</h3>
          <div class="block-21 mb-4 d-flex">
            <a class="blog-img mr-4" style="background-image: url({{asset('client_template')}}/images/image_1.jpg);"></a>
            <div class="text">
              <h3 class="heading"><a href="{{route('blog-single')}}">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a></h3>
              <div class="meta">
                <div><a href="{{route('blog-single')}}"><span class="icon-calendar"></span> 21 Tháng 11, 2020</a></div>
                <div><a href="{{route('blog-single')}}"><span class="icon-person"></span> Admin</a></div>
                <div><a href="{{route('blog-single')}}"><span class="icon-chat"></span> 19</a></div>
              </div>
            </div>
          </div>
          <div class="block-21 mb-4 d-flex">
            <a class="blog-img mr-4" style="background-image: url({{asset('client_template')}}/images/image_2.jpg);"></a>
            <div class="text">
              <h3 class="heading"><a href="{{route('blog-single')}}">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a></h3>
              <div class="meta">
                <div><a href="{{route('blog-single')}}"><span class="icon-calendar"></span> 21 Tháng 11, 2020</a></div>
                <div><a href="{{route('blog-single')}}"><span class="icon-person"></span> Admin</a></div>
                <div><a href="{{route('blog-single')}}"><span class="icon-chat"></span> 19</a></div>
              </div>
            </div>
          </div>
          <div class="block-21 mb-4 d-flex">
            <a class="blog-img mr-4" style="background-image: url({{asset('client_template')}}/images/image_3.jpg);"></a>
            <div class="text">
              <h3 class="heading"><a href="{{route('blog-single')}}">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a></h3>
              <div class="meta">
                <div><a href="{{route('blog-single')}}"><span class="icon-calendar"></span> 21 Tháng 11, 2020</a></div>
                <div><a href="{{route('blog-single')}}"><span class="icon-person"></span> Admin</a></div>
                <div><a href="{{route('blog-single')}}"><span class="icon-chat"></span> 19</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> <!-- .section -->
@endsection