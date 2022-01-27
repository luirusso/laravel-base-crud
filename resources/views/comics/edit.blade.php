@extends('layouts.main')

@section('content')
    <section class="container">
        <div class="mb-5">
            <a class="fw-bold" href="{{ route('comics.index') }}">Back to Archive</a>
        </div>
        <h1 class="text-center mb-5">
            Edit "{{ $comic->title }}" from Archive
        </h1>

        <div class="row">
            <div class="col-md-8 offset-md-2">
                <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                    {{-- CROSS SITE REQUEST FORGERY LARAVEL, MUST INCLUDE IN EVERY FORM --}}
                    @csrf

                    {{-- ADD @METHOD WITH PUT OR PATCH --}}
                    @method('PUT')

                    <div class="mb-3">
                        <label for="title" class="form-label">
                            Title
                        </label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}"
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">
                            Description
                        </label>
                        <textarea class="form-control" id="description" name="description" rows="6">{{ $comic->description }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="thumb" class="form-label">
                            Thumb
                        </label>
                        <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">
                            Price
                        </label>
                        <input type="text" class="form-control" id="price" name="price" value="{{ $comic->price }}">
                    </div>
                    <div class="mb-3">
                        <label for="series" class="form-label">
                            Series
                        </label>
                        <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}">
                    </div>
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">
                            Sale Date
                        </label>
                        <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}">
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">
                            Type
                        </label>
                        <select class="form-control" id="type" name="type">
                            <option value="comic book" @if($comic->type == 'comic book')selected @endif>
                                Comic Book
                            </option>
                            <option value="graphic novel" @if($comic->type == 'graphic novel')selected @endif>
                                Graphic Novel
                            </option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">
                        Edit "{{ $comic->title }}"
                    </button>
                </form>
            </div>
        </div>
    </section>
@endsection