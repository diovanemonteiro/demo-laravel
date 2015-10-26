@extends('app')

@section('content')
<h1 class="page-header">Book Detail
    <div class="pull-right">
        <a href="{{ route('books.index') }}" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp;Back</a>
    </div>
</h1>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">{{$book->title}}</h3>
    </div>
    <div class="panel-body">
        <div class="col-md-9">
            <dl>
                <dt>ISBN</dt>
                <dd>{{$book->isbn}}</dd>
                <dt>Title</dt>
                <dd>{{$book->title}}</dd>
                <dt>Subtitle</dt>
                <dd>{{$book->subtitle}}</dd>
                <dt>Description</dt>
                <dd class="text-justify">{{$book->description}}</dd>
                <dt>Author</dt>
                <dd>{{$book->author}}</dd>
                <dt>Publisher</dt>
                <dd>{{$book->publisher}}</dd>
                <dt>Year</dt>
                <dd>{{$book->year}}</dd>
                <dt>Pages</dt>
                <dd>{{$book->pages}}</dd>
            </dl>
        </div>
        <div class="col-md-3">
            <img src="{{url($book->image)}}" class="img-responsive">
        </div>
    </div>
</div>

{{--<form class="form-horizontal">--}}
    {{--<div class="form-group">--}}
        {{--<label for="image" class="col-sm-2 control-label">Image</label>--}}
        {{--<div class="col-sm-10">--}}
            {{--<img src="{{url($book->image)}}" class="img-responsive">--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="form-group">--}}
        {{--<label for="isbn" class="col-sm-2 control-label">ISBN</label>--}}
        {{--<div class="col-sm-10">{{$book->isbn}}</div>--}}
    {{--</div>--}}
    {{--<div class="form-group">--}}
        {{--<label for="title" class="col-sm-2 control-label">Title</label>--}}
        {{--<div class="col-sm-10">{{$book->title}}</div>--}}
    {{--</div>--}}
    {{--<div class="form-group">--}}
        {{--<label for="title" class="col-sm-2 control-label">Description</label>--}}
        {{--<div class="col-sm-10">{{ $book->description }}</div>--}}
    {{--</div>--}}
    {{--<div class="form-group">--}}
        {{--<label for="author" class="col-sm-2 control-label">Author</label>--}}
        {{--<div class="col-sm-10">--}}
            {{--<input type="text" class="form-control" id="author" placeholder={{$book->author}} readonly>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="form-group">--}}
        {{--<label for="publisher" class="col-sm-2 control-label">Publisher</label>--}}
        {{--<div class="col-sm-10">--}}
            {{--<input type="text" class="form-control" id="publisher" placeholder={{$book->publisher}} readonly>--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--<div class="form-group">--}}
        {{--<div class="col-sm-offset-2 col-sm-10">--}}
            {{--<a href="{{ route('books.index')}}" class="btn btn-primary">Back</a>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</form>--}}
@endsection