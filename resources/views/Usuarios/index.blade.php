@extends('layouts.app')

@section('content')

<div class="container">

@if (Session::has('Mensaje')){{
Session::get('Mensaje')

}}
@endif


<a href="{{url('Usuarios/create')}}" class="btn btn-success">Agregar usuario</a>
<br>
<br>
<table class="table table-light table-hover">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Cedula</th>
            <th>Nombre Completo</th>
            <th>Telefono</th>
            <th>Correo</th> 
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($usuarios as $usuario)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$usuario->Cedula}}</td>
            <td>{{$usuario->NombreCompleto}}</td>
            <td>{{$usuario->Telefono}}</td>
            <td>{{$usuario->Correo}}</td>   
            <td>
                <a class="btn btn-warning" href="{{url('/Usuarios/'.$usuario->id.'/edit')}}">
                    Editar
                </a>

            <form method="post" action="{{ url('/Usuarios/'.$usuario->id)}} " style="display: inline">
        {{csrf_field() }}
        {{ method_field('DELETE')}}
        <button class="btn btn-danger" type="submit" onclick="return confirm('borrar?');">borrar</button>
        
        </form>
            
        </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection