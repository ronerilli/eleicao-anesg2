<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class VotacaoNacionalController extends Controller
{
    public function display(){
            
                $nacional = DB::table('chapas as a')
                ->select('b.nome as candidato','a.nome as chapa',
                'a.id_chapa as id', 'c.nome as estado', 'd.nome_posicao',
                'e.nome as membro', 'z.nome_posicao as posicao_membro')
                ->join('candidatos as b', 'a.id_chapa', '=', 'b.id_chapa')
                ->join('ufs as c', 'a.id_uf', '=', 'c.id_uf')
                ->join('membros as e', 'a.id_chapa','=', 'e.id_chapa')
                ->join('cargos as m', 'a.id_cargo','=', 'm.id_cargo')
                ->join('posicoes as d', 'b.id_posicao', '=', 'd.id_posicao')
                ->join ('posicoes as z', 'e.id_posicao','=', 'z.id_posicao')
                ->where('m.id_cargo', '1')
                ->get();
                

        
        
              
                $brancoNulo = DB::table('chapas')
                ->select('*') 
                ->where ('id_cargo','1')
                ->where('id_chapa','>=', '28')
                ->get();

                return view('votacaonacional')->with(compact('nacional', 'brancoNulo'));
    
      } 
    
      public function registravoto3(Request $request)
 {

  
            DB::table('chapas')
            ->where ('id_chapa','=', $request->id)->increment('votos',1);
            
            
            DB::table('users')
            ->where('id',Auth::user()->id)
            ->update(['votou_nacional' => 1]);
            
            
          

            
            return redirect()->route('home')->withSuccess('Voto confirmado!');
     
 }

}
