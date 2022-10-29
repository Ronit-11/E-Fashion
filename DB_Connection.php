<?php
                     //or 127.0.0.1:3307 (if yout port number is default then dont write ":3307" and same for password: "admin")
	$conn=mysqli_connect("localhost:3307","root","admin","e-fashion");
	if(!$conn){
		                      //. is for concatenation
		die("Connection failed: ". mysqli_connect_error());
	} // else{ echo "Connetion Succesfull";}
	
?>