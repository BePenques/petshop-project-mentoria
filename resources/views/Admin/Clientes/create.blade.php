@extends('layouts.app')

@section('content')
@include('Admin.Clientes.style')

    <x-page_component :title="$title" >

        <x-alert_component :msg="session('msg'??'')" :status="session('status')" />  <!-- status: success, error or notification-->
        {!! Form::open(array('route' => 'clientes.store','method'=>'POST')) !!}
            @csrf
            @include('Admin.Clientes.form')                  
        {!! Form::close() !!}
        
    </x-page_component>                 

@endsection
