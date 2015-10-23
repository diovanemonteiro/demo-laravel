@extends('app')

@section('content')
<div class="col-md-10 col-md-offset-1">
    <h1>Produtos</h1>
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>ISBN</th>
            <th>Title</th>
            <th>SubTitle</th>
            <th>Author</th>
            <th>Year</th>
        </tr>
        </thead>
        <tbody>
        @foreach($books as $book)
            <tr>
                <td>{{ $book->id }}</td>
                <td>{{ $book->isbn }}</td>
                <td>{{ $book->title }}</td>
                <td>{{ $book->subtitle }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->year }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {!! $books->render() !!}
</div>
@endsection