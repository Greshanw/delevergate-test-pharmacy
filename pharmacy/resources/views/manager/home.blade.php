<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manager Dashboard</title>
</head>
<body>
    @if(session('manager'))
    <a href="/logout">Log out</a>
    <table border="1">
        <tr>
        <td>Name</td>
        <td>Mobile</td>
        <td>Address</td>
        <td>Actions</td>
        </tr>
        @foreach ($customers as $customer)
        <tr>
            <td>{{ $customer->name }}</td>
            <td>{{ $customer->mobile }}</td>
            <td>{{ $customer->address }}</td>
            <td>
                <a href="delete-customer/{{ $customer->id }}">delete</a>
                <a href="edit-customer-form/{{ $customer->id }}">edit</a>
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