<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\news_banner;
use App\news;
use App\promotion;

class NewsController extends Controller
{
    //////////////////////////////////  NEWS BANNER ///////////////////////////////////////////////////////
    public function news_banner()
    {
        return view('backend.news.news_banner');
    }
    //////////////////////////////////  NEWS ///////////////////////////////////////////////////////
    public function news()
    {
        return view('backend.news.news');
    }
    //////////////////////////////////  PROMOTIONS ///////////////////////////////////////////////////////
    public function promotion()
    {
        return view('backend.news.promotion');
    }

    //////////////////////////////////  NEWS BANNER TABLE ///////////////////////////////////////////////////////
    public function news_banner_data(Request $request)
    {
        $data['data'] = [];
        $i = 1;

        $news_banner = news_banner::all();

        foreach($news_banner as $val)
        {
            if($val->images == '' ){
                $images = '';
            }else{
                $images = '<a target="black" href="'.url("public/assets/images/news_images/" , array($val->images)).'"><img src="public/assets/images/news_images/'.$val->images.'" width="100"></a>';
            }

            $data['data'][] = array(
                "no" =>  $i,
                "images" =>  $images,
                "title_en" =>  $val->title_en,
                "title_th" =>  $val->title_th,
                "active" => '<a href="'.route("edit_news_banner" , array("id"=>$val->id)).'"><button type="button" class="btn btn-primary"><i class="fa fa-edit"></i>&nbsp;Edit</button></a>&nbsp;
                ',
            );
            $i++; 
        }
        echo json_encode($data);
    }
    //////////////////////////////////  NEWS TABLE ///////////////////////////////////////////////////////
    public function news_data(Request $request)
    {
        $data['data'] = [];
        $i = 1;

        $news = news::all();

        foreach($news as $val)
        {
            if($val->images_1 == '' ){
                $images_1 = '';
            }else{
                $images_1 = '<a target="black" href="'.url("public/assets/images/news_images/" , array($val->images_1)).'"><img src="public/assets/images/news_images/'.$val->images_1.'" width="100"></a>';
            }
            if($val->images_2 == '' ){
                $images_2 = '';
            }else{
                $images_2 = '<a target="black" href="'.url("public/assets/images/news_images/" , array($val->images_2)).'"><img src="public/assets/images/news_images/'.$val->images_2.'" width="100"></a>';
            }

            $data['data'][] = array(
                "no" =>  $i,
                "datetime" =>  $val->datetime,
                "images_1" =>  $images_1,
                "images_2" =>  $images_2,
                "title_en" =>  $val->title_en,
                "detail_en" =>  $val->detail_en,
                "active" => '<a href="'.route("edit_news" , array("id"=>$val->id)).'"><button type="button" class="btn btn-primary"><i class="fa fa-edit"></i>&nbsp;Edit</button></a>&nbsp;
                <button type="button" class="btn btn-danger" onclick="ConfirmDelete('.$val->id. ',' ."'$val->delete_id'".')"><i class="fa fa-trash-o"></i>&nbsp;Delete</button>',
            );
            $i++; 
        }
        echo json_encode($data);
    }
    //////////////////////////////////  NEWS TABLE ///////////////////////////////////////////////////////
    public function promotion_data(Request $request)
    {
        $data['data'] = [];
        $i = 1;

        $promotion = promotion::all();

        foreach($promotion as $val)
        {
            if($val->images_1 == '' ){
                $images_1 = '';
            }else{
                $images_1 = '<a target="black" href="'.url("public/assets/images/news_images/" , array($val->images_1)).'"><img src="public/assets/images/news_images/'.$val->images_1.'" width="100"></a>';
            }
            if($val->images_2 == '' ){
                $images_2 = '';
            }else{
                $images_2 = '<a target="black" href="'.url("public/assets/images/news_images/" , array($val->images_2)).'"><img src="public/assets/images/news_images/'.$val->images_2.'" width="100"></a>';
            }

            $data['data'][] = array(
                "no" =>  $i,
                "start_date" =>  $val->start_date,
                "end_date" =>  $val->end_date,
                "images_1" =>  $images_1,
                "images_2" =>  $images_2,
                "title_en" =>  $val->title_en,
                "detail_en" =>  $val->detail_en,
                "active" => '<a href="'.route("edit_promotion" , array("id"=>$val->id)).'"><button type="button" class="btn btn-primary"><i class="fa fa-edit"></i>&nbsp;Edit</button></a>&nbsp;
                <button type="button" class="btn btn-danger" onclick="ConfirmDelete('.$val->id. ',' ."'$val->delete_id'".')"><i class="fa fa-trash-o"></i>&nbsp;Delete</button>',
            );
            $i++; 
        }
        echo json_encode($data);
    }
    

    //////////////////////////////////  INSERT NEWS  ///////////////////////////////////////////////////////
    public function insert_news()
    {
        return view('backend.news.insert_news');
    }
    //////////////////////////////////  INSERT PROMOTION  ///////////////////////////////////////////////////////
    public function insert_promotion()
    {
        return view('backend.news.insert_promotion');
    }

    //////////////////////////////////  SAVA NEWS ///////////////////////////////////////////////////////
    public function save_news(Request $request)
    {
        if($request->hasFile('images_1')!="" and $request->hasFile('images_2')!="" and $request->hasFile('file_download')!=""){
            $images_1 = $request->file('images_1');
            $name_1 = $images_1->getClientOriginalName();
            $destinationPath = public_path('assets/images/news_images/');
            $images_1->move($destinationPath, $name_1);
    
            $images_2 = $request->file('images_2');
            $name_2 = $images_2->getClientOriginalName();
            $destinationPath = public_path('assets/images/news_images/');
            $images_2->move($destinationPath, $name_2);

            $file_download = $request->file('file_download');
            $name_3 = $file_download->getClientOriginalName();
            $destinationPath = public_path('assets/images/news_images/');
            $file_download->move($destinationPath, $name_3);

            $news = new news;
            $news->images_1 = $name_1;
            $news->images_2 = $name_2;
            $news->file_download = $name_3;
            $news->datetime = $request->datetime;
            $news->title_en = $request->title_en;
            $news->title_th = $request->title_th;
            $news->detail_en = $request->detail_en;
            $news->detail_th = $request->detail_th;
            $news->save();
    
            return redirect('/news')->withSuccess('Insert Successfully');
        }else if($request->hasFile('images_1')!="" and $request->hasFile('images_2')!="" and $request->hasFile('file_download')==""){
            $images_1 = $request->file('images_1');
            $name_1 = $images_1->getClientOriginalName();
            $destinationPath = public_path('assets/images/news_images/');
            $images_1->move($destinationPath, $name_1);

            $images_2 = $request->file('images_2');
            $name_2 = $images_2->getClientOriginalName();
            $destinationPath = public_path('assets/images/news_images/');
            $images_2->move($destinationPath, $name_2);

            $news = new news;
            $news->images_1 = $name_1;
            $news->images_2 = $name_2;
            $news->datetime = $request->datetime;
            $news->title_en = $request->title_en;
            $news->title_th = $request->title_th;
            $news->detail_en = $request->detail_en;
            $news->detail_th = $request->detail_th;
            $news->save();

            return redirect('/news')->withSuccess('Insert Successfully');
        }
        else if($request->hasFile('images_1')!="" and $request->hasFile('images_2')=="" and $request->hasFile('file_download')!="")
        {
            $images_1 = $request->file('images_1');
            $name_1 = $images_1->getClientOriginalName();
            $destinationPath = public_path('assets/images/news_images/');
            $images_1->move($destinationPath, $name_1);

            $file_download = $request->file('file_download');
            $name_3 = $file_download->getClientOriginalName();
            $destinationPath = public_path('assets/images/news_images/');
            $file_download->move($destinationPath, $name_3);

            $news = new news;
            $news->images_1 = $name_1;
            $news->file_download = $name_3;
            $news->datetime = $request->datetime;
            $news->title_en = $request->title_en;
            $news->title_th = $request->title_th;
            $news->detail_en = $request->detail_en;
            $news->detail_th = $request->detail_th;
            $news->save();

            return redirect('/news')->withSuccess('Insert Successfully');
        }
        else if($request->hasFile('images_1')=="" and $request->hasFile('images_2')!="" and $request->hasFile('file_download')!="")
        {
            $images_2 = $request->file('images_2');
            $name_2 = $images_2->getClientOriginalName();
            $destinationPath = public_path('assets/images/news_images/');
            $images_2->move($destinationPath, $name_2);

            $file_download = $request->file('file_download');
            $name_3 = $file_download->getClientOriginalName();
            $destinationPath = public_path('assets/images/news_images/');
            $file_download->move($destinationPath, $name_3);

            $news = new news;
            $news->images_2 = $name_2;
            $news->file_download = $name_3;
            $news->datetime = $request->datetime;
            $news->title_en = $request->title_en;
            $news->title_th = $request->title_th;
            $news->detail_en = $request->detail_en;
            $news->detail_th = $request->detail_th;
            $news->save();

            return redirect('/news')->withSuccess('Insert Successfully');
        }
        else if($request->hasFile('images_1')!="" and $request->hasFile('images_2')=="" and $request->hasFile('file_download')=="")
        {
            $images_1 = $request->file('images_1');
            $name_1 = $images_1->getClientOriginalName();
            $destinationPath = public_path('assets/images/news_images/');
            $images_1->move($destinationPath, $name_1);

            $news = new news;
            $news->images_1 = $name_1;
            $news->datetime = $request->datetime;
            $news->title_en = $request->title_en;
            $news->title_th = $request->title_th;
            $news->detail_en = $request->detail_en;
            $news->detail_th = $request->detail_th;
            $news->save();
    
            return redirect('/news')->withSuccess('Insert Successfully');
        }
        else if($request->hasFile('images_1')=="" and $request->hasFile('images_2')!="" and $request->hasFile('file_download')=="")
        {    
            $images_2 = $request->file('images_2');
            $name_2 = $images_2->getClientOriginalName();
            $destinationPath = public_path('assets/images/news_images/');
            $images_2->move($destinationPath, $name_2);

            $news = new news;
            $news->images_2 = $name_2;
            $news->datetime = $request->datetime;
            $news->title_en = $request->title_en;
            $news->title_th = $request->title_th;
            $news->detail_en = $request->detail_en;
            $news->detail_th = $request->detail_th;
            $news->save();
    
            return redirect('/news')->withSuccess('Insert Successfully');
        }
        else if($request->hasFile('images_1')=="" and $request->hasFile('images_2')=="" and $request->hasFile('file_download')!="")
        {
            $file_download = $request->file('file_download');
            $name_3 = $file_download->getClientOriginalName();
            $destinationPath = public_path('assets/images/news_images/');
            $file_download->move($destinationPath, $name_3);

            $news = new news;
            $news->file_download = $name_3;
            $news->datetime = $request->datetime;
            $news->title_en = $request->title_en;
            $news->title_th = $request->title_th;
            $news->detail_en = $request->detail_en;
            $news->detail_th = $request->detail_th;
            $news->save();
    
            return redirect('/news')->withSuccess('Insert Successfully');
        }
        else
        {
            $news = new news;
            $news->datetime = $request->datetime;
            $news->title_en = $request->title_en;
            $news->title_th = $request->title_th;
            $news->detail_en = $request->detail_en;
            $news->detail_th = $request->detail_th;
            $news->save();
    
            return redirect('/news')->withSuccess('Insert Successfully');
        }
    }
    //////////////////////////////////  SAVA NEWS ///////////////////////////////////////////////////////
    public function save_promotion(Request $request)
    {
        if($request->hasFile('images_1')!="" and $request->hasFile('images_2')!="" and $request->hasFile('file_download')!=""){
            $images_1 = $request->file('images_1');
            $name_1 = $images_1->getClientOriginalName();
            $destinationPath = public_path('assets/images/news_images/');
            $images_1->move($destinationPath, $name_1);
    
            $images_2 = $request->file('images_2');
            $name_2 = $images_2->getClientOriginalName();
            $destinationPath = public_path('assets/images/news_images/');
            $images_2->move($destinationPath, $name_2);

            $file_download = $request->file('file_download');
            $name_3 = $file_download->getClientOriginalName();
            $destinationPath = public_path('assets/images/news_images/');
            $file_download->move($destinationPath, $name_3);

            $promotion = new promotion;
            $promotion->images_1 = $name_1;
            $promotion->images_2 = $name_2;
            $promotion->file_download = $name_3;
            $promotion->start_date = $request->start_date;
            $promotion->end_date = $request->end_date;
            $promotion->title_en = $request->title_en;
            $promotion->title_th = $request->title_th;
            $promotion->detail_en = $request->detail_en;
            $promotion->detail_th = $request->detail_th;
            $promotion->save();
    
            return redirect('/promotion')->withSuccess('Insert Successfully');
        }else if($request->hasFile('images_1')!="" and $request->hasFile('images_2')!="" and $request->hasFile('file_download')==""){
            $images_1 = $request->file('images_1');
            $name_1 = $images_1->getClientOriginalName();
            $destinationPath = public_path('assets/images/news_images/');
            $images_1->move($destinationPath, $name_1);

            $images_2 = $request->file('images_2');
            $name_2 = $images_2->getClientOriginalName();
            $destinationPath = public_path('assets/images/news_images/');
            $images_2->move($destinationPath, $name_2);

            $promotion = new promotion;
            $promotion->images_1 = $name_1;
            $promotion->images_2 = $name_2;
            $promotion->start_date = $request->start_date;
            $promotion->end_date = $request->end_date;
            $promotion->title_en = $request->title_en;
            $promotion->title_th = $request->title_th;
            $promotion->detail_en = $request->detail_en;
            $promotion->detail_th = $request->detail_th;
            $promotion->save();

            return redirect('/promotion')->withSuccess('Insert Successfully');
        }
        else if($request->hasFile('images_1')!="" and $request->hasFile('images_2')=="" and $request->hasFile('file_download')!="")
        {
            $images_1 = $request->file('images_1');
            $name_1 = $images_1->getClientOriginalName();
            $destinationPath = public_path('assets/images/news_images/');
            $images_1->move($destinationPath, $name_1);

            $file_download = $request->file('file_download');
            $name_3 = $file_download->getClientOriginalName();
            $destinationPath = public_path('assets/images/news_images/');
            $file_download->move($destinationPath, $name_3);

            $promotion = new promotion;
            $promotion->images_1 = $name_1;
            $promotion->file_download = $name_3;
            $promotion->start_date = $request->start_date;
            $promotion->end_date = $request->end_date;
            $promotion->title_en = $request->title_en;
            $promotion->title_th = $request->title_th;
            $promotion->detail_en = $request->detail_en;
            $promotion->detail_th = $request->detail_th;
            $promotion->save();

            return redirect('/promotion')->withSuccess('Insert Successfully');
        }
        else if($request->hasFile('images_1')=="" and $request->hasFile('images_2')!="" and $request->hasFile('file_download')!="")
        {
            $images_2 = $request->file('images_2');
            $name_2 = $images_2->getClientOriginalName();
            $destinationPath = public_path('assets/images/news_images/');
            $images_2->move($destinationPath, $name_2);

            $file_download = $request->file('file_download');
            $name_3 = $file_download->getClientOriginalName();
            $destinationPath = public_path('assets/images/news_images/');
            $file_download->move($destinationPath, $name_3);

            $promotion = new promotion;
            $promotion->images_2 = $name_2;
            $promotion->file_download = $name_3;
            $promotion->start_date = $request->start_date;
            $promotion->end_date = $request->end_date;
            $promotion->title_en = $request->title_en;
            $promotion->title_th = $request->title_th;
            $promotion->detail_en = $request->detail_en;
            $promotion->detail_th = $request->detail_th;
            $promotion->save();

            return redirect('/promotion')->withSuccess('Insert Successfully');
        }
        else if($request->hasFile('images_1')!="" and $request->hasFile('images_2')=="" and $request->hasFile('file_download')=="")
        {
            $images_1 = $request->file('images_1');
            $name_1 = $images_1->getClientOriginalName();
            $destinationPath = public_path('assets/images/news_images/');
            $images_1->move($destinationPath, $name_1);

            $promotion = new promotion;
            $promotion->images_1 = $name_1;
            $promotion->start_date = $request->start_date;
            $promotion->end_date = $request->end_date;
            $promotion->title_en = $request->title_en;
            $promotion->title_th = $request->title_th;
            $promotion->detail_en = $request->detail_en;
            $promotion->detail_th = $request->detail_th;
            $promotion->save();
    
            return redirect('/promotion')->withSuccess('Insert Successfully');
        }
        else if($request->hasFile('images_1')=="" and $request->hasFile('images_2')!="" and $request->hasFile('file_download')=="")
        {    
            $images_2 = $request->file('images_2');
            $name_2 = $images_2->getClientOriginalName();
            $destinationPath = public_path('assets/images/news_images/');
            $images_2->move($destinationPath, $name_2);

            $promotion = new promotion;
            $promotion->images_2 = $name_2;
            $promotion->start_date = $request->start_date;
            $promotion->end_date = $request->end_date;
            $promotion->title_en = $request->title_en;
            $promotion->title_th = $request->title_th;
            $promotion->detail_en = $request->detail_en;
            $promotion->detail_th = $request->detail_th;
            $promotion->save();
    
            return redirect('/promotion')->withSuccess('Insert Successfully');
        }
        else if($request->hasFile('images_1')=="" and $request->hasFile('images_2')=="" and $request->hasFile('file_download')!="")
        {
            $file_download = $request->file('file_download');
            $name_3 = $file_download->getClientOriginalName();
            $destinationPath = public_path('assets/images/news_images/');
            $file_download->move($destinationPath, $name_3);

            $promotion = new promotion;
            $promotion->file_download = $name_3;
            $promotion->start_date = $request->start_date;
            $promotion->end_date = $request->end_date;
            $promotion->title_en = $request->title_en;
            $promotion->title_th = $request->title_th;
            $promotion->detail_en = $request->detail_en;
            $promotion->detail_th = $request->detail_th;
            $promotion->save();
    
            return redirect('/promotion')->withSuccess('Insert Successfully');
        }
        else
        {
            $promotion = new promotion;
            $promotion->start_date = $request->start_date;
            $promotion->end_date = $request->end_date;
            $promotion->title_en = $request->title_en;
            $promotion->title_th = $request->title_th;
            $promotion->detail_en = $request->detail_en;
            $promotion->detail_th = $request->detail_th;
            $promotion->save();
    
            return redirect('/promotion')->withSuccess('Insert Successfully');
        }
    }

    //////////////////////////////////  EDIT NEWS BANNER  ///////////////////////////////////////////////////////
    public function edit_news_banner($id)
    {
        $news_banner = news_banner::find($id);
        return view('backend.news.edit_news_banner',['news_banner'=>$news_banner]);
    }
    //////////////////////////////////  EDIT NEWS ///////////////////////////////////////////////////////
    public function edit_news($id)
    {
        $news = news::find($id);
        return view('backend.news.edit_news',['news'=>$news]);
    }
    //////////////////////////////////  EDIT PROMOTION ///////////////////////////////////////////////////////
    public function edit_promotion($id)
    {
        $promotion = promotion::find($id);
        return view('backend.news.edit_promotion',['promotion'=>$promotion]);
    }

    //////////////////////////////////  UPDATE NEWS BANNER ///////////////////////////////////////////////////////
    public function update_news_banner(Request $request)
    {
        if( $request->hasFile('images')){
            $images = $request->file('images');
            $name = $images->getClientOriginalName();
            $destinationPath = public_path('assets/images/news_images/');
            $images->move($destinationPath, $name);

            $news_banner = news_banner::find($request->id);
            $news_banner->images = $name;
            $news_banner->title_en = $request->title_en;
            $news_banner->title_th = $request->title_th;
            $news_banner->save();

            return redirect()->route('edit_news_banner',['id' => $request->id])->withSuccess('Update Successfully');
        }
        else{
            $news_banner = news_banner::find($request->id);
            $news_banner->title_en = $request->title_en;
            $news_banner->title_th = $request->title_th;
            $news_banner->save();

            return redirect()->route('edit_news_banner',['id' => $request->id])->withSuccess('Update Successfully');
        }
    }
    //////////////////////////////////  UPDATE NEWS ///////////////////////////////////////////////////////
    public function update_news(Request $request)
    {
        if($request->hasFile('images_1')!="" and $request->hasFile('images_2')!="" and $request->hasFile('file_download')!=""){
            $images_1 = $request->file('images_1');
            $name_1 = $images_1->getClientOriginalName();
            $destinationPath = public_path('assets/images/news_images/');
            $images_1->move($destinationPath, $name_1);
    
            $images_2 = $request->file('images_2');
            $name_2 = $images_2->getClientOriginalName();
            $destinationPath = public_path('assets/images/news_images/');
            $images_2->move($destinationPath, $name_2);

            $file_download = $request->file('file_download');
            $name_3 = $file_download->getClientOriginalName();
            $destinationPath = public_path('assets/images/news_images/');
            $file_download->move($destinationPath, $name_3);

            $news = news::find($request->id);
            $news->images_1 = $name_1;
            $news->images_2 = $name_2;
            $news->file_download = $name_3;
            $news->datetime = $request->datetime;
            $news->title_en = $request->title_en;
            $news->title_th = $request->title_th;
            $news->detail_en = $request->detail_en;
            $news->detail_th = $request->detail_th;
            $news->save();
    
            return redirect()->route('edit_news',['id' => $request->id])->withSuccess('Update Successfully');
       }
       else if($request->hasFile('images_1')!="" and $request->hasFile('images_2')!="" and $request->hasFile('file_download')=="")
        {
                $images_1 = $request->file('images_1');
                $name_1 = $images_1->getClientOriginalName();
                $destinationPath = public_path('assets/images/news_images/');
                $images_1->move($destinationPath, $name_1);

                $images_2 = $request->file('images_2');
                $name_2 = $images_2->getClientOriginalName();
                $destinationPath = public_path('assets/images/news_images/');
                $images_2->move($destinationPath, $name_2);

                $news = news::find($request->id);
                $news->images_1 = $name_1;
                $news->images_2 = $name_2;
                $news->datetime = $request->datetime;
                $news->title_en = $request->title_en;
                $news->title_th = $request->title_th;
                $news->detail_en = $request->detail_en;
                $news->detail_th = $request->detail_th;
                $news->save();

            return redirect()->route('edit_news',['id' => $request->id])->withSuccess('Update Successfully');
        }
        else if($request->hasFile('images_1')!="" and $request->hasFile('images_2')=="" and $request->hasFile('file_download')!="")
        {
            $images_1 = $request->file('images_1');
            $name_1 = $images_1->getClientOriginalName();
            $destinationPath = public_path('assets/images/news_images/');
            $images_1->move($destinationPath, $name_1);

            $file_download = $request->file('file_download');
            $name_3 = $file_download->getClientOriginalName();
            $destinationPath = public_path('assets/images/news_images/');
            $file_download->move($destinationPath, $name_3);

            $news = news::find($request->id);
            $news->images_1 = $name_1;
            $news->file_download = $name_3;
            $news->datetime = $request->datetime;
            $news->title_en = $request->title_en;
            $news->title_th = $request->title_th;
            $news->detail_en = $request->detail_en;
            $news->detail_th = $request->detail_th;
            $news->save();

            return redirect()->route('edit_news',['id' => $request->id])->withSuccess('Update Successfully');
        }
        else if($request->hasFile('images_1')=="" and $request->hasFile('images_2')!="" and $request->hasFile('file_download')!="")
        {
            $images_2 = $request->file('images_2');
            $name_2 = $images_2->getClientOriginalName();
            $destinationPath = public_path('assets/images/news_images/');
            $images_2->move($destinationPath, $name_2);

            $file_download = $request->file('file_download');
            $name_3 = $file_download->getClientOriginalName();
            $destinationPath = public_path('assets/images/news_images/');
            $file_download->move($destinationPath, $name_3);

            $news = news::find($request->id);
            $news->images_2 = $name_2;
            $news->file_download = $name_3;
            $news->datetime = $request->datetime;
            $news->title_en = $request->title_en;
            $news->title_th = $request->title_th;
            $news->detail_en = $request->detail_en;
            $news->detail_th = $request->detail_th;
            $news->save();

            return redirect()->route('edit_news',['id' => $request->id])->withSuccess('Update Successfully');
        }
        else if($request->hasFile('images_1')!="" and $request->hasFile('images_2')=="" and $request->hasFile('file_download')=="")
        {
            $images_1 = $request->file('images_1');
            $name_1 = $images_1->getClientOriginalName();
            $destinationPath = public_path('assets/images/news_images/');
            $images_1->move($destinationPath, $name_1);

            $news = news::find($request->id);
            $news->images_1 = $name_1;
            $news->datetime = $request->datetime;
            $news->title_en = $request->title_en;
            $news->title_th = $request->title_th;
            $news->detail_en = $request->detail_en;
            $news->detail_th = $request->detail_th;
            $news->save();
    
            return redirect()->route('edit_news',['id' => $request->id])->withSuccess('Update Successfully');
        }
        else if($request->hasFile('images_1')=="" and $request->hasFile('images_2')!="" and $request->hasFile('file_download')=="")
        {    
            $images_2 = $request->file('images_2');
            $name_2 = $images_2->getClientOriginalName();
            $destinationPath = public_path('assets/images/news_images/');
            $images_2->move($destinationPath, $name_2);

            $news = news::find($request->id);
            $news->images_2 = $name_2;
            $news->datetime = $request->datetime;
            $news->title_en = $request->title_en;
            $news->title_th = $request->title_th;
            $news->detail_en = $request->detail_en;
            $news->detail_th = $request->detail_th;
            $news->save();
    
            return redirect()->route('edit_news',['id' => $request->id])->withSuccess('Update Successfully');
        }
        else if($request->hasFile('images_1')=="" and $request->hasFile('images_2')=="" and $request->hasFile('file_download')!="")
        {
            $file_download = $request->file('file_download');
            $name_3 = $file_download->getClientOriginalName();
            $destinationPath = public_path('assets/images/news_images/');
            $file_download->move($destinationPath, $name_3);

            $news = news::find($request->id);
            $news->file_download = $name_3;
            $news->datetime = $request->datetime;
            $news->title_en = $request->title_en;
            $news->title_th = $request->title_th;
            $news->detail_en = $request->detail_en;
            $news->detail_th = $request->detail_th;
            $news->save();
    
            return redirect()->route('edit_news',['id' => $request->id])->withSuccess('Update Successfully');
        }
        else
        {
            $news = news::find($request->id);
            $news->datetime = $request->datetime;
            $news->title_en = $request->title_en;
            $news->title_th = $request->title_th;
            $news->detail_en = $request->detail_en;
            $news->detail_th = $request->detail_th;
            $news->save();
    
            return redirect()->route('edit_news',['id' => $request->id])->withSuccess('Update Successfully');
        }
    }
    //////////////////////////////////  UPDATE PROMOTION ///////////////////////////////////////////////////////
    public function update_promotion(Request $request)
    {
        if($request->hasFile('images_1')!="" and $request->hasFile('images_2')!="" and $request->hasFile('file_download')!=""){
            $images_1 = $request->file('images_1');
            $name_1 = $images_1->getClientOriginalName();
            $destinationPath = public_path('assets/images/news_images/');
            $images_1->move($destinationPath, $name_1);
    
            $images_2 = $request->file('images_2');
            $name_2 = $images_2->getClientOriginalName();
            $destinationPath = public_path('assets/images/news_images/');
            $images_2->move($destinationPath, $name_2);

            $file_download = $request->file('file_download');
            $name_3 = $file_download->getClientOriginalName();
            $destinationPath = public_path('assets/images/news_images/');
            $file_download->move($destinationPath, $name_3);

            $promotion = promotion::find($request->id);
            $promotion->images_1 = $name_1;
            $promotion->images_2 = $name_2;
            $promotion->file_download = $name_3;
            $promotion->start_date = $request->start_date;
            $promotion->end_date = $request->end_date;
            $promotion->title_en = $request->title_en;
            $promotion->title_th = $request->title_th;
            $promotion->detail_en = $request->detail_en;
            $promotion->detail_th = $request->detail_th;
            $promotion->save();
    
            return redirect()->route('edit_promotion',['id' => $request->id])->withSuccess('Update Successfully');
       }
       else if($request->hasFile('images_1')!="" and $request->hasFile('images_2')!="" and $request->hasFile('file_download')=="")
        {
                $images_1 = $request->file('images_1');
                $name_1 = $images_1->getClientOriginalName();
                $destinationPath = public_path('assets/images/news_images/');
                $images_1->move($destinationPath, $name_1);

                $images_2 = $request->file('images_2');
                $name_2 = $images_2->getClientOriginalName();
                $destinationPath = public_path('assets/images/news_images/');
                $images_2->move($destinationPath, $name_2);

                $promotion = promotion::find($request->id);
                $promotion->images_1 = $name_1;
                $promotion->images_2 = $name_2;
                $promotion->start_date = $request->start_date;
                $promotion->end_date = $request->end_date;
                $promotion->title_en = $request->title_en;
                $promotion->title_th = $request->title_th;
                $promotion->detail_en = $request->detail_en;
                $promotion->detail_th = $request->detail_th;
                $promotion->save();

            return redirect()->route('edit_promotion',['id' => $request->id])->withSuccess('Update Successfully');
        }
        else if($request->hasFile('images_1')!="" and $request->hasFile('images_2')=="" and $request->hasFile('file_download')!="")
        {
            $images_1 = $request->file('images_1');
            $name_1 = $images_1->getClientOriginalName();
            $destinationPath = public_path('assets/images/news_images/');
            $images_1->move($destinationPath, $name_1);

            $file_download = $request->file('file_download');
            $name_3 = $file_download->getClientOriginalName();
            $destinationPath = public_path('assets/images/news_images/');
            $file_download->move($destinationPath, $name_3);

            $promotion = promotion::find($request->id);
            $promotion->images_1 = $name_1;
            $promotion->file_download = $name_3;
            $promotion->start_date = $request->start_date;
            $promotion->end_date = $request->end_date;
            $promotion->title_en = $request->title_en;
            $promotion->title_th = $request->title_th;
            $promotion->detail_en = $request->detail_en;
            $promotion->detail_th = $request->detail_th;
            $promotion->save();

            return redirect()->route('edit_promotion',['id' => $request->id])->withSuccess('Update Successfully');
        }
        else if($request->hasFile('images_1')=="" and $request->hasFile('images_2')!="" and $request->hasFile('file_download')!="")
        {
            $images_2 = $request->file('images_2');
            $name_2 = $images_2->getClientOriginalName();
            $destinationPath = public_path('assets/images/news_images/');
            $images_2->move($destinationPath, $name_2);

            $file_download = $request->file('file_download');
            $name_3 = $file_download->getClientOriginalName();
            $destinationPath = public_path('assets/images/news_images/');
            $file_download->move($destinationPath, $name_3);

            $promotion = promotion::find($request->id);
            $promotion->images_2 = $name_2;
            $promotion->file_download = $name_3;
            $promotion->start_date = $request->start_date;
            $promotion->end_date = $request->end_date;
            $promotion->title_en = $request->title_en;
            $promotion->title_th = $request->title_th;
            $promotion->detail_en = $request->detail_en;
            $promotion->detail_th = $request->detail_th;
            $promotion->save();

            return redirect()->route('edit_promotion',['id' => $request->id])->withSuccess('Update Successfully');
        }
        else if($request->hasFile('images_1')!="" and $request->hasFile('images_2')=="" and $request->hasFile('file_download')=="")
        {
            $images_1 = $request->file('images_1');
            $name_1 = $images_1->getClientOriginalName();
            $destinationPath = public_path('assets/images/news_images/');
            $images_1->move($destinationPath, $name_1);

            $promotion = promotion::find($request->id);
            $promotion->images_1 = $name_1;
            $promotion->start_date = $request->start_date;
            $promotion->end_date = $request->end_date;
            $promotion->title_en = $request->title_en;
            $promotion->title_th = $request->title_th;
            $promotion->detail_en = $request->detail_en;
            $promotion->detail_th = $request->detail_th;
            $promotion->save();
    
            return redirect()->route('edit_promotion',['id' => $request->id])->withSuccess('Update Successfully');
        }
        else if($request->hasFile('images_1')=="" and $request->hasFile('images_2')!="" and $request->hasFile('file_download')=="")
        {    
            $images_2 = $request->file('images_2');
            $name_2 = $images_2->getClientOriginalName();
            $destinationPath = public_path('assets/images/news_images/');
            $images_2->move($destinationPath, $name_2);

            $promotion = promotion::find($request->id);
            $promotion->images_2 = $name_2;
            $promotion->start_date = $request->start_date;
            $promotion->end_date = $request->end_date;
            $promotion->title_en = $request->title_en;
            $promotion->title_th = $request->title_th;
            $promotion->detail_en = $request->detail_en;
            $promotion->detail_th = $request->detail_th;
            $promotion->save();
    
            return redirect()->route('edit_promotion',['id' => $request->id])->withSuccess('Update Successfully');
        }
        else if($request->hasFile('images_1')=="" and $request->hasFile('images_2')=="" and $request->hasFile('file_download')!="")
        {
            $file_download = $request->file('file_download');
            $name_3 = $file_download->getClientOriginalName();
            $destinationPath = public_path('assets/images/news_images/');
            $file_download->move($destinationPath, $name_3);

            $promotion = promotion::find($request->id);
            $promotion->file_download = $name_3;
            $promotion->start_date = $request->start_date;
            $promotion->end_date = $request->end_date;
            $promotion->title_en = $request->title_en;
            $promotion->title_th = $request->title_th;
            $promotion->detail_en = $request->detail_en;
            $promotion->detail_th = $request->detail_th;
            $promotion->save();
    
            return redirect()->route('edit_promotion',['id' => $request->id])->withSuccess('Update Successfully');
        }
        else
        {
            $promotion = promotion::find($request->id);
            $promotion->start_date = $request->start_date;
            $promotion->end_date = $request->end_date;
            $promotion->title_en = $request->title_en;
            $promotion->title_th = $request->title_th;
            $promotion->detail_en = $request->detail_en;
            $promotion->detail_th = $request->detail_th;
            $promotion->save();
    
            return redirect()->route('edit_promotion',['id' => $request->id])->withSuccess('Update Successfully');
        }
    }

    //////////////////////////////// DELETE NEWS ///////////////////////////////////////////
    public function delete_news(Request $request)
    {
        DB::table('tb_news')->where('id','=', $request->id)->delete();
        return "Delete Successfully";
    }
    //////////////////////////////// DELETE PROMOTION ///////////////////////////////////////////
    public function delete_promotion(Request $request)
    {
        DB::table('tb_promotion')->where('id','=', $request->id)->delete();
        return "Delete Successfully";
    }
}
