
<?php
 
function Connect()
{
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $dbname = "responses";
 
 // Create connection
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);
 
 return $conn;
}

$conn    = Connect();
$name    = $_POST['u_name'];
$email   = $_POST['u_email'];
$subj    = $_POST['subj'];
$message = $_POST['message'];
$query   = "INSERT into tbc_form (u_name,u_email,subj,message) VALUES('$name','$email','$subj','$message')";
$success = mysqli_query($conn,$query);
 
if (!$success) {
    die("Couldn't enter data: ".$conn->error);
 
}
 
echo "Thank You For Contacting Us <br>";
 
$conn->close();
 
?>