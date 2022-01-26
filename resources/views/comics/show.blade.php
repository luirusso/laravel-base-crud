@extends('layouts.main')

@section('content')
    <section class="container">
        <h1 class="mb-5">{{ $comic['title'] }}</h1>

        <div class="mb-5">
            <div class="row">
                <div class="col-md-3">
                    <img src="{{ $comic->thumb }}" alt="{{ $comic['title'] }}">
                </div>
                <div class="col-md-9">
                    <table class="table">
                        <thead>
                            <tr>
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
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    ${{ $comic['price'] }}
                                </td>
                                <td>
                                    {{ $comic['series'] }}
                                </td>
                                <td>
                                    {{ $comic['sale_date'] }}
                                </td>
                                <td>
                                    {{ $comic['type'] }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <h3>Description</h3>
                    <p>
                        {{ $comic['description'] }}
                    </p>

                </div>
            </div>
        </div>
    </section>
@endsection