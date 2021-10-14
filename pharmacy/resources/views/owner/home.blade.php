<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Owner Dashboard</title>
</head>
<body>
    @if(session('owner'))
    <a href="/logout">Log out</a>

    <div>
        <a href="/addcustomer">Add Customers</a>
        <a href="/additem">Add Items</a>
    </div>
        @yield('content')
    @else
        <h1>Unauthorized page</h1>
        <p><a href="/logout">logout</a> and <a href="/">login</a> again.</p>
    @endif
    
</body>
</html>