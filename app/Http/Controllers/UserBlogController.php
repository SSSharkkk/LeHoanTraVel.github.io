<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use App\Models\Gallery;
use Illuminate\Support\Facades\Redirect;
session_start();

class UserBlogController extends Controller
{
    public function add_user_blog() {
        
        return view('admin.userblog.addUserBlog');
    }

    public function save_user_blog(Request $request) {
        $data = array();
        $data['user_name'] = $request->user_name;
        $data['user_desc'] = $request->user_desc;
        $data['user_status'] = $request->user_status;
        
        DB::table('tbl_userblog')->insert($data);
        Session::put('masage','Thêm Thành Công');
        return Redirect::to('/add-user-blog');
    }

    public function all_user_blog() {
        $all_userblog = DB::table('tbl_userblog')->get();
        $manage_userblog = view('admin.userblog.allUserBlog')->with('all_userblog',$all_userblog);
        return view('admin-layout')->with('manage_userblog',$manage_userblog);
        
    }

    public function unactive_user_blog($user_id) {
        DB::table('tbl_userblog')->where('user_id',$user_id)->update(['user_status'=>1]);
        return Redirect::to('/all-user-blog');
    }

    public function active_user_blog($user_id) {
        DB::table('tbl_userblog')->where('user_id',$user_id)->update(['user_status'=>0]);
        return Redirect::to('/all-user-blog');
    }

    public function edit_user_blog($user_id) {
        $edit_user = DB::table('tbl_userblog')->where('user_id',$user_id)->get();
        $manage_edit = view('admin.userblog.editUserBlog')->with('edit_userblog',$edit_user);
        return view('admin-layout')->with('manage_edit',$manage_edit);
    }

    public function update_user_blog(Request $request, $user_id) {
        $data = array();
        $data['user_name'] = $request->user_name;
        $data['user_desc'] = $request->user_desc;
        $data['user_status'] = $request->user_status;
        
        DB::table('tbl_userblog')->where('user_id',$user_id)->update($data);
        Session::put('masage','Sửa Thành Công');
        return Redirect::to('/all-user-blog');
    } 
    public function delete_user_blog($user_id) {
        DB::table('tbl_userblog')->where('user_id',$user_id)->delete();
        Session::put('magase','Xóa Thành Công');
        return Redirect::to('/all-user-blog');
    }
}
