@extends('admin-layout')
@section('admin_content')
   <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm Dự Án
                        </header>
                        <?php
                        $message = Session::get('message');
	                               if ($message) {
	                    	           echo $message;
		                           Session::put('message',null);
                             	}                         
                         ?>

                        <div class="panel-body">           
                            <div class="position-center">
                                @foreach ($edit_product as $item=>$update_product)
                                <form role="form" action="{{URL::to('/update-product/'.$update_product->product_id)}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên Dự Án</label>
                                    <input type="text" value="{{$update_product->product_name}}" data-validation="length" data-validation-length="min5" data-validation-error-msg="Điền Trên 5 Kí Tự" name="product_name" class="form-control" id="exampleInputEmail1" placeholder="Tên Sản Phẩm">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Giá Dự Án</label>
                                    <input type="text"     value="{{$update_product->product_price}}" data-validation="number" data-validation-length="min1" data-validation-error-msg="Bắt Buộc Nhập Giá Dự Án" name="product_price" class="form-control" id="exampleInputEmail1" placeholder="Tên Dự Án">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Giá 1 Chiều ( 4 chỗ ) </label>
                                    <input type="text" value="{{$update_product->gia_1chieu_4cho}}" data-validation="number" data-validation-length="min1" data-validation-error-msg="Bắt Buộc Nhập Giá Lộ Trình" name="gia_1chieu_4cho" class="form-control" id="exampleInputEmail1" placeholder="Tên Lộ Trình">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Giá 1 Chiều ( 7 chỗ ) </label>
                                    <input type="text" value="{{$update_product->gia_1chieu_7cho}}" data-validation="number" data-validation-length="min1" data-validation-error-msg="Bắt Buộc Nhập Giá Lộ Trình" name="gia_1chieu_7cho" class="form-control" id="exampleInputEmail1" placeholder="Tên Lộ Trình">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Giá 1 Chiều ( 16 chỗ ) </label>
                                    <input type="text" value="{{$update_product->gia_1chieu_16cho}}" data-validation="number" data-validation-length="min1" data-validation-error-msg="Bắt Buộc Nhập Giá Lộ Trình" name="gia_1chieu_16cho" class="form-control" id="exampleInputEmail1" placeholder="Tên Lộ Trình">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Giá 2 Chiều ( 4 chỗ ) </label>
                                    <input type="text" value="{{$update_product->gia_2chieu_4cho}}" data-validation="number" data-validation-length="min1" data-validation-error-msg="Bắt Buộc Nhập Giá Lộ Trình" name="gia_2chieu_4cho" class="form-control" id="exampleInputEmail1" placeholder="Tên Lộ Trình">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Giá 2 Chiều ( 7 chỗ ) </label>
                                    <input type="text" value="{{$update_product->gia_2chieu_7cho}}" data-validation="number" data-validation-length="min1" data-validation-error-msg="Bắt Buộc Nhập Giá Lộ Trình" name="gia_2chieu_7cho" class="form-control" id="exampleInputEmail1" placeholder="Tên Lộ Trình">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Giá 2 Chiều ( 16 chỗ ) </label>
                                    <input type="text" value="{{$update_product->gia_2chieu_16cho}}" data-validation="number" data-validation-length="min1" data-validation-error-msg="Bắt Buộc Nhập Giá Lộ Trình" name="gia_2chieu_16cho" class="form-control" id="exampleInputEmail1" placeholder="Tên Lộ Trình">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Hình Ảnh Dự Án</label>
                                    <input type="file" name="product_image" class="form-control" id="exampleInputEmail1" placeholder="Tên Dự Án">
                                    <img src="{{asset('images/uploads/'.$update_product->product_image)}}" height="100" width="100" alt="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô Tả Dự Án</label>
                                    <textarea type="text"  value="{{$update_product->product_desc}}" data-validation="length" data-validation-length="min1" data-validation-error-msg="Bắt Buộc Nhập Mô Tả Dự Án" rows="5" style="resize: none" id="shark" name="product_desc" class="form-control" id="exampleInputPassword1" placeholder="Mô tả Dự Án">{{$update_product->product_desc}} </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Nội Dung Dự Án</label>
                                    <textarea type="text" value="" data-validation="length" data-validation-length="min1" data-validation-error-msg="Bắt Buộc Nhập Nội Dung Sản Phấm" rows="5" style="resize: none" id="shark1" name="product_content" class="form-control" id="exampleInputPassword1" placeholder="Nội Dung Dự Án"> {{$update_product->product_content}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Từ Khóa Tìm Kiếm (CEO)</label>
                                    <textarea type="text" data-validation="length" data-validation-length="min1" data-validation-error-msg="Bắt Buộc Nhập từ Khóa Dự Án" rows="5" style="resize: none" id="shark1" name="meta_keywords" class="form-control" id="exampleInputPassword1" placeholder="Từ Khóa CEO "> {{$update_product->meta_keywords}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Danh Mục Dự Án</label>
                                    <select name="product_cate" class="form-control input-sm m-bot15">
                                        @foreach ($cate_product as $key=>$cate)
                                        @if ($cate->category_id==$update_product->category_id)
                                        <option selected value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                        @else
                                       
                                        <option value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                        @endif

                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Loại Dự Án</label>
                                    <select name="product_type" class="form-control input-sm m-bot15">
                                        @foreach ($type_product as $key => $type)
                                        @if($type->type_id==$update_product->type_id)
                                        
                                        <option selected value="{{$type->type_id}}">{{$type->type_name}}</option>
                                        @else
                                        <option value="{{$type->type_id}}">{{$type->type_name}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Hiển Thị</label>
                                    <select name="product_status" class="form-control input-sm m-bot15">
                                        <option value="0">Ẩn</option>
                                        <option value="1">Hiển Thị</option>
                                    </select>
                                </div>
                                <div class="checkbox">
                                </div>
                                <button type="submit" name="add_category_product" class="btn btn-info">Cập Nhập Dự Án</button>
                            </form>
                            @endforeach
                            </div>
                        </div>
                    </section>
            </div>

 @endsection