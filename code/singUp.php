<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" type="text/css" href="../css/css.css">
</head>
<body>
<div id='login' class="midden" >
<form method='POST' action='singUp.php'>
<h1> sing up : </h1>
<h2> username: <input type='text' name='username' > </h2>
<h2> password: <input type='password' name='password1' > </h2>
<h2> repeat your password: <input type='password' name='password2' > </h2>
<input type='submit' name='singIn' value='sing up' id="loginSubmit" > <br> 

</from> 

<?php 
session_start();
$debug = false;
include("dbConn.php");
if (isset($_POST['username'])) {
    $username = $_POST['username'];
  $password1 =  $_POST['password1'];
  $password2 = $_POST['password2'];
  if ($password1 == $password2) {
       if ($debug) echo("redy to insert");
$password1 = md5($password1);
$sql = "INSERT INTO user (username, password) VALUES ('$username', '$password1')";

if ($conn->query($sql) === TRUE) {
    if ($debug)  echo "New record created successfully";

    $sql = "SELECT iduser FROM user WHERE username = '$username'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    $_SESSION['iduser'] = $row['iduser'];
    echo($_SESSION['iduser']);
   
    header('location: games.php ');

} else {
  if ($debug)  echo "Error: " . $sql . "<br>" . $conn->error;
   if (strpos($conn->error , "'username_UNIQUE'")){
       echo("the username  " . $username . " is already taken. ");
   }
}
  } else {
      echo("the passworts are not equal");
  }
  
}

?>
</div>
</body>
</html>