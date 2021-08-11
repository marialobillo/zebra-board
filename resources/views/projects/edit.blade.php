@extends('layouts.app')

@section('content')
    <h1>Edit your project</h1>

    <form action="{{ $project->path() }}" method="POST">
    @csrf
        @method('PATCH')
    @include('projects._form', [
        'buttonText' => 'Save Changes'
    ])
    </form>

@endsection
