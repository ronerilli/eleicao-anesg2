<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ResultadoController extends Controller
{
    public function display(){
        
        $diretoria = DB::table('chapas as a')
        ->select('a.nome as chapa',
        'a.id_chapa as id', 'c.nome as estado', 'a.votos as votos' 
        )
        ->join('ufs as c', 'a.id_uf', '=', 'c.id_uf')
        ->where('a.id_cargo', '1')
        ->get();
        
        
        $conselho = DB::table('chapas as a')
        ->select('a.nome as chapa',
        'a.id_chapa as id', 'c.nome as estado', 'a.votos as votos' 
        )
        ->join('ufs as c', 'a.id_uf', '=', 'c.id_uf')
        ->where('a.id_cargo', '2')
        ->get();
      
        
        $estadual = DB::table('ufs')
                    ->join('chapas', 'ufs.id_uf', '=', 'chapas.id_uf')
                    ->select('ufs.*', 'chapas.nome as chapa', 'chapas.votos')
                    ->where('chapas.id_cargo', '4')
                    ->get();
                   


                    

     return view('resultado')->with(compact('diretoria', 'conselho', 'estadual'));
    
      }
}
