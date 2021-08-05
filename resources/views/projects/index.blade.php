@extends('layouts.app')

@section('content')


    <header class="mb-3 py-4">
        <div class="row justify-content-between">
            <div class="col-4">
                <h2 class="col-4">Projects</h2>
            </div>
            <div class="col-2">
                <a href="/projects/create" class="btn btn-primary">New Project</a>
            </div>
        </div>
        <hr>
    </header>

    <ul class="card-deck">
        @forelse($projects as $project)
            <div class="col-4">
                <div class="card my-3" >

                    <div class="card-body">
                        <h5 class="card-title font-weight-bold project-title">
                            <a href="{{ $project->path() }}">{{ $project->title }}</a>
                        </h5>
                        <p class="card-text text-muted">
                            {{ Str::limit($project->description, 70) }}...
                        </p>
                    </div>
                </div>
            </div>
        @empty
            <li>There is not Projects yet.</li>
        @endforelse
    </ul>
@endsection
