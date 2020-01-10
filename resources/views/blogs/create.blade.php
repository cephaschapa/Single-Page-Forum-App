@extends('layouts.app')
@section('content')

<div class="container-fluid">
    <div class="jumbotron">
        <h1>Create a new blog</h1>
    </div>
    <div class="col-md-12">
        <form action="{{ route('blogs.store') }}" method="post">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control">

            </div>
            <div class="form-group">
                <label for="title">Body</label>
                <textarea name="body" id="body" class="form-control">

                </textarea>
                
            </div>
            <button class="btn btn-primary" type="submit">create new blog</button>
            {{ csrf_field() }}
        </form>
    </div>
</div>

@endsection