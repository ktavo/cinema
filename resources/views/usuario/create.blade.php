@extends('layouts.admin')
@section('content')
	@include('alerts/request')
	{!!Form::open(['route'=>'usuario.store', 'method'=>'POST'])!!}
		@include('usuario.forms.user')
		{!!Form::submit('Register',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
@stop