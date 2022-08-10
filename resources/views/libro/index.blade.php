@extends('layouts.app')
@section('content')

<div class="container">

    @if(Session::has('mensaje'))
    <div class="alert alert-success alert-dismissible" role="alert">
        {{Session::get('mensaje')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    



<a href="{{ url('libro/create') }}" class="btn btn-success">Registrar nuevo Libro </a>
<table class="table table-light">

    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Autor</th>
            <th>Titulo</th>
            <th>Edición</th>
            <th>Datos de Publicación</th>
            <th>Tipo de contenido</th>
            <th>Restricciones</th>
            <th>Materia</th>
            <th>Proveedor</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach($libros as $libro)
        <tr>
            <td>{{$libro->id}}</td>
            <td>{{$libro->Autor}}</td>
            <td>{{$libro->Titulo}}</td>
            <td>{{$libro->Edicion}}</td>
            <td>{{$libro->DatosPublicacion}}</td>
            <td>{{$libro->tipoContenido}}</td>
            <td>{{$libro->Restricciones}}</td>
            <td>{{$libro->Materia}}</td>
            <td>{{$libro->Proveedor}}</td>
            <td>
                
            <a href="{{url('/libro/'.$libro->id.'/edit')}}" class="btn btn-warning">
            
            Editar
            </a> 
            <form action ="{{url('/libro/'.$libro->id)}}" class="d-inline" method="post"> 
            @csrf
            {{method_field('DELETE')}}
            <input class="btn btn-danger" type="submit" onclick="return confirm('¿Quieres Borrar?')" value="Borrar">
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
{!! $libros->links() !!}
</div>
@endsection