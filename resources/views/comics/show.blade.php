@extends('layouts.app')

@section('content')
<div class="contaniner">
    <h4>{{ $comics->title}}</h4>
    <img src="{{ $comics->thumb }}" alt="">
</div>
    
@endsection