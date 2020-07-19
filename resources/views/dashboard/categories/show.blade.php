@extends('dashboard.layout')

@section('content')

  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Category Section</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <a href="{{route('categories.create')}}" type="button" class="btn btn-sm btn-outline-secondary">Add New Category</a>
          
          </div>
         
        </div>
      </div>
      @if($category())
<div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>ID</th>
              <th>Title</th>
              <th>Content</th>
              <th>Thumbnail</th>
              <th>Created At</th>
              <th>Updated At</th>
            </tr>
          </thead>
          <tbody>
             <tr>
                
                  <td>{{$category->id}}</td>
                  <td>{{$category->title}}</td>
                  <td>{{$category->content}}</td>
                  <td><img src="{{storage($category->thumbnail)}}"/></td>
                  <td>{{$category->create_at}}</td>
                  <td>{{$category->updated_at}}</td>
          <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                      <a role="button"  href="{{route('categories.edit',$role->id)}}" class="btn btn-link">Edit</a>

                      <form action="{{ route('categories.destroy',$role->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                          <button type="submit" class="btn btn-link">Delete</button>

                      </form>
                      <a role="button"  href="{{route('categories.show',$role->id)}}" class="btn btn-link">Show</button>
                </div>
          </td>
                 
          </tr>
         </tbody>
        
        </table>
       </div>
       @else
       <p class="alert alert-info">No Record Found....</p>
       @endif
@endsection