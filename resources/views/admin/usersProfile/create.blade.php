@extends('app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Nuevo Perfil de Usuario</div>
                    <div class="panel-body">
                        {!! Form::open([ 'route' => 'admin.usersProfiles.store', 'method' => 'POST', 'class' => '' ]) !!}
                        <form>
                            <div class="form-group">
                                {!! Form::label('user_id','Elija un usuario') !!}
                                {!! Form::select('user_id', $users , null , ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('bio','Bio') !!}
                                {!! Form::text('bio', null, ['class' => 'form-control' , 'placeholder' => 'Por favor introduzca su bio']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('twitter','Twitter') !!}
                                {!! Form::text('twitter', null, ['class' => 'form-control' , 'placeholder' => 'Por favor introduzca su twitter']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('website','Sitio Web') !!}
                                {!! Form::text('website', null, ['class' => 'form-control' , 'placeholder' => 'Por favor introduzca su sitio web']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('birthdate','Fecha de Nacimiento') !!}
                                {!! Form::date('birthdate', null, ['class' => 'form-control', 'type' => 'date' ]) !!}
                            </div>

                            <button type="submit" class="btn btn-default">Crear Perfil usuario</button>
                        </form>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection