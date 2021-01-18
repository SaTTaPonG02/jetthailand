<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\contact_form;

class ContactController extends Controller
{
    ////////////////////////////////// CONTACT  ///////////////////////////////////////////////////////
    public function contact_form()
    {
        return view('backend.contact.contact_form');
    }
    //////////////////////////////////  CONTACT TABLE ///////////////////////////////////////////////////////
    public function contact_form_data(Request $request)
    {
        $data['data'] = [];
        $i = 1;

        $contact_form = contact_form::all();

        foreach($contact_form as $val)
        {
            $data['data'][] = array(
                "no" =>  $i,
                "name" =>  $val->name,
                "tel" =>  $val->tel,
                "email" =>  $val->email,
                "message" =>  $val->message,
                "active" => '<a href="'.route("edit_contact_form" , array("id"=>$val->id)).'"><button type="button" class="btn btn-primary"><i class="fa fa-edit"></i>&nbsp;Edit</button></a>&nbsp;
                ',
            );
            $i++; 
        }
        echo json_encode($data);
    }
}
