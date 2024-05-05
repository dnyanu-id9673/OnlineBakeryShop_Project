<?php

  
include("connection1.php");



$servername="localhost";
$username="root";
$password="";
$database_name="database_db";
 

$conn=mysqli_connect($servername,$username,$password,$database_name);
//check connection

if(!$conn) 
{
	die("Connection Failed:" . mysqli_connect_error());
}


    



     $sql=" INSERT INTO login_db(name,password) VALUES('$name', '$password')";

    if(mysqli_query($conn ,$sql))
    {
    	echo " New created  Successfully !! ";

    }

    else
    {
    	echo "Error:" .$sql . "" . mysqli_error($conn);

    }
  
    
    mysqli_close($conn);

?>







