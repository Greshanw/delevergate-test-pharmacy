@extends('owner.home')

@section('content')


    <form action="/add-customer" method="POST">
        <h1>Add Customer</h1>
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
        <label for="name">Name</label>
        <input type="text" name="name">
        <br>
        <label for="type">Mobile</label>
        <input type="number" name="mobile" placeholder="(0773456789)">
        <br>
        <label for="address">Address</label>
        <input type="text" name="address">
        <br>
        <input type="submit" value="Add Customer">
    </form>
@endsection