@extends('dashboard.layout')

@section('content')
<form action="{{route('categories.update',$category->id)}}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PUT')
    <div class="form-group">
      <label for="inputTitle">Title</label>
      <input name="title" type="text" class="form-control" id="inputTitle" placeholder="Category Title" value="{{$category->title}}">
    </div>
   
 
  <div class="form-group">
    <label for="inputContent">Content</label>
    <textarea name="content" class="form-control" id="inputContent" placeholder="Category Content">{{$category->content}}</textarea>  </div>

  <div class="form-group">
<img src="{{asset('storage/'.$category->thumbnail)}}" width="100" height="100"/>   
 <label for="inputAddress2">Image</label>
         <input type="file" name="thumbnail" class="form-control" id="inputFileName">

  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <select name="parent_id" id="">
      	<option value="0">Select A PArent Category</option>
        @if(!$categories->isEmpty())
        @foreach($categories as $cats)
          <option @if($category->parent->id==$cats->id) {{'selected'}} @endif value="{{$cats->id}}">{{$cats->title}}</option>
        @endforeach
        @endif

      </select>
    </div>
  
  
  </div>
 
  <button type="submit" class="btn btn-primary">Update Category</button>
</form>

@endsection