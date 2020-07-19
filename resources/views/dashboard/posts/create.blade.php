@extends('layouts.posts')

@section('title','Created New Post')

@section('content')

	
	   <form action="{{ route('post.store')}}" method="POST" enctype="multipart/form-data">
	   	@csrf
 	   	<input type="text" name="email" value="{{old('email')}}"/>
 	   	 	@if($errors->has('email'))
             @foreach($errors->get('email') as $error)
                       {{$error}}
             @endforeach

 	   	@endif<br/>

 	   	 	<input type="text" name="email_confirmation" value="{{old('email_confirmation')}}"/>
 	   	 	@if($errors->has('email'))
             @foreach($errors->get('email') as $error)
                       {{$error}}
             @endforeach

 	   	@endif<br/>

 	  

	   	<textarea name="content" id="" cols="30" rows="10"></textarea>

            @if($errors->has('content'))

               @foreach($errors->get('content') as $error)
                      {{$error}}
               @endforeach
            @endif


	   	<br/>
	   	<label>Computer<input type="checkbox" name="check[]" id=""></label>
	   	<label>MATH<input type="checkbox" name="check[]" id=""></label>
	   	<label>ARTS<input type="checkbox" name="check[]" id=""></label>
	   	<label>COMMERCE<input type="checkbox" name="check[]" id=""></label>
	   	<label>AI<input type="checkbox" name="check[]" id=""></label>
	   	    @if($errors->has('check'))

               @foreach($errors->get('check') as $error)
                      {{$error}}
               @endforeach
            @endif
<br/>
	   	<label for="">Select An Image : <input type="file" name="photo" id=""></label>

    @if($errors->has('photo'))

               @foreach($errors->get('photo') as $error)
                      {{$error}}
               @endforeach
            @endif


	   	<br/>

	   	<label for="">Accept TOS:
        <input type="checkbox" name="tos" id=""/>	   	</label>
        @if($errors->has('tos'))

        @foreach($errors->get('tos') as $error)
        {{$error}}
        @endforeach
        @endif
        <br/>

        <label for="">Start Date<input type="date" name="start_date" id=""/></label>
 <br/>
            @if($errors->has('start_date'))
             @foreach($errors->get('start_date') as $error)
             {{$error}}
             @endforeach
            
            @endif
            <br/>


            <label for="">End Date<input type="date" name="end_date" id=""/></label>
 <br/>
            @if($errors->has('end_date'))
             @foreach($errors->get('end_date') as $error)
             {{$error}}
             @endforeach
            
            @endif
            <br/>

	   	<input type="submit" value="Add New Post">


	   </form>


	   @endsection

