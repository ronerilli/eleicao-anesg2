<?php

namespace App\Http\Controllers;

use App\Models\Chapa;
use Illuminate\Support\Facades\DB;
Use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class VotacaoEstadualController extends Controller
{
    public function display(){
  

//        $estaduais = DB::table ('candidatos')->where('id_uf', Auth::user()->id_uf )->get();
          
       


              
              $chapas = DB::table('chapas as a')
              ->select('b.nome as candidato' , 'a.nome as chapa',
              'a.id_chapa as id', 'c.nome as estado', 'd.nome_posicao',
              'e.nome as membro','z.nome_posicao as posicao_membro' )
              ->join('candidatos as b', 'a.id_chapa', '=', 'b.id_chapa')
              ->join('ufs as c', 'a.id_uf', '=', 'c.id_uf')
              ->join('membros as e', 'a.id_chapa','=', 'e.id_chapa')
              ->join('posicoes as d', 'b.id_posicao', '=', 'd.id_posicao')
              ->join ('posicoes as z', 'e.id_posicao','=', 'z.id_posicao') 

              ->where('b.id_uf', Auth::user()->id_uf )
              ->get();
              
              
                
        

        return view('votacaoestadual')->with('chapas', $chapas);
    
 }  public function update()
 {
     
 }

           
}
