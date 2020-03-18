<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" type="text/css" href="../css/css.css">
    <style>
    h2 {
        font-size : 200%;
    }
    </style>
</head>
<body>
<form action='ITQuiz.php' method='POST'>
<?php

include("dbConn.php");
include("checkIfLogedIn.php");
include("logedInBanner.php");
?>
<h2>what does this return ?</h2>
<?php
$sql = "SELECT count(*) FROM gamestore.itquizquestion";
$result = $conn->query($sql);


    // output data of each row
    $row = $result->fetch_assoc() ;
    $qCount = $row['count(*)'];
  if ($debug)  echo("count = " . $qCount);
  

$qid = rand(1,$qCount);
echo($qid);
$sql = "SELECT * from itquizquestion WHERE idITQuizQuestions = $qid ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc() ;
     echo("<img src='../img/games/inBody/itQuiz/". $row['question'] . "' height='500'>");
     echo("<br> <input type='radio' id='q1' name='q' value='1'>  <img src='../img/games/inBody/itQuiz/". $row['answer1'] . "' height='100'>");
     echo("<br> <input type='radio' id='q2' name='q' value='2'>  <img src='../img/games/inBody/itQuiz/". $row['answer2'] . "' height='100'>");
     echo("<br> <input type='radio' id='q3' name='q' value='3'>  <img src='../img/games/inBody/itQuiz/". $row['answer3'] . "' height='100'>"); 
        $correct = $row['correct'];
     echo(" <input type='hidden' name='correct' value='$correct' >");
  $a1 = $row['answer1'];
  $a2 = $row['answer2'];
  $a3 =$row['answer3'] ;  

     switch ($correct) {
        case 1:
            $correct2 = " <input type='hidden' name='correct2' value='$a1' >";
            break;
        case 2:
            $correct2 = " <input type='hidden' name='correct2' value='$a2' >";
          
            break;
        case 3:
            $correct2 = " <input type='hidden' name='correct2' value='$a3'>";
          
            break;
    }
    echo($correct2);

} else {
    echo "0 results";
}
if (isset($_POST['q'])) {
    if($_POST['q'] == $_POST['correct'] ) {
        echo("<br>juist");
        $correctt = true;
    } else {
        echo("<br>fout, the answer was: <br> ");
      $correct2 =   $_POST['correct2'];
    echo("<img src='../img/games/inBody/itQuiz/$correct2' height='100'> ");
    $correctt = false ;
    }
}


$sql =" SELECT * FROM gamestore.gamescore where userid = $iduser and gameid=3 and busy = 1 ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc();
   $idgamescore =  $row['idgameScore'];
   if ($correctt) {
    $score = $row['score'] +1;
   } else {
    $score = $row['score'] -1;
   }
   
     $sql = "UPDATE `gamestore`.`gamescore` SET `score` = '$score' WHERE (`idgameScore` = '$idgamescore')";
     if ($conn->query($sql) === TRUE) {
     if ($debug)   echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
} else {

    $sql = "INSERT INTO `gamescore` ( `userid`, `gameid`, `score`, `busy`) VALUES ( '$iduser', '3', '$0', '1')";

    if ($conn->query($sql) === TRUE) {
     if ($debug)   echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}




?>
<br>
<input type='submit' value='check and go next!!' />
</form>

</body>
</html>