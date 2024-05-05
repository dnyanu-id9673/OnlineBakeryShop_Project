<?php

 session_start();
include("connection1.php");



$servername="localhost";
$username="root";
$password="";
$database_name="database_db";

$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];
$confirm_password=$_REQUEST['confirm_password'];

$conn=mysqli_connect($servername,$username,$password,$database_name);
//check connection

if(!$conn) 
{
	die("Connection Failed:" . mysqli_connect_error());
}


    if($confirm_password==$password){



     $sql=" INSERT INTO registration(name,email,password,confirm_password) VALUES('$name','$email','$password','$confirm_password')";

    if(mysqli_query($conn ,$sql) )
    {
    	echo " New created  Successfully !! ";

    }

    else
    {
    	echo "Error:" .$sql . "" . mysqli_error($conn);

    }
    }
    else{

      echo "password does not match";
    }
    
    
    mysqli_close($conn);
//}
?>







