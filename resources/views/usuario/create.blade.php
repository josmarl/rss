@extends('layouts.admin')

@section('content')

	{!!Form::open(['route'=>'usuario.store','method'=>'POST'])!!}
	<div class="form-group">
		{!!Form::label('Nombre:')!!}
		{!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre del usuario'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('Correo:')!!}
		{!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingrese el correo del usuario'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('Password:')!!}
		{!!Form::password('password',['class'=>'form-control','placeholder'=>'Ingrese la contraseña del usuario'])!!}
	</div>
	{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}


	<!---
	<form action="">
		<div class="form-group">
			<label for="">Nombre</label>
			<input type="text" class="form-control">
		</div>
		<div class="form-group">
			<label for="">Correo</label>
			<input type="text" class="form-control">
		</div>
		<div class="form-group">
			<label for="">Contraseña</label>
			<input type="password" class="form-control">
		</div>
		<button class="btn btn-primary">Registrar</button>
	</form>
	-->
@stop