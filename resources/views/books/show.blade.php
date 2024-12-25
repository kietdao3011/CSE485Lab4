@extends('layout.example')
@section('title', 'Specific Task')
@section('content')
    <div class="container">
        <h1>Specific Task</h1>
        <p><strong>Name:</strong> {{ $book->name }}</p>
        <p><strong>Author:</strong> {{ $book->author }}</p>
        <p><strong>Category:</strong> {{ $book->category }}</p>
        <p><strong>Year:</strong> {{ $book->year  }}</p>
        <p><strong>Quantity:</strong> {{ $book->quantity }}</p>
        <a href="{{ route('books.index') }}" class="btn btn-secondary">Back</a>
    </div>
@endsection

