@extends('layouts.dashboard')

@section('content')
<h1 class="text-center"><strong >Add Event</strong></h1>
<div class="container">
    <form method="POST" action="{{ route('dashboard.event.events') }}" enctype="multipart/form-data">
        @csrf
        <label for="name" class="form-label">Title: </label>
        <input type="text" name="name" id="name" class="form-control" required>

        <label for="description" class="form-label">Description: </label>
        <textarea type="text" name="description" id="description" class="form-control" required></textarea>

        <label for="event_category_id" class="form-label">Category: </label>
        <select name="event_category_id" id="" class="form-select">
            <option value="">Select Category</option>
            @foreach ($event_categories as $category )
                <option value="{{$category->id}}">{{ $category->name}}</option>
            @endforeach
        </select>
        
        <label for="image" class="form-label">Image: </label>
        <input type="file" name="image" id="image" value="Pending" class="form-control">

        <label for="date" class="form-label">Date: </label>
        <input type="date" name="date" id="date" value="Pending" class="form-control">

        <button class="btn btn-sm btn-outline-info mt-3" type="submit">Submit</button>
    </form>
</div>
@endsection
