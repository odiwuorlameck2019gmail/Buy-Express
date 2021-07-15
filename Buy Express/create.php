<?php
$servername="localhost";
$username="root";
$password="";
$db="buyexpress";
$conn=new mysqli($servername,$username,$password,$db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully<br/><br/>";
  $passwordcreate_=$_POST["password_1"];
  $username_=$_POST["username_"];
  $Emailcreate_=$_POST["Emailcreate_"];
  $passwordcreate_1=$_POST["passwordcreate_1"];
  if($passwordcreate_==$passwordcreate_1){
  $query="INSERT INTO signin(username,emailaddress,passwordAAA) VALUES('$username_','$Emailcreate_','$passwordcreate_');";
  if($conn->query($query)===TRUE){
  echo "Account created succesfully ";
  header("Location:AdmenHomePage.php");
  exit();
  }else {
      echo "Error:".$conn->error;
  }

  }
  else{
      echo "<h1>Passwords do not much</h1>";
  }
?>
<html>

    <head>
    <link rel ="stylesheet" href="ADMEN.css">
    <title>Create Account</title>
    <body></body>
    </html>