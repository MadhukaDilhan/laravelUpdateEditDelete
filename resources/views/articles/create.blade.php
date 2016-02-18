@extends('app')

@section('content')
    <h1> Write a new article</h1>
    <hr>

    {!! Form::open(['url' => 'articles']) !!}
        @include('articles.form')
    {!! Form::close() !!}

    {{--{{ var_dump(($errors)) }}--}}

    @include('errors.list')
@stop