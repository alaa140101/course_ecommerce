<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    
    public function index()
    {
        return view('frontend.index');
    }
    public function cart()
    {
        return view('frontend.cart');
    }
    public function about()
    {
        return view('frontend.about');
    }
    public function checkout()
    {
        return view('frontend.checkout');
    }
    public function contact()
    {
        return view('frontend.contact');
    }
    public function shop()
    {
        return view('frontend.shop');
    }
    public function singleProduct()
    {
        return view('frontend.single-product');
    }

}
