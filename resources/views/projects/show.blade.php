@extends('layouts.app')

@section('content')

    <div class="row">
        <p class="text-muted text-sm col-8">
            <a href="/projects">My Projects</a> > {{ $project->title }}
        </p>

        <div class="col-2">
            <a class="btn btn-primary"
                href="{{ $project->path() . '/edit' }}">Edit Project</a>
        </div>
    </div>



    <div class="row">
        <div class="col-9">
            <div class="row">
                <div class="col-9">
                    <h5>Tasks</h5>
                        @foreach($project->tasks as $task)
                            <div class="card p-2 mb-2">
                                <form action="{{ $task->path() }}"
                                      method="POST">
                                    @method('PATCH')
                                    @csrf
                                    <div class="form-row">
                                        <div class="col-7">
                                            <input value="{{ $task->body }}"
                                                   name="body"
                                                   class="form-control input-task {{ $task->completed ? 'tachado' : '' }}">
                                        </div>
                                        <div class="col">
                                            <label for="" class="form-control input-task">Tomorrow</label>
                                        </div>
                                        <div class="col-1">
                                            <input type="checkbox"
                                                   name="completed"
                                                   onChange="this.form.submit()"
                                                   class="form-control checkbox-medium"
                                                   {{ $task->completed ? 'checked' : '' }}
                                            >
                                        </div>

                                    </div>
                                </form>

                            </div>
                        @endforeach
                        <div class="card p-2 mb-2">
                            <form action="{{ $project->path(). '/tasks' }}" method="POST">
                                @csrf
                                <input placeholder="Add tasks here..."
                                       class="form-control input-task"
                                       name="body"
                                >
                            </form>
                        </div>
                    <h3>General Notes</h3>

                        <form action="{{ $project->path() }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <textarea
                                    class="card p-2 form-control"
                                    name="notes"
                                    placeholder="Add here some extra notes..."
                                >{{ $project->notes }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>

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
