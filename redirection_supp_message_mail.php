<?php
include("connexion_bd.php");

if ($_POST["suppression"]=="true"){
	$id=$_POST["idMessage"];
	$req3="DELETE FROM `Campagne-mail` WHERE `id`='$id'";
	$query3 = $pdo->query($req3);
	
	header("location: messages_mails.php?supp=true");
}