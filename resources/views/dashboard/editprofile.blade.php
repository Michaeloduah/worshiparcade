@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <h1 class="text-center">Users Dashboard</h1>
        <h3 class="text-center">Edit Profile</h3>

        <div class="my-5">
            <form enctype="multipart/form-data" action="{{ route('updateprofile', auth()->user()->id) }}"
                method="POST">
                @csrf
                <div class="mb-3">
                    <label for="InputName" class="form-label">Full Name</label>
                    <input type="text" name="name" class="form-control" id="InputName">
                </div>
                @if ($errors->has('name'))
                    <span class="error">
                        <span class="section-subtitle" style="margin-inline: 0px">{{ $errors->first('name') }}</span>
                    </span>
                @endif

                <div class="mb-3">
                    <label for="InputEmail" class="form-label">Email Address</label>
                    <input type="email" name="email" class="form-control" id="InputEmail">
                </div>
                @if ($errors->has('email'))
                    <span class="error">
                        <span class="section-subtitle" style="margin-inline: 0px">{{ $errors->first('email') }}</span>
                    </span>
                @endif

                <div class="mb-3">
                    <label for="InputPhone" class="form-label">Phone Number</label>
                    <input type="tel" name="phone" class="form-control" id="InputPhone">
                </div>
                @if ($errors->has('phone'))
                    <span class="error">
                        <span class="section-subtitle" style="margin-inline: 0px">{{ $errors->first('phone') }}</span>
                    </span>
                @endif

                <div class="mb-3">
                    <label for="InputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="InputPassword1">
                </div>
                @if ($errors->has('password'))
                    <span class="error">
                        <span class="section-subtitle" style="margin-inline: 0px">{{ $errors->first('password') }}</span>
                    </span>
                @endif

                <div class="mb-3">
                    <label for="InputConfirmPassword1" class="form-label">Confirm Password</label>
                    <input type="password" name="confirmpassword" class="form-control" id="InputConfirmPassword1">
                </div>
                @if ($errors->has('confirmpassword'))
                    <span class="error">
                        <span class="section-subtitle"
                            style="margin-inline: 0px">{{ $errors->first('confirmpassword') }}</span>
                    </span>
                @endif

                <div class="mb-3">
                    <label for="InputImage" class="form-label">Image</label>
                    <input type="file" name="image" class="form-control" id="InputImage">
                </div>
                @if ($errors->has('image'))
                    <span class="error">
                        <span class="section-subtitle" style="margin-inline: 0px">{{ $errors->first('image') }}</span>
                    </span>
                @endif

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
