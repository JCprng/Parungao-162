<!-- resources/views/books/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Edit Book - {{ $book->title }}</h1>

    <form method="post" action="{{ route('books.update', $book->id) }}">
        @csrf
        @method('PUT')

        <label for="title">Title:</label>
        <input type="text" name="title" value="{{ $book->title }}" required>

        <label for="author">Author:</label>
        <input type="text" name="author" value="{{ $book->author }}" required>

        <label for="genre">Genre:</label>
        <input type="text" name="genre" value="{{ $book->genre }}" required>

        <label for="description">Description:</label>
        <textarea name="description" required>{{ $book->description }}</textarea>

        <label for="price">Price:</label>
        <input type="number" name="price" step="0.01" value="{{ $book->price }}" required>

        <label for="quantity_in_stock">Quantity in Stock:</label>
        <input type="number" name="quantity_in_stock" value="{{ $book->quantity_in_stock }}" required>

        <button type="submit">Update Book</button>
    </form>
@endsection
