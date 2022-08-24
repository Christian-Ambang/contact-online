<?php if ($_POST["origine"]=="contact" && !isset($_POST["selectionContacts"])){
	header("location: /dashboard/contact.php");
}
include ("parametre.php");
include("connexion_bd.php");

foreach ($arrayOblig as $key => $value) {
	$$key=$_SESSION["s_$key"];
	
}

$jour=date("Y-m-d");
$heure=date("G:i");

if ($_GET["origine"]=="confirmation"){ 

$rq="INSERT INTO `contact`(`cp`,`email`, `civilite`, `prenom`, `nom`, `nom_societe`, `domaine`, `groupe`, `tel_fixe`, `tel_mobile`, `type_relation`, `Reseaux` , `naissance`, `id_date`, `id_heure`, `id_dernier_mail`, `id_dernier_envoi_sms`) 
VALUES ('$cp','$email', '$civilite', '$prenom', '$nom', '$societe', '$domaine', '$groupe','$tel', '$tel', '$relation', '$Reseaux', '$anniversaire', '$jour', '$heure','Null', 'Null')";

$query = $pdo->query($rq);
}

$rqId = "SELECT MAX(id) FROM `contact`";
$queryID = $pdo->query($rqId);
$resultat = $queryID->fetch();
$_SESSION["s_id"]=$resultat[0];

?>
<!DOCTYPE html>
<html>
 <head>
 	<title>Update certifié</title>
 	<script type="text/javascript" src="js/jquery.js"></script>
 	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
 	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
 	<style type="text/css">

 		body {
 			background-color:#5b54a0;
 			width: 100%;
 			margin: 0;
 			padding: 0 0;
 		}

 		.globalBlockMail {
 			width:100%;
 			padding:75px 0; 
 		}

 		
 		.blockMail{
 			width: 287px;
 			height:287px;
 			margin: 0 auto;
 			background: url('imgs/eveloppe.png') center center no-repeat;
 			position: relative;

 		}
 		
 		.validation {
 			width: 320px;
 			margin: 0 auto;
 		}

 		.validation img{
 			text-align: left;
 			padding-left: 15px;
 		}


 		.globalBtn {
 			width: 100%;
 			height:auto;
 		}

 		.btn {
 			width: 320px;
 			margin: 0 auto;
 			padding-top:10px;
 			text-align: center;
 		}

 		.btn img{
 			margin-right: 15px;
 			cursor: pointer;
 		}

 		.mail_sent {
 			cursor: pointer;
 		}

 		.sms_sent {
 			cursor: pointer;
 		}

 		.campagneList,.campagneListSMS {
			display: none;
 			width: 300px;
 			margin: 5px auto;
 			padding:10px;
 			text-align: left;
 			color:#FFFFFF;
 			background-color: #7671aa;
 			border-radius: 10px;
 			margin-top: 15px;
 		}


 		.campagneList hr {
 		  height: 1px;
		  margin: 5px 0;
		  padding: 0;
		  color: #FFFFFF;
		  background-color: #FFFFFF;
		  border: 0;
 		}

 		.campagneList a, .campagneListSMS a{
 			color:#FFFFFF;
 			text-decoration: none;
 		}

 		.left  {display: inline-block; width:30px;}
 		.center  {display: inline-block; width:200px;}
 		.right  {display: inline-block; width:50px;text-align: right}

 		.select_mail {
 			
 		}

 		.selectMail{
 			cursor: pointer;
 		}

 		.center .check {
 			display: none;
 		}

 		.select_mail .center .check {
 			display: inline-block;
 		}

 		.globalConfirmation {
			display: none;
 			width: 100%;
 			height:150%;
 			background-color:rgba(123, 120, 151, 0.8);
 			position: fixed;
 			z-index: 240;

 		}

 		.confirmation {
 			z-index: 1;
 			margin:60px auto; 
 			width:287px;
 			height:287px;
 			padding:15px ;
			  text-align: center;
			  background-image: url("imgs/popup-dialogue.png");
			  background-repeat: no-repeat;
			  position:relative;
 		}

 		.confirmation .contenu {
 			position: absolute;
 			left:40px;
 			top:100px;
 			color:#3E7B8E;
 			text-align: center;
 		}	
 		

 		.contenu h1 {
 			font-size: 14px;
 			font-family: Arial;
 			color:#000000;
 		}

 		.contenu h1 span{
 			color:#3E7B8E;
 		}

 		.contenu span{
 			font-size: 12px;
 		}

 		.btn-confirmation-mail, .btn-non-confirmation-mail {
 			color:#3E7B8E;
 			border: 2px solid #3E7B8E;
 			padding: 10px 20px;
 			-webkit-border-radius: 12px; 
			-moz-border-radius: 12px; 
			border-radius: 12px;
			margin-right:10px;
			cursor: pointer;

 		}

 	</style>
 </head>
 <body>
 		<div class="globalConfirmation">
 			<div class="confirmation">
 				<div class="contenu">
	 				<h1><span>- - - - -</span> CONFIRMATION <span>- - - - -</span></h1>
 					<span>Souhaitez vous réellement poster cet email?</span><br><br>
 					<span class="btn-confirmation-mail">oui</span>
 					<span class="btn-non-confirmation-mail">non</span>
 				</div>
 			</div>
 		</div>
 		<div class="globalBlockMail">
 			<div class="validation">
 				<?php if($_GET["origine"]=="voir" || $_POST["origine"] == "contact" ) { ?> <img src="" alt=""> <?php } else { ?><img src="imgs/ajout_valider.png"><?php } ?>
 			</div>
 			<div class="blockMail">
	 			
 			</div>
 			<div class="btn">
 				<?php if(!isset($_GET["origine"]) && !isset($_POST["origine"])){ ?>
	 			<a href="form.php?session=ini"><img src="imgs/btn-retour.png" width="57" height="33" alt=""></a>
	 			<?php }else if($_GET["origine"]=="voir"){ ?>
	 			<a href="dashboard/voir_contact.php?id=<?php echo $_GET['id'] ?>"><img src="imgs/btn-retour.png" width="57" height="33" alt=""></a>
	 			<?php } else if($_POST["origine"]=="contact"){?> <a href="dashboard/contact.php"><img src="imgs/btn-retour.png" width="57" height="33" alt=""></a> <?php } else if($_GET["origine"]=="confirmation"){ ?> 
	 			<a href="form.php?session=ini"><img src="imgs/btn-retour.png" width="57" height="33" alt=""></a> <?php } ?>
	 			<img src="imgs/btn-sms.png" class="sms_sent" width="57" height="33" alt="">
	 			<img src="imgs/btn-mail.png" class="mail_sent" width="57" height="33" alt="">
	 		    <?php if($_GET["origine"]=="confirmation" || $_GET["origine"]=="voir"){?>
	 		    <input type="hidden" name="email" value="<?php echo $_SESSION['s_email'] ?>">
	 			<input type="hidden" name="civilite" value="<?php echo $_SESSION['s_civilite'] ?>">
	 			<input type="hidden" name="nom" value="<?php echo $_SESSION['s_nom'] ?>">
	 			<input type="hidden" name="prenom" value="<?php echo $_SESSION['s_prenom'] ?>">
	 			<input type="hidden" name="societe" value="<?php echo $_SESSION['s_societe'] ?>">
				<?php if($_GET["origine"]=="voir"){ ?>
				<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
				<?php } else { ?>
	 			<input type="hidden" name="id" value="<?php echo $_SESSION['s_id'] ?>">
				<?php } ?>
	 			<input type="hidden" name="origine" value="confirmation">
	 			<?php } else if($_POST["origine"]=="contact"){ ?>
	 			<input type="hidden" name="origine" value="contact">
	 			<input type="hidden" name="idMultiple" value="<?php echo http_build_query($_POST["selectionContacts"]) ?>">
	 			<input type="hidden" name="countIdMultiple" value="<?php echo count($_POST["selectionContacts"]) ?>">
	 			<?php } ?>
 			</div>


 				<?php 
 				$rq_campagne="SELECT `campagne_name`, `code_source`, `id` FROM `Campagne-mail` ORDER BY `id` DESC" ;
 				$query = $pdo->query($rq_campagne);
				$resultat = $query->fetchAll();
				$i=1;
				foreach ($resultat as $key => $value) { ?>
				<div class="campagneList">
					<span class="left selectMail"><?php echo $i++ ?></span>
					<span class="center selectMail"><?php echo $resultat[$key]['campagne_name'];?><span class="check">&nbsp;&nbsp;&check;</span></span>
					<span class="right"><a href="<?php echo $value['code_source']; ?>"  target="_blank">Voir</a></span>
					<input type="hidden" name="idMail" value="<?php echo $value['id']; ?>">
				</div>
				<?php }
 				?>
 			

 				<!-- ::::::::::::::::::: -->

 				<?php 
 				$rq_campagneSMS="SELECT `campagne_name`, `code_source` FROM `Campagne_sms`" ;
 				$querySMS = $pdo->query($rq_campagneSMS);
				$resultatSMS = $querySMS->fetchAll();
				foreach ($resultatSMS as $key => $value) { ?>
				<div class="campagneListSMS">
					<span class="left selectSms"><?php echo $key+1 ?></span>
					<span class="center selectSms"><?php echo $resultatSMS[$key]['campagne_name'];?></span>
					<span class="right"><a href="sms.php?id=<?php echo $key+1 ?>"  target="_blank">Voir</a></span>
					<input type="hidden" name="idSms" value="<?php echo $key+1 ?>">
				</div>
				<?php }
 				?>

 		</div>
 		<script src="js/campagne.js">
 		</script>

 		<script src="js/btn_select.js"></script>
 </body>
 </html>