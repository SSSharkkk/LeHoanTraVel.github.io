<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;


session_start();

class AdminController extends Controller
{   
    public function AuthLogin() {
        $admin_id = Session::get('admin_id');
        if ($admin_id) {
           return Redirect::to('/dashboard');
        } else {
           return Redirect::to('/login-admin')->send();
        }
    }
    public function index() {
        $this->AuthLogin();
        return view('admin-layout');
    }

    public function login_admin() {
        // $this->AuthLogin();
        return view('admin-login');
    }
    public function dashboard(Request $request) {
       $email = $request->admin_email;
       $password = $request->admin_password;
       $result = DB::table('tbl_login')->where('email',$email)->where('password',$password)->first();
       if ($result) {
        Session::put('admin_name',$result->username);
        Session::put('admin_id',$result->id); 
          return Redirect::to('/dashboard');
       } else {
          Session::put('fail_message','Đăng Nhập Thất Bại , Kiểm tra lại tài khoản hoặc mật khẩu');
          return Redirect::to('/login-admin');
       }
    }

    public function logout() {
        // $this->AuthLogin();
        Session::put('admin_name',null);
        Session::put('admin_id',null);
        return Redirect::to('/login-admin');
        
    }
}
