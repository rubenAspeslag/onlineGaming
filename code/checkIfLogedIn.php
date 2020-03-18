<?php 
 session_start();
if (isset($_SESSION['iduser'])){
    $debug = false ;
  if ($debug)  echo($_SESSION["iduser"]);
    $iduser = $_SESSION["iduser"];
}else {
    echo("id not found");
}
?>