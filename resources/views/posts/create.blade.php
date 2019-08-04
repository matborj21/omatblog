@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="container">
                <div class="card-header">Create post</div>

                <div class="card-body">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                        </div><br />
                      @endif
                    <form action="{{route('posts.store')}}" method="post">
                        @csrf
                        <div class="form-group">                            
                            <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" value="{{old('title')}}" placeholder="Input your Title">
                            {{-- <span>{{errors->first()}}</span> --}}                            
                        </div>
                        <div class="form-group">                                    
                            <label for="slug">Slug</label>
                            <input type="text" name="slug"  class="form-control" value="{{old('slug')}}" placeholder="Input your Title">
                                {{-- <span>{{errors->first()}}</span> --}}                        
                        </div>
                        <div class="form-group">                            
                             <label for="title">Title</label>
                             <textarea name="body"  class="form-control"  cols="20" rows="5">{{old('body')}}"</textarea>                            
                        </div>

                        <button type="submit" class="btn btn-primary">Create</button>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection