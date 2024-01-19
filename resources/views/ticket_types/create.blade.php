<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create</title>
</head>
<body>
    
    <form action="{{ route('ticket_types.store') }}" method="POST">
        @csrf
        <label for="type">Tipo</label>
        <input type="text" name="type" id="type">
        <br>
        <button type="submit">Crear</button>
    </form>

</body>
</html>