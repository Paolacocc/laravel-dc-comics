@extends('layouts.app')
@section('content')
<div class="container mt-4">

    <h3>Make your changes</h3>
        <form action="{{ route('comic.store')}}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title')}}">
            @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" rows="3"></textarea>
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Image</label>
            <input type="text" class="form-control" id="thumb" name="thumb">
        </div>


        <div class="mb-3">
            <label for="price" class="form-label">price</label>
            <input type="text" class="form-control" id="price" name="price">
        </div>
        
        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" class="form-control" name="series" id="series">
        </div>

        <div class="mb-3">
            <label for="sale-date" class="form-label">Sale date</label>
            <input type="text" class="form-control" id="sale-date" name="sale_date">
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control" id="type" name="type">
        </div>
    
        <button class="btn btn-warning" type="submit">Send</button>
    
        </form>
</div>
@endsection