<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function ShowDetails($slug)
    {
        $product=product::where('slug',$slug)->where('active',1)->first();

        if($product==null){
            return redirect('frontend.home');
        }
    }
}
