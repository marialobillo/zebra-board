@extends('layouts.app')

@section('content')
    <h1>Projects</h1>

    <header>
        <a href="/projects/create" class="btn btn-primary float-right">Create a New Project</a>
    </header>

    <ul class="card-deck">
        @forelse($projects as $project)
            <div class="card col-3 my-3" >

                <div class="card-body">
                    <h5 class="card-title font-weight-bold">
                        <a href="{{ $project->path() }}">{{ $project->title }}</a>
                    </h5>
                    <p class="card-text">
                        {{ Str::limit($project->description, 70) }}...
                    </p>
                </div>
            </div>
        @empty
            <li>There is not Projects yet.</li>
        @endforelse
    </ul>
@endsection
