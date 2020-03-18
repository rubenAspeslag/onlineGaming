<?php 
session_start();
$debug = false ;
if (isset($_POST['username'])) {
    echo("it is set  ");
    include("dbconn.php");
    $username = $_POST['username'];
    $password =  md5($_POST['password']);
    $sql = "SELECT * FROM user WHERE username = '$username' and password='$password' ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $_SESSION['iduser'] = $row['iduser'];
    header('location: games.php ');
  
    } else {
        header("location: ../index.php?msg='the combination of the username and the password is invalid.' ");
    }


}
?>