<?php 
require("DB_Connection.php");

    $fName=$_POST['firstname'];
    $lName=$_POST['lastname'];
    $gender=$_POST['gender'];
    $number=$_POST['number'];
    $email=$_POST['email'];
    $pass=password_hash($_POST['password'],PASSWORD_DEFAULT);

    $insert="INSERT INTO `users`(`E-mail`, `User_Fname`, `User_Lname`, `Gender`, `Password`, `Tel_No`, `User_Privilage_Type`) VALUES ('$email','$fName','$lName','$gender','$pass','$number','Normal User')";

    $check="SELECT * FROM `users` WHERE `E-mail`='$email'";

    if(mysqli_query($conn,$check)){
        $res=mysqli_query($conn,$check);
        if(mysqli_num_rows($res) == 0){

            if(mysqli_query($conn,$insert)){
                //echo "User registered Successfully.";
                echo '<script>alert("User registered Successfully.")</script>';
                echo '<script>window.location="login.php"</script>';
                //header("location:login.php"); //to open a new php page.
                //die();                             //to stop current php execution.
            }else{
                //echo "Error".mysqli_error($conn);
                echo '<script>alert("Error : '.mysqli_error($conn).'")</script>';
                echo '<script>window.location="registration.php"</script>';
            }
        }else{
            echo '<script>alert("User Already Exists.")</script>';
            echo '<script>window.location="registration.php"</script>';
        }
    }else{
        echo '<script>alert("Error : '.mysqli_error($conn).'")</script>';
        echo '<script>window.location="registration.php"</script>';
    }
       
 ?>