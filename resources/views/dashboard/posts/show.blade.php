@extends('layouts.posts')
@section('title','Single Record Via Show')
@section('content')
	<ul>

	<li>
               {{$data['name']}}   <br/>


                          {{$data['age']}}
           
</li>



</ul>
@endsection
	  
