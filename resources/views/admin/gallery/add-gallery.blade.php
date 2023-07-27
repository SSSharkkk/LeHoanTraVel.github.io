@extends('admin-layout')
@section('admin_content')
   <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm Thư Viện Hình Ảnh
                        </header>
                        <?php
                        $message = Session::get('message');
	                               if ($message) {
	                    	           echo $message;
		                           Session::put('message',null);
                             	}                         
                         ?>
                         <form action="{{URL::to('insert-gallery/'.$pro_id)}}" method="POST" enctype="multipart/form-data">
                         {{ csrf_field() }}
                          <div class="row">
                           <div class="col-md-3" align="right">
                             
                          </div>
                          <div class="col-md-6">
                              <input type="file" class="form-control" id="file" name="file[]" accept="image/*" multiple>
                              <span id="error_gallery"></span>
                          </div>
                          <div class="col-md-3" >
                              <input type="submit" name="upload" name="taianh" value="Tải Ảnh" class="btn btn-success">
                          </div>
                          
                        </div>
                        </form>

                        <div class="panel-body">
                            <input type="hidden" value="{{$pro_id}}" name="pro_id" class="pro_id">
                            <form action="">
                                {{ csrf_field() }}
                            <div id="gallery_load">
                                <table class="table table-hover">
                                    <thead>
                                      <tr>
                                        <th>STT</th>
                                        <th>Tên Hình Ảnh</th>
                                        <th>Hình Ảnh</th>
                                        <th>Quan Lý</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td></td>
                                        <td>John</td>
                                        <td>Doe</td>
                                        <td>john@example.com</td>
                                      </tr>
                                    </tbody>
                                  </table>
                            </div>
                        </form>
                        </div>
                    </section>
            </div>

 @endsection