@extends('layouts.app')

@section('content')
    <h1>Edit posts</h1>
    {!! Form::model($post, ['Action' => 'PostController@update', 'id' => $post]) !!}

        @csrf
            <div class="form-group">
                <label for="text">Title</label>
                <input type="text" name="title" class="form-control" placeholder="Enter title"/>
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea  class="form-control"  name="body" id='article-ckeditor' placeholder="Body Text"></textarea>
            </div> 
            <input type="hidden" name="_method" value="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" value="Submit" class="btn btn-primary">
        </form>
@endsection
