<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test</title>
</head>
<body>
    Hello, <?= $name; ?> who is <?= $age ?>
    <ul>
        @foreach ($tasks as $task)
            <li>{{ $task}}</li>
        @endforeach
    </ul>
</body>
</html>