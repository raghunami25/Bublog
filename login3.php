<?php

// $servername = "localhost";
// $username = "root";
// $password = "";
// $database ="Praty";
//global $message; echo 'asdds';

$conn=mysqli_connect("localhost","koko","12345","blog");

if ($conn) {
echo "Connected successfully";
}

else
{
    exit('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
} 
   
echo "enter";

$usr = $_POST['usrname'];
$email = $_POST['usremail'];
$pen=$_POST['pen'];
$web=$_POST['web'];
$pwd=$_POST['pwd'];
$cpwd=$_POST['cpwd'];
$result= mysqli_query($conn,"INSERT INTO login VALUES('$usr','$email','$pen','$web','$pwd','$cpwd')");
echo $result;
if (!$result) {
    $message  = 'Invalid query: ' . mysqli_error() . "\n";
    $message .= 'Whole query: ' . $query;
    die($message);
}
else
header("location: index.html");


?>
