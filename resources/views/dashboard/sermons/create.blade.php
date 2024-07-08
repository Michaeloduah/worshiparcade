@extends('layouts.dashboard')




@section('content')
    <h1 class="text-center"><strong>Add Sermon</strong></h1>
    <div class="container">
        <form method="POST" action="{{ route('dashboard.sermon.sermon') }}" enctype="multipart/form-data">
            @csrf
            <label for="title" class="form-label">Title: </label>
            <input type="text" name="title" id="title" class="form-control" required>

            <label for="description" class="form-label">Description: </label>
            <textarea type="text" name="description" id="description" class="form-control" required></textarea>

            <label for="audio" class="form-label">Audio Link: </label>
            <input type="file" name="audio" id="audio" class="form-control" required>

            <label for="video" class="form-label">Video Link (youtube embed link): </label>
            <input type="text" name="video" id="video" class="form-control">

            <button class="btn btn-sm btn-outline-info mt-3" type="submit">Submit</button>
        </form>
    </div>
@endsection
