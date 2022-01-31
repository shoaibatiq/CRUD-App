<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Models\CRUD;
use Illuminate\Http\Request;  
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class UpdateController extends BaseController
{
    
    function Update(Request $req){
        $validators = [];
        $data = CRUD::find($req['id']);
        
        if($req['fname'] !== $data['first_name'])
            $validators['fname'] = array('required',"regex:/^[a-z ,.'-]+$/i", 'unique:crudtable,first_name');
        if($req['lname'] !== $data['last_name'])
            $validators['lname'] = array('required',"regex:/^[a-z ,.'-]+$/i", 'unique:crudtable,last_name');
        if($req['std_id'] !== $data['std_id'])
            $validators['std_id'] = array('required',"regex:/^\d{3,15}/i", 'unique:crudtable,std_id');
        if((int)$req['sem'] !== (int)$data['semester'])
            $validators['sem'] = array('required',"regex:/\d{1}/", 'unique:crudtable,semester');
        if($req['email'] !== $data['email'])
            $validators['email'] = array('required',"regex:/^[^\s@]+@[^\s@]+$/i", 'unique:crudtable,email');
        
        


        $req->validate($validators);

        DB::table('crudtable')
        ->where('id', $req['id'])  
        ->limit(1)  
        ->update(array(
            'first_name' => $req['fname'],
            'last_name' => $req['lname'],
            'semester' => $req['sem'],
            'std_id' => $req['std_id'],
            'email' => $req['email'],
        ));

        // $create = new CRUD();
        // $create->first_name = $req->fname;
        // $create->last_name = $req->lname;
        // $create->semester = $req->sem;
        // $create->email = $req->email;
        // $create->std_id = $req->std_id;
        // $create->save();
        return Redirect::to('/');

    }
}
