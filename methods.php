<?php 
   
   $username = $_POST["usern"];
   $email = $_POST["email"];
   $password = $_POST["password"];
   $mbno = $_POST["mbno"];
   $url=$_POST["url"];
   
   $con = mysqli_connect("localhost","root","","prateek") or die('COULD NOT CONNECT'.mysql_error($con));
  
   $query = "insert into practice values('$username','$email','$password','$mbno','$url')";
   if (!mysqli_query($con,$query))
   {
   die('error'.mysqli_error($con));
   
   }
   echo "1 record added";
   mysqli_close($con);
   ?>
   