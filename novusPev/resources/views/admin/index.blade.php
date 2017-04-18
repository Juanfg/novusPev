@extends('layouts.sidebar')

@section('title')
    <div>
        <i class="fa fa-lock"></i> Control de usuarios
    </div>
@endsection

@section('content')
<div>
    <section>
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre de Usuario</th>
                    <th>email</th>
                    <th>Privilegios</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $usuario)
                <tr>
                    <td class="center" width="5%">{{ $usuario->id }} </td>
                    <td class="center">{{ $usuario->name }}</td>
                    <form action="{{ route('admin.assignRoles') }}" method="post">
                        <td class="center">{{ $usuario->email }}<input type="hidden" name="email" value="{{ $usuario->email }}"></td>
                        <td class="center">
                            Admin: <input type="checkbox" name="administrador" {{ $usuario->hasRole('administrador') ? 'checked' : '' }}>&nbsp&nbsp
                            Director: <input type="checkbox" name="director" {{ $usuario->hasRole('director') ? 'checked' : '' }}>&nbsp&nbsp
                            Pev: <input type="checkbox" name="pev" {{ $usuario->hasRole('pev') ? 'checked' : '' }}>&nbsp&nbsp
                            Usuario SP: <input type="checkbox" name="usuario_normal" {{ $usuario->hasRole('usuario_normal') ? 'checked' : '' }}>&nbsp&nbsp
                            {{ csrf_field() }}
                            <button type="submit"> Asignar Roles </button>
                        </td>
                    </form>
                </tr>
                @endforeach
            </tbody>
        </table> 
    </section>
</div>
@endsection