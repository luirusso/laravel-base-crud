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
                        Cover
                    </th>
                    <th>
                        Description
                    </th>
                    <th>
                        Price
                    </th>
                    <th>
                        Series
                    </th>
                    <th>
                        Sale Date
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
                            <img src="{{ $comic->thumb }}" alt="">
                        </td>
                        <td>
                            {{ $comic->description }}
                        </td>
                        <td>
                            ${{ $comic->price }}
                        </td>
                        <td>
                            {{ $comic->series }}
                        </td>
                        <td>
                            {{ $comic->sale_date }}
                        </td>
                        <td>
                            {{ $comic->type }}
                        </td>
                        <td>
                            <a class="btn btn-success" href="{{ route('comics.show', $comic->id) }}">Show</a>
                        </td>
                        <td>
                            EDIT
                        </td>
                        <td>
                            DELETE
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection