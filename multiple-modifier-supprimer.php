<?php include("connexion_bd.php");

$idMultiple=$_POST['selectionContacts'];
$suppression=$_POST['suppression'];

$jour=date("Y-m-d");
$heure=date("G:i");



foreach($idMultiple as $key => $value){
	
$id=$idMultiple[$key];		
	
$rq="UPDATE `contact-base` SET `suppression`='$suppression',`id_date`='$jour',`id_heure`='$heure' WHERE `id`='$id'";
$query = $pdo->query($rq);
	
	
}

//echo $rq;
?>