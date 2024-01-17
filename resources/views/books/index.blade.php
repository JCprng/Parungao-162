<!-- resources/views/books/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Book List</h1>

    <ul>
        @foreach($books as $book)
            <li>
                <a href="{{ route('books.show', $book->id) }}">{{ $book->title }}</a>
            </li>
        @endforeach
    </ul>
@endsection
