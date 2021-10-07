@extends('layouts.app')

@section('content')
@include('Admin.Clientes.style')

    <x-page_component :title="$title" >  
        <b><h5>Pet - {{$register->nome}}</h5></b>
        <p><b>Tipo: </b> {{$register->tipo==0? "Cachorro" : "Gato"}}</p> 
        <p><b>Idade: </b> {{$register->idade}}</p>
        <p><b>Peso: </b> {{$register->peso}}</p>
        <p><b>Gênero: </b>{{$register->genero==0? "Macho" : "Fêmea"}}</p>
        <p><b>Raça: </b> {{$register->raca}}</p>
        <p><b>Observações: </b>{{$register->obs}}</p>
        <hr>
        <b><h5>Dono - {{$register->cliente->nomecompleto}}</h5></b>
        <p><b>E-mail: </b> {{$register->cliente->email}}</p>
        <p><b>Telefone: </b> {{$register->cliente->fone}}</p>
        <p><b>Celular: </b> {{$register->cliente->celular}}</p>
        <p><b>CPF: </b> {{$register->cliente->cpf}}</p>    
        <p><b>RG: </b> {{$register->rg}}</p>    
        @if($delete==true)
            {!! Form::open(array('route' => ['pets.destroy', $register->id],'method'=>'DELETE')) !!}
                @csrf
                <button type="submit" class="btn btn-danger"> Excluir pet</button>                
            {!! Form::close() !!}
        @endif             
     </x-page_component>  

@endsection
