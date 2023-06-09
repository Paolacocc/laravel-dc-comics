@extends('layouts.app')

@section('content')
    <div class="container">

        <h3 class=" text-center m-4">COMICBOOKS LIST:</h3>

        <a class="btn btn-success  m-4 d-flex justify-content-center" href="{{ route('comic.create')}}">Add a new comic book</a>

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
                            <a class="btn btn-primary m-1" href="{{ route('comic.show', $comic->id )}}">Details</a>
                            
                            <a class="btn btn-warning m-1" href="{{ route('comic.edit', $comic->id )}}">Edit</a>
                            
                            <form  action="{{ route('comic.destroy', $comic->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger mt-1" >
                                   Delete
                                </button>
                            </form>
                        
                        
                        </td>

                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>
@endsection
