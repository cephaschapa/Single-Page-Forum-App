@extends('layouts.app')
@section('content')

<div class="container-fluid">
    <div class="jumbotron">
        <h1>{{$blog->title}}</h1>
        <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-primary btn-xs pull-left">Edit <a>
        <form action=" {{ route('blogs.delete', $blog->id) }} " method="post">
            {{ method_field('delete') }}

            <button type = "submit" class="btn btn-danger btn-xs pull-left">Delete</button>
            {{ csrf_field() }}
        </form>

    </div>
    <div class="col-md-12">
       <p>{{ $blog->body }}</p>
    </div>
</div>

@endsection