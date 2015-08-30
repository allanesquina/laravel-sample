@extends('layouts.master')

@section('content')

<h1>Add a New Task</h1>
<p class="lead">Add to your task list below.</p>
<hr>
@include('partials.alerts.errors')
{!! Form::open([
    'route' => 'tasks.store',
    'class' => 'pure-form pure-form-stacked'
]) !!}

<fieldset>
    {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}

    {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}

{!! Form::submit('Create New Task', ['class' => 'pure-button pure-button-primary']) !!}
</fieldset>

{!! Form::close() !!}
@stop
