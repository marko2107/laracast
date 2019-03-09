@extends('layout')

@section('title')
Create Project
@endsection

@section('content')
<h1>Create a new Project</h1>
<form class="" action="/projects" method="post">
  @csrf
  <input type="text" name="title" placeholder="Project title" required value="{{old ('title')}}">
  <textarea name="description" placeholder="Enter description" rows="8" cols="80" required>{{old ('description')}}</textarea>
  <button type="submit" name="sumbit">Create new Project</button>
@include('errors')
</form>
@endsection
