@extends('layout')

@section('title')
{{$project->title}}
@endsection

@section('navigation')
<a href="projects/create">Add new Project</a>
@endsection

@section('content')
<h2>{{$project->title}}</h2>
{{$project->title}} - {{$project->description}}
<br>
<a href="/projects/{{$project->id}}/edit">Edit</a>
@endsection
