<?php 
include ("../parametre.php");
include("../connexion_bd.php");
if(isset($_GET['id']) && $_GET['id']!=""){
$id=$_GET['id'];
$req ="SELECT * FROM `contact` WHERE `id`=$id";
$query = $pdo->query($req);
$resultat = $query->fetchAll();
	
$rq2="SELECT * FROM `contact` WHERE `groupe`!='' GROUP BY `groupe`";
$query2 = $pdo->query($rq2);
$resultat2 = $query2->fetchAll();

$rq3="SELECT * FROM `contact` WHERE `domaine`!='' GROUP BY `domaine`";
$query3 = $pdo->query($rq3);
$resultat3 = $query3->fetchAll();
	
$_SESSION['s_email']=$resultat[0]["email"];
$_SESSION['s_civilite']=$resultat[0]['civilite'];
$_SESSION['s_nom']=$resultat[0]["nom"];
$_SESSION['s_prenom']=$resultat[0]["prenom"];
$_SESSION['s_societe']=$resultat[0]["nom_societe"];
$_SESSION['s_id']=$_GET['id'];

}
	
?>
<!DOCTYPE html>
<html>
 <head>
 	<title>Dashboard</title>
 	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" href="../css/menu_style.css"> 
 	<script src="../js/jquery.js"></script>
	<script src="../js/menu.js"></script>
	<script src="../js/form.js"></script> 
	<script src="../js/btn_desabo.js"></script> 
	<script src="../js/btn_supprimer.js"></script> 
 	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
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
 			/*height:50px;*/
 			background-color:#ffffff;
 			padding:35px 0;
 			margin: 5px 0;
 			text-align: center;
 			font-family: Arial;
 			vertical-align: center;
 			color:#4A72B2;
 			/*border-left:4px solid #523f94;*/
 		}

 		.box a {
 			color:#4A72B2;
 			text-decoration: none;
 		}

 		.box-profil {
 			/*background-color:rgba(255,255,255,0.5);*/
	
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

 		/*.box input,.box select {
 			display: block;
 			margin: 5px auto;
 			color:#000000;
 			border:2px solid #523f94;
 			width: 190px;
 			height:30px;
 			text-align:left;
 			padding-left:10px;
 			-webkit-appearance: none;
			-moz-appearance: none;
			appearance: none;
 		}*/

 		input[type=submit]{
 			text-align: center !important;
 			background-color: #523f94 !important;
 			color:#FFFFFF !important;
 			border-radius: 13px !important;
 			cursor: pointer;
 		}

 		/*==================Carte*/
 			.blockCard{
 			width: 280px;
 			height:383px;
 			margin: 0 auto;
			/*padding-top:300px; 	*/
 			position: relative;
 			padding:0 5px !important;

 		}


 		.blockCardProHomme{
 			background: url('../imgs/modification_HommePro.png') center center no-repeat;
 			
 		}

 		.blockCardPersoHomme{
 			background: url('../imgs/modification_HommePerso.png') center center no-repeat;
 			
 		}

 		.blockCardPersoFemme{
 			background: url('../imgs/modification_FemmePerso.png') center center no-repeat;
 			
 		}

 		.blockCardProFemme{
 			background: url('../imgs/modification_FemmePro.png') center center no-repeat;
 			
 		}

 		.infosContact {
 			position: absolute;
 			top: 5px;
 			left:115px;
 			font-family: Arial;
 			font-size: 9.4px;
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


 		/*=================== Input*/


		input {
/* 			background-color: #623c98;
*/ 			
			/*color:#ffffff;*/
 			width:150px;
 			height: 12px;
 			border:0;
 			background:rgba( 0, 0, 0, 0);
 			font-size: 9.4px;
 			color:rgba(255,255,255,0.5);
			border-radius:0;
 			/*padding-left: 4px;*/
 		}

 		select {
 			/*color:#ffffff;*/
 			width:120px;
 			border:0;
 			background:rgba( 0, 0, 0, 0);
 			font-size: 9.4px;
 			-webkit-appearance: none;
			-moz-appearance: none;
			appearance: none;
			color:rgba(255,255,255,0.5);
			border-radius:0;
			/*padding: 0 !important;*/
			
			background-image: url(../imgs/icon-select-modifie.png);
			background-size: .8em;
			background-repeat: no-repeat;
			background-position: calc(100% - .4em) center;
 		}

 		option {
 			background-color:#ffffff;
 			color:#000000;	
 			/*color:rgba(255,255,255,0.5);*/
 			/*padding: 0 !important;*/
 		}

 		/*=============Input*/

 		.desabo {
 			/*background-color:#dba126; */
 			border-left: 20px solid #dba126;
 		}

 		.suppression {
 			/*background-color:#e15738 !important;*/
 			border-left: 20px solid #e15738 !important;
 		}

 		.btn-modifier,.btn-desabo,.btn-supprimer {
 			cursor: pointer;
 		}

		
		.groupeSuperposition {
			position:relative;
/*
			display: inline-block;
*/
			width: 120px;
			display: block;
		}
		
		#domaineTxt,#groupeTxt {
			position: relative;
			width: 100px;
			top:0;
			left:0;
/*
			background-color: #ffffff;
*/
			z-index: 10;
			
		}
		
		#groupeSelect,#domaineSelect {
			position: absolute;
			width: 120px;
			
			top:0;
			left:0;
			z-index:0;
			color:rgba(0,0,0,0);
		}
	

 	</style>	
 </head>
 <body>
 		<div class="globalcontenu">
 			<div class="nav">
 				<span class="menu"> <img src="../imgs/btn-menu.png"> </span>
				<h1>DASHBOARD</h1>
 				<?php //<span> <input type="text" name="recherche" id="recherche"> </span>?>
 			</div>
 			<div class="contenu">
 				<?php //Menu  ?>
					<?php include("../menu_include.php"); ?>
				<?php //Menu  ?>
 				<div class="box padding15 <?php if($resultat[0]['desabo']=="true"){echo " desabo";} if($resultat[0]['suppression']=="true"){echo " suppression";} ?>">
					 Contact <?php echo $_GET['id'];?>		
 				</div>
 				
 				<?php foreach ($resultat as $key => $value) { ?> 				

 				<div class="box padding15">
 					<form action="#" method="POST" id="form">
 					<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
					<input type="hidden" name="desabo" value="">
					<input type="hidden" name="suppression" value="">
 					<div class="globalBlockCard">
			 			<div class="blockCard <?php 
			 			if($resultat[0]['civilite']=='Madame' && $resultat[0]['type_relation']=='Professionnelle'){echo 'blockCardProFemme';}else 
			 			if($resultat[0]['civilite']=='Madame' && $resultat[0]['type_relation']=='Personnelle'){echo 'blockCardPersoFemme';} else
			 			if($resultat[0]['civilite']=='Monsieur' && $resultat[0]['type_relation']=='Professionnelle'){echo 'blockCardProHomme';}else	
			 			if($resultat[0]['civilite']=='Monsieur' && $resultat[0]['type_relation']=='Personnelle'){echo 'blockCardPersoHomme';}
			 			?>">
				 			<div class="infosContact">
				 				<div class="sizeTxt">
									<strong>Relation:</strong> <br>
					 				<select name="type_relation">
					 					<option <?php if($resultat[0]['type_relation']=="Professionnelle"){echo "selected";} ?>>Professionnelle</option>
					 					<option <?php if($resultat[0]['type_relation']=="Personnelle"){echo "selected";} ?>>Personnelle</option>
					 				</select>
				 				</div>
				 				<div class="sizeTxt">
									<strong>Civilité:</strong> <br>
					 				<select name="civilite">
					 					<option <?php if($resultat[0]['civilite']=="Monsieur"){echo "selected";} ?>>Monsieur</option>
					 					<option <?php if($resultat[0]['civilite']=="Madame"){echo "selected";} ?>>Madame</option>
					 				</select>
				 				</div>
				 				<div class="sizeTxt">
									<strong>Prénom:</strong><br>
					 				<input type="text" name="prenom" value="<?php echo $resultat[0]["prenom"]; ?>">
				 				</div>
				 				<div class="sizeTxt">
									<strong>Nom:</strong><br>
					 				<input type="text" name="nom" value="<?php echo $resultat[0]["nom"]; ?>">
				 				</div>
				 				<div class="sizeTxt">
				 					<strong>E-mail:</strong> <br>
				 					<input type="text" name="email" value="<?php echo $resultat[0]["email"]; ?>">
				 				</div>
				 				<div class="sizeTxt">
				 					<strong>Société:</strong> <br>
				 					<input type="text" name="societe" value="<?php echo $resultat[0]["nom_societe"]; ?>">
				 				</div>
				 				<div class="sizeTxt">
									<strong>Code postal:</strong><br>
					 				<input type="text" name="cp" value="<?php echo $resultat[0]["cp"]; ?>">
				 				</div>	
				 				<div class="sizeTxt">
									<strong>Domaine:</strong><br> 
									<div class="groupeSuperposition">
									<input id="domaineTxt" type="text" name="domaine" placeholder="Domaine" value="<?php echo $resultat[0]['domaine'] ?>">
					 				<select id="domaineSelect" name="domaineSelect">
					 					<option value=""></option>
										<?php foreach($resultat3 as $key=>$value){ ?>
										<option  value="<?php echo $resultat3[$key]['domaine']?>"><?php echo $resultat3[$key]['domaine']?></option>
										<?php } ?>
									</select>
									</div>
				 				</div>
								<div class="sizeTxt">
									<strong>Groupe</strong><br>
									<div class="groupeSuperposition">
									<input id="groupeTxt" type="text" placeholder="Groupe" name="groupe" value="<?php echo $resultat[0]['groupe']?>">
									<select id="groupeSelect" name="groupeSelect">
									<option value=""></option>
									<?php foreach($resultat2 as $key=>$value){ ?>
									<option  value="<?php echo $resultat2[$key]['groupe']?>"><?php echo $resultat2[$key]['groupe']?></option>
									<?php } ?>
									</select>
									</div>	
								</div>	
				 				<div class="sizeTxt">
									<strong>Téléphone:</strong><br>
					 				<input type="text" name="tel" value="<?php echo $resultat[0]["tel_fixe"]; ?>">
				 				</div>
				 				<div class="sizeTxt">
									<strong>Réseau:</strong> <br>
					 				<input type="text" name="reseaux" value="<?php echo $resultat[0]["Reseaux"]; ?>">
				 				</div>
				 				<div class="sizeTxt">
									<strong>Date de naissance:</strong><br>
					 				<input type="text" name="anniversaire" value="<?php echo $resultat[0]["naissance"]; ?>">
				 				</div>
				 				<div class="sizeTxt">
									<strong>Derniere modification:</strong><br>
					 				<input type="text" name="modification" disabled  value="<?php echo $resultat[0]["id_date"]; ?>">
				 				</div>
				 				<div class="sizeTxt">
									<strong>Dernier envoi Mail:</strong><br>
					 				<input type="text" name="envoi_mail" disabled  value="<?php echo $resultat[0]["id_dernier_mail"]; ?>">
				 				</div>
				 				<div class="sizeTxt">
									<strong>Autoreply:</strong><br>
					 				<input type="text" name="autoreply" disabled  value="<?php if($resultat[0]["autoreply"]==""){echo "Null";}else {echo $resultat[0]["autoreply"];} ?>">
				 				</div>	
				 			</div>
			 			</div>
			 		</div>
			 		<div class="globalBtn">
			 			<div class="btn">
			 				<a href="../valider.php?origine=voir&id=<?php echo $id; ?>"><img  src="../imgs/btn_mail.png" class="btn-mail" width="65" height="27" alt=""></a>
				 			<img  src="../imgs/btn-carte-modifier.png" class="btn-modifier" width="65" height="27" alt=""><br>
			 				<?php if($resultat[0]["desabo"]!="true") { ?>
								<img  src="../imgs/btn_desabo.png" class="btn-desabo" width="65" height="27" alt="">
							<?php } else { ?>
								<img  src="../imgs/btn_abonner.png" class="btn-abonner" width="65" height="27" alt="">
							<?php } ?>
							
							<?php if($resultat[0]["suppression"]!="true") { ?>
				 				<img  src="../imgs/btn_supprimer.png" class="btn-supprimer" width="65" height="27" alt="">
							<?php } else { ?>
				 				<img  src="../imgs/btn_ajouter.png" class="btn-ajouter" width="65" height="27" alt="">
							<?php } ?>
						</div>
			 		</div>
			 	  </form>
 				</div>
 				<?php } ?>
 				<?php  // Espace a dupliquer fin ?>
 			</div>
 		</div>
 		<script src="../js/btn_modification.js"></script>
 </body>
 </html>