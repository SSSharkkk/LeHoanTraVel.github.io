@extends('welcome')
@section('view-content')
 <!-- Blog Details Hero Section Begin -->
 <section class="blog-details-hero set-bg" data-setbg="{{asset('fontend/images/blog-details-hero.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                @foreach ($details_blog as $item)
                  
                <div class="bd-hero-text">
                    <span>Lê Hoàn Travel</span>
                    <h2>{{$item->blog_name}}</h2>
                    <ul>
                        <li><i class="fa fa-user"></i> {{$item->user_name}}</li>
                        <li><i class="fa fa-clock-o"></i> 12th Feb, 2022</li>
                    </ul>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!--  Blog Details Hero Section Begin -->

<!-- Blog Details Section Begin -->
<section class="blog-details-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-1 offset-lg-1">
                <div class="blog-details-social">
                    <h6>Social</h6>
                    <div class="social-list">
                        <a href="https://www.facebook.com/nhaptengi"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-zalo"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="tel:0869041145"><i class="fa fa-phone"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                @foreach ($details_blog as $item)
                    
                
                <div class="blog-details-title">
                    <p>{!!$item->blog_content!!}</p>
                </div>
            </div>
        </div>
     
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                @endforeach
                <div class="tag-share-option">
                    <div class="tags">
                        <a href="{{URL::to('/blog')}}">Quay Lại Blog</a>
                        <a href="{{URL::to('/trang-chu')}}">Trang Chủ</a>
                    </div>
                    <div class="social-share">
                        <span>Social:</span>
                        <a href="https://www.facebook.com/nhaptengi"><i class="fa fa-facebook"></i></a>
                       
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                    
                        <a href="tel:0905414342"><i class="fa fa-phone"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            

        </div>
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="leave-comment">
                    <h4>Đặt Xe Online</h4>
                 
                        <div class="col-lg-6 offset-lg-1">
                            <form action="{{URL::to('/send-mail')}}" class="agent-contact-form">
                                {{ csrf_field() }}
                                <input type="text" data-validation="length" data-validation-length="min1" data-validation-error-msg="Vui Lòng Nhập Tên Của Bạn" name="mail_name" placeholder="Tên*">
                                    <input type="text" data-validation="length" data-validation-length="min1" data-validation-error-msg="Vui Lòng Nhập Số điện thoại" name="mail_phone" placeholder="Số điện thoại">
                                    <input type="text" data-validation="length" data-validation-length="min1" data-validation-error-msg="Vui Lòng Nhập Địa điểm" name="mail_address" placeholder="Địa điểm đón :">
                                    <input type="text" data-validation="length" data-validation-length="min1" data-validation-error-msg="Vui Lòng Nhập Nội Dung" name="mail_content" placeholder="Ghi chú :">
                                    <p>Thời gian đón</p>
                                    <input type="datetime-local"   name="mail_date"data-validation="length" data-validation-length="min1" data-validation-error-msg="Vui Lòng Nhập Thời Gian đón"  >
                                    <div style="display: flex">
                                        <select name="mail_socho" id="">
                                            <option value="0">Chọn số chỗ *</option>
                                            <option value="1">4 Chỗ</option>
                                            <option value="2">7 Chỗ</option>
                                            <option value="3">16 Chỗ</option>
                                        </select>
                                     
                                        <select name="mail_sochieu" id="">
                                            <option value="0">Chọn số chiều *</option>
                                            <option value="1">1 Chiều</option>
                                            <option value="2">2 Chiều</option>
                                        </select>
                                        <select name="mail_lotrinh" id="">
                                            <option value="0">Chọn Lộ Trình *</option>
                                            <option value="1">Đón Tiễn Sân Bay Đà Nẵng</option>
                                            <option value="2">Đà Nẵng Đi Hội An</option>
                                            <option value="3">Đà Nẵng Đi Bà Nà Hill</option>
                                            <option value="4">Đà Nẵng Đi Núi Thần Tài</option>
                                            <option value="5">Đà Nẵng Đi Cù Lao Chàm</option>
                                            <option value="6">Đà Nẵng Đi Ngũ Hành Sơn</option>
                                            <option value="7">Đà Nẵng Đi Chùa Linh Ứng</option>
                                            <option value="8">Đà Nẵng Đi Hòa Phú Thành</option>
                                            <option value="9">Đà Nẵng Đi Vinpearl Nam Hội An</option>
                                            <option value="10">Đà Nẵng Đi Mỹ Sơn</option>
                                            <option value="11">Đà Nẵng Đi Huế</option>
                                            <option value="12">Đà Nẵng Đi Thánh Địa La Vang</option>
                                        </select>
                                    </div> <br>
                                <button type="submit" class="site-btn">Send Message</button>
                            </form>
                        </div>
    
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
<!-- Blog Details Section End -->