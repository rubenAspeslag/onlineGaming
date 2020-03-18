<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
    <title>My Page</title>
    <link rel="stylesheet" type="text/css" href="css/css.css">
</head>
<body>
<div id='login' class="midden" >
    <form method='POST' action='code/signIn.php'>
<h1> sign in : </h1>
<h2> username: <input type='text' name='username' > </h2>
<h2> password: <input type='password' name='password' > </h2>
<input type='submit' name='signIn' value='sign in' id="loginSubmit" > <br> 
no account ? <a href="code/signUp.php"> sign up </a> 
<?php 
 if (isset($_GET['msg'])) {
     echo("<br> error: ");
     echo($_GET['msg']);
 }

?>
</from> 
</div>
</body>
</html>