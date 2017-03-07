@extends('layouts.error')

@section('title', 'Error 403')


@section('message_effect', 'Acceso Denegado')

@section('error_number','Error 403')


@section('message_content')
    <p>No tienes los permisos necesarios para acceder a esta página<br><br>Si este problema persiste, contacte al administrador</p>
@endsection


