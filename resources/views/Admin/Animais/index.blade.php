@extends('layouts.app')

@section('content')

    <x-page_component :title="$title" >  

        <x-alert_component :msg="session('msg'??'')" :status="session('status')" />  <!-- status: success, error or notification-->
        <div class="kt-portlet__head-toolbar">
            <div class="kt-form__actions">
                <a href="{{ url('admin/pets/create') }}" class="btn btn-sm btn-primary"><i class="la la-plus"></i> Criar Novo</a>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Genero</th>
                    <th scope="col">Idade</th>
                    <th scope="col">Raça</th>
                    <th scope="col">Dono</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($list as $key => $item)
                    <tr>
                        <td>{{$item->nome}}</td>
                        <td>{{$item->tipo==0? "Cachorro" : "Gato"}}</td>
                        <td>{{$item->genero==0? "Macho" : "Fêmea"}}</td>
                        <td>{{$item->idade}}</td>
                        <td>{{$item->raca}}</td>
                        <td>{{$item->cliente->nomecompleto}}</td>
                        <td>
                            <a href="{{route('pets.edit',$item->id)}}">
                                <span style="color:orange" class="material-icons">mode</span>
                            </a>
                            <a href="{{route('pets.show',$item->id)}}">
                                <span style="color:black" class="material-icons"> search </span>
                            </a>
                            <a href="{{route('pets.show',[$item->id, 'delete=1'])}}">
                                <span style="color:red" class="material-icons">delete</span>
                            </a>
                        </td>
                    </tr>
                @endforeach             
            </tbody>
        </table>

    </x-page_component>  

@endsection

