<?php include("connexion_bd.php");

$id=$_POST['id'];
$type_relation=$_POST["type_relation"];
$civilite=$_POST["civilite"];
$prenom=$_POST["prenom"];
$nom=$_POST["nom"];
$email=$_POST["email"];
$societe=$_POST["societe"];
$code_postal=$_POST["cp"];
$domaine=$_POST["domaine"];
$groupe=$_POST["groupe"];
$telephone=$_POST["tel"];
$Reseaux=$_POST["reseaux"];
$anniversaire=$_POST["anniversaire"];
$desabo=$_POST["desabo"];


$jour=date("Y-m-d");
$heure=date("G:i");



$rq="UPDATE `contact-base` SET `email`='$email',`civilite`='$civilite',`prenom`='$prenom',`nom`='$nom',`cp`='$code_postal',`nom_societe`='$societe',`domaine`='$domaine',`groupe`='$groupe',`tel_fixe`='$telephone',`tel_mobile`='$telephone',`type_relation`='$type_relation',`Reseaux`='$Reseaux',`naissance`='$anniversaire',`id_date`='$jour',`id_heure`='$heure', `desabo`='$desabo' WHERE `id`='$id'";
$query = $pdo->query($rq);

//echo $rq;
?>