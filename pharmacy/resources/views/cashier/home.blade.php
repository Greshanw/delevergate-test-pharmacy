<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cashier Dashboard</title>
</head>
<body>
    @if(session('cashier'))
    <a href="/logout">Log out</a>
    <table border="2">
        <tr>
        <td>Name</td>
        <td>Type</td>
        <td>Dose(mg)</td>
        <td>Actions</td>
        </tr>
        @foreach ($items as $item)
        <tr>
        <td>{{ $item->name }}</td>
        <td>{{ $item->type }}</td>
        <td>{{ $item->dose }}</td>
        <td>
            <a href="delete-item/{{ $item->id }}">delete</a>
            <a href="edit-item-form/{{ $item->id }}">edit</a>
        </td>
        </tr>
        @endforeach
        </table>
        
    @else
        <h1>Unauthorized page</h1>
        <p><a href="/logout">logout</a> and <a href="/">login</a> again.</p>
    @endif
</body>
</html>