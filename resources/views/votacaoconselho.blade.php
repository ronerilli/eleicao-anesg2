@extends('head')
@extends('layout')
@section('title')

Conselho Fiscal
@endsection
@section('content')



    <div class="card-columns">
    
    <div class="card" style="max-width: 300px;">
        @foreach ($conselhos as $conselho)
        <h4 class="card-title">{{$conselho->chapa}}</h4>
            <img class="card-img-top" src="" alt="Card image cap">
            <div class="card-block">
            <p class="card-text">{{$conselho->posicao_membro}}: {{$conselho->membro}} </p>
             
        </div>
        @endforeach

        <button class="btn btn-primary" data-id="{{ $conselho->id }}">Votar</button>
    
    </div>
    

    <div class="card-columns">
     
   
        
        
    </div>


    <div class="card-columns">
@foreach ($brancoNulo as $branco)

<div class="card" style="max-width: 241px;">
        <div class="card-block">
            <h4 class="card-title">{{$branco->nome}} </h4>
            <button class="btn btn-primary" data-id="{{ $branco->id_chapa }}">Votar</button>
        </div>       
</div>

@endforeach
@endsection
 
        