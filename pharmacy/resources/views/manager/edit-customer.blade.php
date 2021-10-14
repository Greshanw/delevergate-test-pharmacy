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
    <form action="/edit-customer" method="POST">
        <h1>Edit Customer</h1>
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
        <input type="hidden" name="id" value="{{ $customer[0]->id }}">
        <label for="name">Name</label>
        <input type="text" name="name" value="{{$customer[0]->name}}">
        <br>
        <label for="type">Mobile</label>
        <input type="text" name="mobile" value="{{$customer[0]->mobile}}">
        <br>
        <label for="type">Address</label>
        <input type="text" name="address" value="{{$customer[0]->address}}">
        <br>
        <input type="submit">
    </form>
        
    @else
        <h1>Unauthorized page</h1>
        <p><a href="/logout">logout</a> and <a href="/">login</a> again.</p>
    @endif
</body>
</html>