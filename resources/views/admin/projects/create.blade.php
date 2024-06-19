<!DOCTYPE html>
<html>
<head>
    <title>Crea Progetto</title>
</head>
<body>
    <h1>Crea un Nuovo Progetto</h1>
    <form action="{{ route('admin.projects.store') }}" method="POST">
        @csrf
        <label for="name">Nome del Progetto:</label>
        <input type="text" id="name" name="name">
        <button type="submit">Crea</button>
    </form>
</body>
</html>
