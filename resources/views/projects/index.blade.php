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
<li>{{$project->title}} - {{$project->description}}</li>
@endforeach
</ul>
@endsection
