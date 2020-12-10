@extends('head')
@extends('layout')
@section('title')


Resultados

@endsection
@section('content')
<a class="btn btn-primary align=right" href="{{ URL::to('/relatorio/pdf') }}">Imprimir</a>
<h5 class="text-left" >Diretoria Nacional</h5>

    <table class="table table-bordered">
        <thead>
            <tr>
            <th scope="col">Chapa</th>
            <th scope="col">Votos</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($diretoria as $diretoria)
       
            <tr>
            <td>{{$diretoria->chapa}}</td>
            <td>{{$diretoria->votos}}</td>
            
            </tr>
        @endforeach    
        </tbody>
    </table>     
    <h5 class="text-left" >Conselho Fiscal</h5>
    <table class="table table-bordered">
        <thead>
            <tr>
            <th scope="col">Chapa</th>
            <th scope="col">Votos</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($conselho as $conselho)
       
            <tr>
            <td>{{$conselho->chapa}}</td>
            <td>{{$conselho->votos}}</td>
            </tr>
        @endforeach    
        </tbody>
    </table>   

    <h5 class="text-left" >Delegacias Estaduais</h5>
    
    
    
        
        <table class="table table-bordered">
        
        
            <thead>
            @foreach ($estadual as $estadual)
                <tr>
                <th scope="col">Estado</th>   
                <th scope="col">Chapa</th>
                <th scope="col">Votos</th>
                </tr>
            </thead>
            <tbody>
                
                <tr>
                <td>{{$estadual->nome}}</td>
                <td>{{$estadual->chapa}}</td>
                <td>{{$estadual->votos}}</td>
                </tr>
                   
            </tbody>
            @endforeach 
        </table>   

    


@endsection