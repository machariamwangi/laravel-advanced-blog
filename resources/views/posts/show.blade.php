@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-default">Go Back</a>
<h1>{{$post->title}}</h1>

<div>
    {!!$post->body!!}
</div>
<hr>
<small> written on {{$post->created_at}}</small>
<hr>
<a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
<a href="/posts/{{$post->id}}/delete" class="btn btn-default">Delete</a>

{{Form::hidden('_method', 'DELETE')}}
{{Form::submit('Delete',['class'=>'btn btn-danger'])}}

{!!Form::close() !!}
@endsection