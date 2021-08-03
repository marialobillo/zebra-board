@extends('layouts.app')

@section('content')
    <h1>Projects</h1>

    <heeader>
        <a href="/projects/create" class="btn btn-primary float-right">Create a New Project</a>
    </heeader>

    <ul>
        @forelse($projects as $project)
            <li>
                <a href="{{ $project->path() }}">{{ $project->title }}</a>
            </li>
        @empty
            <li>There is not Projects yet.</li>
        @endforelse
    </ul>
@endsection
