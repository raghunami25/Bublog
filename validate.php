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
   
$usr = $_POST['username'];
$pwd=$_POST['password'];
 $query = "SELECT Name,Pwd,Website FROM login";


$result = mysqli_query($conn,$query);
$resultquery= mysqli_num_rows($result);


    if ($resultquery>0) {
      while ($row = mysqli_fetch_assoc($result)) {
      
      
        if($row['Name']==$usr && $row['Pwd']==$pwd)
        {
        	$qry=$row['Website'];
        	//echo 'yes';
        	header("location: pages/sidebar-left.php? user=".$qry);

        }
     
     
    }
    }



?>
