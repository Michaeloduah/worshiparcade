@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div>
            <a href="{{ route('dashboard.event.add-event') }}"><button class="btn btn-outline-info btn-sm"><i class="bi bi-plus"></i> Add New Event</button></a>
        </div>
        <h1 class="text-center"><strong>All Events</strong></h1>
        <table id="myTable" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">Time Created</th>
                    <th scope="col">Name</th>
                    <th scope="col">Category</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($events as $event)
                    <tr style="background: none">
                        <td> {{ $event->created_at }} </td>
                        <td> {{ $event->name }} </td>
                        @foreach ($event_categories as $category)
                            <td value="{{ $category->id }}">{{ $category->name }}</td>
                        @endforeach
                        <td> {{ $event->description }} </td>
                        <td> <img src="{{ asset('storage/' . $event->image) }}" class="img-fluid" alt=""> </td>
                        <td>
                            <a href="{{ route('dashboard.event.edit-event', $event->id) }}"><button
                                    class="btn btn-sm btn-outline-info"><i class="bi bi-pencil-square"></i>Edit</button></a>
                            <a href="{{ route('dashboard.event.delete-event', $event->id) }}"><button
                                    class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i>Delete</button></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
@endsection
