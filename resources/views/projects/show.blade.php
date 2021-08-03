@extends('layouts.app')

@section('content')
<ul>
    <h2>{{ $project->title }}</h2>
    <p>{{ $project->description }}</p>
</ul>

@endsection
