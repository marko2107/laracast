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
@if($project->tasks->count())
<div>
@foreach ($project->tasks as $task)

<form method="post" action="/tasks/{{$task->id}}">
@csrf
@method('patch')
<label for="completed">
<input type="checkbox" name="completed" onchange="this.form.submit()" {{$task->completed ? 'checked':''}}>
{{$task->description}}
</label>
</form>

@endforeach
@endif
</div>
@endsection
