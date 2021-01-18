<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\product_category;

class FontendProductController extends Controller
{
    //////////////////////////////////////// FONTEND PRODUCT //////////////////////////////////////////////
    public function fontend_product($id)
    {

        $product_category = product_category::where('id','=',$id)->get();

        // $product_category_f = product_category::where('id','=',$id)->first();

        return view('fontend.product',['product_category'=>$product_category]);
    }
}
