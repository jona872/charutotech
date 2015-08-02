@extends('blog')

@section('content')

</br>
</br>
<div class="container">
<table class="table">
        <thead>
            <th>algo</th>
            <th>algo</th>
            <th>algo</th>
            <th>algo</th>
            <th> - </th>
        </thead>
        @foreach ($users as $u)
        <tbody>
            <td>{{$u->id}}</td>
            <td>{{$u->name}}</td>
            <td>{{$u->username}}</td>
            <td>{{$u->password}}</td>
            <td>
            
            
            <!-- ya me hace de una la indexacion del us con su id corresp, y eso se lo paso a usuario.editar -->
        </td>
        </tbody>
        @endforeach


    </table>
</div>

@endsection