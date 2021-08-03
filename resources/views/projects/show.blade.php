@extends('layouts.app')

@section('content')
<ul>
    <h2>{{ $project->title }}</h2>
    <p>{{ $project->description }}</p>
</ul>

<a href="/projects" class="btn btn-primary">Back to Projects</a>

@endsection
