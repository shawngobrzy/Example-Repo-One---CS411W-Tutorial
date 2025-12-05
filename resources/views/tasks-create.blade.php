<!DOCTYPE html>
<html>
<head>
    <title>Create Task</title>
</head>
<body>
    <h1>Create a New Task</h1>

    <form action="/tasks" method="POST">
        @csrf

        <label>Task Title:</label>
        <input type="text" name="title" required>

        <button type="submit">Create Task</button>
    </form>

    <br>

    <a href="/tasks">Back to Tasks</a>
</body>
</html>
