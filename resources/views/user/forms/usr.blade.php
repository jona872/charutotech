			<div class="form-group" >
				{!!Form::label('Name: ')!!}
				{!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre Usuario'])!!}
			</div>
			<div class="form-group" >
				{!!Form::label('UserName: ')!!}
				{!!Form::text('username',null,['class'=>'form-control','placeholder'=>'Telefono'])!!}
			</div>	
			<div class="form-group" >
				{!!Form::label('Email: ')!!}
				{!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Correo Usuario'])!!}
			</div>

			<div class="row ">
				<div class="col-md-6">
				{!!Form::label('Password: ')!!}
				{!!Form::password('Password',null,['class'=>'col-md-4 control-label','placeholder'=>'Correo Usuario'])!!}
			</div>

			<div class="col-md-6">
				{!!Form::label('Confirm Password: ')!!}
				{!!Form::password('Confirm Password',null,['class'=>'col-md-6 control-label','placeholder'=>'Correo Usuario'])!!}
			</div>
			</div>

			</br>


