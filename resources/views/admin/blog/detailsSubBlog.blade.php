@extends('admin-layout')
@section('admin_content')
<div class="table-agile-info">
    <div class="panel panel-default">
      <div class="panel-heading">
        Liệt Kê Blog
      </div>
      </div>
      <div class="table-responsive">
        <?php
                        $message = Session::get('message');
	                               if ($message) {
	                    	           echo $message;
		                           Session::put('message',null);
                             	}                         
                         ?>
        <table class="table table-striped b-t b-light">
          <thead>
            <tr>
            
              <th>Tên Blog</th>
              <th>Nội Dung Blog</th>
              <th>Ảnh Blog</th>
              <th>Meta Desc</th>
              <th>Meta keywords</th>
              <th></th>
              <th style="width:30px;"></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($all_blog as $key => $blog_pro)
                
            <tr>
              
              <td>{{$blog_pro->blog_name}}</td>
              <td>{{$blog_pro->blog_content}}</td>
              <td>{{$blog_pro->meta_desc}}</td>
              <td>{{$blog_pro->meta_keywords}}</td>
              <td><img src="{{asset('images/uploads/'.$blog_pro->blog_image)}}" width="100" height="100" alt=""></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <footer class="panel-footer">
        <div class="row">
          
          <div class="col-sm-5 text-center">
            <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
          </div>
          <div class="col-sm-7 text-right text-center-xs">                
            <ul class="pagination pagination-sm m-t-none m-b-none">
              <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
              <li><a href="">1</a></li>
              <li><a href="">2</a></li>
              <li><a href="">3</a></li>
              <li><a href="">4</a></li>
              <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>
 @endsection