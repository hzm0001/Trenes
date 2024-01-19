<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
</head>

<body>
    {{ $ticket_types }}
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Type</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ticket_types as $ticket_type)
                <tr>
                    <td><a href="{{ route('ticket_types.show', $ticket_type->id) }}">{{ $ticket_type->id }}</a></td>
                    <td><a href="{{ route('ticket_types.show', $ticket_type->id) }}">{{ $ticket_type->type }}</a></td>
                    <td>
                        <a href="{{ route('ticket_types.edit', $ticket_type->id) }}">Editar</a>
                        <form action="{{ route('ticket_types.destroy', $ticket_type->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Borrar</button>
                        </form>
                </tr>
            @endforeach
        </tbody>

    </table>
    <a href="{{ route('ticket_types.create') }}">Crear ticket tipo</a>

</body>

</html>