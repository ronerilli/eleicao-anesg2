@extends('head')
@extends('layout')
@section('title')

Conselho Fiscal
@endsection
@section('content')



    <div class="card-columns" >
    
    <div class="card" style="max-width: 300px;">
        
        <h4 class="card-title col d-flex justify-content-center">CHAPA 01</h4>
            <img class="card-img-top" src="..\public\app-assets\images\Charles Everson.png" alt="Card image cap">
            <div class="card-block">
            <p class="col d-flex justify-content-center">Membro: Charles Everson da Nóbrega </p>
            <img class="card-img-top" src="..\public\app-assets\images\Martinha.png" alt="Card image cap">
            <p class="col d-flex justify-content-center">Membro: Martinha da Cruz Oliveira de Sousa </p>
            <img class="card-img-top" src="..\public\app-assets\images\Jose Manuel.jpg" alt="Card image cap">
            <p class="col d-flex justify-content-center">Membro: José Manuel Silva Dutra </p>
            <img class="card-img-top" src="..\public\app-assets\images\Valdenice.jpg" alt="Card image cap">
            <p class="col d-flex justify-content-center">Membro: Valdenice De Lima Melo </p>
            
             
        </div>
      

        <form method="POST" action="registravoto2/{{ $conselhos[0]->id }}">
                  {{csrf_field()}}
                   <button class="btn btn-primary col d-flex justify-content-center" type="submit">Votar</button>
        </form>
    
    </div>
    

    <div class="card-columns">
     
   
        
        
    </div>


    <div class="card-columns align-items-center">
        @foreach ($brancoNulo as $branco)

            <div class="card" style="max-width: 241px;">
                <div class="card-block ">
                    <h4 class="card-title col d-flex justify-content-center">{{$branco->nome}} </h4>
                    <form method="POST" action="registravoto2/{{ $branco->id_chapa }}">
                    {{csrf_field()}}
                    <button class="btn btn-primary col d-flex justify-content-center" type="submit">Votar</button>
                    </form>
            </div>       
        </div>

@endforeach
@endsection
 
        