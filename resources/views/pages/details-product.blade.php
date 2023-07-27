@extends('welcome')
@section('view-content')


<!-- Property Details Section Begin -->
<section class="property-details-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="pd-details-text">
                    <div class="pd-details-social">
                        <a href="https://www.facebook.com/nhaptengi"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-send"></i></a>
                        <a href="#"><i class="fa fa-star"></i></a>
                        <a href="#"><i class="fa fa-print"></i></a>
                        <a href="#"><i class="fa fa-cloud-download"></i></a>
                    </div>
                    @foreach ($details_product as $item=>$product_all)
                        
                    
                    <div class="property-more-pic">
                        <div class="product-pic-zoom">
                            <img class="product-big-img" src="{{asset('public/images/uploads/'.$product_all->product_image)}}" height="400" width="100" alt="">
                        </div>
                        <div class="product-thumbs">
                            <div class="product-thumbs-track ps-slider owl-carousel">
                                @foreach ($gallery as $item=>$gal)
                                    
                                <div class="pt" data-imgbigurl="{{asset('/images/gallery/'.$gal->gallery_image)}}">
                                    <img
                                    src="{{asset('/images/gallery/'.$gal->gallery_image)}}" width="100" height="100" alt="">
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="pd-desc">
                        <h4>{{$product_all->product_name}}</h4>
                        <p>{!!$product_all->product_desc!!}</p>
                    </div>
                    <div class="pd-details-tab">
                        <div class="tab-item">
                            <ul class="nav" role="tablist">
                                <li>
                                    <a class="active" data-toggle="tab" href="#tab-1" role="tab">Tổng Quan</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab-2" role="tab">Mô Tả</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab-3" role="tab">Dịch Vụ</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab-4" role="tab">1 Chiều</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab-5" role="tab">2 Chiều</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-item-content">
                            <div class="tab-content">
                                <div class="tab-pane fade-in active" id="tab-1" role="tabpanel">
                                    <div class="property-more-table">
                                        <table class="left-table">
                                            <tbody>
                                                <tr>
                                                    <td class="pt-name">Giá : </td>
                                                    <td class="p-value">{{number_format($product_all->product_price)}} VNĐ</td>
                                                </tr>
                                                <tr>
                                                    <td class="pt-name">Loại Xe</td>
                                                    <td class="p-value">{{$product_all->type_name}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="pt-name">Tài xế</td>
                                                    <td class="p-value">Lê Hoàn</td>
                                                </tr>
                                                {{-- <tr>
                                                    <td class="pt-name">Phòng Tắm</td>
                                                    <td class="p-value">3</td>
                                                </tr>
                                                <tr>
                                                    <td class="pt-name">Phòng</td>
                                                    <td class="p-value">12</td>
                                                </tr>
                                                <tr>
                                                    <td class="pt-name">Chỗ Đậu Xe</td>
                                                    <td class="p-value">3</td>
                                                </tr> --}}
                                                <tr>
                                                    {{-- <td class="pt-name">Thời gian</td>
                                                    <td class="p-value">{{$product_all->product_kilomet}}</td> --}}
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table class="right-table">
                                            <tbody>
                                                {{-- <tr>
                                                    <td class="pt-name">Đại Lý</td>
                                                    <td class="p-value">admin</td>
                                                </tr> --}}
                                                {{-- <tr>
                                                    <td class="pt-name">Tài Liệu Kham Khảo</td>
                                                    <td class="p-value">#2019</td>
                                                </tr> --}}
                                                {{-- <tr>
                                                    <td class="pt-name">Loại Hợp Động</td>
                                                    <td class="p-value">Sale</td>
                                                </tr>
                                                <tr>
                                                    <td class="pt-name">Giường</td>
                                                    <td class="p-value">4</td>
                                                </tr>
                                                <tr>
                                                    <td class="pt-name">Nhà Để Xe</td>
                                                    <td class="p-value">2</td>
                                                </tr>
                                                <tr>
                                                    <td class="pt-name">Khu Nhà</td>
                                                    <td class="p-value">1200 sqft</td>
                                                </tr> --}}
                                                {{-- <tr>
                                                    <td class="pt-name">Kích Thước Nhà Xe</td>
                                                    <td class="p-value">200 sqft</td>
                                                </tr> --}}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-2" role="tabpanel">
                                    <div class="pd-table-desc">
                                        <p>{!!$product_all->product_desc!!}</p>
                                        
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-3" role="tabpanel">
                                    <div class="pd-table-amenities">
                                        {!!$product_all->product_content!!}</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-4" role="tabpanel">
                                    <div class="pd-table-desc">
                                        <div class="property-more-table">
                                            <table class="left-table">
                                                <tbody>
                                                    <tr>
                                                        <td class="pt-name">4 Chỗ : </td>
                                                        <td class="p-value">{{number_format($product_all->gia_1chieu_4cho)}} VNĐ</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pt-name">7 Chỗ :</td>
                                                        <td class="p-value">{{number_format($product_all->gia_1chieu_7cho)}} VNĐ</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pt-name">16 Chỗ :</td>
                                                        <td class="p-value">{{number_format($product_all->gia_1chieu_16cho)}} VNĐ</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab-5" role="tabpanel">
                                    <div class="pd-table-desc">
                                        <div class="property-more-table">
                                            <table class="left-table">
                                                <tbody>
                                                    <tr>
                                                        <td class="pt-name">4 Chỗ : </td>
                                                        <td class="p-value">{{number_format($product_all->gia_2chieu_4cho)}} VNĐ</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pt-name">7 Chỗ :</td>
                                                        <td class="p-value">{{number_format($product_all->gia_2chieu_7cho)}} VNĐ</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pt-name">16 Chỗ :</td>
                                                        <td class="p-value">{{number_format($product_all->gia_2chieu_16cho)}} VNĐ</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="property-map">
                        <h4>Map</h4>
                        <div class="map-inside">
                            <iframe
                            src="{{$product_all->product_map}}"
                            height="320" style="border:0;" allowfullscreen=""></iframe>
                            <div class="icon">
                                <i class="fa fa-home"></i>
                            </div>
                        </div>
                    </div> --}}
                    @endforeach
                    <div class="property-contactus">
                        <h4>Đặt Xe Online</h4>
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="agent-desc">
                                    <img src="img/properties/agent-contact.jpg" alt="">
                                    <div class="agent-title">
                                        <h5>admin</h5>
                                        <span>Saler Marketing</span>
                                    </div>
                                    <div class="agent-social">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-envelope"></i></a>
                                    </div>
                                    <p>Please book an appointment online, so that we can schedule and prepare in the best way
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6 offset-lg-1">
                                <form action="{{URL::to('/send-mail')}}" class="agent-contact-form" method="GET">
                                    {{ csrf_field() }}
                                    <input type="text" data-validation="length" data-validation-length="min1" data-validation-error-msg="Vui Lòng Nhập Tên Của Bạn" name="mail_name" placeholder="Họ Và Tên*">
                                    <input type="text" data-validation="length" data-validation-length="min1" data-validation-error-msg="Vui Lòng Nhập Số điện thoại" name="mail_phone" placeholder="Số Điện Thoại*">
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
                                    <p>Ngày Đón + Thời Gian Đón *</p>
                                    <input type="datetime-local"   name="mail_date"data-validation="length" data-validation-length="min1" data-validation-error-msg="Vui Lòng Nhập Thời Gian đón"  >
                                    <input type="text" data-validation="length" data-validation-length="min1" data-validation-error-msg="Vui Lòng Nhập Địa điểm" name="mail_address" placeholder="Địa điểm đón : khách sạn...">
                                     <textarea type="text" data-validation="length" data-validation-length="min1" data-validation-error-msg="Vui Lòng Nhập Nội Dung" name="mail_content" placeholder="Ghi chú : xe đón nhanh..."></textarea>
                                   
                                    <button type="submit" class="site-btn">Send Mail</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                {{-- <div class="property-sidebar">
                    <h4>Tìm Kiếm</h4>
                    <form action="#" class="sidebar-search">
                        <div class="sidebar-btn">
                            <div class="bt-item">
                                <input type="radio" name="s-type" id="st-buy" checked>
                                <label for="st-buy">Mua</label>
                            </div>
                            <div class="bt-item">
                                <input type="radio" name="s-type" id="st-rent">
                                <label for="st-rent">Thuê</label>
                            </div>
                        </div>
                        <select>
                            <option value="">Locations</option>
                        </select>
                        <select>
                            <option value="">Status</option>
                        </select>
                        <select>
                            <option value="">No of Bedroom</option>
                        </select>
                        <select>
                            <option value="">No of Bathrooms</option>
                        </select>
                        <select>
                            <option value="">No of Guest</option>
                        </select>
                        <div class="room-size-range">
                            <div class="price-text">
                                <label for="roomsizeRangeP">Size:</label>
                                <input type="text" id="roomsizeRangeP" readonly>
                            </div>
                            <div id="roomsize-range-P" class="slider"></div>
                        </div>
                        <div class="price-range-wrap">
                            <div class="price-text">
                                <label for="priceRangeP">Price:</label>
                                <input type="text" id="priceRangeP" readonly>
                            </div>
                            <div id="price-range-P" class="slider"></div>
                        </div>
                        <div class="call-him">
                            <a href="tel:0869041145" class="search-btn">Gọi Điện</a>
                        </div>
                    </form> --}}
                    {{-- <div class="best-agents">
                        <h4>Best Agents</h4>
                        <a href="#" class="ba-item">
                            <div class="ba-pic">
                                <img src="" alt="">
                            </div>
                            <div class="ba-text">
                                <h5>Lester Bradley</h5>
                                <span>Company Agents</span>
                                <p class="property-items">6 property </p>
                            </div>
                        </a>
                        <a href="#" class="ba-item">
                            <div class="ba-pic">
                                <img src="" alt="">
                            </div>
                            <div class="ba-text">
                                <h5>Janie Blair</h5>
                                <span>Company Agents</span>
                                <p class="property-items">6 property </p>
                            </div>
                        </a>
                        <a href="#" class="ba-item">
                            <div class="ba-pic">
                                <img src="" alt="">
                            </div>
                            <div class="ba-text">
                                <h5>Sophia Cole</h5>
                                <span>Đại Lý Công Ty</span>
                                <p class="property-items">6 property </p>
                            </div>
                        </a>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Property Details Section End -->
@endsection