<?php
#Fiz com o Framework Laravel
#As migrations do banco de dados pode ser encontradas em app/database/migrations
#O projeto pode ser encontrado em: https://github.com/Rubensrvsc/FamilyJson
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Father;
use App\Son;
use DB;

class FatherSonController extends Controller
{
    //

   
    
    public function index(){
        $father = Father::all();
        $son = Son::all();
        return view("index",['father'=>$father,'son'=>$son]);
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
        if($request->name_child && $father->id){
        $son = new Son();
        $son->father_id = $father->id;
        $son->name_son = $request->name_child;
        $son->save();
        }
        return redirect()->route('index');
        
    }

    public function read(){
        $table = Father::with(['sons'])->get();
        
        $father = Father::all();
        $son = Son::all();
        
        return view("index",['table'=>json_encode($table),'father'=>$father,'son'=>$son]);

    }

    public function delete($son){
        if($son){
            DB::delete('delete from sons where id = ?',[$son]);
            
        }

        return redirect()->route('index');
    }

    public function deleteFather($father){
        if($father){
            DB::delete('delete from fathers where id = ?',[$father]);
            DB::delete('delete from sons where father_id = ?',[$father]);
            
        }

        return redirect()->route('index');
    }
}
