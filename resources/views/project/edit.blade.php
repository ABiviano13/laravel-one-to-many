@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Modifica: {{ $project->title }}</h1>
        <form action="{{ route('projects.update', $project) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
              <label for="title" class="form-label">Titolo</label>
              <input type="text" name="title" class="form-control" value="{{ old('title',$project->title) }}" id="title" aria-describedby="titleHelp">
            </div>
            <div class="mb-3">
              <label for="content" class="form-label">Contenuto</label>
              <textarea name="content" class="form-control" id="content">{{ old('content',$project->content) }}</textarea>
            </div>
        
            <button type="submit" class="btn btn-primary">
                Salva
            </button>
        </form>
    </div>
@endsection