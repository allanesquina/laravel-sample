@extends('layouts.master')
@section('content')

<h1>{{ $task->title }}</h1>
<p class="lead">{{ $task->description }}</p>
<hr>

    <div class="actions">
            <a href="{{ route('tasks.edit', $task->id) }}" class="pure-button button-primary"><i class="fa fa-trash-o"></i> Edit Task</a>
            <a class="pure-button button-error" type="submit" onclick="App.home.delete();"><i class="fa fa-trash-o"></i> Delete this task?</a>
    </div>
        {!! Form::open([
            'method' => 'DELETE',
            'route' => ['tasks.destroy', $task->id],
            'id' => 'form-delete'
        ]) !!}
        {!! Form::close() !!}
<hr>
<div class="container">
    <h2>Comments <i class="fa fa-comment-o"></i></h2>
    @foreach($comments as $comment)
        <p>{{$comment->text}}</p>
        <hr>
    @endforeach

    {!! Form::open([
        'route' => 'comments.store',
        'class' => 'pure-form pure-form-stacked'
    ]) !!}
        {!! Form::label('text', 'Comment:') !!}
        {!! Form::textarea('text', null, ['class' => 'txt-comment']) !!}
        {!! Form::hidden('tasks_id', $task->id) !!}

    {!! Form::submit('Comment', ['class' => 'pure-button pure-button-primary']) !!}
    {!! Form::close() !!}
</div>

@stop
