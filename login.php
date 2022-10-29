<html>

<head>
    <title>Login</title>
    <style>
    body {
        background-color: #dbcaca;
        font-family: poppins;
    }
    </style>
</head>
<link rel="stylesheet" type="text/css" href="styl.css">

<link rel="website icon"
    href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSfl0noNtOx_iSpSPsAELHYG8M1jMH9p-_Tg&usqp=CAU"
    class="log">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">


<body>
    <div class="loginbox">
        <img src="https://cdn.pixabay.com/photo/2017/11/10/05/48/user-2935527_960_720.png" class="avatar">
        <h1 class="log">Login</h1>
        <form method="POST" action="process_login.php">
            <p>Email Address</p>
            <input type="Email" name="user_email" placeholder="Enter Username" required>
            <p>Password</p>
            <input type="password" name="pass" placeholder="Enter Password" required>
            <input type="submit" name="login" value="Login">
            <a href="#">Lost your password?</a><br>
            <a href="registration.php">Don't have an account?</a><br>
            <a href="index.php">Back to Homepage</a>
        </form>
    </div>

</body>

</html>