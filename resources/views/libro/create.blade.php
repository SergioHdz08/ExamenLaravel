@extends('layouts.app')
@section('content')

<div class="container">

<form action="{{url('/libro')}}" method="post">

@csrf
@include('libro.form',['modo' => 'Crear']);



</form>
</div>
@endsection