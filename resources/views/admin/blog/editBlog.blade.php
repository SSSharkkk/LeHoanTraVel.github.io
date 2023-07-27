@extends('admin-layout')
@section('admin_content')
   <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Cập Nhập Blog Dự Án
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
                                @foreach ($edit_blog as $item=>$blog_pro)
                                <form role="form" action="{{URL::to('/update-blog/'.$blog_pro->blog_id)}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    
                              
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên Blog</label>
                                    <input type="text" value="{{$blog_pro->blog_name}}" data-validation="length" data-validation-length="min1" data-validation-error-msg="Nhập Tên Blog" name="blog_name" class="form-control" id="exampleInputEmail1" placeholder="Tên Blog">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Bài Báo Blog</label>
                                    <textarea type="text" id="shark" data-validation="length" data-validation-length="min1" data-validation-error-msg="Bắt Buộc Nhập Mô Tả Blog" rows="5" style="resize: none" name="blog_content" class="form-control" id="exampleInputPassword1" placeholder="Mô tả danh mục">
                                        {{$blog_pro->blog_content}}
                                     </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Meta desc ( CEO )</label>
                                    <textarea type="text"  data-validation="length" data-validation-length="min1" data-validation-error-msg="Bắt Buộc Nhập Mô Tả Blog" rows="5" style="resize: none" name="meta_desc" class="form-control" id="exampleInputPassword1" placeholder="Mô tả danh mục">{{$blog_pro->meta_desc}}
                                     </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Meta keywords ( CEO )</label>
                                    <textarea type="text"  data-validation="length" data-validation-length="min1" data-validation-error-msg="Bắt Buộc Nhập Mô Tả Blog" rows="5" style="resize: none" name="meta_keywords" class="form-control" id="exampleInputPassword1" placeholder="Mô tả danh mục">{{$blog_pro->meta_keywords}}
                                     </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Người Đăng Bài</label>
                                    <select name="blog_user" class="form-control input-sm m-bot15">
                                        @foreach ($userblog as $item=>$user_blog)
                                        @if($user_blog->user_id==$blog_pro->user_id)
                                        <option selected value="{{$user_blog->user_id}}">{{$user_blog->user_name}}</option>
                                        @else
                                        <option value="{{$user_blog->user_id}}">{{$user_blog->user_name}}</option>
                                        @endif

                                        @endforeach
                                        
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Hình Ảnh Dự Án</label>
                                    <input type="file" name="blog_image" class="form-control" id="exampleInputEmail1" placeholder="Hinhf anhr Dự Án">
                                    <img src="{{asset('images/uploads/'.$blog_pro->blog_image)}}" height="100" width="100" alt="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Status</label>
                                    <select name="blog_status" class="form-control input-sm m-bot15">
                                        <option value="0">Ẩn</option>
                                        <option value="1">Hiện</option>
                                    </select>
                                </div>
                                <div class="checkbox">
                
                                </div>
                                <button type="submit" name="add_blog" class="btn btn-info">Cập Nhập Blog</button>
                                @endforeach
                            </form>
                            </div>

                        </div>
                    </section>
            </div>

 @endsection