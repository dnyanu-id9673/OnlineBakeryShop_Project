   <?php

 session_start();
include("connection1.php");

$servername="localhost";
$username="root";
$password="";
$database_name="database_db";

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$btn=$_POST['save'];
$conn=mysqli_connect($servername,$username,$password,$database_name);
//check connection

if(!$conn) 
{
	die("Connection Failed:" . mysqli_connect_error());
}

 


     $sql=" INSERT INTO contact(name,email,phone,address) VALUES('$name','$email','$phone','$address')";

    if(mysqli_query($conn ,$sql) )
    {
    	echo " New created  Successfully !! ";

    }

    else
    {
    	echo "Error:" .$sql . "" . mysqli_error($conn);

    
    }
    
    
    mysqli_close($conn);
//}
?>







