@extends('app')

@section('content')
    <h1>Article</h1>

        <table class="table table-striped table-bordered table-hover">
            <tr class="success">
                <th><b>TITLE</b></th>
                <th><b>BODY</b></th>
                <th></th>
                <th></th>

            </tr>
            @foreach($articles as $article)
            <tr>
                <td>
                    <a href="/laravel/myfirstlatra/public/articles/{{ $article->id }}">{{$article->title}}</a>
                </td>
                <td>{{$article->body}}</td>
                <td class="center-block">
                    <div class="center-block">
                        <a class="btn btn-warning " href="/laravel/myfirstlatra/public/articles/{{ $article->id }}/edit">Edit</a>

                    </div>

                </td>

                <td>
                    {{ Form::model($article,['method' => 'DELETE','action'=>['ArticleController@destroy',$article->id]]) }}
                    {{ Form::hidden('id', $article->id) }}
                    {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                    {{ Form::close() }}
                </td>
            </tr>
            @endforeach
        </table>

    <a href="/laravel/myfirstlatra/public/articles/create" class="btn btn-primary form-control" >Add New article</a>
@stop