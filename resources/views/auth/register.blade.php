@extends('layouts.app')

@section('content')

    <body>

        <h1 class="text-center"><strong>Register Form</strong></h1>
        <div class="container">
            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf
                <label for="name" class="form-label">Name: </label>
                <input type="text" name="name" id="name" class="form-control" required>

                <label for="surname" class="form-label">Surname: </label>
                <input type="text" name="surname" id="surname" class="form-control" required>
                
                <label for="phone_number" class="form-label">Phone Number: </label>
                <input type="text" name="phone_number" id="phone_number" class="form-control" required>

                <label for="email" class="form-label">Email: </label>
                <input type="text" name="email" id="email" class="form-control" required>

                <label for="password" class="form-label">Password: </label>
                <input type="password" name="password" id="password" class="form-control" required>

                <label for="password_confirmation" class="form-label">Password: </label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control"
                required>

                <label for="martial_status" class="form-label">Martial Status: </label>
                <input type="text" name="martial_status" id="martial_status" class="form-control" required>

                <label for="nationality" class="form-label">Nationality: </label>
                <input type="text" name="nationality" id="nationality" class="form-control" required>

                <label for="gender" class="form-label">Gender: </label>
                <input type="text" name="gender" id="gender" class="form-control" required>
                
                <label for="dob" class="form-label">Date Of Birth: </label>
                <input type="date" name="dob" id="dob" class="form-control" required>

                <label for="bio" class="form-label">Bio: </label>
                <input type="text" name="bio" id="bio" class="form-control" required>

                <label for="image" class="form-label">Image: </label>
                <input type="file" name="image" id="image" class="form-control" required>

                <button class="btn btn-sm btn-outline-info mt-3" type="submit">Submit</button>
            </form>
        </div>
    @endsection
