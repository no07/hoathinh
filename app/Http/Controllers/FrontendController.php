<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(Request $request){
        if($request->isMethod('get')){
            return view('frontend.index');
        }
    }
    public function category(Request $request){
        $category = Category::find($request->id);
        return view('frontend.category',['category' => $category]);
    }
    public function product(Request $request){
        $product = Product::find($request->id);
        return view('frontend.product',['product' => $product]);
    }
    public function contact(Request $request){
        return view('frontend.contact');
    }
}
