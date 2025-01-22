@extends('layout.app')

@section('pages')


<main class="containers ">

    <h2 class="text-center">Add a New Note</h2>
    <form method="POST" action="" class="p-4 border rounded bg-white shadow">
      @csrf
      <div class="mb-3 form-group">
        <label for="noteTitle" class="form-label">Note Title</label>
        <input type="text" id="noteTitle" name="title" class="form-control" placeholder="Enter note title" value="{{ old('title') }}">
        @error('title')
          <div class="text-danger small">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3 form-group">
        <label for="noteContent" class="form-label">Note Content</label>
        <textarea id="noteContent" name="content" class="form-control" rows="4" placeholder="Write your note here">{{ old('content') }}</textarea>
        @error('content')
          <div class="text-danger small">{{ $message }}</div>
        @enderror
      </div>

        <button type="submit" class="btn-submit">
            <ion-icon name="add-circle-outline"></ion-icon> Add Note
        </button>
    </form>
    @if(session('success'))
      <div class="alert alert-success mt-3">{{ session('success') }}</div>
    @endif


</main>


@endsection
