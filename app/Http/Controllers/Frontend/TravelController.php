<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Session;
use App\Models\Post;

class TravelController extends Controller
{
    public function search(Request $request)
    {

        $parent_cat_id = $request->parent_cat_id;
        $destination = $request->destination;
        //$category_id = implode(",", [$parent_cat_id, $destination]);
        $check_in = $request->check_in;
        $check_out = $request->check_out;

        $posts = Post::whereRaw("FIND_IN_SET($destination, category_id)")
            ->where('term_type', 'property')
            ->get();

        return view('frontend.travel_pages.search_results')->with(['posts' => $posts]);

    }

    public function book_now(Request $request)
    {
        $choosen_property = session()->get('cart');
        $choosen_property [$request->property_id] =
            [
                'price' => $request->price,
                'property_id' => $request->property_id,
                'parent_id' => $request->parent_id,
                'child_id' => $request->child_id,
                'check_in' => $request->check_in,
                'check_out' => $request->check_out,
                'adult_count' => $request->adult_count,
                'child_count' => $request->child_count,
                'extra_count' => $request->extra_count,
                'property_info' => Post::where('id', $request->property_id)->first()
            ];

        session()->put('cart', $choosen_property);

        return redirect()->route('frontend_cart')->with(['message' => 'You successfully added the room to your basket.']);
    }

    public function cart(Request $request)
    {
        $cart = session()->get('cart');
        if ($cart == null) {
            return redirect()->route('frontend_index')->with(['message' => 'Basket does not have anything.']);
        }
        return view('frontend.cart')->with(['cart' => $cart]);
    }

    public function checkout(Request $request)
    {
        $payable_total = session()->get('payable_total');
        $payable_total['sub_total'] = $request->sub_total;
        $payable_total['total_with_tax'] = $request->total_with_tax;
        session()->put('payable_total', $payable_total);

        if ($payable_total == null) {
            return redirect()->route('frontend_index')->with(['message' => 'Basket does not have anything.']);
        }
        return view('frontend.checkout')->with(['payable_total' => $payable_total]);
        //dd(session()->get('payable_total'));
    }

    public function paynow(Request $request)
    {

        //dd($request);

        $customer_information = session()->get('customer_information');
        $customer_information['customer_name'] = $request->customer_name;
        $customer_information['customer_phone'] = $request->customer_phone;
        $customer_information['alternate_phone'] = $request->alternate_phone;
        $customer_information['customer_email'] = $request->customer_email;
        $customer_information['customer_address'] = $request->customer_address;
        $customer_information['customer_notes'] = $request->customer_notes;
        session()->put('customer_information', $customer_information);

        if ($customer_information == null) {
            return redirect()->route('frontend_index')->with(['message' => 'Basket does not have anything.']);
        }

        $options = [
            'cart' => session()->get('cart'),
            'payable_total' => session()->get('payable_total'),
            'customer_information' => session()->get('customer_information')

        ];

        $this->payment_method($options);
    }

    private function payment_method($options)
    {
        dump("We will send value to the payment gateway from this page.");
        foreach ($options['cart'] as $key => $item) {
            $item = (object)$item;
            $data = [
                'property_id' => $item->property_id,
                'property_name' => $item->property_info->name,
                'property_type_id' => 0,
                'property_type_name' => $item->property_info->term_type,
                'parent_cat_id' => $item->parent_id,
                'child_cat_id' => $item->child_id,
                'check_in' => $item->check_in,
                'check_out' => $item->check_out,
                'payment_method' => 'SSL',
                'total_paid_amount' => $item->price,
                'booking_date' => date('d-m-Y'),
                'how_many_guest' => ($item->adult_count + $item->child_count + $item->extra_count),
                'customer_name' => $options['customer_information']['customer_name'],
                'customer_phone' => $options['customer_information']['customer_phone'],
                'alternate_phone' => $options['customer_information']['alternate_phone'],
                'customer_email' => $options['customer_information']['customer_email'],
                'customer_address' => $options['customer_information']['customer_address'],
                'customer_notes' => $options['customer_information']['customer_notes'],
                'property_information' => json_encode($item->property_info),
                'statuses' => 0
            ];
        }


        //$createUser = Booking::create($data);

        dd($data);
    }
}

/**
 * array:3 [▼
 * "cart" => array:2 [▼
 * 73 => array:10 [▼
 * "" => "2500"
 * "" => "73"
 * "" => "16"
 * "child_id" => "http://localhost/mts/monghor/property/monghor-malobika-01"
 * "check_in" => "2023-12-11"
 * "check_out" => "2023-12-12"
 * "adult_count" => "1"
 * "child_count" => "0"
 * "extra_count" => "0"
 * "property_info" => App\Models\Post {#421 ▶}
 * ]
 * 72 => array:10 [▶]
 * ]
 * "payable_total" => array:2 [▼
 * "sub_total" => "2500"
 * "total_with_tax" => "2500"
 * ]
 * "customer_information" => array:6 [▼
 * "customer_name" => "Samrat Khan"
 * "customer_phone" => "+8801680139540"
 * "alternate_phone" => "01821660066"
 * "customer_email" => "info@mathmozo.com"
 * "customer_address" => """
 * House # 33, Road # 8, Block # L
 * South Banasree, Rampura
 * """
 * "customer_notes" => "info@mathmozo.com"
 * ]
 * ]
 **/
