@extends('layouts.app')

@section('content')

    <x-page_component :title="$title" >
        <x-alert_component :msg="session('msg'??'')" :status="session('status')" />  <!-- status: success, error or notification-->
        <div class="kt-portlet__head-toolbar">
            <div class="kt-form__actions">
                <a href="{{ url('admin/clientes/create') }}" class="btn btn-sm btn-primary"><i class="la la-plus"></i> Criar Novo</a>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Celular</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($list as $key => $item)
                <tr>
                    <td>{{$item->nomecompleto}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->celular}}</td>
                    <td>{{$item->fone}}</td>
                    <td>{{$item->cpf}}</td>
                    <td>
                        <a href="{{route('clientes.edit',$item->id)}}">
                            <span style="color:orange" class="material-icons">mode</span>
                        </a>
                        <a href="{{route('clientes.show',$item->id)}}">
                            <span style="color:black" class="material-icons"> search </span>
                        </a>
                        <a href="{{route('clientes.show',[$item->id, 'delete=1'])}}">
                            <span style="color:red" class="material-icons">delete</span>
                        </a>
                    </td>
                </tr>
                @endforeach             
            </tbody>
        </table>
    </x-page_component> 

@endsection

