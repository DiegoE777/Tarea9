@extends('adminlte::page')

@section('title', 'Contact')

@section('content_header')
    <h1>Contact Us</h1>
@stop

@section('content')
    <p>Fill out the form below to get in touch with us.</p>

    <form action="#" method="post" style="display: flex; flex-direction: column; gap: 15px; max-width: 500px;">
        @csrf <!-- Protección contra ataques CSRF -->

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" class="form-control" placeholder="Your Name" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="Your Email" required>
        </div>

        <div class="form-group">
            <label for="message">Message:</label>
            <textarea id="message" name="message" class="form-control" rows="4" placeholder="Your Message" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Send</button>
    </form>
@stop

@section('css')
    <style>
        form {
            padding: 10px;
            background-color: #f8f9fa;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
    </style>
@stop

@section('js')
    <script>
        console.log('Contact section loaded!');
    </script>
@stop
