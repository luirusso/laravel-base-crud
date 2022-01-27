@extends('layouts.main')

@section('content')
    <section class="container">
        <h1>
            Our Comics
        </h1>
        
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
                            <a class="btn btn-primary" href="#">Edit</a>
                        </td>
                        <td>
                            <a class="btn btn-danger" href="#">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection