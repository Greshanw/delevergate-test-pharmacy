@extends('owner.home')

@section('content')


    <form action="/add-item" method="POST">
        <h1>Add Medicine</h1>
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
        <label for="name">Medicine Name</label>
        <input type="text" name="name">
        <br>
        <label for="type">Type</label>
        <input type="text" name="type">
        <br>
        <label for="dose">Dose(mg)</label>
        <input type="text" name="dose" placeholder="mg">
        <br>
        <input type="submit" value="Add Item">
    </form>
@endsection