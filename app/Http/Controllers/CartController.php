<?php

namespace App\Http\Controllers;

use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;

class CartController extends Controller
{
    function ShowCart(){

        
    }

    function AddCart(Request $request){
        $cart=[];
        $cart['products']=[
            [

            ]
        ];
        try{
            $this->validate($request,[
                'product_id'=>'required',
            ]);
        }catch (ValidationException $e){
            return redirect()->back();
        }

    }
}
