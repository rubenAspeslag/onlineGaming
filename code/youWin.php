<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" type="text/css" href="../css/css.css">
    <style>
    h2 {color:green;font-size:500%;}
    </style>
</head>
<body>
<?php 
include("dbConn.php");
include("checkIfLogedIn.php");
include("logedInBanner.php");
$game = $_GET['game'];
$score = $_GET['score'];

$sql = "INSERT INTO `gamestore`.`gamescore` ( `userid`, `gameid`, `score`) VALUES ( '$iduser', '$game', '$score')";
$conn->query($sql) 
   

?>
<h2>you won </h2>
<a href='games.php'> back to gamestore </a> 
</body>
</html>