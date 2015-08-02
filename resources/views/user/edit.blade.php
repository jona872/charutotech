@extends ('blog')

@section('content') 
 <div class="container" >

		<!-- model es como open, pero ya me va a cargar los campos con los datos del modelo
		 $users->idUsuario  es con loq busca -->
		{!!Form::model($user,['route'=>['user.update', $user->id],'method'=>'PUT'] )!!}
			@include('user.forms.usr')
		<div class="row">
  			<div class="col-md-2">
		{!!Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}
		{!!Form::close()!!}
			</div>
			<div class="col-md-2">
		{!!Form::open(['route'=>['user.destroy', $user->id],'method'=>'DELETE'] )!!}
		{!!Form::submit('Eliminar',['class'=>'btn btn-danger']) !!}
		{!!Form::close()!!}
	</div>
<input type="button" value="Cancelar" class="btn btn-warning" onclick= "self.location.href = '../../user' "/>

		</div>
</div>
@stop