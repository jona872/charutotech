@extends('blog')

@section('content')
<div class="container" >
	<p>{{ Auth::user()->id }} </p>
	<p>{{ Auth::user()->name }} </p>
	<p>{{ Auth::user()->username }} </p>
</div>





@endsection

