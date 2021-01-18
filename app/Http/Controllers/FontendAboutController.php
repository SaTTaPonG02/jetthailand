<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\product_category;

class FontendAboutController extends Controller
{
    //////////////////////////////////////// FONTEND ABOUT //////////////////////////////////////////////
    public function fontend_about()
    {

        $product_category = product_category::get();

        return view('fontend.about',['product_category'=>$product_category]);
    }
}
