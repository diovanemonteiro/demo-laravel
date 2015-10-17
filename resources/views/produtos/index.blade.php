@extends('app')

@section('content')
<div class="container">
    <h1>Produtos</h1>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Código</th>
            <th>Descrição</th>
            <th>Ação</th>
        </tr>
        </thead>
        <tbody>
        @foreach($produtos as $produto)
            <tr>
                <td>{{ $produto->id }}</td>
                <td>{{ $produto->codigo }}</td>
                <td>{{ $produto->descricao }}</td>
                <td>&nbsp;</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {!! $produtos->render() !!}
</div>
@endsection