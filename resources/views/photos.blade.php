@extends('adminlte::page')

@section('title', 'Photos')

@section('content_header')
    <h1>Photo Gallery</h1>
@stop

@section('content')
    <p>Welcome to the photo section. Below is a collection of example images.</p>

    <div style="display: flex; gap: 10px; flex-wrap: wrap;">
        <img src="https://via.placeholder.com/150" alt="Photo 1" style="border: 1px solid #ccc; padding: 5px;">
        <img src="https://via.placeholder.com/150" alt="Photo 2" style="border: 1px solid #ccc; padding: 5px;">
        <img src="https://via.placeholder.com/150" alt="Photo 3" style="border: 1px solid #ccc; padding: 5px;">
    </div>
@stop

@section('css')
    <style>
        img {
            border-radius: 5px;
        }
    </style>
@stop

@section('js')
    <script>
        console.log('Photos section loaded!');
    </script>
@stop
