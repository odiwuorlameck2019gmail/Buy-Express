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
  $passwordcreate_=$_POST["_password"];
  $username_=$_POST["_username"];
  $query="SELECT username FROM signin WHERE passwordAAA='$passwordcreate_';";
  $return=$conn->query($query);
  $name=$return->fetch_assoc();
  if ($username_==$name["username"])
  {
      echo "Welcome ! Signed in successsfully";
      header("Location:Home.php");
      exit();
  }else{
    echo "<h1>you have used wrong credencials to signin ,kindly try again </h1>";
  }



?>
<html>
  <head>
  <link rel ="stylesheet" href="ADMEN.css">
  <title>sign in </title>
</head>
<body>
</body>
</html>