@extends('layouts.app')

@section('content')
    <h1>Create a project</h1>

    <form action="/projects" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <textarea class="form-control" name="description"></textarea>
        </div>


        <button type="submit" class="btn btn-primary">Create Project</button>
        <a href="/projects" class="btn btn-danger">Cancel</a>

    </form>
@endsection
