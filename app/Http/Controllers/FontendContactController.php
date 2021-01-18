<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\product_category;

class FontendContactController extends Controller
{
    //////////////////////////////////////// FONTEND CONTACT //////////////////////////////////////////////
    public function fontend_contact()
    {

        $product_category = product_category::get();


        return view('fontend.contact',['product_category'=>$product_category]);
    }
}
