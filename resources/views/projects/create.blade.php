@extends('layouts.app')

@section('content')
    <h1>Create New Project</h1>

    <form action="/projects" method="POST">
        @csrf
        @include('projects._form', [
            'project' => new App\Models\Project,
             'buttonText' => 'Save Project'
            ])
    </form>
@endsection
