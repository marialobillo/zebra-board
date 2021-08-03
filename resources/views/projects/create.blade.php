@extends('layouts.app')

@section('content')
    <h1>Create a project</h1>

    <form action="/projects" method="POST">
        @csrf
        <div class="group-form">
            <label for="">Title</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="group-form">
            <label for="">Description</label>
            <textarea class="form-control" name="description"></textarea>
        </div>

        <div class="group-form">
            <button type="submit" class="btn btn-primary">Create Project</button>
        </div>
    </form>
@endsection
