@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div>
            <a href="{{ route('dashboard.sermon.add-sermon') }}"><button class="btn btn-outline-info btn-sm"><i
                        class="bi bi-plus"></i> Add New Sermon</button></a>
        </div>
        <h1 class="text-center"><strong>All Sermons</strong></h1>
        <table id="myTable" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">Created At</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Audio</th>
                    <th scope="col">Video Link</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($sermons as $sermon)
                    <tr style="background: none">
                        <td> {{ $sermon->created_at }} </td>
                        <td> {{ $sermon->title }} </td>
                        <td> {{ $sermon->description }} </td>
                        <td>
                            <audio controls>
                                <source src="{{ asset('storage/' . $sermon->audio) }}" type="audio/mpeg">
                                Your browser does not support the audio element.
                            </audio>
                        </td>
                        <td>
                            <iframe src="https://www.youtube.com/embed/{{ $sermon->video }}" frameborder="0" allowfullscreen></iframe>
                        </td>
                        <td>
                            <a href="{{ route('dashboard.sermon.edit-sermon', $sermon->id) }}"><button
                                    class="btn btn-sm btn-outline-info"><i class="bi bi-pencil-square"></i>Edit</button></a>
                            <a href="{{ route('dashboard.sermon.delete-sermon', $sermon->id) }}"><button
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
