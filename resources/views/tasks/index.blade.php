<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test</title>
</head>
<body>
    Hello, {{ $name }}  who is {{ $age }}
    <ul>
        @foreach ($tasks as $task)
        <li> {{ $task -> body}} </li>
        <ul>
            <li> Do it by {{ $task -> created_at}} </li>
            {{-- <li> <a href="blog.test/task/{{ $id }}"> Do it by {{ $task -> created_at}} </a></li> --}}
        </ul>
        @endforeach
    </ul>
</body>
</html>