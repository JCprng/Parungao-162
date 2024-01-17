<!-- resources/views/books/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Create New Book</h1>

    <form method="post" action="{{ route('books.store') }}">
        @csrf

        <label for="title">Title:</label>
        <input type="text" name="title" required>

        <label for="author">Author:</label>
        <input type="text" name="author" required>

        <label for="genre">Genre:</label>
        <input type="text" name="genre" required>

        <label for="description">Description:</label>
        <textarea name="description" required></textarea>

        <label for="price">Price:</label>
        <input type="number" name="price" step="0.01" required>

        <label for="quantity_in_stock">Quantity in Stock:</label>
        <input type="number" name="quantity_in_stock" required>

        <button type="submit">Create Book</button>
    </form>
@endsection
