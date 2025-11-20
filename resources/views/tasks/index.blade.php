<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task List</title>
    @vite('resources/css/app.css')
</head>
<body class="p-6">
    <h1 class="text-2xl font-bold mb-4">Task List</h1>

    <ul>
        @foreach($tasks as $task)
            <li>{{ $task->title }} - {{ $task->completed ? 'Completed!' : 'Not Completed!' }}</li>
        @endforeach
    </ul>
</body>
</html>
