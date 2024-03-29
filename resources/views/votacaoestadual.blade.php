@extends('head')
@extends('layout')
@section('title')


Delegacia Estadual

@endsection
@section('content')


@if(count($chapas) == 0)
    
        
            <h3>Não há chapas cadastradas no seu estado.</h3>
        
@else   

    <div class="card-columns">
    @foreach ($chapas as $chapa)
    
     
        <div class="card" style="max-width: 300px;">
        <h4 class="card-title col d-flex justify-content-center">{{$chapa->chapa}}</h4>
            <img class="card-img-top" src="{{$chapa->foto}}" alt="Card image cap">
            <div class="card-block">
            <p class="card-text col d-flex justify-content-center" >{{$chapa->nome_posicao}}: {{$chapa->candidato}} </p>
            <p class="card-text col d-flex justify-content-center">{{$chapa->posicao_membro}}: {{$chapa->membro}} </p>
                  <form method="POST" action="registravoto/{{ $chapa->id }}">
                  {{csrf_field()}}
                   <button class="btn btn-primary col d-flex justify-content-center" type="submit">Votar</button>
                </form>

            
            
             
        </div>
        
        
    </div>
    @endforeach


        <div class="card-columns align-items-center">
        @foreach ($brancoNulo as $branco)

        <div class="card" style="max-width: 241px;">
                <div class="card-block">
                    <h4 class="card-title col d-flex justify-content-center">{{$branco->nome}} </h4>
                    <form method="POST" action="registravoto/{{ $branco->id_chapa }}">
                        {{csrf_field()}}
                        <button class="btn btn-primary col d-flex justify-content-center" type="submit">Votar</button>
                        </form>
                </div>       
        </div>


            @if(Session::get('success'))
                    <div class="alert alert-success">
                        {{session::get('success')}}
                    </div>
            @endif
     
        @endforeach

@endif 

@endsection