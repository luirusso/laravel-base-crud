@extends('layouts.main')

@section('content')
    <section class="container">
        <h1 class="mb-5">
            Our Comics
        </h1>
        
        @if (session('deleted'))
            <div class="alert alert-success">
                <strong>
                    {{ session('deleted') }} successfully deleted.
                </strong>
            </div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th>
                        ID
                    </th>
                    <th>
                        Title
                    </th>
                    <th>
                        Series
                    </th>
                    <th>
                        Type
                    </th>
                    <th colspan="3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <td>
                            {{ $comic->id }}
                        </td>
                        <td>
                            {{ $comic->title }}
                        </td>
                        <td>
                            {{ $comic->series }}
                        </td>
                        <td>
                            {{ $comic->type }}
                        </td>
                        <td>
                            <a class="btn btn-success" href="{{ route('comics.show', $comic->slug) }}">Show</a>
                        </td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('comics.edit', $comic->id) }}">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <input type="submit" class="btn btn-danger" value="Delete">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection