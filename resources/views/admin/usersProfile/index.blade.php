@extends('app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <p>
                            <a class="btn btn-info" href="{{ route('admin.usersProfiles.create') }}" role="button">
                                Crear perfil de usuario
                            </a>
                        </p>
                        <table class="table table-striped">
                            <tr>
                                <td>#</td>
                                <td>usuario</td>
                                <td>bio</td>
                                <td>twitter</td>
                                <td>Sitio web</td>
                                <td>Fecha de Nacimiento</td>
                                <td>Acciones</td>
                            </tr>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td> nombre usuario</td>
                                    <td>{{ $user->bio }}</td>
                                    <td>{{ $user->twitter }}</td>
                                    <td>{{ $user->website }}</td>
                                    <td>{{ $user->birthdate }}</td>
                                    <td>
                                        <a href="">Editar</a>
                                        <a href="">Eliminar</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        {!! $users->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection