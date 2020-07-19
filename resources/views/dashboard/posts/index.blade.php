@extends('layouts.posts')
@section('title','List Of Post')
@section('content')
@component('components.message')
this is a slot message
@endcomponent
<ul>
		@foreach($data as $row)

	<li>
               {{$row['name']}}</li>

<li>               {{$row['company']}}  </li>

           
               @endforeach



</ul>

@endsection