<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\home_banner;
use App\product_category;

class FontendHomeController extends Controller
{
    //////////////////////////////////////// FONTEND HOME //////////////////////////////////////////////
    public function fontend_home()
    {
        $product_category = product_category::get();

        $home_banner = home_banner::get();

        return view('fontend.index',['home_banner'=>$home_banner,'product_category'=>$product_category]);

    }
}
