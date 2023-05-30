@extends('layouts.app')

@section('content')
    <div class="container">


        <h2>Edit your comic: {{ $comic->title }}</h2>

        <form action="{{ route('comic.update', $comic->id) }}" method="POST">
            @method('PUT')
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" rows="3">{{ $comic->description }}</textarea>
            </div> 

            <div class="mb-3">
                <label for="thumb" class="form-label">Image</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">price</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ $comic->price }}">
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" name="series" id="series" value="{{ $comic->series }}">
            </div>

            <div class="mb-3">
                <label for="sale-date" class="form-label">Sale date</label>
                <input type="text" class="form-control" id="sale-date" name="sale_date" value="{{ $comic->sale_date}}">
            </div>
    
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" id="type" name="type" value="{{ $comic->type }}">
            </div>

           

            <button class="btn btn-success" type="submit">Invia</button>
        </form>
    </div>
@endsection