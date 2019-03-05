@extends('layout')

@section('title')
Projects
@endsection

@section('navigation')
<a href="projects/create">Add new Project</a>
@endsection

@section('content')
<h1>Projects</h1>
<ul>
@foreach($projects as $project)
<li><a href="/projects/{{$project->id}}">{{$project->title}} - {{$project->description}}</a></li>
@endforeach
</ul>
@endsection
