<?php

// $servername = "localhost";
// $username = "root";
// $password = "";
// $database ="Praty";
//global $message; echo 'asdds';

$conn=mysqli_connect("localhost","koko","12345","blog");

if ($conn) {
//echo "Connected successfully";
}

else
{
    exit('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
} 
   
//echo "enter";

$title=$_POST['title'];
$content = $_POST['editor1'];

$result= mysqli_query($conn,"INSERT INTO publish VALUES('$title','$content')");
echo $result;
if (!$result) {
    $message  = 'Invalid query: ' . mysqli_error() . "\n";
    $message .= 'Whole query: ' . $query;
    die($message);
}
else 
header("location: full-width.php");


?>
 
