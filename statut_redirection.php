<?php

include("connexion_bd.php");
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$email=$_POST["email"];
$siteWeb=$_POST["siteWeb"];
$adresse=$_POST["adresse"];
$ville=$_POST["ville"];
$dateNaissance=$_POST["dateNaissance"];
$nationalite=$_POST["nationalite"];
$enPoste=$_POST["enPoste"];
$enRecherche=$_POST["enRecherche"];


$req3="SELECT * FROM `Statut_profil`";
$query3 = $pdo->query($req3);
$resultat3 = $query3->fetchAll();

if ($resultat3[0]==""){
	
$rq2="INSERT INTO `Statut_profil`(`Nom`, `Prenom`, `Email`, `siteWeb`, `adresse`, `ville`, `dateNaissance`, `nationalite`, `Poste`, `Recherche`) VALUES ('$nom','$prenom','$email','$siteWeb','$adresse','$ville','$dateNaissance','$nationalite','$enPoste','$enRecherche')";
$query2 = $pdo->query($rq2);
	
}

else {
$rq="UPDATE `Statut_profil` SET `Nom`='$nom',`Prenom`='$prenom',`Email`='$email',`siteWeb`='$siteWeb', `adresse`='$adresse',`ville`='$ville', `dateNaissance`='$dateNaissance',`nationalite`='$nationalite', `Poste`='$enPoste',`Recherche`='$enRecherche' WHERE `id`='1'";
$query = $pdo->query($rq);

}


header("location: statut.php");