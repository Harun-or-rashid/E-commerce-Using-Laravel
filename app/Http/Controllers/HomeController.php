<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function ShowHome()
    {
//        $query = product::all();
//
//        $data['products']=product::select(['id','title','slug','description','price','sale_price'])
//            ->where('active',1)
//            ->paginate(9);
$products=product::all();
        return view('frontend.home',compact('products'));
    }
}
