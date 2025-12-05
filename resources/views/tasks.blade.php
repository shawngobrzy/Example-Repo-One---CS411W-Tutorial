<!DOCTYPE html>
<html>
<head>
    <title>Tasks</title>
</head>
<body>
    <h1>All Tasks</h1>

    @if($tasks->count() === 0)
        <p>No tasks yet. Create one below!</p>
    @else
        <ul>
            @foreach($tasks as $task)
                <li>
                    {{ $task->title }}
                    @if($task->is_completed)
                        (completed)
                    @endif
                </li>
            @endforeach
        </ul>
    @endif

    <a href="/tasks/create">Create a new Task</a>
</body>
</html>
