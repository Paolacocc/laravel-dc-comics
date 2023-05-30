@extends('layouts.app')

@section('content')
    <div class="container">

        <h3 class="m-4 text-center">Comics list</h3>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Series</th>
                    <th scope="col">Details</th>

                </tr>
            </thead>
            <tbody>

                @foreach ($comics as $comic)
                    <tr>
                        <th scope="row">{{ $comic->title}}</th>
                        <td>{{ $comic->description}}</td>
                        <td>{{ $comic->price }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>
                            <a href="{{ route('comic.show', $comic->id )}}">Details</a>
                            <a href="{{ route('comic.create', $comic->id )}}">Edit</a>
                        
                        
                        </td>

                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>
@endsection
