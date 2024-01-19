<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
            </tr>
        </thead>
        <tbody>
            <tr>
               
                <td>{{ $ticket->id }}</td>
                <td>{{ $ticket->date }}</td>
                <td>{{ $ticket->price }} €</td>
                <td>{{ $ticket->ticketType->type }}</td>
                <td>{{ $ticket->train->name }}</td>
         

            </tr>
        </tbody>
        <a href="{{ route('tickets.create') }}">Crear ticket</a>
</body>

</html>