@extends('layouts.master')
@section('content')

<h1>{{ $task->title }}</h1>
<span class="date">
    <i class="fa fa-calendar-o"></i> Created on: {{ date('F d, Y', strtotime($task->created_at)) }} <br />
</span>
<p class="lead">{{ $task->description }}</p>
<hr>

    <div class="actions">
            <a href="{{ route('tasks.edit', $task->id) }}" class="pure-button button-primary"><i class="fa fa-pencil-square-o"></i> Edit Task</a>
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
        <span class="date">
            <i class="fa fa-calendar-o"></i> Created on: {{ date('F d, Y', strtotime($comment->created_at)) }} <br />
        </span>
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
