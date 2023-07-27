@extends('admin-layout')
@section('admin_content')
   <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm danh mục sản phẩm
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
                                @foreach ($category_edit as $item=>$edit_category)
                                <form role="form" action="{{URL::to('/update-category/'.$edit_category->category_id)}}" method="post">
                                    {{ csrf_field() }}
                                    
                                        
                                    
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên Danh Mục</label>
                                    <input type="text" value="{{$edit_category->category_name}}" data-validation="length" data-validation-length="min1" data-validation-error-msg="Nhập Tên Danh Mục" name="category_name" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô Tả Danh Mục</label>
                                    <textarea type="text" value="" data-validation="length" data-validation-length="min1" data-validation-error-msg="Bắt Buộc Nhập Mô Tả Danh Mục" rows="5" style="resize: none" name="category_desc" class="form-control" id="exampleInputPassword1" placeholder="Mô tả danh mục"> {{$edit_category->category_desc}}</textarea>
                                </div>
    
                                <div class="checkbox">
                
                                </div>
                                <button type="submit" name="add_category" class="btn btn-info">Thêm Danh Mục</button>
                            </form>
                            @endforeach
                            </div>

                        </div>
                    </section>
            </div>

 @endsection