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

    <form action="/edit-item" method="POST">
        <h1>Edit Item</h1>
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
        <input type="hidden" name="id" value="{{ $item[0]->id }}">
        <label for="name">Name</label>
        <input type="text" name="name" value="{{$item[0]->name}}">
        <br>
        <label for="type">Type</label>
        <input type="text" name="type" value="{{$item[0]->type}}">
        <br>
        <label for="type">Dose</label>
        <input type="text" name="dose" value="{{$item[0]->dose}}">
        <br>
        <input type="submit">
    </form>
        
    @else
        <h1>Unauthorized page</h1>
        <p><a href="/logout">logout</a> and <a href="/">login</a> again.</p>
    @endif
</body>
</html>