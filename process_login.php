<?php 
require("DB_Connection.php");

    $email=$_POST['user_email'];
    $pass=$_POST['pass'];

    $verify="SELECT * FROM `users` WHERE `E-mail`='$email'";
    $admin_Check="SELECT * FROM `users` WHERE `E-mail`='$email' && `User_Privilage_Type`='Admin'";
       
    if(mysqli_query($conn,$verify) && mysqli_query($conn,$admin_Check)){
        $result=mysqli_query($conn,$verify);
        $admin_Result=mysqli_query($conn,$admin_Check);

        if(mysqli_num_rows($result) == 1){
            $value=mysqli_fetch_assoc($result);
            if(password_verify($pass, $value["Password"])){
                if(mysqli_num_rows($admin_Result) == 1){
                    echo '<script>alert("Successfull Admin Login.")</script>';
                    //to admin page
                    //echo '<script>window.location="registration.php"</script>';
                }else{
                    echo '<script>alert("Successfull Login.")</script>';
                    //to next page after login
                    echo '<script>window.location="registration.php"</script>';
                }
                
            }else{
                echo '<script>alert("Invalid Credentials.")</script>';
               // echo '<script>window.location="login.php"</script>';
            }
        }else{
            echo '<script>alert("Invalid Credentials.")</script>';
            echo '<script>window.location="login.php"</script>';
        }
    }else{
        echo '<script>alert("Error : '.mysqli_error($conn).'")</script>';
        echo '<script>window.location="login.php"</script>';
    }

 ?>