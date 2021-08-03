@extends('layouts.app')

@section('content')
    <h1>Projects</h1>

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
