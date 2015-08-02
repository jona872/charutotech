@extends('blog')

@section('content')

	<div class="container" >
		{!!Form::open(['route'=>'user.store','method'=>'POST'])!!}
		@include('user.forms.usr')

		{!!Form::submit('Registrar',['class'=>'btn btn-primary']) !!}	
		<input type="button" value="Cancelar" class="btn btn-danger" onclick= "self.location.href = '../user' "/>
		{!!Form::close()!!}
	</div>

@endsection