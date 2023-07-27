<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use App\Models\Gallery;

use Illuminate\Support\Facades\Redirect;
session_start();

class ProductController extends Controller
{   
    public function AuthLogin() {
        $admin_id = Session::get('admin_id');
        if ($admin_id) {
           return Redirect::to('/dashboard');
        } else {
           return Redirect::to('/login-admin')->send();
        }
    }
    public function add_product() {
        $this->AuthLogin();

        $cate_product = DB::table('tbl_category')->orderBy('category_id','desc')->get();
        $type_product = DB::table('tbl_type')->orderBy('type_id','desc')->get();
        return view('admin.addProduct')->with('cate_product',$cate_product)->with('type_product',$type_product);
    }

    public function save_product(Request $request) {
        $data = array();
        $data['product_name'] = $request->product_name;
        $data['product_price'] = $request->product_price;
        $data['gia_1chieu_4cho'] = $request->gia_1chieu_4cho;
        $data['gia_1chieu_7cho'] = $request->gia_1chieu_7cho;
        $data['gia_1chieu_16cho'] = $request->gia_1chieu_16cho;
        $data['gia_2chieu_4cho'] = $request->gia_2chieu_4cho;
        $data['gia_2chieu_7cho'] = $request->gia_2chieu_7cho;
        $data['gia_2chieu_16cho'] = $request->gia_2chieu_16cho;
        $data['product_desc'] = $request->product_desc;
        $data['meta_keywords'] = $request->meta_keywords;
        $data['product_content'] = $request->product_content;
        $data['product_status'] = $request->product_status;
        $data['category_id'] = $request->product_cate;
        $data['type_id'] = $request->product_type;

        $get_image = $request->file('product_image');
        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/images/uploads/',$new_image);
            $data['product_image'] = $new_image;
            DB::table('tbl_product')->insert($data);
            return Redirect('/add-product');
        }
        $data['product_image'] = '';
        DB::table('tbl_product')->insert($data);

        return Redirect::to('/add-product');

    }

    public function all_product() {
        $this->AuthLogin();

        $cate_product = DB::table('tbl_category')->orderBy('category_id','desc')->get();
        $type_product = DB::table('tbl_type')->orderBy('type_id','desc')->get();
        $all_product = DB::table('tbl_product')->get();
        $manage_product = view('admin.allProduct')->with('all_product',$all_product);
        return view('admin-layout')->with('cate_product',$cate_product)->with('type_product',$type_product)->with('admin.allProduct',$manage_product);
    }

    public function active_product($product_id) {
        DB::table('tbl_product')->where('product_id',$product_id)->update(['product_status'=>0]);

        return redirect::to('/all-product');
    }

    public function unactive_product($product_id) {
        DB::table('tbl_product')->where('product_id',$product_id)->update(['product_status'=>1]);

        return redirect::to('/all-product');
    }

    public function edit_product($product_id) {
        $this->AuthLogin();

        $cate_product = DB::table('tbl_category')->orderBy('category_id','desc')->get();
        $type_product = DB::table('tbl_type')->orderBy('type_id','desc')->get();

        $edit_product = DB::table('tbl_product')->where('product_id',$product_id)->get();
        $manage_edit_product = view('admin.editProduct')
        ->with('edit_product',$edit_product)
        ->with('cate_product',$cate_product)
        ->with('type_product',$type_product);
        return view('admin-layout')->with('admin.editProduct',$manage_edit_product);
    }
    
    public function update_product(Request $request,$product_id) {
        $data = array();
        $data['product_name'] = $request->product_name;
        $data['product_price'] = $request->product_price;

        $data['gia_1chieu_4cho'] = $request->gia_1chieu_4cho;
        $data['gia_1chieu_7cho'] = $request->gia_1chieu_7cho;
        $data['gia_1chieu_16cho'] = $request->gia_1chieu_16cho;
        $data['gia_2chieu_4cho'] = $request->gia_2chieu_4cho;
        $data['gia_2chieu_7cho'] = $request->gia_2chieu_7cho;
        $data['gia_2chieu_16cho'] = $request->gia_2chieu_16cho;

        $data['product_desc'] = $request->product_desc;
        $data['meta_keywords'] = $request->meta_keywords;
        $data['product_content'] = $request->product_content;
        $data['product_status'] = $request->product_status;
        $data['category_id'] = $request->product_cate;
        $data['type_id'] = $request->product_type;
        $get_image = $request->file('product_image');
        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/images/uploads/',$new_image);
            $data['product_image'] = $new_image;
            DB::table('tbl_product')->where('product_id',$product_id)->update($data);
            return Redirect::to('/all-product');
        }

        DB::table('tbl_product')->where('product_id',$product_id)->update($data);
        return Redirect::to('/all-product');
    }

    public function delete_product($product_id) {
        DB::table('tbl_product')->where('product_id',$product_id)->delete();
        return Redirect::to('/all-product');
    }
    // public product

    public function details_product(Request  $request,$product_id) {
        
        $cate_product = DB::table('tbl_category')->orderBy('category_id','desc')->get();
        $type_product = DB::table('tbl_type')->orderBy('type_id','desc')->get();
        // gallery
        //  
        $details_product =  DB::table('tbl_product')
        ->join('tbl_category','tbl_category.category_id','=','tbl_product.category_id')
        ->join('tbl_type','tbl_type.type_id','=','tbl_product.type_id')
        ->where('tbl_product.product_id',$product_id)->get();

        foreach($details_product as $key => $details){
            $category_id = $details->category_id;
            $product_id = $details->product_id;
        
        }
        foreach($details_product as $val) {
        // seo
        $meta_desc = $val->product_desc;
        $meta_keywords = $val->meta_keywords;
        $meta_title = $val->product_name;
        $url_canonical = $request->url();
        // seo
        }
        $gallery_post = Gallery::where('product_id',$product_id)->get();
        $related_product =  DB::table('tbl_product')
        ->join('tbl_category','tbl_category.category_id','=','tbl_product.category_id')
        ->join('tbl_type','tbl_type.type_id','=','tbl_product.type_id')
        ->where('tbl_category.category_id',$category_id)->whereNotIn('tbl_product.product_id',[$product_id])->get();
        
        return view('pages.details-product')
        ->with('category',$cate_product)
        ->with('type',$type_product)
        ->with('details_product',$details_product)
        ->with('gallery',$gallery_post)
        ->with('relate_product',$related_product)
        ->with('meta_desc',$meta_desc)
        ->with('meta_keywords',$meta_keywords)
        ->with('meta_title',$meta_title)
        ->with('url_canonical',$url_canonical);
    }
}
