@extends('layout.example')
@section('title', 'Add Book')
@section('content')
<div class="container">
    <h1>Add Book</h1>
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="author">Author:</label>
            <textarea class="form-control" id="author" name="author" required></textarea>
        </div>
        <div class="form-group">
            <label for="category">Category:</label>
            <textarea class="form-control" required id="category" name="category"></textarea>
        </div>
        <div class="form-group">
            <label for="year">Year:</label>
            <textarea class="form-control" required id="year" name="year"></textarea>
        </div>
        <div class="form-group">
            <label for="quantity">Quantity:</label>
            <textarea class="form-control" required id="quantity" name="quantity"></textarea>
        </div>
        <button type="submit" class="btn btn-danger">Add</button>
    </form>
</div>

@endsection