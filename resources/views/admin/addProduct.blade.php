@extends('admin-layout')
@section('admin_content')
   <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm Lộ Trình
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
                                <form role="form" action="{{URL::to('/save-product')}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên Lộ Trình</label>
                                    <input type="text" data-validation="length" data-validation-length="min5" data-validation-error-msg="Điền Trên 5 Kí Tự" name="product_name" class="form-control" id="exampleInputEmail1" placeholder="Tên Sản Phẩm">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Giá Hiển Thị</label>
                                    <input type="text" data-validation="number" data-validation-length="min1" data-validation-error-msg="Bắt Buộc Nhập Giá Lộ Trình" name="product_price" class="form-control" id="exampleInputEmail1" placeholder="Tên Lộ Trình">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Giá 1 Chiều ( 4 chỗ ) </label>
                                    <input type="text" data-validation="number" data-validation-length="min1" data-validation-error-msg="Bắt Buộc Nhập Giá Lộ Trình" name="gia_1chieu_4cho" class="form-control" id="exampleInputEmail1" placeholder="Tên Lộ Trình">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Giá 1 Chiều ( 7 chỗ ) </label>
                                    <input type="text" data-validation="number" data-validation-length="min1" data-validation-error-msg="Bắt Buộc Nhập Giá Lộ Trình" name="gia_1chieu_7cho" class="form-control" id="exampleInputEmail1" placeholder="Tên Lộ Trình">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Giá 1 Chiều ( 16 chỗ ) </label>
                                    <input type="text" data-validation="number" data-validation-length="min1" data-validation-error-msg="Bắt Buộc Nhập Giá Lộ Trình" name="gia_1chieu_16cho" class="form-control" id="exampleInputEmail1" placeholder="Tên Lộ Trình">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Giá 2 Chiều ( 4 chỗ ) </label>
                                    <input type="text" data-validation="number" data-validation-length="min1" data-validation-error-msg="Bắt Buộc Nhập Giá Lộ Trình" name="gia_2chieu_4cho" class="form-control" id="exampleInputEmail1" placeholder="Tên Lộ Trình">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Giá 2 Chiều ( 7 chỗ ) </label>
                                    <input type="text" data-validation="number" data-validation-length="min1" data-validation-error-msg="Bắt Buộc Nhập Giá Lộ Trình" name="gia_2chieu_7cho" class="form-control" id="exampleInputEmail1" placeholder="Tên Lộ Trình">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Giá 2 Chiều ( 16 chỗ ) </label>
                                    <input type="text" data-validation="number" data-validation-length="min1" data-validation-error-msg="Bắt Buộc Nhập Giá Lộ Trình" name="gia_2chieu_16cho" class="form-control" id="exampleInputEmail1" placeholder="Tên Lộ Trình">
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Hình Ảnh Lộ Trình</label>
                                    <input type="file" data-validation="length" data-validation-length="min1" data-validation-error-msg="Bắt Buộc Nhập Hình Ảnh Lộ Trình" name="product_image" class="form-control" id="exampleInputEmail1" placeholder="Tên Lộ Trình">
                                </div>
                                {{-- <div class="form-group">
                                    <label for="exampleInputEmail1">Bản Đồ (Nhúng Link Google Map) </label>
                                    <input type="text" data-validation="length" data-validation-length="min1" data-validation-error-msg="Bắt Buộc Nhập MaP Lộ Trình" name="product_map" class="form-control" id="exampleInputEmail1" placeholder="Tên Lộ Trình">
                                </div> --}}
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô Tả Lộ Trình</label>
                                    <textarea type="text" data-validation="length" data-validation-length="min1" data-validation-error-msg="Bắt Buộc Nhập Mô Tả Lộ Trình" rows="5" style="resize: none" id="shark" name="product_desc" class="form-control" id="exampleInputPassword1" placeholder="Mô tả Lộ Trình"> </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Nội Dung Lộ Trình</label>
                                    <textarea type="text" data-validation="length" data-validation-length="min1" data-validation-error-msg="Bắt Buộc Nhập Nội Dung Lộ Trình" rows="5" style="resize: none" id="shark1" name="product_content" class="form-control" id="exampleInputPassword1" placeholder="Nội Dung Lộ Trình"> </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Từ Khóa Tìm Kiếm (CEO)</label>
                                    <textarea type="text" data-validation="length" data-validation-length="min1" data-validation-error-msg="Bắt Buộc Nhập từ Khóa Lộ Trình" rows="5" style="resize: none" id="shark1" name="meta_keywords" class="form-control" id="exampleInputPassword1" placeholder="Từ Khóa CEO "> </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Danh Mục Lộ Trình</label>
                                    <select name="product_cate" class="form-control input-sm m-bot15">
                                        @foreach ($cate_product as $key => $cate)
                                            
                                        
                                        <option value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                       

                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Loại Lộ Trình</label>
                                    <select name="product_type" class="form-control input-sm m-bot15">
                                        @foreach ($type_product as $key => $type)
                                            
                                        
                                        <option value="{{$type->type_id}}">{{$type->type_name}}</option>
                                       

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
                                <button type="submit" name="add_category_product" class="btn btn-info">Thêm Lộ Trình</button>
                            </form>
                            </div>

                        </div>
                    </section>
            </div>

 @endsection