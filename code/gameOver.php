<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" type="text/css" href="../css/css.css">
    <style >
    h2{
        color:red;
        font-size:500%;
        
    }
    </style>
</head>
<body>
<?php
include("dbConn.php");
include("checkIfLogedIn.php");
include("logedInBanner.php");
?>
<h2>game over</h2>
<a href='games.php' > back to gamestore </a>
</body>
</html>