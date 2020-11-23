@extends('head')
@extends('layout')
@section('title')

Delegacia Estadual
@endsection
@section('content')
<div class="card-columns">
    <div class="card" style="max-width: 241px;">
    <h4 class="card-title">Chapa 1 Capim Dourado </h4>
        <img class="card-img-top" src="assets/images/Dayane dos Reis.png" alt="Card image cap">
        <div class="card-block">
            <h4 class="card-title">Delegado(a): DAYANE DOS REIS OLIVEIRA </h4>
            
    </div>
        
</div>
<button type="button" class="btn btn-primary">Votar</button>
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