@extends('welcome')
@section('view-content')
<!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hero-items owl-carousel">
            <div class="single-hero-item set-bg" data-setbg="{{asset('public/fontend/images/anhxedoi.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            {{-- <div class="hero-text"> --}}
                                {{-- <p class="room-location"><i class="icon_pin"></i> 9721 Glen Creek Ave. Ballston Spa, NY</p>
                                <h2>Villa 9721 Glen Creek</h2>
                                <div class="room-price">
                                    <span>Start Form:</span>
                                    <p>$3.000.000</p>
                                </div>
                                <ul class="room-features">
                                    <li>
                                        <i class="fa fa-arrows"></i>
                                        <p>5201 sqft</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-bed"></i>
                                        <p>8 Bed Room</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-bath"></i>
                                        <p>7 Baths Bed</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-car"></i>
                                        <p>1 Garage</p>
                                    </li>
                                </ul> --}}
                            {{-- </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-hero-item set-bg" data-setbg="{{asset('public/fontend/images/hero-2.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            {{-- <div class="hero-text"> --}}
                                {{-- <p class="room-location"><i class="icon_pin"></i> 9721 Glen Creek Ave. Ballston Spa, NY</p>
                                <h2>Villa 9721 Glen Creek</h2>
                                <div class="room-price">
                                    <span>Start Form:</span>
                                    <p>$3.000.000</p>
                                </div>
                                <ul class="room-features">
                                    <li>
                                        <i class="fa fa-arrows"></i>
                                        <p>5201 sqft</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-bed"></i>
                                        <p>8 Bed Room</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-bath"></i>
                                        <p>7 Baths Bed</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-car"></i>
                                        <p>1 Garage</p>
                                    </li>
                                </ul> --}}
                            {{-- </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-hero-item set-bg" data-setbg="{{asset('public/fontend/images/hero-3.jpg')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            {{-- <div class="hero-text"> --}}
                                {{-- <p class="room-location"><i class="icon_pin"></i> 9721 Glen Creek Ave. Ballston Spa, NY</p>
                                <h2>Villa 9721 Glen Creek</h2>
                                <div class="room-price">
                                    <span>Start Form:</span>
                                    <p>$3.000.000</p>
                                </div>
                                <ul class="room-features">
                                    <li>
                                        <i class="fa fa-arrows"></i>
                                        <p>5201 sqft</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-bed"></i>
                                        <p>8 Bed Room</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-bath"></i>
                                        <p>7 Baths Bed</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-car"></i>
                                        <p>1 Garage</p>
                                    </li>
                                </ul> --}}
                            {{-- </div> --}}
                        </div>
                    </div>
                </div>
            </div>
</div><!-- Hero Section End -->

{{-- <!-- Search Form Section Begin -->
<div class="search-form">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="search-form-text">
                    <div class="search-text">
                        <i class="fa fa-search"></i>
                        Find Your Home
                    </div>
                    <div class="home-text">
                        <i class="fa fa-home"></i>
                        House For Sell
                    </div>
                </div>
                <form action="#" class="filter-form">
                    <div class="first-row">
                        <select>
                            <option value="">Villa & Pool</option>
                        </select>
                        <select>
                            <option value="">Title</option>
                        </select>
                        <select>
                            <option value="">Ani City</option>
                        </select>
                        <select>
                            <option value="">Any Bithrooms</option>
                        </select>
                    </div>
                    <div class="second-row">
                        <select>
                            <option value="">Any Bedrooms</option>
                        </select>
                        <div class="price-range-wrap">
                            <div class="price-text">
                                <label for="priceRange">Price:</label>
                                <input type="text" id="priceRange" readonly>
                            </div>
                            <div id="price-range" class="slider"></div>
                        </div>
                        <div class="room-size-range">
                            <div class="price-text">
                                <label for="roomsizeRange">Size:</label>
                                <input type="text" id="roomsizeRange" readonly>
                            </div>
                            <div id="roomsize-range" class="slider"></div>
                        </div>
                        <button type="button" class="search-btn">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Search Form Section End --> --}}

<!-- How It Works Section Begin -->
<section class="howit-works spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Tìm Chuyến Xe Mơ Ước Của Bạn</span>
                    <h2>How It Work</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="single-howit-works">
                    <img src="{{asset('public/fontend/images/howit-works-1.png')}}" alt="">
                    <h4>Dịch Vụ</h4>
                    <p>Đảm bảo 100% an toàn tuyệt đối về người và hành lý trên xe.
                        Cung cấp xe với chất lượng tốt nhất, đảm bảo vệ sinh sạch sẽ, tiện nghi cao cấp, giải trí, thoải mái cho du khách.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-howit-works">
                    <img src="{{asset('public/fontend/images/howit-works-2.png')}}" alt="">
                    <h4>Tìm Lộ Trình Của Bạn</h4>
                    <p>Các địa điểm du lịch nổi tiếng khắp Đà Nẵng ,
                        Giá cả hợp lý, cạnh tranh nhất Đà Nẵng. Cam kết chỉ thu tiền khi khách hàng hài lòng

                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-howit-works">
                    <img src="{{asset('public/fontend/images/howit-works-3.png')}}" alt="">
                    <h4>Nói Chuyện Với Tài Xế</h4>
                    <p>Nhân viên phục vụ ,  trả lời 24/7, 
                        Miễn phí đưa đón tận nhà. Miễn phí Wifi, khăn lạnh, nước suối,...
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- How It Works Section End -->

<!-- Feature Section Begin -->
<section class="feature-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Địa Điểm Du Lịch

                    </span>
                    <h2>Featured Properties</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="feature-carousel owl-carousel">
                @foreach ($product_public as $item=>$all_product)
                    
                
                <div class="col-lg-4">
                    <a href="{{URL::to('/details-product/'.$all_product->product_id)}}">
                    <div class="feature-item">
                        <div class="fi-pic set-bg" data-setbg="{{asset('public/images/uploads/'.$all_product->product_image)}}">
                            <div class="pic-tag">
                                <div class="f-text">feauture</div>
                                <div class="s-text">For Sale</div>
                            </div>
                            <div class="feature-author">
                                <div class="fa-pic">
                                    <img src="{{asset('public/fontend/images/f-author-1.jpg')}}" alt="">
                                </div>
                                <div class="fa-text">
                                    <span>Admin</span>
                                </div>
                            </div>
                        </div>
                        <div class="fi-text">
                            <div class="inside-text">
                                <h4>{{$all_product->product_name}}</h4>
                                <ul>
                                    <li><i class="fa fa-map-marker"></i>Đà Nẵng</li>
                                    <li><i class="fa fa-tag"></i> Villa</li>
                                </ul>
                                <h5 class="price">{{number_format($all_product->product_price)}}<span> VNĐ</span></h5>
                            </div>
                            <ul class="room-features">
                                {{-- <li>
                                    <i class="fa fa-arrows"></i>
                                    <p>780 sqft</p>
                                </li>
                                <li>
                                    <i class="fa fa-bed"></i>
                                    <p>4</p>
                                </li>
                                <li>
                                    <i class="fa fa-bath"></i>
                                    <p>3</p>
                                </li>
                                <li>
                                    <i class="fa fa-car"></i>
                                    <p>2</p>
                                </li> --}}
                            </ul>
                        </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- Feature Section End -->

<!-- Video Section Begin -->
<div class="video-section set-bg" data-setbg="{{asset('public/fontend/images/video-bg.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="video-text">
                    <a href="https://www.youtube.com/watch?v=ZRDtcEjuY7Y" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                    <h4>Admin</h4>
                    <h2>Xe Du Lịch</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Video Section End -->

<!-- Top Properties Section Begin -->
<div class="top-properties-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="properties-title">
                    <div class="section-title">
                        <span>Xe Giá Rẻ</span>
                        <h2>Top Properties</h2>
                    </div>
                    <a href="#" class="top-property-all">View All Property</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="top-properties-carousel owl-carousel">
            @foreach ($product_public as $item=>$all_product)
            <div class="single-top-properties">
                <div class="row">
                    <div class="col-lg-6">
                        <a href="{{URL::to('/details-product/'.$all_product->product_id)}}">
                        <div class="stp-pic">
                            <img src="{{asset('public/images/uploads/'.$all_product->product_image)}}"  alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="stp-text">
                            <div class="s-text">For Sale</div>
                            <h2>{{$all_product->product_name}}</h2>
                            <div class="room-price">
                                <span>Giá Bán:</span>
                                <h4>{{number_format($all_product->product_price)}} VNĐ</h4>
                            </div>
                            <div class="properties-location"><i class="icon_pin"></i>Đà Nẵng</div>
                            <p>{!!$all_product->product_desc!!}</p>
                            <ul class="room-features">
                                {{-- <li>
                                    <i class="fa fa-arrows"></i>
                                    <p>5201 sqft</p>
                                </li>
                                <li>
                                    <i class="fa fa-bed"></i>
                                    <p>8 Bed Room</p>
                                </li>
                                <li>
                                    <i class="fa fa-bath"></i>
                                    <p>7 Baths Bed</p>
                                </li>
                                <li>
                                    <i class="fa fa-car"></i>
                                    <p>1 Garage</p>
                                </li> --}}
                            </ul>
                        </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Top Properties Section End -->

<!-- Agent Section Begin -->
{{-- <section class="agent-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Chúng Tôi Sẽ Giúp Bạn</span>
                    <h2>Our Agents</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="agent-carousel owl-carousel">
                <div class="col-lg-3">
                    <div class="single-agent">
                        <div class="sa-pic">
                            <img src="{{asset('fontend/images/agent-1.jpg')}}" alt="">
                            <div class="hover-social">
                                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            </div>
                        </div>
                        <h5>Matthew Robbins <span>Founder & Ceo</span></h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single-agent">
                        <div class="sa-pic">
                            <img src="{{asset('fontend/images/agent-2.jpg')}}" alt="">
                            <div class="hover-social">
                                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            </div>
                        </div>
                        <h5>Tillie Burns <span>Marketing Manager</span></h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single-agent">
                        <div class="sa-pic">
                            <img src="{{asset('fontend/images/agent-3.jpg')}}" alt="">
                            <div class="hover-social">
                                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            </div>
                        </div>
                        <h5>Derrick Lawson <span>Company Agents</span></h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single-agent">
                        <div class="sa-pic">
                            <img src="{{asset('fontend/images/agent-4.jpg')}}" alt="">
                            <div class="hover-social">
                                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            </div>
                        </div>
                        <h5>Clifford Colon <span>Saler Manager</span></h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="single-agent">
                        <div class="sa-pic">
                            <img src="{{asset('fontend/images/agent-5.jpg')}}" alt="">
                            <div class="hover-social">
                                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            </div>
                        </div>
                        <h5>Clifford Colon <span>Saler Manager</span></h5>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
{{-- </section> --}}
<!-- Agent Section End -->

<!-- Latest Blog Section Begin -->
<section class="blog-section latest-blog spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Blog</span>
                    <h2>NEWS</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($blog as $item)
                
            
            <div class="col-lg-4">
                <div class="single-blog-item">
                    <a href="{{URL::to('/details-blog/'.$item->blog_id)}}">
                        <div class="sb-pic">
                            <img src="{{asset('public/images/uploads/'.$item->blog_image)}}" width="200" height="250" alt="">
                        </div>
                        <div class="sb-text">
                            <ul>
                                <li><i class="fa fa-user"></i>{{$item->user_name}}</li>
                                <li><i class="fa fa-clock-o"></i> 18th Jan, 2012</li>
                            </ul>
                            <h4><a href="{{URL::to('/details-blog/'.$item->blog_id)}}">{{$item->blog_name}}.</a></h4>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
   
      
        </div>
    </div>
</section>
@endsection
