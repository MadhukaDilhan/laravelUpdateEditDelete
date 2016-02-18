@extends('app')

@section("content")
    <h1>edit</h1>
    <h1>Edit:{!! $article->title !!}</h1>

    {!! Form::model($article,['method' => 'PATCH','action'=>['ArticleController@update',$article->id]]) !!}
        @include('articles.form')
    {!! Form::close() !!}

    {{--{{ var_dump(($errors)) }}--}}
    @include('errors.list')
@stop