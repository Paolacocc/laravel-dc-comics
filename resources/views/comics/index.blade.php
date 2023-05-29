@extends('layouts.app')

@section('content')
    <div class="container">

        <h3>Comics list</h3>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Series</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($comics as $comic)
                    <tr>
                        <th scope="row">{{ $comic->title}}</th>
                        <td>{{ $comic->description}}</td>
                        <td>{{ $comic->price }}</td>
                        <td>{{ $comic->series }}</td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>
@endsection
