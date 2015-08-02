@extends('blog')

@section('content')

<style>
table {
    /*color: #575754;*/
    border: 2px solid grey;
}
</style>


</br>
</br>
<div class="container">
<table class="table" >
        <thead >
            <th >ID</th>
            <th>Name</th>
            <th>Username</th>
            <th>Email</th>
            <th> Operaciones </th>
        </thead>
        @foreach ($users as $u)
        <tbody>
            <td>{{$u->id}}</td>
            <td>{{$u->name}}</td>
            <td>{{$u->username}}</td>
            <td>{{$u->email}}</td>
            <td>
            <!-- ya me hace de una la indexacion del us con su id corresp, y eso se lo paso a usuario.editar -->
            <div class="row">
{!!link_to_route('user.edit', $title = 'Editar', $parameters = $u->id, $attributes = ['class'=>'btn btn-primary'])!!}
{!!link_to_route('user.edit', $title = 'Eliminar', $parameters = $u->id, $attributes = ['class'=>'btn btn-danger'])!!}
            </div>
            </td>
        </tbody>
        @endforeach


    </table>
</div>

{{-- <div class="container" >
    <a href="user/create" class= "btn btn-default">Crear cliente <span class="glyphicon glyphicon-plus"></span></a>
</div>   --}}

@endsection