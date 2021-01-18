<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\product_category;
use App\product;
use App\product_images;
use App\product_sub;
use App\product_sub_detail;
use App\product_sub_images;

class ProductController extends Controller
{
    ////////////////////////////////// PRODUCT CATEGORY ///////////////////////////////////////////////////////
    public function product_category()
    {
        return view('backend.product.product_category');
    }
    //////////////////////////////////  PRODUCT CATEGORY TABLE ///////////////////////////////////////////////////////
    public function product_category_data(Request $request)
    {
        $data['data'] = [];
        $i = 1;

        $product_category = product_category::get();

        foreach($product_category as $val)
        {

            $data['data'][] = array(
                "no" =>  $i,
                "title_en" =>  $val->title_en,
                "title_th" =>  $val->title_th,
                "active" => '
                <a href="'.route("product" , array("id"=>$val->id)).'"><button type="button" class="btn btn-success"><i class="fa fa-plus"></i>&nbsp;Product</button></a>&nbsp;
                <a href="'.route("edit_product_category" , array("id"=>$val->id)).'"><button type="button" class="btn btn-primary"><i class="fa fa-edit"></i>&nbsp;Edit</button></a>&nbsp;
                <button type="button" class="btn btn-danger" onclick="ConfirmDelete('.$val->id. ',' ."'$val->delete_id'".')"><i class="fa fa-trash-o"></i>&nbsp;Delete</button>',
            );
            $i++; 
        }
        echo json_encode($data);
    }

    ////////////////////////////////// PRODUCT ///////////////////////////////////////////////////////
    public function product($id)
    {
        return view('backend.product.product',['id'=>$id]);
    }
    //////////////////////////////////  PRODUCT TABLE ///////////////////////////////////////////////////////
    public function product_data(Request $request)
    {
        $data['data'] = [];
        $i = 1;

        $product = product::where('product_id','=',$request->id)->get();

        foreach($product as $val)
        {
            if($val->images == '' ){
                $images = '';
            }else{
                $images = '<a target="black" href="'.url("public/assets/images/product_images/" , array($val->images)).'">
                <img src="'.asset('public/assets/images/product_images/'.$val->images.'').'" width="100"></a>';
            }

            $data['data'][] = array(
                "no" =>  $i,
                "images" =>  $images,
                "title_en" =>  $val->title_en,
                "title_th" =>  $val->title_th,
                "active" => '
                <a href="'.route("product_sub" , array("id"=>$val->id,'delete_id'=>$val->delete_id)).'">
                <button type="button" class="btn btn-secondary"><i class="fa fa-plus"></i>&nbsp;Sub Product</button></a>&nbsp;
                <a href="'.route("product_images" , array("id"=>$val->id,'delete_id'=>$val->delete_id)).'">
                <button type="button" class="btn btn-success"><i class="fa fa-plus"></i>&nbsp;Images</button></a>&nbsp;
                <a href="'.route("edit_product" , array("id"=>$val->id)).'"><button type="button" class="btn btn-primary"><i class="fa fa-edit"></i>&nbsp;Edit</button></a>&nbsp;
                <button type="button" class="btn btn-danger" onclick="ConfirmDelete('.$val->id. ',' ."'$val->delete_id'".')"><i class="fa fa-trash-o"></i>&nbsp;Delete</button>',
            );
            $i++; 
        }
        echo json_encode($data);
    }
    ////////////////////////////////// PRODUCT IMAGES ///////////////////////////////////////////////////////
    public function product_images($id,$delete_id)
    {
        return view('backend.product.product_images',['id'=>$id,'delete_id'=>$delete_id]);
    }
    //////////////////////////////////  PRODUCT TABLE ///////////////////////////////////////////////////////
    public function product_images_data(Request $request)
    {
        $data['data'] = [];
        $i = 1;

        $product_images = product_images::where('images_id','=',$request->id)->get();

        foreach($product_images as $val)
        {
            if($val->images == '' ){
                $images = '';
            }else{
                $images = '<a target="black" href="'.url("public/assets/images/product_images/" , array($val->images)).'">
                <img src="'.asset('public/assets/images/product_images/'.$val->images.'').'" width="100"></a>';
            }

            $data['data'][] = array(
                "no" =>  $i,
                "images" =>  $images,
                "active" => '
                <a href="'.route("edit_product_images" , array("id"=>$val->id)).'"><button type="button" class="btn btn-primary"><i class="fa fa-edit"></i>&nbsp;Edit</button></a>&nbsp;
                <button type="button" class="btn btn-danger" onclick="ConfirmDelete('.$val->id. ',' ."'$val->delete_id'".')"><i class="fa fa-trash-o"></i>&nbsp;Delete</button>',
            );
            $i++; 
        }
        echo json_encode($data);
    }
    ////////////////////////////////// PRODUCT SUB ///////////////////////////////////////////////////////
    public function product_sub($id,$delete_id)
    {
        return view('backend.product.product_sub',['id'=>$id,'delete_id'=>$delete_id]);
    }
    //////////////////////////////////  PRODUCT SUB TABLE ///////////////////////////////////////////////////////
    public function product_sub_data(Request $request)
    {
        $data['data'] = [];
        $i = 1;

        $product_sub = product_sub::where('sub_product_id','=',$request->id)->get();

        foreach($product_sub as $val)
        {

            $data['data'][] = array(
                "no" =>  $i,
                "title_en" =>  $val->title_en,
                "title_th" =>  $val->title_th,
                "active" => '
                <a href="'.route("product_sub_detail" , array("id"=>$val->id,'product_id'=>$val->sub_product_id,'delete_id'=>$val->delete_id)).'">
                <button type="button" class="btn btn-success"><i class="fa fa-plus"></i>&nbsp;Sub Detail</button></a>&nbsp;
                <a href="'.route("edit_product_sub" , array("id"=>$val->id)).'"><button type="button" class="btn btn-primary"><i class="fa fa-edit"></i>&nbsp;Edit</button></a>&nbsp;
                <button type="button" class="btn btn-danger" onclick="ConfirmDelete('.$val->id. ',' ."'$val->delete_id'".')"><i class="fa fa-trash-o"></i>&nbsp;Delete</button>',
            );
            $i++; 
        }
        echo json_encode($data);
    }
    ////////////////////////////////// PRODUCT SUB DETAIL ///////////////////////////////////////////////////////
    public function product_sub_detail($id,$product_id,$delete_id)
    {
        return view('backend.product.product_sub_detail',['id'=>$id,'product_id'=>$product_id,'delete_id'=>$delete_id]);
    }
    //////////////////////////////////  PRODUCT SUB DETAIL TABLE ///////////////////////////////////////////////////////
    public function product_sub_detail_data(Request $request)
    {
        $data['data'] = [];
        $i = 1;

        $product_sub_detail = product_sub_detail::where('sub_pro_det_id','=',$request->id)->get();

        foreach($product_sub_detail as $val)
        {

            $data['data'][] = array(
                "no" =>  $i,
                "title_en" =>  $val->title_en,
                "title_th" =>  $val->title_th,
                "active" => '
                <a href="'.route("product_sub_images" , array("id"=>$val->id,'product_sub_id'=>$val->sub_pro_det_id,'product_id'=>$val->product_id,'delete_id'=>$val->delete_id)).'">
                <button type="button" class="btn btn-success"><i class="fa fa-plus"></i>&nbsp;Sub Imges</button></a>&nbsp;
                <a href="'.route("edit_product_sub_detail" , array("id"=>$val->id)).'"><button type="button" class="btn btn-primary"><i class="fa fa-edit"></i>&nbsp;Edit</button></a>&nbsp;
                <button type="button" class="btn btn-danger" onclick="ConfirmDelete('.$val->id. ',' ."'$val->delete_id'".')"><i class="fa fa-trash-o"></i>&nbsp;Delete</button>',
            );
            $i++; 
        }
        echo json_encode($data);
    }
    ////////////////////////////////// PRODUCT SUB IMAGES ///////////////////////////////////////////////////////
    public function product_sub_images($id,$product_sub_id,$product_id,$delete_id)
    {
        return view('backend.product.product_sub_images',['id'=>$id,'product_sub_id'=>$product_sub_id,'product_id'=>$product_id,'delete_id'=>$delete_id]);
    }
    //////////////////////////////////  PRODUCT SUB IMAGES TABLE ///////////////////////////////////////////////////////
    public function product_sub_images_data(Request $request)
    {
        $data['data'] = [];
        $i = 1;

        $product_sub_images = product_sub_images::where('sub_images_id','=',$request->id)->get();

        foreach($product_sub_images as $val)
        {
            if($val->images == '' ){
                $images = '';
            }else{
                $images = '<a target="black" href="'.url("public/assets/images/product_images/" , array($val->images)).'">
                <img src="'.asset('public/assets/images/product_images/'.$val->images.'').'" width="100"></a>';
            }

            $data['data'][] = array(
                "no" =>  $i,
                "images" =>  $images,
                "active" => '
                <a href="'.route("edit_product_sub_images" , array("id"=>$val->id)).'"><button type="button" class="btn btn-primary"><i class="fa fa-edit"></i>&nbsp;Edit</button></a>&nbsp;
                <button type="button" class="btn btn-danger" onclick="ConfirmDelete('.$val->id. ',' ."'$val->delete_id'".')"><i class="fa fa-trash-o"></i>&nbsp;Delete</button>',
            );
            $i++; 
        }
        echo json_encode($data);
    }



    //////////////////////////////////  INSERT PRODUCT CATEGORY  ///////////////////////////////////////////////////////
    public function insert_product_category()
    {
        return view('backend.product.insert_product_category');
    }
    //////////////////////////////////  SAVA PRODUCT CATEGORY ///////////////////////////////////////////////////////
    public function save_product_category(Request $request)
    {

            $product_category = new product_category;
            $product_category->title_en = $request->title_en;
            $product_category->title_th = $request->title_th;
            $product_category->save();
    
            return redirect('/product_category')->withSuccess('Insert Successfully');
    }

    //////////////////////////////////  INSERT PRODUCT  ///////////////////////////////////////////////////////
    public function insert_product($id)
    {
        return view('backend.product.insert_product',['id'=>$id]);
    }
    //////////////////////////////////  SAVA PRODUCT ///////////////////////////////////////////////////////
    public function save_product(Request $request)
    {
        if($request->hasFile('images')){
            $images = $request->file('images');
            $name = $images->getClientOriginalName();
            $destinationPath = public_path('assets/images/product_images/');
            $images->move($destinationPath, $name);
    
            $product = new product;
            $product->images = $name;
            $product->title_en = $request->title_en;
            $product->title_th = $request->title_th;
            $product->detail_en = $request->detail_en;
            $product->detail_th = $request->detail_th;
            $product->product_id = $request->id;
            $product->delete_id = $request->id;
            $product->save();
    
            return redirect("product/$request->id")->withSuccess('Insert Successfully');
        }
        else{

            $product = new product;
            $product->title_en = $request->title_en;
            $product->title_th = $request->title_th;
            $product->detail_en = $request->detail_en;
            $product->detail_th = $request->detail_th;
            $product->product_id = $request->id;
            $product->delete_id = $request->id;
            $product->save();
    
            return redirect("product/$request->id")->withSuccess('Insert Successfully');
        }
    }
    //////////////////////////////////  INSERT PRODUCT IMAGES ///////////////////////////////////////////////////////
    public function insert_product_images($id,$delete_id)
    {
        return view('backend.product.insert_product_images',['id'=>$id,'delete_id'=>$delete_id]);
    }
    ////////////////////////////////// SAVE PRODUCT IMAGES ////////////////////////////////////////
    public function save_product_images(Request $request)
    {

        $request->hasfile('images');

        foreach($request->file('images') as $file)
        {
            $name =  $file->getClientOriginalName();
            $file->move(public_path().'/assets/images/product_images/', $name);
            $data[] = $name;

            $product_images = new product_images;
            $product_images->images =  $name;
            $product_images->images_id = $request->id;
            $product_images->delete_id = $request->delete_id;
            $product_images->save();

        }
        return redirect("product_images/$request->id/$request->delete_id")->withSuccess('Insert Successfully');
    }
    //////////////////////////////////  INSERT PRODUCT SUB ///////////////////////////////////////////////////////
    public function insert_product_sub($id,$delete_id)
    {
        return view('backend.product.insert_product_sub',['id'=>$id,'delete_id'=>$delete_id]);
    }
    ////////////////////////////////// SAVE PRODUCT SUB ////////////////////////////////////////
    public function save_product_sub(Request $request)
    {
        $product_sub = new product_sub;
        $product_sub->title_en =  $request->title_en;
        $product_sub->title_th =  $request->title_th;
        $product_sub->sub_product_id = $request->id;
        $product_sub->delete_id = $request->delete_id;
        $product_sub->save();
        
        return redirect("product_sub/$request->id/$request->delete_id")->withSuccess('Insert Successfully');
    }
    //////////////////////////////////  INSERT PRODUCT SUB DETAIL ///////////////////////////////////////////////////////
    public function insert_product_sub_detail($id,$product_id,$delete_id)
    {
        return view('backend.product.insert_product_sub_detail',['id'=>$id,'product_id'=>$product_id,'delete_id'=>$delete_id]);
    }
    ////////////////////////////////// SAVE PRODUCT SUB DETAIL ////////////////////////////////////////
    public function save_product_sub_detail(Request $request)
    {
        $product_sub_detail = new product_sub_detail;
        $product_sub_detail->title_en =  $request->title_en;
        $product_sub_detail->title_th =  $request->title_th;
        $product_sub_detail->detail_en =  $request->detail_en;
        $product_sub_detail->detail_th =  $request->detail_th;
        $product_sub_detail->sub_pro_det_id = $request->id;
        $product_sub_detail->product_id = $request->product_id;
        $product_sub_detail->delete_id = $request->delete_id;
        $product_sub_detail->save();
        
        return redirect("product_sub_detail/$request->id/$request->product_id/$request->delete_id")->withSuccess('Insert Successfully');
    }
    //////////////////////////////////  INSERT PRODUCT SUB IMAGES ///////////////////////////////////////////////////////
    public function insert_product_sub_images($id,$product_sub_id,$product_id,$delete_id)
    {
        return view('backend.product.insert_product_sub_images',['id'=>$id,'product_sub_id'=>$product_sub_id,'product_id'=>$product_id,'delete_id'=>$delete_id]);
    }
    ////////////////////////////////// SAVE PRODUCT SUB IMAGES ////////////////////////////////////////
    public function save_product_sub_images(Request $request)
    {

        $request->hasfile('images');

        foreach($request->file('images') as $file)
        {
            $name =  $file->getClientOriginalName();
            $file->move(public_path().'/assets/images/product_images/', $name);
            $data[] = $name;

            $product_sub_images = new product_sub_images;
            $product_sub_images->images =  $name;
            $product_sub_images->sub_images_id = $request->id;
            $product_sub_images->product_sub_id = $request->product_sub_id;
            $product_sub_images->product_id = $request->product_id;
            $product_sub_images->delete_id = $request->delete_id;
            $product_sub_images->save();

        }
        return redirect("product_sub_images/$request->id/$request->product_sub_id/$request->product_id/$request->delete_id")->withSuccess('Insert Successfully');
    }


    //////////////////////////////////  EDIT PRODUCT CATEGORY ///////////////////////////////////////////////////////
    public function edit_product_category($id)
    {
        $product_category = product_category::find($id);
        return view('backend.product.edit_product_category',['product_category'=>$product_category]);
    }
    //////////////////////////////////  UPDATE PRODUCT CATEGORY ///////////////////////////////////////////////////////
    public function update_product_category(Request $request)
    {
        $product_category = product_category::find($request->id);
        $product_category->title_en = $request->title_en;
        $product_category->title_th = $request->title_th;
        $product_category->save();

        return redirect()->route('edit_product_category',['id' => $request->id])->withSuccess('Update Successfully');
        
    }
    //////////////////////////////////  EDIT PRODUCT ///////////////////////////////////////////////////////
    public function edit_product($id)
    {
        $product = product::find($id);
        return view('backend.product.edit_product',['product'=>$product]);
    }
    //////////////////////////////////  UPDATE PRODUCT ///////////////////////////////////////////////////////
    public function update_product(Request $request)
    {
        if( $request->hasFile('images')){
            $images = $request->file('images');
            $name = $images->getClientOriginalName();
            $destinationPath = public_path('assets/images/product_images/');
            $images->move($destinationPath, $name);

            $product = product::find($request->id);
            $product->images = $name;
            $product->title_en = $request->title_en;
            $product->title_th = $request->title_th;
            $product->detail_en = $request->detail_en;
            $product->detail_th = $request->detail_th;
            $product->save();

            return redirect()->route('edit_product',['id' => $request->id])->withSuccess('Update Successfully');
        }else{

            $product = product::find($request->id);
            $product->title_en = $request->title_en;
            $product->title_th = $request->title_th;
            $product->detail_en = $request->detail_en;
            $product->detail_th = $request->detail_th;
            $product->save();

            return redirect()->route('edit_product',['id' => $request->id])->withSuccess('Update Successfully');
        }        
    }
    //////////////////////////////////  EDIT PRODUCT IMAGES ///////////////////////////////////////////////////////
    public function edit_product_images($id)
    {
        $product_images = product_images::find($id);
        return view('backend.product.edit_product_images',['product_images'=>$product_images]);
    }
    //////////////////////////////////  UPDATE PRODUCT IMAGES ///////////////////////////////////////////////////////
    public function update_product_images(Request $request)
    {
        if( $request->hasFile('images')){
            $images = $request->file('images');
            $name = $images->getClientOriginalName();
            $destinationPath = public_path('assets/images/product_images/');
            $images->move($destinationPath, $name);

            $product = product::find($request->id);
            $product->images = $name;
            $product->save();

            return redirect()->route('edit_product_images',['id' => $request->id])->withSuccess('Update Successfully');
        }else{

            return redirect()->route('edit_product_images',['id' => $request->id])->withSuccess('Update Successfully');
        }        
    }
    //////////////////////////////////  EDIT PRODUCT SUB ///////////////////////////////////////////////////////
    public function edit_product_sub($id)
    {
        $product_sub = product_sub::find($id);
        return view('backend.product.edit_product_sub',['product_sub'=>$product_sub]);
    }
    //////////////////////////////////  UPDATE PRODUCT SUB ///////////////////////////////////////////////////////
    public function update_product_sub(Request $request)
    {
        $product_sub = product_sub::find($request->id);
        $product_sub->title_en = $request->title_en;
        $product_sub->title_th = $request->title_th;
        $product_sub->save();

        return redirect()->route('edit_product_sub',['id' => $request->id])->withSuccess('Update Successfully');
    }        
    //////////////////////////////////  EDIT PRODUCT SUB DETAIL ///////////////////////////////////////////////////////
    public function edit_product_sub_detail($id)
    {
        $product_sub_detail = product_sub_detail::find($id);
        return view('backend.product.edit_product_sub_detail',['product_sub_detail'=>$product_sub_detail]);
    }
    //////////////////////////////////  UPDATE PRODUCT SUB DETAIL ///////////////////////////////////////////////////////
    public function update_product_sub_detail(Request $request)
    {
        $product_sub_detail = product_sub_detail::find($request->id);
        $product_sub_detail->title_en = $request->title_en;
        $product_sub_detail->title_th = $request->title_th;
        $product_sub_detail->detail_en = $request->detail_en;
        $product_sub_detail->detail_th = $request->detail_th;
        $product_sub_detail->save();

        return redirect()->route('edit_product_sub_detail',['id' => $request->id])->withSuccess('Update Successfully');
    } 
    //////////////////////////////////  EDIT PRODUCT SUB IMAGES ///////////////////////////////////////////////////////
    public function edit_product_sub_images($id)
    {
        $product_sub_images = product_sub_images::find($id);
        return view('backend.product.edit_product_sub_images',['product_sub_images'=>$product_sub_images]);
    }
    //////////////////////////////////  UPDATE PRODUCT SUB IMAGES ///////////////////////////////////////////////////////
    public function update_product_sub_images(Request $request)
    {
        if( $request->hasFile('images')){
            $images = $request->file('images');
            $name = $images->getClientOriginalName();
            $destinationPath = public_path('assets/images/product_images/');
            $images->move($destinationPath, $name);

            $product = product::find($request->id);
            $product->images = $name;
            $product->save();

            return redirect()->route('edit_product_sub_images',['id' => $request->id])->withSuccess('Update Successfully');
        }else{

            return redirect()->route('edit_product_sub_images',['id' => $request->id])->withSuccess('Update Successfully');
        }        
    }
    



    //////////////////////////////// DELETE PRODUCT CATEGORY ///////////////////////////////////////////
    public function delete_product_category(Request $request)
    {
        DB::table('tb_product_category')->where('id','=', $request->id)->delete();
        DB::table('tb_product')->where('delete_id','=', $request->id)->delete();
        DB::table('tb_product_images')->where('delete_id','=', $request->id)->delete();
        DB::table('tb_product_sub')->where('delete_id','=', $request->id)->delete();
        DB::table('tb_product_sub_detail')->where('delete_id','=', $request->id)->delete();
        DB::table('tb_product_sub_images')->where('delete_id','=', $request->id)->delete();
        return "Delete Successfully";
    }
    //////////////////////////////// DELETE PRODUCT ///////////////////////////////////////////
    public function delete_product(Request $request)
    {
        DB::table('tb_product')->where('id','=', $request->id)->delete();
        DB::table('tb_product_images')->where('images_id','=', $request->id)->delete();
        DB::table('tb_product_sub')->where('sub_product_id','=', $request->id)->delete();
        DB::table('tb_product_sub_detail')->where('product_id','=', $request->id)->delete();
        DB::table('tb_product_sub_images')->where('product_id','=', $request->id)->delete();
        return "Delete Successfully";
    }
    //////////////////////////////// DELETE PRODUCT IMAGES ///////////////////////////////////////////
    public function delete_product_images(Request $request)
    {
        DB::table('tb_product_images')->where('id','=', $request->id)->delete();
        return "Delete Successfully";
    }
    //////////////////////////////// DELETE PRODUCT SUB ///////////////////////////////////////////
    public function delete_product_sub(Request $request)
    {
        DB::table('tb_product_sub')->where('id','=', $request->id)->delete();
        DB::table('tb_product_sub_detail')->where('sub_pro_det_id','=', $request->id)->delete();
        DB::table('tb_product_sub_images')->where('product_sub_id','=', $request->id)->delete();
        return "Delete Successfully";
    }
    //////////////////////////////// DELETE PRODUCT SUB DETAIL ///////////////////////////////////////////
    public function delete_product_sub_detail(Request $request)
    {
        DB::table('tb_product_sub_detail')->where('id','=', $request->id)->delete();
        DB::table('tb_product_sub_images')->where('sub_images_id','=', $request->id)->delete();
        return "Delete Successfully";
    }
    //////////////////////////////// DELETE PRODUCT SUB IMAGES ///////////////////////////////////////////
    public function delete_product_sub_images(Request $request)
    {
        DB::table('tb_product_sub_images')->where('id','=', $request->id)->delete();
        return "Delete Successfully";
    }
}
