@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Empresas</div>

                <div class="card-body">
                <a href="{{route('addEmpresa')}}" class="btn btn-outline-success ml-2">Crear Nueva Empresa</a><br/>
                <div class="card m-2">
                    <div class="card-header">Lista de Empresas</div>

                    <div class="card-body">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Direccion</th>
                                    <th scope="col">Website</th>
                                    <th scope="col">Correo</th>
                                    <th scope="col">Logotipo</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($empresas as $empresa)
                                    <tr>
                                        <td>{{$empresa->nombre}}</td>
                                        <td>{{$empresa->direccion}}</td>
                                        <td>{{$empresa->sitio_web}}</td>
                                        <td>{{$empresa->correo}}</td>
                                        <td>{{$empresa->logotipo}}</td>
                                        <td>
                                            <a href="#" class="btn btn-outline-info w-100">Editar</a><br/>
                                            <a href="#" class="btn btn-outline-danger w-100">Eliminar</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
