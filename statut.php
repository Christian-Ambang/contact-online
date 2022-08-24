<?php include ("parametre.php");

include("connexion_bd.php");
$req="SELECT * FROM `Statut_profil`";
$query = $pdo->query($req);
$resultat = $query->fetchAll();

?>
<!DOCTYPE html>
<html>
 <head>
 	<title>Dashboard</title>
 	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
 	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<link rel="stylesheet" href="css/menu_style.css"> 
 	<script src="js/jquery.js"></script>
 	<script src="js/btn_modification.js"></script>
	<script src="js/menu.js"></script> 
 	<style>
 	* {
		  -webkit-box-sizing: border-box;
		     -moz-box-sizing: border-box;
		          box-sizing: border-box;
		}
 		body {
 			background:url("imgs/bg.png") repeat-x;
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
		
	/* file */
	.file{
		position: relative;
		margin: 5px 0 10px 0;
	}
	 input[type="file"] {
	  position: absolute;
	  display: inline-block;
	  left: 0;
	  top: 0;
	  opacity: 0.01;
	  cursor: pointer;
	}

	.file label {
	  width:190px;	
	  background: #ffffff;
	  border:2px solid #523f94;	
	  padding: 5px 71px;
	  color: #523f94;
	  font-weight: bold;
	  font-size: .9em;
	  cursor:pointer;
	  font-family: Arial,Helvetica,sans-serif;
	}

	.fileOk {
	  background: #e2a742 !important;
	  color:#ffffff !important;
	  border:0 !important;
		padding: 5px 74.5px !important;

	}
	/* file */
	
	#actuellement input {
		display: inline-block;
		margin-left: 15px;
		}
		
	#actuellement span,#actuellement label{
		color:#727171;
		}	
		
    #enregistrer {
			padding:15px 0!important;
		}	
	
	.box .inlineBlock input{
			display:inline-block !important;
			margin: 15px 0 0 0!important;			
			width:92px !important;
		}
			
 	</style>	
 </head>
 <body>
 		<div class="globalcontenu">
 			<div class="nav">
 				<span class="menu"> <img src="imgs/btn-menu.png"> </span>
				<h1>DASHBOARD</h1>
 			</div>
 			<div class="contenu">
				<?php //Menu  ?>
						<?php include("menu_include.php"); ?>
				<?php //Menu  ?>
 				<div class="box">
 					<strong>Statut</strong>
 				</div>
 				<div id="recherche" class="box">
 					
 					<form action="statut_redirection.php" name="recherche" method="POST" target="_self" enctype="multipart/form-data">
						<strong>Profil</strong>	
						<br>
						<br>
						<p class="file">
						<input type="file" name="file" id="file" value="<?php echo $_SESSION["file"]; ?>">
						<label for="file">IMAGE</label>	
						</p>
						<input type="text" name="nom" id="nom" placeholder="Nom" value="<?php echo $resultat[0]['Nom'] ?>" >
	 					<input type="text" name="prenom" id="prenom" placeholder="Prenom"  value="<?php echo $resultat[0]['Prenom'] ?>" >
	 					<input type="text" name="email" id="email" placeholder="Email"  value="<?php echo $resultat[0]['Email'] ?>" >
	 					<input type="text" name="siteWeb" id="siteWeb" placeholder="Site web"  value="<?php echo $resultat[0]['siteWeb'] ?>" >
	 					<input type="text" name="adresse" id="adresse" placeholder="Adresse"  value="<?php echo $resultat[0]['adresse'] ?>" >
	 					<input type="text" name="ville" id="ville" placeholder="Ville"  value="<?php echo $resultat[0]['ville'] ?>" >
	 					<input type="text" name="dateNaissance" id="dateNaissance" placeholder="Date de naissance"  value="<?php echo $resultat[0]['dateNaissance'] ?>" >
	 					<input type="text" name="nationalite" id="nationalite" placeholder="Nationalité"  value="<?php echo $resultat[0]['nationalite'] ?>" >
						
					</div>
					<div id="actuellement" class="box">
						<strong>Actuellement</strong>
						<br>
						<br>
							<div>
							<span>En poste :</span> 
								       <input id="enPosteOui" type="radio" name="enPoste" value="Oui" <?php if($resultat[0]['Poste']=="Oui"){echo "checked";} ?>><label for="enPosteOui">Oui</label> 
									   <input id="enPosteNon" type="radio" name="enPoste" value="Non" <?php if($resultat[0]['Poste']=="Non"){echo "checked";}?> ><label for="enPosteNon">Non</label>
							</div>
							<br>
							<div>
							<span>En recherche :</span> 
								       <input id="enRechercheOui" type="radio" name="enRecherche" value="Oui" <?php if($resultat[0]['Recherche']=="Oui"){echo "checked";}?>><label for="enRechercheOui">Oui</label> 
									   <input id="enRechercheNon" type="radio" name="enRecherche" value="Non" <?php if($resultat[0]['Recherche']=="Non"){echo "checked";}?>><label for="enRechercheNon">Non</label>
							</div>
						</div>
					<div id="competence" class="box">
						<strong>Compétences</strong>	
						<br>
						<input type="text" name="competence1" id="competence1" placeholder="Compétence"  value="" >
						<input type="text" name="competence2" id="competence2" placeholder="Compétence"  value="" >
						<input type="text" name="competence3" id="competence3" placeholder="Compétence"  value="" >
						<input type="text" name="competence4" id="competence4" placeholder="Compétence"  value="" >
						<input type="text" name="competence5" id="competence5" placeholder="Compétence"  value="" >
						
					</div>
					<div id="fonrmation" class="box">
						<strong>Formations</strong>	
						<br>
						<div class="inlineBlock">
							<input type="text" name="periodeFormation1" id="periodeFormation1" placeholder="2018/2019"  value="" >
							<input type="text" name="formation1" id="formation1" placeholder="Formation"  value="" >
						</div>
						<div class="inlineBlock">
							<input type="text" name="periodeFormation2" id="periodeFormation2" placeholder="2018/2019"  value="" >
							<input type="text" name="formation2" id="formation2" placeholder="Formation"  value="" >
						</div>
						<div class="inlineBlock">
							<input type="text" name="periodeFormation3" id="periodeFormation3" placeholder="2018/2019"  value="" >
							<input type="text" name="formation3" id="formation3" placeholder="Formation"  value="" >
						</div>
						<div class="inlineBlock">
							<input type="text" name="periodeFormation4" id="periodeFormation1" placeholder="2018/2019"  value="" >
							<input type="text" name="formation4" id="formation4" placeholder="Formation"  value="" >
						</div>
						<div class="inlineBlock">
							<input type="text" name="periodeFormation5" id="periodeFormation5" placeholder="2018/2019"  value="" >
							<input type="text" name="formation5" id="formation5" placeholder="Formation"  value="" >
						</div>
						
					</div>
					<div id="experiences" class="box">
						<strong>Expériences</strong>	
						<br>
						<div class="inlineBlock">
							<input type="text" name="periodeExperience1" id="periodeExperience1" placeholder="2018/2019"  value="" >
							<input type="text" name="Experience1" id="Experience1" placeholder="Expérience"  value="" >
						</div>
						<div class="inlineBlock">
							<input type="text" name="periodeExperience2" id="periodeExperience2" placeholder="2018/2019"  value="" >
							<input type="text" name="Experience2" id="Experience2" placeholder="Expérience"  value="" >
						</div>
						<div class="inlineBlock">
							<input type="text" name="periodeExperience3" id="periodeExperience3" placeholder="2018/2019"  value="" >
							<input type="text" name="Experience3" id="Experience3" placeholder="Expérience"  value="" >
						</div>
						<div class="inlineBlock">
							<input type="text" name="periodeExperience4" id="periodeExperience1" placeholder="2018/2019"  value="" >
							<input type="text" name="Experience4" id="Experience4" placeholder="Expérience"  value="" >
						</div>
						<div class="inlineBlock">
							<input type="text" name="periodeExperience5" id="periodeExperience5" placeholder="2018/2019"  value="" >
							<input type="text" name="Experience5" id="Experience5" placeholder="Expérience"  value="" >
						</div>
						
					</div>
					<div id="interet" class="box">
						<strong>Intérêt</strong>	
						<br>
						<input type="text" name="interet1" id="interet1" placeholder="Intérêt"  value="" >
						<input type="text" name="interet2" id="interet2" placeholder="Intérêt"  value="" >
						<input type="text" name="interet3" id="interet3" placeholder="Intérêt"  value="" >
						<input type="text" name="interet4" id="interet4" placeholder="Intérêt"  value="" >
						<input type="text" name="interet5" id="interet5" placeholder="Intérêt"  value="" >
						
					</div>
					<div id="enregistrer" class="box">
						<input type="submit" value="Enregistrer" onsubmit="return=false">
					</div>	
 					</form>
					
 				
 			</form>
 			</div>
 		</div>
 		<script src="../js/btn_select_tout_checkBox.js"></script>
 </body>
 </html>