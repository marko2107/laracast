@extends('layout')

@section('title')
Edit Project
@endsection

@section('content')
<h1>Edit Project</h1>
<form class="" action="/projects/{{$project->id}}" method="POST">
    @method('PATCH')
    @csrf
  <input type="text" name="title" placeholder="Project title" value="{{$project->title}}">
  <textarea name="description" placeholder="Enter description" rows="8" cols="80">{{$project->description}}</textarea>
  <button type="submit" name="sumbit">Update Project</button>
  </form>
  <form class="" action="/projects/{{$project->id}}" method="post">
    @method('DELETE')
    @csrf
  <button type="submit" name="sumbit">Delete Project</button>
</form>
@endsection
