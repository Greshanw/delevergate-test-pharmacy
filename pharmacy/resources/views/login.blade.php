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
    @if (session('owner'))
    <h1>You are already logged In</h1>
    <script>
        setTimeout(function(){
           window.location.href = "/owner";
        }, 1000);
     </script>

    @elseif (session('manager'))    
    <h1>You are already logged In</h1>
    <script>
        setTimeout(function(){
           window.location.href = "/manager";
        }, 1000);
    </script>

    @elseif (session('cashier'))    
    <h1>You are already logged In</h1>
    <script>
        setTimeout(function(){
           window.location.href = "/cashier";
        }, 1000);
     </script>

    @else
    <div class="form">
        <form action="/login" method="POST">
            <h1>Login</h1>
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
            <input type="text" placeholder="Username" name="username">
            <br>
            <label for="type">Login Type :</label>
            <select name="type" id="">
                <option value="owner">Owner</option>
                <option value="manager">Manager</option>
                <option value="cashier">Cashier</option>
            </select>
            <br>
            <input type="password" placeholder="Password" name="password">
            <br>
            <input type="submit" value="Login">
            <a href="/register">Create an account</a>
        </form>
    </div>
    
    
    @endif
</body>
</html>