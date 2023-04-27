@extends('layouts.app')

@section('content')
<div class="container">
    <h1>
        Nuovo Project
    </h1>

    <form action="{{ route('projects.store') }}" method="POST">
      @csrf
      <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" name="title" class="form-control" value="{{ old('title') }}" id="title" aria-describedby="titleHelp">
      </div>
      <div class="mb-3">
        <label for="content" class="form-label">Contenuto</label>
        <textarea name="content" class="form-control" id="content">{{ old('content') }}</textarea>
      </div>
    
      <button type="submit" class="btn btn-primary">Crea</button>
    </form>
</div>
@endsection