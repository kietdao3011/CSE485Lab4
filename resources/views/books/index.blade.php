
@extends('layout.example')
@section('title', 'Book list')
@section('content')
<h2 class="text-center text-uppercase text-danger">Book List</h2>
@if (session('success'))
<div class="text-success mb-2">{{session('success')}}</div>
@endif
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Author</th>
            <th scope="col">Category</th>
            <th scope="col">Year</th>
            <th scope="col">Quantity</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($books as $book)
        <tr>
            <th scope="row">{{$i++}}</th>
            <td>{{$book->name}}</td>
            <td>{{$book->author}}</td>
            <td>{{$book->category}}</td>
            <td>{{$book->year}}</td>
            <td>{{$book->quantity}}</td>
           
            <td class="" style="white-space:nowrap">
                <a class="d-inline" href="/books/{{$book->id}}"><i class="bi bi-eye-fill me-1"></i></a>
                <a class="d-inline" href="/books/{{$book->id}}/edit"><i class="bi bi-pencil-fill me-1"></i></a>


                <button type="button" class="btn p-0 text-danger " data-bs-toggle="modal" data-bs-target="#deleteModal" style="border: none; background: none;">
                    <i class="bi bi-trash-fill"></i>
                </button>
                <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Delete this task</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Are you sure to delete this book?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <form action="{{route('books.destroy', $book->id)}}" method='post' class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-primary">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>


{{$books->links('pagination::bootstrap-5')}}


@endsection