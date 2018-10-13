@extends('layout')

@section('content')
    <h1 class="title">Edit Project</h1>

    <form method="POST" action="/projects/{{ $project->getKey() }}">
        @csrf
        @method('PATCH')
        <div class="field">
            <label for="title" class="label">Title</label>
            <input type="text" class="input" name="title" placeholder="title" value="{{ $project->title }}">
        </div>
        <div class="field">
            <label for="description" class="label">Description</label>
            <textarea name="description" class="textarea">{{ $project->description }}</textarea>
        </div>
        <div class="field">
            <input type="submit" value="Update Project">
        </div>
    </form>
@endsection
