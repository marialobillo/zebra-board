@extends('layouts.app')

@section('content')

    <div class="row">
        <p class="text-muted text-sm">
            <a href="/projects">My Projects</a> > {{ $project->title }}
        </p>
    </div>

    <div class="row">
        <div class="col-9">
            <div class="row">
                <div class="col-9">
                    <h5>Tasks</h5>
                        <div class="card p-2 mb-2">Lorem Ipsum</div>
                        <div class="card p-2 mb-2">Lorem Ipsum</div>
                        <div class="card p-2 mb-2">Lorem Ipsum</div>
                        <div class="card p-2 mb-2">Lorem Ipsum</div>

                    <h3>General Notes</h3>

                        <textarea class="card p-2 form-control">Lorem Ipsum</textarea>
                </div>
                <div class="col-3">
                    @include('projects.card')
                </div>
            </div>
        </div>

        <div class="col-3">
            <h4>Latest Updates</h4>
        </div>
    </div>



    <hr>

<a href="/projects" class="btn btn-primary">Back to Projects</a>

@endsection
