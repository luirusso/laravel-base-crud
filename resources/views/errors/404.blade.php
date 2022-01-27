@extends('layouts.main')

@section('content')
    <section class="container text-center">
        <h1 class="mb-5">Error 404</h1>

        <p class="mb-5">The page you are looking for does not seem to exist on this site.</p>

        <a class="fw-bold mb-5" href="{{ route('home') }}">Back to Homepage</a>
    </section>
@endsection