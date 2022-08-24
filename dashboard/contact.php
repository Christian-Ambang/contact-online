<?php 
include ("../parametre.php");
include("../connexion_bd.php");

if(isset($_POST)){
	if(isset($_POST["relation"]) && $_POST["relation"]!=""){$relation="'".strtoupper($_POST['relation'])."' AND ";$relationSql="UPPER(`type_relation`)=";}else { $relation="";$relationSql="";}
	if(isset($_POST["nom"]) && $_POST["nom"]!=""){$nom="'".strtoupper($_POST["nom"])."' AND ";$nomSql="UPPER(`nom`)=";}else { $nom="";$nomSql="";}
	if(isset($_POST["prenom"]) && $_POST["prenom"]!=""){$prenom="'".strtoupper($_POST["prenom"])."' AND ";$prenomSql="UPPER(`prenom`)=";}else {$prenom="";$prenomSql="";}
	if(isset($_POST["email"]) && $_POST["email"]!=""){$email="'".strtoupper($_POST["email"])."' AND ";$emailSql="UPPER(`email`)=";}else{$email="";$emailSql="";}
	if(isset($_GET["id"]) && $_GET["id"]!=""){$id="'".strtoupper($_GET["id"])."' AND ";$idSql="UPPER(`id`)=";}else{$id="";$idSql="";}


	$_SESSION["relation"]=$_POST["relation"];
	$_SESSION["nom"]=$_POST["nom"];
	$_SESSION["prenom"]=$_POST["prenom"];
	$_SESSION["email"]=$_POST["email"];
	$_SESSION["id"]=$_GET["id"];
}

$rq_contact_custom="SELECT * FROM `contact` WHERE ".$emailSql.$email.$prenomSql.$prenom.$nomSql.$nom.$relationSql.$relation.$idSql.$id;
$rq_contact_custom_COUNT="SELECT COUNT(`email`) FROM `contact` WHERE ".$emailSql.$email.$prenomSql.$prenom.$nomSql.$nom.$relationSql.$relation.$idSql.$id;

$rq_contact_groupby=substr($rq_contact_custom,0,-5);
$rq_contact=$rq_contact_groupby;

$rq_contact_count_groupby=substr($rq_contact_custom_COUNT,0,-5);
$rq_contact_count= $rq_contact_count_groupby;

if(isset($_SESSION["relation"]) && $_SESSION["relation"]!="" || isset($_SESSION["nom"]) && $_SESSION["nom"]!="" || isset($_SESSION["prenom"]) && $_SESSION["prenom"]!="" || isset($_SESSION["email"]) && $_SESSION["email"]!="" || isset($_SESSION["id"]) && $_SESSION["id"]!="") {
	 $query = $pdo->query($rq_contact);
	 $resultat = $query->fetchAll();

	 $queryCOUNT = $pdo->query($rq_contact_count);
	 $resultatCOUNT = $queryCOUNT->fetchAll();

	 $back=$resultatCOUNT[0][0]." résultat trouvé";

} else { 
$resultat = array(); $back = "Veuillez saisir au moins un champ";
}


?>
<!DOCTYPE html>
<html>
 <head>
 	<title>Dashboard</title>
 	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
 	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<link rel="stylesheet" href="../css/menu_style.css"> 
 	<script src="../js/jquery.js"></script>

	<script src="../js/multiple_btn_supprimer.js"></script> 
	<script src="../js/menu.js"></script> 
 	<style>
 	* {
		  -webkit-box-sizing: border-box;
		     -moz-box-sizing: border-box;
		          box-sizing: border-box;
		}
 		body {
 			background:url("../imgs/bg.png") repeat-x;
 			background-color: #7f4d9b;
 			 }	
 		.globalcontenu {
 			width: 100%
 		}
 		.nav {
 			width:320px;
 			height:auto;
 			margin:0 auto;
 			padding:15px;
 			background: linear-gradient(to right, #4a71b1, #58177e);
 		}

 		.nav .menu{
 			text-align: left;
 		}

 		.nav input{
 			width: 210px;
 			background-color: #ffffff;
 			color:#000000;
 			border: 0;
 			border-radius: 25px;
 			padding-left: 10px;
 			margin-left: 50px;
 		}

 		.contenu {
 			width:320px;
 			height:auto;
 			margin:0 auto;
 			padding:15px;
 			background-color: #b5b9cc;
 			text-align: center;
 		}
 		.box {
 			width: 100%;
 			background-color:#ffffff;
 			padding:35px 0;
 			margin: 5px 0;
 			text-align: center;
 			font-family: Arial;
 			vertical-align: center;
 			color:#4A72B2;
 		}

 		.box a {
 			color:#4A72B2;
 			text-decoration: none;
 		}

 		.box-profil {
	
 		}

 		.box-profil img{
 			width:100px;
 			height:auto;
 			background-color:#ffffff;
 			padding:5px;
 			border-radius: 120px;
 			border:2px solid #ffffff;
 			text-align: center;
 		}

 		.box input[type=text],.box select,input[type=submit] {
 			display: block;
 			margin: 15px auto;
 			color:#000000;
 			border:2px solid #523f94;
 			width: 190px;
 			height:30px;
 			text-align:left;
 			padding-left:10px;
 			-webkit-appearance: none;
			-moz-appearance: none;
			appearance: none;
			border-radius:0;
 		}

 		input[type=submit]{
 			text-align: center !important;
 			background-color: #523f94 !important;
 			color:#FFFFFF !important;
 			border-radius: 13px !important;
 			cursor: pointer;
 		}

 		/*==================Carte*/
 			.blockCard{
 			width: 290px;
 			height:123px;
 			margin: 0 auto;
 			position: relative;
 			padding:0 5px !important;

 		}


 		.blockCardProHomme{
 			background: url('../imgs/carte_recherche_homme_pro.png') center center no-repeat;
 			
 		}

 		.blockCardPersoHomme{
 			background: url('../imgs/carte_recherche_homme_perso.png') center center no-repeat;
 			
 		}

 		.blockCardPersoFemme{
 			background: url('../imgs/carte_recherche_femme_perso.png') center center no-repeat;
 			
 		}

 		.blockCardProFemme{
 			background: url('../imgs/carte_recherche_femme_pro.png') center center no-repeat;
 			
 		}

 		.infosContact {
 			position: absolute;
 			top: 15px;
 			left:115px;
 			font-family: Arial;
 			font-size: 10px;
 			color:#ffffff;
 			word-spacing: 2px;
 			letter-spacing: 0.6px;
 			text-align: left !important;
 		}

 		.infosContact span{
 				color:rgba(255,255,255,0.5);
 				text-overflow: ellipsis;
 		}

 		.globalBtn {
 			width: 100%;
 			height:auto;
 		}

 		.btn {
 			width: 290px;
 			margin: 0 auto;
 			text-align: right !important;
 			padding-right:8px;
 		}

 		.btn img{
 			margin-top:2px;
 		}
 		/*==================Carte*/

 		.padding15 {
 			padding: 5px 0 !important;
 		}

 		.globalBtnRecherche {
 			width: 100%;
 			height:auto;
 		}

 		.btnRecherche {
 			width: 290px;
 			margin: 0 auto;
 			text-align: right !important;
 			padding:10px 8px;
 			background-color: #ffffff;
 		}
		
		.btnRecherche2 {
 			width: 290px;
 			margin: 0 auto;
 			text-align: right !important;
 			padding:0 8px 10px 8px;
 			background-color: #ffffff;
 		}

 		.right {
 			float: right;
 			width:30px;
 		}

 		.left{
 			float: left;
 			width: 80px;
 		}

 		.clear {
 			clear: both;
 		}

 		.toutBtn {
 			cursor: pointer;
 		}
		
		
		
		.blockCard2 {
			opacity:0.4; 
		} 

 	</style>	
 </head>
 <body>
 		<div class="globalcontenu">
 			<div class="nav">
 				<span class="menu"> <img src="../imgs/btn-menu.png"> </span>
				<h1>DASHBOARD</h1>
 			</div>
 			<div class="contenu">
				<?php //Menu  ?>
					<?php include("../menu_include.php"); ?>
				<?php //Menu  ?>
 				<div class="box">
 					<a href="<?php echo $URI ;?>/form.php"><strong>Nouveau contact</strong></a>
 				</div>
 				<div id="recherche" class="box">
 					<strong>Recherche</strong>
 					<br>
 					<br>
 					<form id="formRecherche" action="#recherche" name="recherche" method="POST" target="_self">
	 					<select name="relation" id="relation">
	 						<option value="" <?php if($_SESSION['relation']==""){echo "selected";} ?>>Relation</option>
	 						<option value="Professionnelle" <?php if($_SESSION['relation']=="Professionnelle"){echo "selected";} ?>>Professionnelle</option>
	 						<option value="Personnelle" <?php if($_SESSION['relation']=="Personnelle"){echo "selected";} ?> >Personnelle</option>
	 					</select>	
	 					<input type="text" name="nom" id="nom" placeholder="nom" value="<?php echo $_SESSION['nom'] ?>" >
	 					<input type="text" name="prenom" id="prenom" placeholder="prenom"  value="<?php echo $_SESSION['prenom'] ?>" >
	 					<input type="text" name="email" id="email" placeholder="email"  value="<?php echo $_SESSION['email'] ?>" >
	 					<input type="submit" value="trouver" onsubmit="return=false">
 					</form>
 				</div>
 				
 				<div class="box padding15">
 					<?php echo $back;?>
 				</div>
 				<form action="../valider.php" id="#form" method="POST">
 				<?php foreach ($resultat as $key => $value) { ?>
 				<div class="box padding15">
 					<div class="globalBlockCard">
			 			<div class="blockCard 
						<?php
						if($resultat["$key"]['desabo']=="true" || $resultat["$key"]['suppression']=="true" ){echo " blockCard2 ";}		
						?>			
						<?php 
			 			if($resultat["$key"]['civilite']=='Madame' && $resultat["$key"]['type_relation']=='Professionnelle'){echo 'blockCardProFemme';}else 
			 			if($resultat["$key"]['civilite']=='Madame' && $resultat["$key"]['type_relation']=='Personnelle'){echo 'blockCardPersoFemme';} else
			 			if($resultat["$key"]['civilite']=='Monsieur' && $resultat["$key"]['type_relation']=='Professionnelle'){echo 'blockCardProHomme';}else	
			 			if($resultat["$key"]['civilite']=='Monsieur' && $resultat["$key"]['type_relation']=='Personnelle'){echo 'blockCardPersoHomme';}
			 			?>">
			 			<div class="infosContact">
			 				<strong>Civilité:</strong> <span><?php echo $resultat["$key"]['civilite'] ?></span><br>
			 				<strong>Prénom:</strong> <span><?php echo $resultat["$key"]['prenom'] ?></span><br>
			 				<strong>Nom:</strong> <span><?php echo $resultat["$key"]['nom'] ?></span><br>
			 				<strong>E-mail:</strong> <br><span><?php echo substr($resultat["$key"]['email'],0,25) ?></span><br>
			 				<strong>Société:</strong> <span><?php echo $resultat["$key"]['nom_societe'] ?></span><br>
			 				<strong>Téléphone:</strong> <span><?php echo $resultat["$key"]['tel_fixe'] ?></span><br>
			 			</div>
			 			</div>
			 		</div>
			 		<div class="globalBtn">
			 			<div class="btn left">
				 			<a href="voir_contact.php?id=<?php echo $resultat["$key"]['id'] ?>" target="_blank"><img src="../imgs/btn_voir.png" width="65" height="27" alt=""></a>
			 			</div>
			 			<div class="checkBox right">
			 				<input class="selctionCheckBox" type="checkbox" name="selectionContacts[]" value="<?php echo $resultat["$key"]['id'] ;?>">
			 			</div>
			 			<div class="clear"></div>
			 		</div>
 				</div>
 				<?php } ?>
 				<?php
 				if ($resultatCOUNT[0][0]!=0) { ?>
 					<div class="globalBtnRecherche">
			 			<div class="btnRecherche">
			 				<img src="../imgs/btn_tout.png" class="toutBtn" width="71" height="30" alt="">
			 				<input type="image" onclick="this.form.submit();"  src="../imgs/btn_sms.png" width="71" height="30" alt="">
			 				<input type="image" onclick="this.form.submit();" src="../imgs/btn_mail.png" width="71" height="30" alt="">
			 				<input type="hidden" name="origine" value="contact">			 			
			 			</div>
						<div class="btnRecherche2">
							<img class="btn-supprimer-multiple" src="../imgs/btn_supprimer.png" width="71" height="30" alt="">
							<img class="btn-desabo-multiple" src="../imgs/btn_desabo.png" width="71" height="30" alt="">
						</div>
			 		</div>
 				<?php } ?>
 			</form>
 			</div>
 		</div>
 		<script src="../js/btn_select_tout_checkBox.js"></script>
 </body>
 </html>