@extends('layouts.app')

@section('content')
@include('Admin.Clientes.style')

    <x-page_component :title="$title" >  
              
        <x-alert_component :msg="session('msg'??'')" :status="session('status')" />  <!-- status: success, error or notification-->
        {!! Form::model($register, ['method' => 'PATCH','route' => ['pets.update', $register->id]]) !!} 
            @csrf
            @include('Admin.Animais.form')                  
        {!! Form::close() !!}
                  
    </x-page_component>  
    
@endsection
