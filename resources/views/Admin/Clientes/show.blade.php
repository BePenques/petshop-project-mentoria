@extends('layouts.app')

@section('content')
@include('Admin.Clientes.style')

    <x-page_component :title="$title" >
        <p><b>Nome: </b> {{$register->nomecompleto}}</p>
        <p><b>E-mail: </b> {{$register->email}}</p>
        <p><b>Telefone: </b> {{$register->fone}}</p>
        <p><b>Celular: </b> {{$register->celular}}</p>
        <p><b>CPF: </b> {{$register->cpf}}</p>
        <p><b>RG: </b> {{$register->rg}}</p>
        <p><b>Data Nascimento: </b>{{date("d/m/Y", strtotime(str_replace('-','/',$register->aniversario)))}}</p>
        <p><b>CEP: </b> {{$register->CEP}} </p>
        <p><b>Endereço: </b> {{$register->endereco}} <b>, Nº: </b> {{$register->numero}} </p>
        <p><b>Bairro: </b> {{$register->bairro}}</p>
        <p><b>Cidade: </b> {{$register->cidade}} <b>Estado: </b> {{$register->estado}}</p>
        <p><b>Complemento: </b> {{$register->complemento}}</p>             
        @if($delete==true)
            {!! Form::open(array('route' => ['clientes.destroy', $register->id],'method'=>'DELETE')) !!}
                @csrf
                <button type="submit" class="btn btn-danger"> Excluir cliente</button>                
            {!! Form::close() !!}
        @endif             
    </x-page_component> 
    
@endsection
