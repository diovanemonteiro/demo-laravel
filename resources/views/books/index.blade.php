@extends('app')

@section('content')
<div class="col-md-10 col-md-offset-1">
    <h1>Produtos</h1>
    <div class="pull-right">
        <a href="{{ route('books.create') }}" class="btn btn-success">Novo</a>
    </div>
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>ISBN</th>
            <th>Title</th>
            <th>SubTitle</th>
            <th>Author</th>
            <th>Year</th>
            <th class="col-md-3">Actions</th>
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
                <td>
                    <a href="{{ route('books.show', $book->id) }}" class="btn btn-info">Visualizar</a>
                    <a href="{{ route('books.edit', $book->id) }}" class="btn btn-primary">Editar</a>
                    <a href="{{ route('books.destroy', $book->id) }}" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {!! $books->render() !!}
</div>
@endsection