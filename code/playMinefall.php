<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" type="text/css" href="../css/css.css">
    <style >
    * {cursor: pointer;}
  .block {
      position: absolute; 
  }
    </style>
</head>
<body>
<?php
include("dbConn.php");
include("checkIfLogedIn.php");
include("logedInBanner.php");
?>
<div id='score'> score = </div>
<form action='gameOver.php' method='POST'>
<img onclick='up("dirt1");'  class='block' id='dirt1' src='../img/games/inBody/minecraft/dirt.jfif' height='100' width='100'>
<img onclick='up("diamand1");' class='block' id='diamand1' src='../img/games/inBody/minecraft/diamand.jfif' height='100' width='100'>
<img onclick='up("DOWood1");' class='block' id='DOWood1' src='../img/games/inBody/minecraft/DarkOakWood.png' height='100' width='100'>
<img onclick='up("gold1");' class='block' id='gold1' src='../img/games/inBody/minecraft/gold.png' height='100' width='100'>
<img onclick='up("stone1");' class='block' id='stone1' src='../img/games/inBody/minecraft/stone.png' height='100' width='100'>
<input class='block' id='tnt1' type='image' src='../img/games/inBody/minecraft/tnt.jfif' name='tnt1' height='100' width='100'/>


<img onclick='up("sand1");' class='block' id='sand1' src='../img/games/inBody/minecraft/sand.jfif' height='100' width='100'>


<img onclick='up("dirt2");'  class='block' id='dirt2' src='../img/games/inBody/minecraft/dirt.jfif' height='100' width='100'>
<img onclick='up("diamand2");'  class='block' id='diamand2' src='../img/games/inBody/minecraft/diamand.jfif' height='100' width='100'>
<img onclick='up("DOWood2");' class='block' id='DOWood2' src='../img/games/inBody/minecraft/DarkOakWood.png' height='100' width='100'>
<img onclick='up("gold2");' class='block' id='gold2' src='../img/games/inBody/minecraft/gold.png' height='100' width='100'>
<img onclick='up("stone2");' class='block' id='stone2' src='../img/games/inBody/minecraft/stone.png' height='100' width='100'>
<input class='block' id='tnt2' type='image' src='../img/games/inBody/minecraft/tnt.jfif' name='tnt2' height='100' width='100'/>

<img onclick='up("sand2");' class='block' id='sand2' src='../img/games/inBody/minecraft/sand.jfif' height='100' width='100'>


<img onclick='up("dirt3");'  class='block' id='dirt3' src='../img/games/inBody/minecraft/dirt.jfif' height='100' width='100'>
<img onclick='up("diamand3");' class='block' id='diamand3' src='../img/games/inBody/minecraft/diamand.jfif' height='100' width='100'>
<img onclick='up("DOWood3");' class='block' id='DOWood3' src='../img/games/inBody/minecraft/DarkOakWood.png' height='100' width='100'>
<img onclick='up("gold3");' class='block' id='gold3' src='../img/games/inBody/minecraft/gold.png' height='100' width='100'>
<img onclick='up("stone3");' class='block' id='stone3' src='../img/games/inBody/minecraft/stone.png' height='100' width='100'>
<input class='block' id='tnt3' type='image' src='../img/games/inBody/minecraft/tnt.jfif' name='tnt3' height='100' width='100'/>
<img onclick='up("sand3");' class='block' id='sand3' src='../img/games/inBody/minecraft/sand.jfif' height='100' width='100'>


<img onclick='up("dirt4");' class='block' id='dirt4' src='../img/games/inBody/minecraft/dirt.jfif' height='100' width='100'>
<img onclick='up("diamand4");' class='block' id='diamand4' src='../img/games/inBody/minecraft/diamand.jfif' height='100' width='100'>
<img onclick='up("DOWood4");' class='block' id='DOWood4' src='../img/games/inBody/minecraft/DarkOakWood.png' height='100' width='100'>
<img onclick='up("gold4");' class='block' id='gold4' src='../img/games/inBody/minecraft/gold.png' height='100' width='100'>
<img onclick='up("stone4");' class='block' id='stone4' src='../img/games/inBody/minecraft/stone.png' height='100' width='100'>

<input class='block' id='tnt4' type='image' src='../img/games/inBody/minecraft/tnt.jfif' name='tnt4' height='100' width='100'/>

<img onclick='up("sand4");' class='block' id='sand4' src='../img/games/inBody/minecraft/sand.jfif' height='100' width='100'>
<input type='hidden' name='game' value='1'>
 

</script>

</form>


<script>
var Score = 0
document.getElementById("score").innerHTML = "score = " + Score
   
function up(id) {
  Score = Score + 1 ;
  document.getElementById("score").innerHTML = "score = " + Score 
 
  //alert(id);
 var block = document.getElementById(id);
  block.style.display= "none";
 //alert("ok");
 if (Score == 24) {
  alert('you win');
  window.location.href="youWin.php?game=1&score=24";
  alert('you win');
 }
}

function die() {
  alert("game over");
  clearInterval(frame);
}


   myMove()
	function myMove() {
	// set var 
  var tnt1 = document.getElementById("tnt1");   
  var tnt2 = document.getElementById("tnt2");
  var tnt3 = document.getElementById("tnt3");
  var tnt4 = document.getElementById("tnt4");
  var sand1 = document.getElementById("sand1");
  var sand2 = document.getElementById("sand2");
  var sand3 = document.getElementById("sand3");
  var sand4 = document.getElementById("sand4");
  var stone1 = document.getElementById("stone1");   
  var stone2 = document.getElementById("stone2");
  var stone3 = document.getElementById("stone3");
  var stone4 = document.getElementById("stone4");
  var diamand1 = document.getElementById("diamand1");
  var diamand2 = document.getElementById("diamand2");
  var diamand3 = document.getElementById("diamand3");
  var diamand4 = document.getElementById("diamand4");

 // set height on rendom position 
  tnt1Pos =  Math.floor(Math.random() * 200);
  tnt2Pos =  Math.floor(Math.random() * 200);
  tnt3Pos =  Math.floor(Math.random() * 200);
  tnt4Pos =  Math.floor(Math.random() * 200);
  sand1Pos = Math.floor(Math.random() * 200);
  sand2Pos = Math.floor(Math.random() * 200);
  sand3Pos = Math.floor(Math.random() * 200);
  sand4Pos = Math.floor(Math.random() * 200);
  stone1Pos =Math.floor(Math.random() * 200);
  stone2Pos =Math.floor(Math.random() * 200);
  stone3Pos =Math.floor(Math.random() * 200);
  stone4Pos =Math.floor(Math.random() * 200);
  diamand1Pos =Math.floor(Math.random() * 200);
  diamand2Pos =Math.floor(Math.random() * 200);
  diamand3Pos =Math.floor(Math.random() * 200);
  diamand4Pos =Math.floor(Math.random() * 200);

    // set y-cordinat on rendom position
   tnt1.style.left =   Math.floor(Math.random() * 1300) + "px"; 
   tnt2.style.left =   Math.floor(Math.random() * 1300) + "px"; 
	tnt3.style.left =   Math.floor(Math.random() * 1300) + "px"; 
	 tnt4.style.left =   Math.floor(Math.random() * 1300) + "px"; 
	 sand1.style.left =   Math.floor(Math.random() * 1300) + "px"; 
      sand2.style.left =   Math.floor(Math.random() * 1300) + "px"; 
	sand3.style.left =   Math.floor(Math.random() * 1300) + "px"; 
	 sand4.style.left =   Math.floor(Math.random() * 1300) + "px";
	 stone1.style.left =   Math.floor(Math.random() * 1300) + "px"; 
   stone2.style.left =   Math.floor(Math.random() * 1300) + "px"; 
	stone3.style.left =   Math.floor(Math.random() * 1300) + "px"; 
	stone4.style.left =   Math.floor(Math.random() * 1300) + "px"; 
	 diamand1.style.left =   Math.floor(Math.random() * 1300) + "px"; 
      diamand2.style.left =   Math.floor(Math.random() * 1300) + "px"; 
	diamand3.style.left =   Math.floor(Math.random() * 1300) + "px"; 
	 diamand4.style.left =   Math.floor(Math.random() * 1300) + "px";


	 
     var gold1 = document.getElementById("gold1");   
  var gold2 = document.getElementById("gold2");
  var gold3 = document.getElementById("gold3");
  var gold4 = document.getElementById("gold4");
 // var //1 = document.getElementById("//1");
 // var //2 = document.getElementById("//2");
 // var //3 = document.getElementById("//3");
 // var //4 = document.getElementById("//4");
   var dirt1 = document.getElementById("dirt1");   
  var dirt2 = document.getElementById("dirt2");
  var dirt3 = document.getElementById("dirt3");
  var dirt4 = document.getElementById("dirt4");
  var DOWood1 = document.getElementById("DOWood1");
  var DOWood2 = document.getElementById("DOWood2");
  var DOWood3 = document.getElementById("DOWood3");
  var DOWood4 = document.getElementById("DOWood4");

 // set height on rendom position 
  gold1Pos =  Math.floor(Math.random() * 200);
  gold2Pos =  Math.floor(Math.random() * 200);
  gold3Pos =  Math.floor(Math.random() * 200);
  gold4Pos =  Math.floor(Math.random() * 200);
  //1Pos =  Math.floor(Math.random() * 200);
  //2Pos =  Math.floor(Math.random() * 200);
  //3Pos =  Math.floor(Math.random() * 200);
  //4Pos =  Math.floor(Math.random() * 200);
  dirt1Pos =  Math.floor(Math.random() * 200);
  dirt2Pos =  Math.floor(Math.random() * 200);
 dirt3Pos =  Math.floor(Math.random() * 200);
  dirt4Pos =  Math.floor(Math.random() * 200);
  DOWood1Pos =  Math.floor(Math.random() * 200);
  DOWood2Pos =  Math.floor(Math.random() * 200);
  DOWood3Pos =  Math.floor(Math.random() * 200);
  DOWood4Pos =  Math.floor(Math.random() * 200);

    // set y-cordinat on rendom position
   gold1.style.left =   Math.floor(Math.random() * 1300) + "px"; 
   gold2.style.left =   Math.floor(Math.random() * 1300) + "px"; 
	gold3.style.left =   Math.floor(Math.random() * 1300) + "px"; 
	 gold4.style.left =   Math.floor(Math.random() * 1300) + "px"; 
	 dirt1.style.left =   Math.floor(Math.random() * 1300) + "px"; 
   dirt2.style.left =   Math.floor(Math.random() * 1300) + "px"; 
	dirt3.style.left =   Math.floor(Math.random() * 1300) + "px"; 
	dirt4.style.left =   Math.floor(Math.random() * 1300) + "px"; 
	 DOWood1.style.left =   Math.floor(Math.random() * 1300) + "px"; 
      DOWood2.style.left =   Math.floor(Math.random() * 1300) + "px"; 
	DOWood3.style.left =   Math.floor(Math.random() * 1300) + "px"; 
	 DOWood4.style.left =   Math.floor(Math.random() * 1300) + "px";



  var id = setInterval(frame, 1);
 function frame() {
 // if (height  > 500)  {height = rendom }
   if (tnt1Pos > 500) {
  tnt1Pos = Math.floor(Math.random() * 200)
  tnt1.style.left =   Math.floor(Math.random() * 1300) + "px";
   }
   
   if (tnt2Pos > 500) {
  tnt2Pos = Math.floor(Math.random() * 200)
  tnt2.style.left =   Math.floor(Math.random() * 1300) + "px";
   }

   if (tnt3Pos > 500) {
  tnt3Pos = Math.floor(Math.random() * 200)
  tnt3.style.left =   Math.floor(Math.random() * 1300) + "px";
   }

   if (tnt4Pos > 500) {
  tnt4Pos = Math.floor(Math.random() * 200)
  tnt4.style.left =   Math.floor(Math.random() * 1300) + "px";
   }

    if (sand1Pos > 500) {
  sand1Pos = Math.floor(Math.random() * 200)
  sand1.style.left =   Math.floor(Math.random() * 1300) + "px";
   }
   
   if (sand2Pos > 500) {
  sand2Pos = Math.floor(Math.random() * 200)
  sand2.style.left =   Math.floor(Math.random() * 1300) + "px";
   }

   if (sand3Pos > 500) {
  sand3Pos = Math.floor(Math.random() * 200)
  sand3.style.left =   Math.floor(Math.random() * 1300) + "px";
   }

   if (sand4Pos > 500) {
  sand4Pos = Math.floor(Math.random() * 200)
  sand4.style.left =   Math.floor(Math.random() * 1300) + "px";
   }




    if (stone1Pos > 500) {
  stone1Pos = Math.floor(Math.random() * 200)
  stone1.style.left =   Math.floor(Math.random() * 1300) + "px";
   }
   
   if (stone2Pos > 500) {
  stone2Pos = Math.floor(Math.random() * 200)
  stone2.style.left =   Math.floor(Math.random() * 1300) + "px";
   }

   if (stone3Pos > 500) {
  stone3Pos = Math.floor(Math.random() * 200)
  stone3.style.left =   Math.floor(Math.random() * 1300) + "px";
   }

   if (stone4Pos > 500) {
  stone4Pos = Math.floor(Math.random() * 200)
  stone4.style.left =   Math.floor(Math.random() * 1300) + "px";
   }

    if (diamand1Pos > 500) {
  diamand1Pos = Math.floor(Math.random() * 200)
  diamand1.style.left =   Math.floor(Math.random() * 1300) + "px";
   }
   
   if (diamand2Pos > 500) {
  diamand2Pos = Math.floor(Math.random() * 200)
  diamand2.style.left =   Math.floor(Math.random() * 1300) + "px";
   }

   if (diamand3Pos > 500) {
  diamand3Pos = Math.floor(Math.random() * 200)
  diamand3.style.left =   Math.floor(Math.random() * 1300) + "px";
   }

   if (diamand4Pos > 500) {
  diamand4Pos = Math.floor(Math.random() * 200)
  diamand4.style.left =   Math.floor(Math.random() * 1300) + "px";
   }


      tnt1Pos++; 
	  tnt2Pos++;
	  tnt3Pos++;
	  tnt4Pos++;
	  sand1Pos++; 
	  sand2Pos++;
	 sand3Pos++;
	  sand4Pos++;

	  
      stone1Pos++; 
	  stone2Pos++;
	  stone3Pos++;
	  stone4Pos++;
	  diamand1Pos++; 
	  diamand2Pos++;
	 diamand3Pos++;
	  diamand4Pos++;

      tnt1.style.top = tnt1Pos + "px"; 
	   tnt2.style.top = tnt2Pos + "px"; 
	    tnt3.style.top = tnt3Pos + "px"; 
		 tnt4.style.top = tnt4Pos + "px"; 
     sand1.style.top = sand1Pos + "px"; 
	  sand2.style.top = sand2Pos + "px"; 
	    sand3.style.top = sand3Pos + "px"; 
		sand4.style.top = sand4Pos + "px"; 
    

	 stone1.style.top = stone1Pos + "px"; 
	   stone2.style.top = stone2Pos + "px"; 
	    stone3.style.top = stone3Pos + "px"; 
		 stone4.style.top = stone4Pos + "px"; 
     diamand1.style.top = diamand1Pos + "px"; 
	  diamand2.style.top = diamand2Pos + "px"; 
	    diamand3.style.top = diamand3Pos + "px"; 
		diamand4.style.top = diamand4Pos + "px"; 
    
         if (gold1Pos > 500) {
        gold1Pos = Math.floor(Math.random() * 200)
        gold1.style.left = Math.floor(Math.random() * 1300) + "px";
    }

    if (gold2Pos > 500) {
        gold2Pos = Math.floor(Math.random() * 200)
        gold2.style.left = Math.floor(Math.random() * 1300) + "px";
    }

    if (gold3Pos > 500) {
        gold3Pos = Math.floor(Math.random() * 200)
        gold3.style.left = Math.floor(Math.random() * 1300) + "px";
    }

    if (gold4Pos > 500) {
        gold4Pos = Math.floor(Math.random() * 200)
        gold4.style.left = Math.floor(Math.random() * 1300) + "px";
    }

  




    if (DOWood1Pos > 500) {
        DOWood1Pos = Math.floor(Math.random() * 200)
        DOWood1.style.left = Math.floor(Math.random() * 1300) + "px";
    }

    if (DOWood2Pos > 500) {
        DOWood2Pos = Math.floor(Math.random() * 200)
        DOWood2.style.left = Math.floor(Math.random() * 1300) + "px";
    }

    if (DOWood3Pos > 500) {
        DOWood3Pos = Math.floor(Math.random() * 200)
        DOWood3.style.left = Math.floor(Math.random() * 1300) + "px";
    }

    if (DOWood4Pos > 500) {
        DOWood4Pos = Math.floor(Math.random() * 200)
        DOWood4.style.left = Math.floor(Math.random() * 1300) + "px";
    }

    if (dirt1Pos > 500) {
        dirt1Pos = Math.floor(Math.random() * 200)
        dirt1.style.left = Math.floor(Math.random() * 1300) + "px";
    }

    if (dirt2Pos > 500) {
        dirt2Pos = Math.floor(Math.random() * 200)
        dirt2.style.left = Math.floor(Math.random() * 1300) + "px";
    }

    if (dirt3Pos > 500) {
        dirt3Pos = Math.floor(Math.random() * 200)
        dirt3.style.left = Math.floor(Math.random() * 1300) + "px";
    }

    if (dirt4Pos > 500) {
        dirt4Pos = Math.floor(Math.random() * 200)
        dirt4.style.left = Math.floor(Math.random() * 1300) + "px";
    }


    gold1Pos++;
    gold2Pos++;
    gold3Pos++;
    gold4Pos++;
  


    DOWood1Pos++;
    DOWood2Pos++;
    DOWood3Pos++;
    DOWood4Pos++;
    dirt1Pos++;
    dirt2Pos++;
    dirt3Pos++;
    dirt4Pos++;

    gold1.style.top = gold1Pos + "px";
    gold2.style.top = gold2Pos + "px";
    gold3.style.top = gold3Pos + "px";
    gold4.style.top = gold4Pos + "px";
  

    DOWood1.style.top = DOWood1Pos + "px";
    DOWood2.style.top = DOWood2Pos + "px";
    DOWood3.style.top = DOWood3Pos + "px";
    DOWood4.style.top = DOWood4Pos + "px";
    dirt1.style.top = dirt1Pos + "px";
    dirt2.style.top = dirt2Pos + "px";
    dirt3.style.top = dirt3Pos + "px";
    dirt4.style.top = dirt4Pos + "px";


  }
}



</script>

</body>
</html>