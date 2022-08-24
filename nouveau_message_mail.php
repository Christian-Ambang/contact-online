<?php include("connexion_bd.php");
if ($_GET["videSession"]=="true"){unset($_SESSION);}
include ("parametre.php");
 $req="SELECT * FROM `Campagne-mail` WHERE `modulable`='Oui' ORDER BY `id` DESC";
 $query = $pdo->query($req);
 $resultat = $query->fetchAll();

 $req2="SELECT MAX(`id`) FROM `Campagne-mail`";
 $query2 = $pdo->query($req2);
 $resultat2 = $query2->fetch();
 $countResultat= $resultat2[0]+1;

?>
<!DOCTYPE html>
<html>
 <head>
 	<title>Dashboard</title>
 	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
 	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
 	<link rel="stylesheet" href="css/menu_style.css"> 
 	<script src="js/jquery.js"></script>
	<script src="js/menu.js"></script>
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
 			font-family: Arial,Helvetica,sans-serif;
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

 		.box input[type=text],.box select,input[type=submit], .box textarea {
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
			font-family: Arial,Helvetica,sans-serif;
			border-radius: 0;
 		}

 		.box textarea {
 			height:70px !important;
			text-align: left !important;
			font-size:14px;
			resize: none;
 		}
		

 		input[type=submit]{
 			text-align: center !important;
 			background-color: #523f94 !important;
 			color:#FFFFFF !important;
 			border-radius: 13px !important;
 			cursor: pointer;
 		}

 		

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

 		

 	</style>	
 </head>
 <body>
 		<div class="globalcontenu">
 			<div class="nav">
 				<span class="menu"> <img src="imgs/btn-menu.png"> </span>
				<h1>DASHBOARD</h1>
 				<?php //<span> <input type="text" name="recherche" id="recherche"> </span>?>
 			</div>
 			<div class="contenu">
				<?php //Menu  ?>
					<?php include("menu_include.php"); ?>
				<?php //Menu  ?>
 				<div class="box">
 					<strong>Message Mail</strong>
 				</div>
 				<div id="recherche" class="box">
 					<form action="redirection_message_mail.php" name="ajoutMessage" method="POST">
						<input type="hidden" name="id" value="<?php echo $countResultat ?>">
 						<input type="hidden" name="nouveauMessage" value="true">
						<input type="text" name="nomMessage" id="nomMessage" placeholder="Nom" value="<?php echo $_SESSION['nomMessage'] ?>" >
 						<input type="text" name="urlMessage" id="urlMessage" placeholder="URL message Html" value="<?php echo $_SESSION['urlMessage'] ?>" >
 						<input type="text" name="txtMessage" id="txtMessage" placeholder="URL message Txt" value="<?php echo $_SESSION['txtMessage'] ?>" >
 						<input type="text" name="objetMessage" id="objetMessage" placeholder="Objet" value="<?php echo $_SESSION['objetMessage'] ?>" >
	 					<select name="modulableMessage" id="modulableMessage">
	 						<option value="" <?php if($_SESSION['modulableMessage']==""){echo "selected";} ?>>Modulable</option>
	 						<option value="Oui" <?php if($_SESSION['modulableMessage']=="Oui"){echo "selected";} ?>>Oui</option>
	 						<option value="Non" <?php if($_SESSION['modulableMessage']=="Non"){echo "selected";} ?> >Non</option>
	 					</select>	
 				</div>

 				<div id="recherche" class="box">
 						<textarea id="modulableMessageText" name="modulableMessageText" placeholder="Message texte modulable"  rows="5" cols="33"><?php echo $_SESSION["modulableMessageText"]; ?></textarea>
	 					<select name="selectionMessageModulable" id="selectionMessageModulable">
							<option value="" <?php if($_SESSION['selectionMessageModulable']==""){echo "selected";} ?>>Message modulable</option>
							<?php foreach($resultat as $key=>$value) { ?>
	 						<option value="<?php echo $resultat[$key]["id"] ?>" <?php if($_SESSION['selectionMessageModulable']== $resultat[$key]['id'] ){echo "selected";} ?>><?php echo $resultat[$key]["campagne_name"] ?></option>
	 						<?php } ?>
						</select>
	 					<input type="submit" value="Ajouter">	
 					</form>
 				</div>
 				
				<?php $back=$_SESSION["back"]; if(isset($back)){ ?>
 				<div class="box padding15">
 					<?php echo $back;?>
 				</div>
 				<?php } ?>
 			</form>
 			</div>
 		</div>
 </body>
 </html>