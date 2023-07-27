<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();


class BlogController extends Controller
{
    public function add_blog() {
        $userblog = DB::table('tbl_userblog')->orderBy('user_id','desc')->get();
        return view('admin.blog.addBlog')->with('userblog',$userblog);
    }

    public function save_blog(Request $request) {
        $data = array();
        $data['blog_name'] = $request->blog_name;
        $data['blog_content'] = $request->blog_content;
        $data['meta_keywords'] = $request->meta_keywords;
        $data['meta_desc'] = $request->meta_desc;
        $data['user_id'] = $request->blog_user;
        $data['blog_status'] = $request->blog_status;
        $get_image = $request->file('blog_image');
        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/images/uploads/',$new_image);
            $data['blog_image'] = $new_image;
            DB::table('tbl_blog')->insert($data);
            return Redirect('/add-blog');
        }
        $data['blog_image'] = '';
        DB::table('tbl_blog')->insert($data);
        return Redirect::to('/add-blog');
    }

    public function all_blog() {
        $all_blog = DB::table('tbl_blog')->get();
        $manage_blog = view('admin.blog.allBlog')->with('all_blog',$all_blog);
        return view('admin-layout')->with('admin.blog.allBlog',$manage_blog);
    }

    public function active_blog($blog_id) {
        DB::table('tbl_blog')->where('blog_id',$blog_id)->update(['blog_status'=>0]);
        return redirect::to('/all-blog');
    }

    public function unactive_blog($blog_id) {
        DB::table('tbl_blog')->where('blog_id',$blog_id)->update(['blog_status'=>1]);
        return redirect::to('/all-blog');
        
    }

    public function edit_blog($blog_id) {
       $userblog = DB::table('tbl_userblog')->orderBy('user_id','desc')->get();
       $edit_blog = DB::table('tbl_blog')->where('blog_id',$blog_id)->get();
       $manage_blog = view('admin.blog.editBlog')
       ->with('edit_blog',$edit_blog)
       ->with('userblog',$userblog);
       return view('admin-layout')->with('admin.blog.editBlog',$manage_blog);
    }

    public function update_blog(Request $request,$blog_id) {
        $data = array();
        $data['blog_name'] = $request->blog_name;
        $data['blog_content'] = $request->blog_content;
        $data['meta_keywords'] = $request->meta_keywords;
        $data['meta_desc'] = $request->meta_desc;
        $data['user_id'] = $request->blog_user;
        $data['blog_status'] = $request->blog_status;
        $get_image = $request->file('blog_image');
        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/images/uploads/',$new_image);
            $data['blog_image'] = $new_image;
            DB::table('tbl_blog')->where('blog_id',$blog_id)->update($data);
            return Redirect::to('/all-blog');   
        }

        
        DB::table('tbl_blog')->where('blog_id',$blog_id)->update($data);

        return Redirect::to('/all-blog');
    }

    public function delete_blog($blog_id) {
        DB::table('tbl_blog')->where('blog_id',$blog_id)->delete();
        Session::put('masage','Xóa Thành Công');
        return Redirect::to('/all-blog');
    }

    public function chi_tiet_blog($blog_id) {
        $all_blog = DB::table('tbl_blog')->where('blog_id',$blog_id)->get();
        $manage_blog = view('admin.blog.detailsSubBlog')->with('all_blog',$all_blog);
        return view('admin-layout')->with('manage_blog',$manage_blog);
    }

    // blog public
    public function details_blog(Request  $request,$blog_id) {
     
        $userblog = DB::table('tbl_userblog')->orderBy('user_id','desc')->get();
        $details_blog = DB::table('tbl_blog') 
        ->join('tbl_userblog','tbl_userblog.user_id','=','tbl_blog.user_id')
        ->where('blog_id',$blog_id)->get();
        foreach($details_blog as $key => $details){
            // $userblog = $details->user_id;
        
        }

        foreach($details_blog as $val) {
            // seo
        $meta_desc = $val->meta_desc;
        $meta_keywords = $val->meta_keywords;
        $meta_title = $val->blog_name;
        $url_canonical = $request->url();
        // seo
        }

        return view('pages.details-blog')
        ->with('details_blog',$details_blog)
        ->with('userblog',$userblog)
        ->with('meta_desc',$meta_desc)
        ->with('meta_keywords',$meta_keywords)
        ->with('meta_title',$meta_title)
        ->with('url_canonical',$url_canonical);
    }

}
