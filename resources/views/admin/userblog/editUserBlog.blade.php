@extends('admin-layout')
@section('admin_content')
   <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Sửa User Blog
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
                                @foreach ($edit_userblog as $item=>$userblog)
                                    
                                
                                <form role="form" action="{{URL::to('/update-user-blog/'.$userblog->user_id)}}" method="post">
                                    {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên UserBlog</label>
                                    <input type="text" value="{{$userblog->user_name}}" data-validation="length" data-validation-length="min1" data-validation-error-msg="Nhập Tên UserBlog" name="user_name" class="form-control" id="exampleInputEmail1" placeholder="Tên UserBlog">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô Tả UserBlog</label>
                                    <textarea type="text" data-validation="length" data-validation-length="min1" data-validation-error-msg="Bắt Buộc Nhập Mô Tả UserBlog" rows="5" style="resize: none" name="user_desc" class="form-control" id="exampleInputPassword1" placeholder="Mô tả UserBlog">
                                    {{$userblog->user_desc}}
                                     </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Hiển Thị</label>
                                    <select name="user_status" class="form-control input-sm m-bot15">
                                        <option value="0">Ẩn</option>
                                        <option value="1">Hiển Thị</option>
                                    </select>
                                </div>
                                <div class="checkbox">
                
                                </div>
                                <button type="submit" name="add_user" class="btn btn-info">Sửa UserBlog</button>
                            </form>
                            @endforeach
                            </div>

                        </div>
                    </section>
            </div>

 @endsection