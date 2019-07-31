@extends('layouts.app')

@section('content')
    <h1>Create posts</h1>
    <form action="{{action('PostsController@store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="text">Title</label>
                <input type="text" name="title" class="form-control" placeholder="Enter title"/>
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea  class="form-control"  name="body" id='article-ckeditor' placeholder="Body Text"></textarea>
            </div>
            <input type="submit" value="Submit" class="btn btn-primary">
        </form>
@endsection
