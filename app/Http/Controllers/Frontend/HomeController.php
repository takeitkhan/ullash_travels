<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductBrand;

use App\Models\Post;
use App\Models\Category;

class HomeController extends Controller
{
    //index
    public function index()
    {
        return view('frontend.index');
    }


    //getPage
    public function page($term_type, $slug)
    {
        $page = Post::where('slug', $slug)->where('term_type', $term_type)->first();
        if($page){
            return view('frontend.page', compact('page'));
        } else {
            return view('frontend.404')->with('message', 'Not Forund');
        }
    }




    //getPage
    public function category($term_taxonomy_type, $slug)
    {
        $category = Category::where('slug', $slug)->where('taxonomy_type', $term_taxonomy_type)->first();
        if($category){
            return view('frontend.category', compact('category'));
        } else {
            return view('frontend.404')->with('message', 'Not Found');
        }
    }

    //Contact Form

    public function contact(Request $request)
    {
        //dd($request->all());
        $url = url()->previous();
        if ($request->_token) {
            $details = [
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'subject' => $request->subject,
                'message' => $request->message,
            ];
            //Mail::to(get_global_setting('email'))->send(new SendMail($details));
            $subject = 'New Contact Email from Comfybd';//$request->subject;
            $toaddress = 'nipunnoushad8@gmail.com';\App\Helpers\WebsiteSettings::settings('company_email');
            $data = $details;//implode('<br>', $details);
            $done = \App\Helpers\MailHelper::send($data, $subject, $toaddress, $cc_emails = false);
//            return view('frontend.templates.page.contact')->with([
//                'status' => 1,
//                'message' => 'We appreciate you contacting us. We will get back in touch with you soon!'
//            ]);
            //dd($done);
            return redirect()->to($url)->with(['hash_code' =>  $request->phone, 'message' => 'Thanks for contacting us. Your queries have been submitted.
Our team members will get back to you soon.
']);
        } else {

        }
    }




}
