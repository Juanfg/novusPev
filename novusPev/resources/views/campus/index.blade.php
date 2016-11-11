@extends('layouts.sideBar')

@section('title', 'Campus')

@section('description', 'Esta es la pagina de campus')

@section('content')
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($campus as $c)
            <tr>
                <td class="center">{{ $c->id }} </td>
                <td class="center">{{ $c->nombre }}</td>
                <td>

                </td>
            </tr>
        @endforeach
    </tbody>
@endsection