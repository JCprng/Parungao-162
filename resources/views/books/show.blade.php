<!-- resources/views/books/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>{{ $book->title }}</h1>

    <p><strong>Author:</strong> {{ $book->author }}</p>
    <p><strong>Genre:</strong> {{ $book->genre }}</p>
    <p><strong>Description:</strong> {{ $book->description }}</p>
    <p><strong>Price:</strong> ${{ $book->price }}</p>
    <p><strong>Quantity in Stock:</strong> {{ $book->quantity_in_stock }}</p>

    <a href="{{ route('books.edit', $book->id) }}">Edit</a>

    <form method="post" action="{{ route('books.destroy', $book->id) }}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection
