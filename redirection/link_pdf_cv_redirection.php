<?php 
	header("location: http://site.fr/CV/PDF/CV.pdf");
?>
<html>
<head>		
<title>CV John Doe | Site.fr</title>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-88246207-1', 'auto');
  ga('send', 'pageview');
</script>
</head>
<body>
<?php
    
    if ($_GET['utm_source']!="" && isset($_GET['utm_source'])) {
        include ("connexion_bdd.php");
        $sourceIdContact=$_GET['utm_source'];
        $rqId = "SELECT * FROM `contact` WHERE `id`=$sourceIdContact";
       //var_dump($rqId);
        $queryID = $pdo->query($rqId);
        $resultat = $queryID->fetch();
        $email=$resultat['email'];
        //var_dump($email);
        $titre=$resultat["civilite"];
        $nom=$resultat["nom"];
        $formulePolitesse= $titre." ".$nom;
        $autoreplyStatut=$resultat["autoreply"];
        $source="/contact/autoreply.php";
        $Html=file_get_contents("$source");
        $tagAutoreplyMessage=str_replace("[id_contact]","$sourceIdContact",$Html);
    }

    if($email!="" && isset($email) && $autoreplyStatut!="true" && $_GET["autoreply"]!="false"){

     // ===================== Mail Début

     $to      = "$email";
     $objet = 'Autoreply candidature Developpeur Web';
     $message = str_replace("[ Titre Nom ]","$formulePolitesse",$tagAutoreplyMessage);
     $headers[] = 'MIME-Version: 1.0';
     $headers[] = 'Content-type: text/html; charset=UTF-8';
     $headers[] = "From: \"John Doe\"<contact@mail.com>" . "\r\n" .
     'Reply-To: contact@mail.com' . "\r\n" .
     'X-Mailer: PHP/' . phpversion();

     mail($to, $objet, $message, implode("\r\n", $headers));

    //======================= Mail Fin

    $reqAutoreply ="UPDATE `contact` SET `autoreply`='true' WHERE `id`=$sourceIdContact"; 
    $queryIAutoreply= $pdo->query($reqAutoreply);
    }
  

?>

</body>
</html>
