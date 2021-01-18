<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\home_banner;

class IndexController extends Controller
{
    //////////////////////////////////  HOME BANNER ///////////////////////////////////////////////////////
    public function home_banner()
    {
        return view('backend.home.home_banner');
    }

    //////////////////////////////////  HOME BANNER TABLE ///////////////////////////////////////////////////////
    public function home_banner_data(Request $request)
    {
        $data['data'] = [];
        $i = 1;

        $home_banner = home_banner::all();

        foreach($home_banner as $val)
        {
            if($val->images_pc == '' ){
                $images_pc = '';
            }else{
                $images_pc = '<a target="black" href="'.url("public/assets/images/home_images/" , array($val->images_pc)).'"><img src="public/assets/images/home_images/'.$val->images_pc.'" width="100"></a>';
            }
            if($val->images_mb == '' ){
                $images_mb = '';
            }else{
                $images_mb = '<a target="black" href="'.url("public/assets/images/home_images/" , array($val->images_mb)).'"><img src="public/assets/images/home_images/'.$val->images_mb.'" width="100"></a>';
            }
            $data['data'][] = array(
                "no" =>  $i,
                "images_pc" =>  $images_pc,
                "images_mb" =>   $images_mb,
                "title_en" =>  $val->title_en,
                "detail_en" =>  $val->detail_en,
                "active" => '<a href="'.route("edit_home_banner" , array("id"=>$val->id)).'"><button type="button" class="btn btn-primary"><i class="fa fa-edit"></i>&nbsp;Edit</button></a>&nbsp;
                <button type="button" class="btn btn-danger" onclick="ConfirmDelete('.$val->id. ',' ."'$val->delete_id'".')"><i class="fa fa-trash-o"></i>&nbsp;Delete</button>',
            );
            $i++; 
        }
        echo json_encode($data);
    }

    //////////////////////////////////  INSERT HOME BANNER  ///////////////////////////////////////////////////////
    public function insert_home_banner()
    {
        return view('backend.home.insert_home_banner');
    }

    //////////////////////////////////  SAVA HOME BANNER ///////////////////////////////////////////////////////
    public function save_home_banner(Request $request)
    {
        if($request->hasFile('images_pc')!="" and $request->hasFile('images_mb')!=""){
            $images_pc = $request->file('images_pc');
            $name_pc = $images_pc->getClientOriginalName();
            $destinationPath = public_path('assets/images/home_images/');
            $images_pc->move($destinationPath, $name_pc);
    
            $images_mb = $request->file('images_mb');
            $name_mb = $images_mb->getClientOriginalName();
            $destinationPath = public_path('assets/images/home_images/');
            $images_mb->move($destinationPath, $name_mb);

            $home_banner = new home_banner;
            $home_banner->images_pc = $name_pc;
            $home_banner->images_mb = $name_mb;
            $home_banner->title_en = $request->title_en;
            $home_banner->title_th = $request->title_th;
            $home_banner->detail_en = $request->detail_en;
            $home_banner->detail_th = $request->detail_th;
            $home_banner->link = $request->link;
            $home_banner->save();
    
            return redirect('/home_banner')->withSuccess('Insert Successfully');
       }
       else if($request->hasFile('images_pc')!="" and $request->hasFile('images_mb')==""){
            $images_pc = $request->file('images_pc');
            $name_pc = $images_pc->getClientOriginalName();
            $destinationPath = public_path('assets/images/home_images/');
            $images_pc->move($destinationPath, $name_pc);

            $home_banner = new home_banner;
            $home_banner->images_pc = $name_pc;
            $home_banner->title_en = $request->title_en;
            $home_banner->title_th = $request->title_th;
            $home_banner->detail_en = $request->detail_en;
            $home_banner->detail_th = $request->detail_th;
            $home_banner->link = $request->link;
            $home_banner->save(); 
    
            return redirect('/home_banner')->withSuccess('Insert Successfully');
       }
       else if($request->hasFile('images_pc')=="" and $request->hasFile('images_mb')!=""){
            $images_mb = $request->file('images_mb');
            $name_mb = $images_mb->getClientOriginalName();
            $destinationPath = public_path('assets/images/home_images/');
            $images_mb->move($destinationPath, $name_mb);

            $home_banner = new home_banner;
            $home_banner->images_mb = $name_mb;
            $home_banner->title_en = $request->title_en;
            $home_banner->title_th = $request->title_th;
            $home_banner->detail_en = $request->detail_en;
            $home_banner->detail_th = $request->detail_th;
            $home_banner->link = $request->link;
            $home_banner->save();

            return redirect('/home_banner')->withSuccess('Insert Successfully');
       }
       else {
            $home_banner = new home_banner;
            $home_banner->title_en = $request->title_en;
            $home_banner->title_th = $request->title_th;
            $home_banner->detail_en = $request->detail_en;
            $home_banner->detail_th = $request->detail_th;
            $home_banner->link = $request->link;
            $home_banner->save();

            return redirect('/home_banner')->withSuccess('Insert Successfully');
       }
    }

    //////////////////////////////////  EDIT HOME BANNER  ///////////////////////////////////////////////////////
    public function edit_home_banner($id)
    {
        $home_banner = home_banner::find($id);
        return view('backend.home.edit_home_banner',['home_banner'=>$home_banner]);
    }

    //////////////////////////////////  UPDATE HOME BANNER ///////////////////////////////////////////////////////
    public function update_home_banner(Request $request)
    {
        if( $request->hasFile('images_pc')!="" and $request->hasFile('images_mb')!="" ){
            $images_pc = $request->file('images_pc');
            $name_pc = $images->getClientOriginalName();
            $destinationPath = public_path('assets/images/home_images/');
            $images_pc->move($destinationPath, $name_pc);

            $images_mb = $request->file('images_mb');
            $name_mb = $images_mb->getClientOriginalName();
            $destinationPath = public_path('assets/images/home_images/');
            $images_mb->move($destinationPath, $name_mb);

            $home_banner = home_banner::find($request->id);
            $home_banner->images_pc = $name_pc;
            $home_banner->images_mb = $name_mb;
            $home_banner->title_en = $request->title_en;
            $home_banner->title_th = $request->title_th;
            $home_banner->detail_en = $request->detail_en;
            $home_banner->detail_th = $request->detail_th;
            $home_banner->link = $request->link;
            $home_banner->save();

            return redirect()->route('edit_home_banner',['id' => $request->id])->withSuccess('Update Successfully');
        }
        else if($request->hasFile('images_pc')!="" and $request->hasFile('images_mb')==""){
            $images_pc = $request->file('images_pc');
            $name_pc = $images_pc->getClientOriginalName();
            $destinationPath = public_path('assets/images/home_images/');
            $images_pc->move($destinationPath, $name_pc);

            $home_banner = home_banner::find($request->id);
            $home_banner->images_pc = $name_pc;
            $home_banner->title_en = $request->title_en;
            $home_banner->title_th = $request->title_th;
            $home_banner->detail_en = $request->detail_en;
            $home_banner->detail_th = $request->detail_th;
            $home_banner->link = $request->link;
            $home_banner->save();
    
            return redirect()->route('edit_home_banner',['id' => $request->id])->withSuccess('Update Successfully');
       }
       else if($request->hasFile('images_pc')=="" and $request->hasFile('images_mb')!=""){
            $images_mb = $request->file('images_mb');
            $name_mb = $images_mb->getClientOriginalName();
            $destinationPath = public_path('assets/images/home_images/');
            $images_mb->move($destinationPath, $name_mb);

            $home_banner = home_banner::find($request->id);
            $home_banner->images_mb = $name_mb;
            $home_banner->title_en = $request->title_en;
            $home_banner->title_th = $request->title_th;
            $home_banner->detail_en = $request->detail_en;
            $home_banner->detail_th = $request->detail_th;
            $home_banner->link = $request->link;
            $home_banner->save();

            return redirect()->route('edit_home_banner',['id' => $request->id])->withSuccess('Update Successfully');
       }
       else{
            $home_banner = home_banner::find($request->id);
            $home_banner->title_en = $request->title_en;
            $home_banner->title_th = $request->title_th;
            $home_banner->detail_en = $request->detail_en;
            $home_banner->detail_th = $request->detail_th;
            $home_banner->link = $request->link;
            $home_banner->save();

            return redirect()->route('edit_home_banner',['id' => $request->id])->withSuccess('Update Successfully');
        }
    }

    //////////////////////////////// DELETE HOME BANNER ///////////////////////////////////////////
    public function delete_home_banner(Request $request)
    {
        DB::table('tb_home_banner')->where('id','=', $request->id)->delete();
        return "Delete Successfully";
    }
}
