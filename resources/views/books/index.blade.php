@extends('app')

@section('content')
<h1 class="page-header">Books List
    <div class="pull-right">
        <a href="{{ route('books.create') }}" class="btn btn-success">New Book</a>
    </div>
</h1>
<div class="table-responsive">
    <table class="table table-striped table-condensed table-bordered table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>ISBN</th>
            <th>Title</th>
            <th>Author</th>
            <th>Year</th>
            <th class="col-md-2 text-center">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($books as $book)
            <tr>
                <td>{{ $book->id }}</td>
                <td>{{ $book->isbn }}</td>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->year }}</td>
                <td class="text-center">
                    <a href="{{ route('books.show', $book->id) }}" class="btn btn-xs btn-info" title="View"><span class="glyphicon glyphicon-eye-open"></span></a>
                    <a href="{{ route('books.edit', $book->id) }}" class="btn btn-xs btn-warning" title="Edit"><span class="glyphicon glyphicon-pencil"></span></a>
                    <a href="{{ route('books.destroy', $book->id) }}" class="btn btn-xs btn-danger" title="Remove"><span class="glyphicon glyphicon-remove"></span></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

{!! $books->render() !!}
@endsection