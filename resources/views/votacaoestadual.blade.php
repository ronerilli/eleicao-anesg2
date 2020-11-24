@extends('head')
@extends('layout')
@section('title')


Delegacia Estadual - 

@endsection
@section('content')



    <div class="card-columns">
    @foreach ($chapas as $chapa)
    
     
        <div class="card" style="max-width: 300px;">
        <h4 class="card-title">{{$chapa->chapa}}</h4>
            <img class="card-img-top" src="" alt="Card image cap">
            <div class="card-block">
            <p class="card-text">{{$chapa->nome_posicao}}: {{$chapa->candidato}} </p>
            <p class="card-text">{{$chapa->posicao_membro}}: {{$chapa->membro}} </p>
            <button type="button" class="btn btn-primary">Votar</button>
        </div>
        
        
    </div>
    @endforeach

    <div class="card-columns">
     
    
        
        
        
    </div>


<div class="card-columns">
<div class="card" style="max-width: 241px;">
        <div class="card-block">
            <h4 class="card-title">Voto em Branco </h4>
            
            <p class="card-text">
                <small class="text-muted"></small>
            </p>
        </div>
    </div>
</div>
<button type="button" class="btn btn-primary">Votar</button>    
<div class="card-columns">   
    <div class="card" style="max-width: 241px;">
        
        <div class="card-block">
            <h4 class="card-title">Voto Nulo </h4>
            
        </div>
    </div>
</div>
<button type="button" class="btn btn-primary">Votar</button>
@endsection