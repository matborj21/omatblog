@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @foreach($posts as $post)
                        <ul>
                            <li>{{$post->title}}</li>
                            <li>{{$post->slug}}</li>
                            <li>{{$post->body}}</li>
                        </ul>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
