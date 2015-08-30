@extends('layouts.master')

@section('content')

<h1>Edit Task - Task Name </h1>
<p class="lead">Edit this task below. <a href="{{ route('tasks.index') }}">Go back to all tasks.</a></p>
<hr>
{!! Form::model($task, [
    'method' => 'PATCH',
    'route' => ['tasks.update', $task->id],
    'class' => 'pure-form pure-form-stacked'
]) !!}
<fieldset>
    {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}

    {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}

{!! Form::submit('Update Task', ['class' => 'pure-button pure-button-primary']) !!}
</fieldset>
{!! Form::close() !!}
@stop
