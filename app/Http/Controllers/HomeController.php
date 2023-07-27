<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
session_start();


class HomeController extends Controller
{
    public function index(Request $request) {
        // seo
        $meta_desc = "Lehoancar là đơn vị đặt tour du lịch Đà Nẵng uy tín chất lượng giá rẻ. Chuyên tổ chức các tour du lịch khởi hành tại Đà Nẵng, Hà Nội, Huế, Đà Lạt, ... ";
        $meta_keywords = " xe du lịch đà nẵng , xe du lịch đà nẵng giá rẻ , xe du lịch đà nẵng uy tín , xe đi huế , xe đi bà nà , xe đi hội an , lê hoàn car ";
        $meta_title = "Lê Hoàn Travel";
        $url_canonical = $request->url();
        // seo
        $cate_product = DB::table('tbl_category')->orderBy('category_id','desc')->get();

        $type_product = DB::table('tbl_type')->orderBy('type_id','desc')->get();

        $all_product =  DB::table('tbl_product')

        ->join('tbl_category','tbl_category.category_id','=','tbl_product.category_id')
        ->join('tbl_type','tbl_type.type_id','=','tbl_product.type_id')
        ->orderBy('tbl_product.product_id','desc')->get();

        $blog = DB::table('tbl_blog') 
        ->join('tbl_userblog','tbl_userblog.user_id','=','tbl_blog.user_id')
        ->orderBy('blog_id','desc')->limit(3)->get();


        return view('pages.home')
        ->with('blog',$blog)
        ->with('cate_product',$cate_product)
        ->with('type_product',$type_product)
        ->with('product_public',$all_product)
        ->with('meta_desc',$meta_desc)
        ->with('meta_keywords',$meta_keywords)
        ->with('meta_title',$meta_title)
        ->with('url_canonical',$url_canonical);
        // return view('pages.home')->with(compact('cate_product','type_product','all_product'));
    }
    public function about_me(Request $request) {
          // seo
          $meta_desc = "Thuê Xe Du Lịch Từ 4 đến 45 Chỗ Trọn Gói Có Tài Xế Tại Đà Nẵng, Ưu Đãi Hè Giảm 60% Hôm Nay. Xe Mới Uy Tín, Lái Xe Chuyên Nghiệp – Nhiệt Tình, Dịch Vụ Chất Lượng, Giá...";
          $meta_keywords = "Thuê xe du lịch , xe du lịch có tài xế riêng , xe du lịch có tài xế giá rẻ , xe du lịch uy tín giá rẻ , xe du lịch uy tín giá rẻ đà nẵng";
          $meta_title = "Lê Hoàn Travel";
          $url_canonical = $request->url();
          // seo
        return view('pages.about-me')
        ->with('meta_desc',$meta_desc)
        ->with('meta_keywords',$meta_keywords)
        ->with('meta_title',$meta_title)
        ->with('url_canonical',$url_canonical);
        ;
    }

    public function send_mail(Request $request) {
        //send mail
         $to_name = "Đơn Đặt Xe ";
         $to_email = "xedulichgiaredn43@gmail.com";//send to this email
         $email_address = $request->mail_address;
         $content_mail = $request->mail_content;
         $email_name = $request->mail_name;
         $email_date = $request->mail_date;
         $email_socho = $request->mail_socho;
         $email_sochieu = $request->mail_sochieu;
         $email_phone = $request->mail_phone;
         $email_lotrinh = $request->mail_lotrinh;
         $data = array(
            "name"=> $email_name,
            "address"=> $email_address,
            "body"=> $content_mail,
            "date" => $email_date,
            "socho" => $email_socho,
            "sochieu" => $email_sochieu,
            "phone" => $email_phone,
            "lotrinh" => $email_lotrinh
        
        ); 
            //body of mail.blade.php

        Mail::send('pages.send-mail',$data,function($message) use ($to_name,$to_email){
        $message->to($to_email)->subject('Xe Đà Nẵng giá rẻ');
        $message->from($to_email,$to_name);
});
        return Redirect('/');
//--send mail
    }
    public function blog(Request $request ) {
         // seo
         $meta_desc = " Chào mừng Quý khách đến với Dịch Vụ Xe Lê Hoàn. Chúng tôi tự hào là đơn vị vận chuyển, thuê xe du lịch Uy Tín, Chuyên Nghiệp #1 tại Đà Nẵng..";
         $meta_keywords = "Thuê xe du lịch , xe du lịch có tài xế riêng , xe du lịch có tài xế giá rẻ , xe du lịch uy tín giá rẻ , xe du lịch uy tín giá rẻ đà nẵng";
         $meta_title = "Blog Travel";
         $url_canonical = $request->url();
         // seo

        
        $blog = DB::table('tbl_blog') 
        ->join('tbl_userblog','tbl_userblog.user_id','=','tbl_blog.user_id')
        ->orderBy('tbl_blog.blog_id','desc')->get();

         
        return view('pages.blog')
        ->with('blog',$blog)
        ->with('meta_desc',$meta_desc)
        ->with('meta_keywords',$meta_keywords)
        ->with('meta_title',$meta_title)
        ->with('url_canonical',$url_canonical);
    }
}
