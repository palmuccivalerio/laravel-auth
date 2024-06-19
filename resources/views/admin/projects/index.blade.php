<!DOCTYPE html>
<html>
<head>
    <title>Progetti</title>
</head>
<body>
    <h1>Lista dei Progetti</h1>
    <ul>
        @foreach ($projects as $project)
            <li>{{ $project->title }}</li>
        @endforeach
    </ul>
</body>
</html>
