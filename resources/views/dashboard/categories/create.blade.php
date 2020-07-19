@extends('dashboard.layout')

@section('content')
<form action="{{route('categories.store')}}" method="POST" enctype="multipart/form-data">
	@csrf
    <div class="form-group">
      <label for="inputTitle">Title</label>
      <input type="text" name="title" class="form-control" id="inputTitle" placeholder="Category Title">
    </div>
   
 
  <div class="form-group">
  	 
    <label for="inputContent">Content</label>
    <textarea name="content" class="form-control" id="inputContent" placeholder="Category Content"></textarea>
      </div>

  <div class="form-group">
    <label for="inputAddress2">Image</label>
         <input type="file" name="thumbnail" class="form-control" id="inputFileName">

  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity"></label>
      <select name="parent_id" id="">
      	<option value="0">Select A PArent Category</option>
        @if(!$categories->isEmpty())
        @foreach($categories as $category)
          <option value="{{$category->id}}">{{$category->title}}</option>
        @endforeach
        @endif

      </select>
    </div>
  
  
  </div>
 
  <button type="submit" class="btn btn-primary">Add Category</button>
</form>

@endsection