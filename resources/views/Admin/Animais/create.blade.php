@extends('layouts.app')

@section('content')
@include('Admin.Clientes.style')

    <x-page_component :title="$title" >  

        <x-alert_component :msg="session('msg'??'')" :status="session('status')" />  <!-- status: success, error or notification-->
        {!! Form::open(array('route' => 'pets.store','method'=>'POST')) !!}
            @csrf
            @include('Admin.Animais.form')                  
        {!! Form::close() !!}     

    </x-page_component>  
    
@endsection
