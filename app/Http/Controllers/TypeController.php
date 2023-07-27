<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use App\Models\Gallery;

use Illuminate\Support\Facades\Redirect;
session_start();


class TypeController extends Controller
{    
    public function AuthLogin() {
        $admin_id = Session::get('admin_id');
        if ($admin_id) {
           return Redirect::to('/dashboard');
        } else {
           return Redirect::to('/login-admin')->send();
        }
    }
    public function add_type() {
        $this->AuthLogin();
        return view('admin.addType');
    }

    public function save_type(Request $request) {
        $data = array();
        $data['type_name'] = $request->type_name;
        $data['type_desc'] = $request->type_desc;
        $data['type_status'] = $request->type_status;
        
        DB::table('tbl_type')->insert($data);
        return Redirect('/add-type');
    }

    public function all_type() {
        $this->AuthLogin();
        $all_type = DB::table('tbl_type')->get();
        $manage_type = view('admin.allType')->with('all_type',$all_type);
        return view('admin-layout')->with('admin.allType',$manage_type);
    }

    public function unactive_type($type_id) {
        DB::table('tbl_type')->where('type_id',$type_id)->update(['type_status'=>1]);
        
        return Redirect('/all-type');
    }

    public function active_type($type_id) {
        DB::table('tbl_type')->where('type_id',$type_id)->update(['type_status'=>0]);
        
        return Redirect('/all-type');
    }
    public function edit_type($type_id) {
        $this->AuthLogin();

        $all_type = DB::table('tbl_type')->where('type_id',$type_id)->get();
        $manage_type = view('admin.editType')->with('edit_type',$all_type);
        return view('admin-layout')->with('admin.editType',$manage_type);
    }

    public function update_type(Request $request, $type_id) {
        $data = array(); 
        $data['type_name'] = $request->type_name;
        $data['type_desc'] = $request->type_desc;

        DB::table('tbl_type')->where('type_id',$type_id)->update($data);

        return Redirect('/all-type');
 
    }

    public function delete_type($type_id) {
        DB::table('tbl_type')->where('type_id',$type_id)->delete();

        return Redirect('/all-type');
    }
}
