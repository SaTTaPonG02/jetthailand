<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\product_category;
use App\news;

class FontendNewsController extends Controller
{
    //////////////////////////////////////// FONTEND NEWS //////////////////////////////////////////////
    public function fontend_news()
    {

        $product_category = product_category::get();

        $news = news::orderBy('id','desc')->paginate(4);

        return view('fontend.news',['product_category'=>$product_category,'news'=>$news]);
    }
    //////////////////////////////////////// FONTEND NEWS DETAIL //////////////////////////////////////////////
    public function fontend_news_detail($id)
    {

        $product_category = product_category::get();

        $news = news::where('id','=',$id)->first();

        return view('fontend.news_inside',['product_category'=>$product_category,'news'=>$news]);
    }
}
