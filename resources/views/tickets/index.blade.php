<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tickets</title>
</head>

<body>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Date</th>
                <th>Price</th>
                <th>Ticket type</th>
                <th>Train</th>
                <th>Botones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tickets as $ticket)
                <tr>
                    <td><a href="{{ route('tickets.show', $ticket->id) }}">{{ $ticket->id }}</a></td>
                    <td><a href="{{ route('tickets.show', $ticket->id) }}">{{ $ticket->date }}</a></td>
                    <td><a href="{{ route('tickets.show', $ticket->id) }}">{{ $ticket->price }} €</a></td>
                    <td><a href="{{ route('tickets.show', $ticket->id) }}">{{ $ticket->ticketType->type }}</a></td>
                    <td><a href="{{ route('tickets.show', $ticket->id) }}">{{ $ticket->train->name }}</a></td>
                    <td>
                        <button type="submit"><a href="{{ route('tickets.edit', $ticket->id) }}">Editar</a></button>
                        <form action="{{ route('tickets.destroy', $ticket->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Borrar</button>
                        </form>
                </tr>
            @endforeach
        </tbody>

    </table>
    <button type="submit"><a href="{{ route('tickets.create') }}">Crear ticket</a></button>
    <a href="{{url('/trains')}}">Ir a trenes</a>
</body>

</html>