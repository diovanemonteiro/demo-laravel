@extends('app')

@section('content')
    <h1 class="page-header">Create Book
        <div class="pull-right">
            <a href="{{ route('books.index') }}" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp;Back</a>
        </div>
    </h1>

    <div class="col-md-10 col-md-offset-1">
    @if (count($errors) > 0)
    <div class="alert alert-danger" role="alert">
        <strong>Whoops!</strong> There were some problems with your input.
        {{--<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>--}}
    </div>
    @endif

    {!! Form::open(['route' => 'books.store']) !!}

    <!-- Title form input -->
    <div class="form-group @if ($errors->has('title')) has-error has-feedback @endif">
        {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
        {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Book Title', 'aria-describedby' => 'titleStatus']) !!}
        @if ($errors->has('title'))
            <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
            <span id="titleStatus" class="sr-only">(error)</span>
            <p class="help-block">{{ $errors->first('title') }}</p>
        @endif
    </div>

    <!-- Subtitle form input -->
    <div class="form-group @if ($errors->has('subtitle')) has-error @endif">
        {!! Form::label('subtitle', 'Subtitle:', ['class' => 'control-label']) !!}
        {!! Form::text('subtitle', null, ['class' => 'form-control', 'placeholder' => 'Book Subtitle']) !!}
        @if ($errors->has('subtitle')) <p class="help-block">{{ $errors->first('subtitle') }}</p> @endif
    </div>

    <!-- Content form input -->
    <div class="form-group @if ($errors->has('description')) has-error has-feedback @endif">
        {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
        {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Book Description', 'rows' => 5, 'aria-describedby' => 'descriptionStatus']) !!}
        @if ($errors->has('description'))
            <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
            <span id="descriptionStatus" class="sr-only">(error)</span>
            <p class="help-block">{{ $errors->first('description') }}</p>
        @endif
    </div>

    <!-- ISBN form input -->
    <div class="form-group @if ($errors->has('isbn')) has-error @endif">
        {!! Form::label('isbn', 'ISBN:', ['class' => 'control-label']) !!}
        {!! Form::text('isbn', null, ['class' => 'form-control', 'placeholder' => 'ISBN Title']) !!}
        @if ($errors->has('isbn')) <p class="help-block">{{ $errors->first('isbn') }}</p> @endif
    </div>

    <!-- Author form input -->
    <div class="form-group @if ($errors->has('author')) has-error @endif">
        {!! Form::label('author', 'Author:', ['class' => 'control-label']) !!}
        {!! Form::text('author', null, ['class' => 'form-control', 'placeholder' => 'Book Author']) !!}
        @if ($errors->has('author')) <p class="help-block">{{ $errors->first('author') }}</p> @endif
    </div>

    <!-- Year form input -->
    <div class="form-group">
        {!! Form::label('year', 'Year:') !!}
        {!! Form::text('year', null, ['class' => 'form-control', 'placeholder' => 'Book Year Publication', 'size' => 10]) !!}
    </div>

    <!-- Publisher form input -->
    <div class="form-group">
        {!! Form::label('publisher', 'Publisher:') !!}
        {!! Form::text('publisher', null, ['class' => 'form-control', 'placeholder' => 'Book Publisher']) !!}
    </div>

    <!-- Pages form input -->
    <div class="form-group">
        {!! Form::label('pages', 'Pages:') !!}
        {!! Form::text('pages', null, ['class' => 'form-control', 'placeholder' => 'Book Pages', 'size' => 10]) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Create new book', ['class' => 'form-control btn btn-primary']) !!}
    </div>
    </div>

    {!! Form::close() !!}
@endsection