<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
    <title>My Page</title>
    <link rel="stylesheet" type="text/css" href="../css/css.css">
</head>
<body>
<?php 
include("dbConn.php");
include("checkIfLogedIn.php");
include("logedInBanner.php");
?>
<div class = 'flex'>
<?php 

if (isset($_SESSION['scoreMath'])) {
    unset($_SESSION['scoreMath']);
}
$sql = "SELECT * FROM gamestore.gamescore where userid = $iduser   and busy = 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $idgamescore = $row['idgameScore'];
        $sql2 = "UPDATE `gamestore`.`gamescore` SET `busy` = '0' WHERE (`idgameScore` = '$idgamescore')";
        if ($conn->query($sql2) === TRUE) {
         //    echo "Record updated successfully";
        } else {
        //     echo "Error updating record: " . $conn->error;
        } 
    }
}

$sql = "SELECT * FROM game";
$result = $conn->query($sql);
 while ($row = $result->fetch_assoc()) {
     $gameID = $row['idgames'];
     $name = $row['name'];
     $img = $row['img'];
     $folder = $row['folder'];
     // count plays 
     $sql2 = "SELECT COUNT(*) from gamescore WHERE gameid=$gameID and userid=$iduser ";
    $result2 = $conn->query($sql2);
    $row2 = $result2->fetch_assoc();
    $plays = $row2['COUNT(*)'];
       // average play 
       $sql2 = "SELECT avg(score) from gamescore WHERE gameid=$gameID and userid=$iduser ";
       $result2 = $conn->query($sql2);
       $row2 = $result2->fetch_assoc();
       $avg = $row2['avg(score)'];
       // sum score  
       $sql2 = "SELECT sum(score) from gamescore WHERE gameid=$gameID and userid=$iduser ";
       $result2 = $conn->query($sql2);
       $row2 = $result2->fetch_assoc();
       $sum = $row2['sum(score)'];
        // highscore score  
        $sql2 = "SELECT MAX(score) from gamescore WHERE gameid=$gameID and userid=$iduser ";
        $result2 = $conn->query($sql2);
        $row2 = $result2->fetch_assoc();
        $max = $row2['MAX(score)'];
         // world rcord   
         $sql2 = "SELECT MAX(score) from gamescore WHERE gameid=$gameID  ";
         $result2 = $conn->query($sql2);
         $row2 = $result2->fetch_assoc();
         $worldRecord = $row2['MAX(score)'];
    echo("<div class='flexItems'>");
    
    echo("<a id='gameLink' href='$folder.php '> <h4> $name </h4>");
    echo("<img src='../img/games/logo/$img' >");
    
    echo("  </a> ");

    echo("<div id='gameStats' >");
   
    echo("<div id='gamestat'> plays :$plays  ,average: $avg  </div> ");
    echo("<div id='gamestat'> totaal :$sum  ,highscore: $max  </div> ");
    echo("<div id='gamestat'>world record: $worldRecord    </div> ");
    echo("</div>");
    echo("</div>");
 }


 
?> 
</div>
</body>
</html>