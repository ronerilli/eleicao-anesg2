@extends('head')
@extends('layout')
@section('title')
Diretoria Nacional
@endsection
@section('content')



    <div class="card-columns">
  
  
     
        <div class="card" style="max-width: 300px;">
       
            <h4 class="card-title">Chapa Novos Desafios</h4>
            <img class="card-img-top" src="..\public\app-assets\images\Marcia Schutz.png" alt="Card image cap">
            <div class="card-block">
            <p class="card-text">Presidente: Márcia Cristina de Oliveira Schutz </p>
            <p class="card-text">Secretário Geral: Leonardo Campo Dall Orto</p>
            <p class="card-text">Diretor(a) Financeiro(a): Crícia Rodrigues do Espírito Santo</p>
            <p class="card-text">Diretor Institucional: Aguinaldo César Prestes Ribeiro </p>
            <p class="card-text">Diretor de Comunicação: Gabriel Alves dos Santos </p>
            <p class="card-text">Diretor Jurídico: Dione Lúcia de Souza Nascimento </p>
            <p class="card-text">Diretor Trabalhista: Júlio de Sousa Eugênio Júnior </p>
            <p class="card-text">Diretor de Saúde: Jean Carlos Rocha Assim </p>
            <p class="card-text">Diretor de Previdência: Cleberton Santos da Cruz </p>
            <p class="card-text">Diretor de Tecnologia: Eduardo Augusto Gatz </p>
            <p class="card-text">Diretor Cultural: Nikciane Ferreira Cruz Frazão </p>
            <p class="card-text">Suplente 01: Diego André da Silva </p>
            <p class="card-text">Suplente 02: Joana Darc Veras da Silveira</p>

            <form method="POST" action="registravoto/{{ $nacional[0]->id }}">
                  {{csrf_field()}}
                   <button class="btn btn-primary" type="submit">Votar</button>
                </form>
            
        </div>
         
                
    </div>
    

        <div class="card-columns align-items-center">
        @foreach ($brancoNulo as $branco)

            <div class="card" style="max-width: 241px;">
                <div class="card-block ">
                    <h4 class="card-title">{{$branco->nome}} </h4>
                    <form method="POST" action="registravoto/{{ $branco->id_chapa }}">
                    {{csrf_field()}}
                    <button class="btn btn-primary" type="submit">Votar</button>
                    </form>
            </div>       
        </div>
@endforeach
@endsection