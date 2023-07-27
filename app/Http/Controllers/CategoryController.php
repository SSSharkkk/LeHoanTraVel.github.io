<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class CategoryController extends Controller
{   
    public function AuthLogin() {
        $admin_id = Session::get('admin_id');
        if ($admin_id) {
           return Redirect::to('/dashboard');
        } else {
           return Redirect::to('/login-admin')->send();
        }
    }
    public function add_category() {
        $this->AuthLogin();
        return view('admin.addCategory');
    }

    public function save_category(Request $request) {
        $data = array();
        $data['category_name'] = $request->category_name;
        $data['category_desc'] = $request->category_desc;
        $data['category_status'] = $request->category_status;

        DB::table('tbl_category')->insert($data);
        Session::put('massage','Thêm Thành Công');
        return Redirect::to('/add-category');

    }

    public function all_category() {
        $this->AuthLogin();
        $all_category = DB::table('tbl_category')->get();
        $manage_category = view('admin.allCategory')->with('category',$all_category);
        return view('admin-layout')->with('admin.allCategory',$manage_category);
    }

    public function unactive_category_product($category_id) {
          DB::table('tbl_category')->where('category_id',$category_id)->update(['category_status'=>1]);
          return redirect('/all-category');
    }

    public function active_category_product($category_id) {
        DB::table('tbl_category')->where('category_id',$category_id)->update(['category_status'=>0]);
        return redirect('/all-category');
    }

    public function edit_category($category_id) {
        $this->AuthLogin();
        $edit_category = DB::table('tbl_category')->where('category_id',$category_id)->get();
        $manage_category = view('admin.editCategory')->with('category_edit',$edit_category);
        return view('admin-layout')->with('admin.editCategory',$manage_category);
    }

    public function update_category(Request $request, $category_id) {
        $data = array();
        $data['category_name'] = $request->category_name;
        $data['category_desc'] = $request->category_desc; 
        
        DB::table('tbl_category')->where('category_id',$category_id)->update($data);
        Session::put('massage','Cập Nhập Thành Công');
        return redirect('/all-category');
    }

    public function delete_category($category_id) {
        DB::table('tbl_category')->where('category_id',$category_id)->delete();
        Session::put('massage', 'Xóa Thành Công');
        return redirect('/all-category');
    }
}
