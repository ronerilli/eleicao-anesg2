<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class VotacaoNacionalController extends Controller
{
    public function display(){
      $nacional = DB::table ('candidatos')->where('id_chapa', '1')->get();

      dd($nacional);


      return view('votacaonacional')->with('nacional', $nacional);
    
      } 
    
      public function voto(){
        $nacional = DB::table ('candidatos')->where('id_chapa', '1')->get();
  
        dd($nacional);
  
  
        return view('votacaoestadual')->with('nacional', $nacional);
      
        } 

}
