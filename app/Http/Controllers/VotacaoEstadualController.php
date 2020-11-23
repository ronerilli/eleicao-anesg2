<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
Use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class VotacaoEstadualController extends Controller
{
    public function display(){

        $estadual = DB::table ('candidatos')->where('id_uf', Auth::user()->id_uf )->get();

        

        return view('votacaoestadual')->with('estadual', $estadual);
    
      }  

      /* public function voto(){
        $nacional = DB::table ('candidatos')->where('id_chapa', '1')->get();
  
        dd($nacional);
  
  
        return view('votacaoestadual')->with('nacional', $nacional);
      
        }  */
  
}
