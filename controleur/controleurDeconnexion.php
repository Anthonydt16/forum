
 <?php
//remet a zero les sessions
$_SESSION['login'] = "";

//permet la redirection
$_SESSION['forum']="connexion";
header('location: http://localhost/forum/');