
<h1>Task List</h1>
<p class="lead">Here's a list of all your tasks. <a href="/tasks/create">Add a new one?</a></p>
<hr>
@foreach($tasks as $task)
<div class="list-group">
  <div href="#" class="list-group-item">
    <h4 class="list-group-item-heading">{{ $task->title }}</h4>
    <p>
        {{$task->description}}
    </p>
    <hr>
    <div class="actions">
        <a href="{{ route('tasks.show', $task->id) }}" class="btn btn-info"><i class="fa fa-search-plus"></i></i></a>
        <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></a>
        <i class="fa fa-comment-o"></i>
    </div>
</div>
</div>
@endforeach
