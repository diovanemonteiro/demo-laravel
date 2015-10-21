@extends('app')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading"><h4><strong>New Book</strong></h4></div>
    <div class="panel-body">

        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

    {!! Form::open(['url' => 'books/store']) !!}

        <!-- Title form input -->
        <div class="form-group">
            {!! Form::label('title', 'Title:') !!}
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Subtitle form input -->
        <div class="form-group">
            {!! Form::label('subtitle', 'Subtitle:') !!}
            {!! Form::text('subtitle', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Content form input -->
        <div class="form-group">
            {!! Form::label('description', 'Description:') !!}
            {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => 5]) !!}
        </div>

        <!-- ISBN form input -->
        <div class="form-group">
            {!! Form::label('isbn', 'Description:') !!}
            {!! Form::text('isbn', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Author form input -->
        <div class="form-group">
            {!! Form::label('author', 'Author:') !!}
            {!! Form::text('author', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Year form input -->
        <div class="form-group">
            {!! Form::label('year', 'Year:') !!}
            {!! Form::text('year', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Publisher form input -->
        <div class="form-group">
            {!! Form::label('publisher', 'Publisher:') !!}
            {!! Form::text('publisher', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Pages form input -->
        <div class="form-group">
            {!! Form::label('pages', 'Pages:') !!}
            {!! Form::text('pages', null, ['class' => 'form-control']) !!}
        </div>

        {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}
    </div>
</div>
@endsection