<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function ShowDetails($slug)
    {
        $data=[];
        $data['product']=product::where('slug',$slug)->where('active',1)->first();

        if($data['product']==null){
            return redirect()->route('frontend.home');
        }
        else{
            return view("frontend.products.details",$data);
        }
    }
}
