<html>

<head>
    <title>Register</title>
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
    <div class="reg-form">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTwgYmQGxVLwWyJZYhM-HowUm7LRtPP2QbPSA&usqp=CAU"
            class="reg-av">
        <h1 class="log">Register Your Details!!</h1>
        <form action="process_reg.php" method="post">

            <p>First Name:</p>
            <input type="text" name="firstname" id="fname" placeholder="First Name" required>
            <p>Last Name:</p>
            <input type="text" name="lastname" id="lname" placeholder="Last Name" required>
            <p>Gender:</p>
            <input type="text" name="gender" id="gender" placeholder="Gender" required>
            <p>Phone Number:</p>
            <input type="tel" name="number" id="tel" placeholder="Phone Number" required>
            <p>Email Address:</p>
            <input type="Email" name="email" id="email" placeholder="Email" required>
            <p>Password:</p>
            <input type="password" name="password" id="pass" placeholder="Password" required>
            <input type="submit" name="" value="Register">


        </form>
    </div>
</body>

</html>