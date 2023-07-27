<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use App\Models\Gallery;
use Illuminate\Support\Facades\Redirect;
session_start();

class GalleryProduct extends Controller
{   
  public function AuthLogin() {
    $admin_id = Session::get('admin_id');
    if ($admin_id) {
       return Redirect::to('/dashboard');
    } else {
       return Redirect::to('/login-admin')->send();
    }
}
    public function add_gallery($product_id) {
        $this->AuthLogin();
        $pro_id = $product_id;
        return view('admin.gallery.add-gallery')->with(compact('pro_id'));
    }

    public function select_gallery(Request $request) {
        $this->AuthLogin();
        $product_id = $request->pro_id;
        $gallery = Gallery::where('product_id',$product_id)->get();
        $gallery_count = $gallery->count();
        $output = '
        <form>
        '.csrf_field().'
         <table class="table table-hover">
        <thead>
          <tr>
            <th>STT</th>
            <th>Tên Hình Ảnh</th>
            <th>Hình Ảnh</th>
            <th>Quan Lý</th>
          </tr>
        </thead>
        <tbody>';

        if ($gallery_count>0) {
            $i = 0;
            foreach($gallery as $key => $gal) {
                $i++;
                $output.='
               
                <tr>
                <td>'.$i.'</td>
                <td contenteditable class="edit_gal_name" data-gal_id="'.$gal->gallery_id.'">'.$gal->gallery_name.'</td>
                <td><img src="'.url('./images/gallery/'.$gal->gallery_image).'" class="img-thumbnail" width="100" height="100"></td>
                <td>
                <button type="button" data-gal_id="'.$gal->gallery_id.'" class="btn btn-xs btn-danger delete-gallery">Xóa</button>
                </td>
              </tr>
              '
              
              ;
            }
        } else {
            $output.='
                <tr>
                <td colspan="4">Sản Phẩm Này Chưa Thư Viện Ảnh</td>
              </tr>';
        }
        $output.='
                </tbody>
                </table>
                </form>
                ';
        echo $output;
    }
   
    public function insert_gallery(Request $request,$pro_id) {
       $this->AuthLogin();
        $get_image = $request->file('file');
        if ($get_image) {
          foreach($get_image as $image) {
            $get_name_image = $image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$image->getClientOriginalExtension();
            $image->move('images/gallery/',$new_image);
            $gallery = new Gallery();
            $gallery->gallery_name = $new_image;
            $gallery->gallery_image = $new_image;
            $gallery->product_id = $pro_id;
            $gallery->save();
            
          }
        }
        return Redirect()->back();
    }

    public function update_gallery_name(Request $request) {
        $gal_id = $request->gal_id;
        $gal_text= $request->gal_text;
        $gallery = Gallery::find($gal_id);
        $gallery->gallery_name = $gal_text;
        $gallery->save();
    }

    public function delete_gallery(Request $request) {
      $gal_id = $request->gal_id;
      $gallery = Gallery::find($gal_id);
      unlink('images/gallery/'.$gallery->gallery_image);
      $gallery->delete();
    }
}
