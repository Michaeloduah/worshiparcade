@extends('layouts.dashboard')

@section('content')
<main class="mt-5" style="">
  <div class="profile mx-auto container">
    <h1 class="fw-bolder text-center">Your Profile</h1>
    <div class="row my-5">
      <div class="col-md-3 col-xl-3 col-12">
        <img
          src="{{ asset('storage/' . auth()->user()->image) }}"
          class="img-fluid mb-5"
          alt=""
        />
      </div>
      <div class="col-md-9 col-xl-9 col-12 px-5">
        <h1 class="fs-3 fw-bold">Personal Details</h1>
        <div class="profile-details">
          <p class="fw-medium fs-6">Name:</p>
          <h1 class="fw-bold fs-5">{{ $user->name }}</h1>
          <hr />
          <p class="fw-medium fs-6">Email:</p>
          <h1 class="fw-bold fs-5">{{ $user->email }}</h1>
          <hr />
          <p class="fw-medium fs-6">Phone Number:</p>
          <h1 class="fw-bold fs-5">{{ $user->phone }}</h1>
          <hr />
        </div>
      </div>
    </div>
    <a href="{{ route('editprofile') }}" class="text-decoration-none"><button class="btn btn-outline-info profile-button px-5 py-2">Edit Profile</button></a>
  </div>
</main>
@endsection