<?php ob_start();
include("parametre.php"); 
 
foreach ($arrayOblig as $key => $value) {
$_SESSION["s_$key"]=$_POST["$key"];
$_SESSION["erreur_$key"]=$value;

if($_SESSION["s_$key"]=="" && $_SESSION["erreur_$key"]=="true")
{ $_SESSION["img_erreur"] = 'icon-form-contact-10.png';
    header("Location: form.php");
} 
	else if($_SESSION["s_$key"]!="" && $_SESSION["erreur_$key"]=="true")
{ 
	header("Location: confirmation.php");
	} 

}


?>
<!DOCTYPE html>
<html>
 <head>
 	<title>Redirection...</title>
 	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
 <head>
 <body>
 Redirection...
 </body>	
 </html>