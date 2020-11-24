<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class VotacaoNacionalController extends Controller
{
    public function display(){
      $nacional = DB::table('chapas as a')
              ->select('b.nome as candidato' , 'a.nome as chapa',
              'a.id_chapa as id', 'c.nome as estado', 'd.nome_posicao',
              'e.nome as membro','z.nome_posicao as posicao_membro' )
              ->join('candidatos as b', 'a.id_chapa', '=', 'b.id_chapa')
              ->join('ufs as c', 'a.id_uf', '=', 'c.id_uf')
              ->join('membros as e', 'a.id_chapa','=', 'e.id_chapa')
              ->join('posicoes as d', 'b.id_posicao', '=', 'd.id_posicao')
              ->join ('posicoes as z', 'e.id_posicao','=', 'z.id_posicao')
              ->get();
              
      return view('votacaonacional')->with('nacional', $nacional);
    
      } 
    
      public function voto(){
        $nacional = DB::table ('candidatos')->where('id_chapa', '1')->get();
  
        dd($nacional);
  
  
        return view('votacaoestadual')->with('nacional', $nacional);
      
        } 

}
