<?php 
include("parametre.php");
include("connexion_bd.php");

if ($_POST["origine"]=="confirmation"){
$idMailSelect=$_POST["id"];
$mailIdSelect=$_POST["email"];
$titre=$_POST["civilite"];
$nom=$_POST["nom"];
if($nom!=""){$formulePolitesse= $titre." ".$nom;}else{$formulePolitesse="Madame, Monsieur";}
$idContact=$_POST["idContact"];
$volume=$_POST["volume"];
$prenom=$_POST["prenom"];
$societe=$_POST["societe"];	
if($titre=="Monsieur"){$convier="convi&eacute;";$PRESENT="PR&Eacute;SENT";}else{$convier="convi&eacute;e";$PRESENT="PR&Eacute;SENTE";}	

$rq="SELECT * FROM `mail` WHERE `id`='$idMailSelect'";
$query = $pdo->query($rq);
$resultat = $query->fetchAll();

$source=$resultat[0]["code_source"];
$Html=file_get_contents("$source");     	

$search=array("[ Titre Nom ]","[id_contact]","[volume]","[ Prenom ]","[ Nom ]","[ Titre ]", "[ convier ]", "[ PRESENT ]", "[ Societe ]");
$replace=array($formulePolitesse,$idContact,$volume,$prenom,$nom,$titre,$convier,$PRESENT,$societe);

$tagMailMessage=str_replace($search,$replace,$Html);
$objet=str_replace($search,$replace,$resultat[0]["objet"]);


// Version TXT

$sourceTXT=$resultat[0]["txt"];
$Txt=file_get_contents("$sourceTXT"); 
$tagMailMessageTXT=str_replace($search,$replace,$Txt);

// Vesion TXT


//====================== Tableau contact debut

$contact=array($mailIdSelect);

//====================== Tableau contact fin

// ===================== Mail Début

foreach ($contact as $key => $value) {

     $site = "";
     $from = "contact@mail.com";
     $nom = "John Doe";
     $to = $value;
     $sujet = $objet;
     $text = $tagMailMessageTXT;
     $html = $tagMailMessage;

     $from = $nom." <".$from.">";

     $limite = "_----------=_parties_".md5(uniqid (rand()));

     $header  = "Reply-to: ".$from."\n";
     $header .= "From: ".$from."\n";
     $header .= "X-Sender: <".$site.">\n";
     $header .= "X-Mailer: PHP\n";
     $header .= "X-auth-smtp-user: ".$from." \n";
     $header .= "X-abuse-contact: ".$from." \n";
     $header .= "Date: ".date("D, j M Y G:i:s O")."\n";
     $header .= "MIME-Version: 1.0\n";
     $header .= "Content-Type: multipart/alternative; boundary=\"".$limite."\"";

     $message = "";

     $message .= "--".$limite."\n";
     $message .= "Content-Type: text/plain\n";
     $message .= "charset=\"iso-8859-1\"\n";
     $message .= "Content-Transfer-Encoding: 8bit\n\n";
     $message .= $text;

     $message .= "\n\n--".$limite."\n";
     $message .= "Content-Type: text/html; ";
     $message .= "charset=\"iso-8859-1\"; ";
     $message .= "Content-Transfer-Encoding: 8bit;\n\n";
     $message .= $html;

     $message .= "\n--".$limite."--";
     mail($to, $sujet, $message, $header);


     }

//======================= Mail Fin

$day = date("Y-m-d");     

$rq2="UPDATE `contact` SET `id_dernier_mail`='$day' WHERE `id`='$idContact'";
$query = $pdo->query($rq2);
     
} else if ($_POST["origine"]=="contact"){

     $idMailSelect=$_POST["id"];
     $countIdMultiple=$_POST["countId"];
     $volume=$_POST["volume"];



     $rq="SELECT * FROM `mail` WHERE `id`='$idMailSelect'";
     $query = $pdo->query($rq);
     $resultat = $query->fetchAll();


     for ($i=0; $i<=$countIdMultiple-1; $i++) {

     $idMail=$_POST["$i"];
     $rq="SELECT * FROM `contact` WHERE `id`='$idMail'";
     $query = $pdo->query($rq);
     $resultatMailMultiple = $query->fetchAll();   

     $titre=$resultatMailMultiple[0]["civilite"];
     $nom=$resultatMailMultiple[0]["nom"];
	 if($nom!=""){$formulePolitesse= $titre." ".$nom;}else{$formulePolitesse="Madame, Monsieur";}	 
     $idContact=$resultatMailMultiple[0]["id"];
     $prenom=$resultatMailMultiple[0]["prenom"];
     $mailIdSelect=$resultatMailMultiple[0]["email"]; 
     $societe=$resultatMailMultiple[0]["nom_societe"]; 
	 if($titre=="Monsieur"){$convier="convi&eacute;";$PRESENT="PR&Eacute;SENT";}else{$convier="convi&eacute;e";$PRESENT="PR&Eacute;SENTE";}	
	 
     //Version Html

     $source=$resultat[0]["code_source"];
     $Html=file_get_contents("$source");     

     
     $search=array("[ Titre Nom ]","[id_contact]","[volume]","[ Prenom ]","[ Nom ]","[ Titre ]","[ convier ]","[ PRESENT ]","[ Societe ]");
     $replace=array($formulePolitesse,$idContact,$volume,$prenom,$nom,$titre,$convier,$PRESENT,$societe);

     $tagMailMessage=str_replace($search,$replace,$Html);
	 $objet=str_replace($search,$replace,$resultat[0]["objet"]);
     // Version Html

     // Version TXT

     $sourceTXT=$resultat[0]["txt"];
     $Txt=file_get_contents("$sourceTXT"); 
     $tagMailMessageTXT=str_replace($search,$replace,$Txt);

     // Vesion TXT
     


     $site = "";
     $from = "contact@mail.com";
     $nom = "John Doe";
     $to = "$mailIdSelect";
     $sujet = $objet;
     $text = $tagMailMessageTXT;
     $html = $tagMailMessage;

     $from = $nom." <".$from.">";

     $limite = "_----------=_parties_".md5(uniqid (rand()));

     $header  = "Reply-to: ".$from."\n";
     $header .= "From: ".$from."\n";
     $header .= "X-Sender: <".$site.">\n";
     $header .= "X-Mailer: PHP\n";
     $header .= "X-auth-smtp-user: ".$from." \n";
     $header .= "X-abuse-contact: ".$from." \n";
     $header .= "Date: ".date("D, j M Y G:i:s O")."\n";
     $header .= "MIME-Version: 1.0\n";
     $header .= "Content-Type: multipart/alternative; boundary=\"".$limite."\"";

     $message = "";

     $message .= "--".$limite."\n";
     $message .= "Content-Type: text/plain\n";
     $message .= "charset=\"iso-8859-1\"\n";
     $message .= "Content-Transfer-Encoding: 8bit\n\n";
     $message .= $text;

     $message .= "\n\n--".$limite."\n";
     $message .= "Content-Type: text/html; ";
     $message .= "charset=\"iso-8859-1\"; ";
     $message .= "Content-Transfer-Encoding: 8bit;\n\n";
     $message .= $html;

     $message .= "\n--".$limite."--";
     mail($to, $sujet, $message, $header);



     // Mail envoi 

     $day = date("Y-m-d");     

     $rq2="UPDATE `contact` SET `id_dernier_mail`='$day' WHERE `id`='$idContact'";
     $query = $pdo->query($rq2);

     } //fin boucle for


}

?>
 
