@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <h3>News Title: {{ $news->title }}</h3>
        <h3>News Description: {{ $news->description }}</h3>
        <h3>News Slug: {{ $news->slug }}</h3>
        <img src="{{asset('storage/'.$news->image)}}" class="img-fluid" width="50%" alt="">
    </div>
@endsection