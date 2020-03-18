<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" type="text/css" href="../css/css.css">
</head>
<body>
<?php 

include("dbConn.php");
include("checkIfLogedIn.php");
include("logedInBanner.php");
if (isset($_SESSION['scoreMath'])) {
    if ($_POST['x'] == $_SESSION['x']) {
        
        $_SESSION['scoreMath'] = $_SESSION['scoreMath'] + 1;

    } else {
        $_SESSION['scoreMath'] = $_SESSION['scoreMath'] - 1;
    }
   $score =$_SESSION['scoreMath'];
} else {
    $_SESSION['scoreMath'] = 0;
    $score =$_SESSION['scoreMath'];
}
echo("score = " . $_SESSION['scoreMath'] . "<br>" );
$num1 = rand(-1000,1000);
$num2 = rand(-1000,1000);
$num3 = rand(-1000,1000);
$num4 = rand(-1000,1000);
$num5 = rand(-1000,1000);
$num6 = rand(-1000,1000);
$num7 = rand(-1000,1000);
$s1 = rand(1,2);
$s2 = rand(1,2);
$s3 = rand(1,2);
$s4 = rand(1,2);
$s5 = rand(1,2);
$s6 = rand(1,2);
$d1 = "";
$d2 = "";
$d3 = "";
$d4 = "";
$d5 = "";
$d6 = "";

switch ($s1) {
    case 1:
      $d1 = " + ";
        break;
    case 2:
        $d1 =  " - ";
        break;
   
}

switch ($s2) {
    case 1:
      $d2 = " + ";
        break;
    case 2:
        $d2 =  " - ";
        break;
  
}

switch ($s3) {
    case 1:
      $d3 = " + ";
        break;
    case 2:
        $d3 =  " - ";
        break;
   
}

switch ($s4) {
    case 1:
      $d4 = " + ";
        break;
    case 2:
        $d4 =  " - ";
        break;
 
}

switch ($s5) {
    case 1:
      $d5 = " + ";
        break;
    case 2:
        $d5 =  " - ";
        break;
   
}

switch ($s6) {
    case 1:
      $d6 = " + ";
        break;
    case 2:
        $d6 =  " - ";
        break;
  
        }
// echo("s1 = " .$s1."<br>s2 = " .$s2."<br>s3 = " .$s3."<br>s4 = " .$s4."<br>s5 = " .$s5."<br>s6 = " .$s6 . "<br>");
// echo("d1 = " .$d1."<br>d2 = " .$d2."<br>d3 = " .$d3."<br>d4 = " .$d4."<br>d5 = " .$d5."<br>d6 = " .$d6);
// echo("<br>");


echo($num1 . $d1 . $num2 . $d2 . $num3 . $d3 . $num4 . $d4 . $num5 . $d5 . $num6. $d6 . $num7 . "<br>" );

echo("<br>");
$x = $num1 ;
if ($s1 == 1 ) {
    $x = $x + $num2;
   
} else {
    $x = $x - $num2;
 
}
if ($s2 == 1 ) {
    $x = $x + $num3;
   
} else {
    $x = $x - $num3;
 
}
if ($s3 == 1 ) {
    $x = $x + $num4;
   
} else {
    $x = $x - $num4;
 
}
if ($s4 == 1 ) {
    $x = $x + $num5;
   
} else {
    $x = $x - $num5;
 
}
if ($s5 == 1 ) {
    $x = $x + $num6;
   
} else {
    $x = $x - $num6;
 
}
if ($s6 == 1 ) {
    $x = $x + $num7;
   
} else {
    $x = $x - $num7;
 
}
// echo($x);

$_SESSION['x'] = $x ;

$sql =" SELECT * FROM gamestore.gamescore where userid = $iduser and gameid=2 and busy = 1 ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc();
   $idgamescore =  $row['idgameScore'];
     $sql = "UPDATE `gamestore`.`gamescore` SET `score` = '$score' WHERE (`idgameScore` = '$idgamescore')";
     if ($conn->query($sql) === TRUE) {
     if ($debug)   echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
} else {

    $sql = "INSERT INTO `gamescore` ( `userid`, `gameid`, `score`, `busy`) VALUES ( '$iduser', '2', '$score', '1')";

    if ($conn->query($sql) === TRUE) {
     if ($debug)   echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


?>

<form method='POST' action='math.php'>
<input type='number' name = 'x' >
<input type='submit'>
</form>
</body>
</html>