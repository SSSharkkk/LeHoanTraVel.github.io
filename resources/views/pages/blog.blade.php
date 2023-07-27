@extends('welcome')
@section('view-content')
<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <h2>Blog List</h2>
                    <div class="breadcrumb-option">
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                        <span>Blog News</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section Begin -->

<!-- Blog Section Begin -->
<section class="blog-section blog-page spad">
    <div class="container">
        <div class="row">
            @foreach ($blog as $item=>$blog_list)
                
           
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-item">
                  <a href="{{URL::to('/details-blog/'.$blog_list->blog_id)}}">
                    <div class="sb-pic">
                        <img src="{{asset('public/images/uploads/'.$blog_list->blog_image)}}" width="200" height="250" alt="">
                    </div>
                    <div class="sb-text">
                        <ul>
                            <li><i class="fa fa-user"></i>{{$blog_list->user_name}}</li>
                            <li><i class="fa fa-clock-o"></i> 18th Jan, 2022</li>
                        </ul>
                        <h4><a href="{{URL::to('/details-blog/'.$blog_list->blog_id)}}">{{$blog_list->blog_name}}</a></h4>
                    </div>
                  </a>
                </div>
            </div>
            @endforeach
      
            <div class="col-lg-12">
                <div class="loadmore">
                    <a href="#" class="primary-btn">Load More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Section End -->
@endsection
