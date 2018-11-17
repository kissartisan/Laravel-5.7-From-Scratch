@extends('layout')

@section('content')
    <h1 class="title">Create a Project</h1>

    <form action="/projects" method="POST">
        @csrf
        <div class="field">
            <label for="title" class="label">Title</label>

            <div class="control">
                <input required type="text" class="input {{ $errors->has('title') ? 'is-danger' : '' }}"
                    name="title" placeholder="ex. Juan Dela Cruz" value="{{ old('title') }}">
            </div>
        </div>
        <div class="field">
            <label for="description" class="label">Description</label>

            <div class="control">
                <textarea required name="description"
                    class="textarea {{ $errors->has('description') ? 'is-danger' : '' }}"
                >{{ old('description') }}</textarea>
            </div>
        </div>
        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Create Project</button>
            </div>
        </div>

        @include('errors')
    </form>

@endsection
