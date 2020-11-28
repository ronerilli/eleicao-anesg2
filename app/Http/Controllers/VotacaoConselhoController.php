<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class VotacaoConselhoController extends Controller
{
    
      public function display(){
        
        $conselhos = DB::table('chapas as a')
        ->select('a.nome as chapa',
        'a.id_chapa as id', 'c.nome as estado', 'z.nome_posicao',
        'e.nome as membro', 'z.nome_posicao as posicao_membro')
        ->join('ufs as c', 'a.id_uf', '=', 'c.id_uf')
        ->join('membros as e', 'a.id_chapa','=', 'e.id_chapa')
        ->join('cargos as m', 'a.id_cargo','=', 'm.id_cargo')
        ->join ('posicoes as z', 'e.id_posicao','=', 'z.id_posicao')
        ->where('m.id_cargo', '2')
        ->get();
        
        
        $brancoNulo = DB::table('chapas')
               ->select('*') 
               ->where ('id_cargo','2')
               ->where('id_chapa','>=', '28')
               ->get();
               

        return view('votacaoconselho')->with(compact('conselhos', 'brancoNulo'));
    
      }  

      public function registravoto2(Request $request)
 {

     DB::table('chapas')
     ->where ('id_chapa','=', $request->id)->increment('votos',1);
    
    
    DB::table('users')
    ->where('id',Auth::user()->id)
    ->update(['votou_conselho' => 1]);
    
     
  

    
    return redirect('/')->with('success','Voto confirmado!');
     
 }

    
    
}
