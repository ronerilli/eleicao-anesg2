<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VotacaoConselhoController extends Controller
{
    
      public function display(){

        $conselho = DB::table ('candidatos')->where('id_chapa', '2')->get();

        dd($conselho);


        return view('votacaoconselho')->with('conselho', $conselho);
    
      }  

      public function salvarVoto(){
        $nacional = DB::table ('chapas')->where('id_chapa', '1')->get();


  
        dd($nacional);
  
  
        return view('votacaoestadual')->with('nacional', $nacional);
      
        } 
    
    
}
