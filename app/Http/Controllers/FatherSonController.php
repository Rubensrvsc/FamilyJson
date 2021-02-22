<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Father;

class FatherSonController extends Controller
{
    //

   
    
    public function index(){
        $father = Father::all();
        return view("index",['father'=>$father]);
    }

    public function add_father(Request $request){
        
        if($request->name_father){
            $father = new Father();
            $father->name_father = $request->name_father;
            $father->save();
           
       
        
        }
        return redirect()->route('index');
    }

    public function add_child(Request $request,Father $father){
        if ($request->name_child=="assasa"){
            echo "<script language='javascript'>window.alert('Categoria já cadastrada')</script>";
        }
        
    }

    public function store(){

    }

    public function read(){

    }
}
