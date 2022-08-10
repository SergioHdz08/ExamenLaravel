<h1> {{$modo}} Libro </h1>

@if(count($errors) > 0)

    <div class="alert alert-danger" role="alert">
        <ul> 
            @foreach($errors->all() as $error)
                <li>    {{$error}}  </li>
            @endforeach
        </ul>   
    </div>

   
@endif

<div class="form-group">
    <label for="Autor">Autor </label>
    <input type="text" class="form-control" name="Autor" value="{{ isset($libro->Autor) ? $libro->Autor:old('Autor')}}" id="Autor">
</div>

<div class="form-group">
    <label for="Titulo">Titulo </label>
    <input type="text" class="form-control" name="Titulo" value="{{isset($libro->Titulo) ? $libro->Titulo:old('Titulo')}}" id="Titulo">
</div>


<div class="form-group">
    <label for="Edicion">Edición </label>
    <input type="text" class="form-control" name="Edicion" value="{{isset($libro->Edicion) ? $libro->Edicion:old('Edicion')}}" id="Edicion"> 
</div>

<div class="form-group">
    <label for="DatosPublicacion">Datos de la Publicación </label>
    <input type="text" class="form-control" name="DatosPublicacion" value="{{isset($libro->DatosPublicacion) ? $libro->DatosPublicacion:old('DatosPublicacion')}}" id="DatosPublicacion"> 
</div>

<div class="form-group">
    <label for="TipoContenido">Tipo de Contenido </label>
    <input type="text" class="form-control" name="TipoContenido" value="{{isset($libro->tipoContenido) ? $libro->tipoContenido:old('tipoContenido')}}" id="tipoContenido"> 
</div>

<div class="form-group">
    <label for="Restricciones">Restricciones </label>
    <input type="text" class="form-control" name="Restricciones"value="{{isset($libro->Restricciones) ? $libro->Restricciones:old('Restricciones')}}" id="Restricciones"> 
</div>

<div class="form-group">
    <label for="Materia">Materia </label>
    <input type="text" class="form-control" name="Materia" value="{{isset($libro->Materia) ? $libro->Materia:old('Materia')}}" id="Materia"> 
</div>

<div class="form-group">
    <label for="Proveedor">Proveedor </label>
    <input type="text" class="form-control" name="Proveedor" value="{{isset($libro->Proveedor) ? $libro->Proveedor:('Proveedor')}}" id="Proveedor"> 
</div>

<input class="btn btn-success" type="submit" value="{{ $modo }} Libro">

<a href="{{ url('libro') }}" class="btn btn-primary"> Regresar </a>