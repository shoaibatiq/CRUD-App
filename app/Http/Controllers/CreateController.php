<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Models\CRUD;
use Illuminate\Http\Request;  
use Illuminate\Support\Facades\Redirect;
class CreateController extends BaseController
{
    
    function Create(Request $req){

        $req->validate([
            'fname' => array('required',"regex:/^[a-z ,.'-]+$/i", 'unique:crudtable,first_name'),
            'lname' => array('required',"regex:/^[a-z ,.'-]+$/i", 'unique:crudtable,last_name'),
            'std_id' => array('required',"regex:/^\d{3,15}/i", 'unique:crudtable,std_id'),
            'sem' => array('required',"regex:/\d{1}/", 'unique:crudtable,semester'),
            'email' => array('required',"regex:/^[^\s@]+@[^\s@]+$/i", 'unique:crudtable,email'),
        ]);

        $create = new CRUD();
        $create->first_name = $req->fname;
        $create->last_name = $req->lname;
        $create->semester = $req->sem;
        $create->email = $req->email;
        $create->std_id = $req->std_id;
        $create->save();
        return Redirect::to('/');

    }
}
