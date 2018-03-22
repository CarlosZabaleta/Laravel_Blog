<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tasks</title>
</head>
<body>
    Hello, {{ $name }}  who is {{ $age }}
    <ul>
    @foreach ($tasks as $task)
        <li> 
            <a href="/tasks/{{$task -> id }}"> 
                {{ $task -> body }}
            </a>
            <ul>
                <li>
                    {{ $task -> created_at }}
                </li>
            </ul>
        </li>
    @endforeach
    </ul>
    
</body>
</html>