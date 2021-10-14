<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    
    <style>
        input ,select, label{
            margin: 10px 0px;
        }

        .form{
            text-align: center;
        }
    </style>

</head>
<body>
    <div class="form">
        <form action="/create-user" method="POST">
            <h1>Create an account</h1>
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
            <input type="text" placeholder="Username" name="username">
            <br>
            <label for="type">Login Type :</label>
            <select name="type">
                <option value="owner">Owner</option>
                <option value="manager">Manager</option>
                <option value="cashier">Cashier</option>
            </select>
            <br>
            <input type="password" placeholder="Password" name="password">
            <br>
            <input type="submit" value="Register">
            <a href="/">Login</a>
        </form>
    </div>
</body>
</html>