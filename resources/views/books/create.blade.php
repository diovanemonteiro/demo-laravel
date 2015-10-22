@extends('app')

@section('content')
<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">New Book</h3>
    </div>
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
            {!! Form::text('subtitle', null, ['class' => 'form-control']) !!}
            @if ($errors->has('subtitle')) <p class="help-block">{{ $errors->first('subtitle') }}</p> @endif
        </div>

        <!-- Content form input -->
        <div class="form-group @if ($errors->has('description')) has-error @endif">
            {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
            {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => 5]) !!}
            @if ($errors->has('description')) <p class="help-block">{{ $errors->first('description') }}</p> @endif
        </div>

        <!-- ISBN form input -->
        <div class="form-group @if ($errors->has('isbn')) has-error @endif">
            {!! Form::label('isbn', 'ISBN:', ['class' => 'control-label']) !!}
            {!! Form::text('isbn', null, ['class' => 'form-control']) !!}
            @if ($errors->has('isbn')) <p class="help-block">{{ $errors->first('isbn') }}</p> @endif
        </div>

        <!-- Author form input -->
        <div class="form-group @if ($errors->has('author')) has-error @endif">
            {!! Form::label('author', 'Author:', ['class' => 'control-label']) !!}
            {!! Form::text('author', null, ['class' => 'form-control']) !!}
            @if ($errors->has('author')) <p class="help-block">{{ $errors->first('author') }}</p> @endif
        </div>

        <!-- Year form input -->
        <div class="form-group">
            {!! Form::label('year', 'Year:') !!}
            {!! Form::text('year', null, ['class' => 'form-control', 'size' => 10]) !!}
        </div>

        <!-- Publisher form input -->
        <div class="form-group">
            {!! Form::label('publisher', 'Publisher:') !!}
            {!! Form::text('publisher', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Pages form input -->
        <div class="form-group">
            {!! Form::label('pages', 'Pages:') !!}
            {!! Form::text('pages', null, ['class' => 'form-control', 'size' => 10]) !!}
        </div>

        {!! Form::submit('Create new book', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}
    </div>
</div>
@endsection