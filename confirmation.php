<?php
include ("parametre.php");
/*
echo "<pre>";
var_dump($_SESSION);
echo "</pre>";
*/
?>
<!DOCTYPE html>
<html>
 <head>
 	<title>Page de confirmation</title>
 	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
 	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
 	<style type="text/css">
 		body {
 			background:url("imgs/bg.png") repeat-x;
 			background-color: #7f4d9b;
 			width: 100%;
 			margin: 0;
 			padding: 150px 0;
 		}

 		
 		.blockCard{
 			width: 308px;
 			height:160px;
 			margin: 0 auto;
/* 			padding-top:300px;
*/ 			/*background: url('imgs/pro-icon-homme.png') center center no-repeat #FFDF1F;*/
 			position: relative;

 		}

 		.blockCardProHomme{
 			background: url('imgs/pro-icon-homme.png') center center no-repeat;
 		}

 		.blockCardPersoHomme{
 			background: url('imgs/perso-icon-homme.png') center center no-repeat;
 		}

 		.blockCardPersoFemme{
 			background: url('imgs/perso-icon-femme.png') center center no-repeat;
 		}

 		.blockCardProFemme{
 			background: url('imgs/pro-icon-femme.png') center center no-repeat;
 		}




 		.infosContact {
 			position: absolute;
 			top: 5px;
 			left:120px;
 			font-family: Arial;
 			font-size: 9.9px;
 			color:#ffffff;
 			word-spacing: 2px;
 			letter-spacing: 0.6px;
 		}

 		.infosContact span{
 				color:rgba(255,255,255,0.5);
				word-break: break-word;
 		}

 		.globalBtn {
 			width: 100%;
 			height:auto;
 		}

 		.btn {
 			width: 307px;
 			margin: 0 auto;
 			padding-top:10px;
 			text-align: center;
 		}

 		.btn img{
 			margin-right: 15px;
 		}

 	</style>
 </head>
 <body>
 		<div class="globalBlockCard">
 			<div class="blockCard <?php 
 			if($_SESSION['s_civilite']=='Madame' && $_SESSION['s_relation']=='Professionnelle'){echo 'blockCardProFemme';}else 
 			if($_SESSION['s_civilite']=='Madame' && $_SESSION['s_relation']=='Personnelle'){echo 'blockCardPersoFemme';} else
 			if($_SESSION['s_civilite']=='Monsieur' && $_SESSION['s_relation']=='Professionnelle'){echo 'blockCardProHomme';}else	
 			if($_SESSION['s_civilite']=='Monsieur' && $_SESSION['s_relation']=='Personnelle'){echo 'blockCardPersoHomme';}
 			?>">
	 			<div class="infosContact">
	 				<strong>Relation:</strong> <span><?php echo $_SESSION["s_relation"]; ?></span><br>
	 				<strong>Civilité:</strong> <span><?php echo $_SESSION["s_civilite"]; ?></span><br>
	 				<strong>Prénom:</strong> <span><?php echo $_SESSION["s_prenom"]; ?></span><br>
	 				<strong>Nom:</strong> <span><?php echo $_SESSION["s_nom"]; ?></span><br>
	 				<strong>E-mail:</strong> <span><?php echo substr($_SESSION["s_email"],0,25); ?></span><br>
	 				<strong>Société:</strong> <span><?php echo $_SESSION["s_societe"]; ?></span><br>
	 				<strong>Code postal:</strong> <span><?php echo $_SESSION["s_cp"]; ?></span><br>
	 				<strong>Domaine:</strong> <span><?php echo $_SESSION["s_domaine"]; ?></span><br>
					<strong>Groupe:</strong> <span><?php echo $_SESSION["s_groupe"]; ?></span><br>
	 				<strong>Téléphone:</strong> <span><?php echo $_SESSION["s_tel"]; ?></span><br>
	 				<strong>Réseau:</strong> <span><?php echo $_SESSION["s_Reseaux"]; ?></span><br>
	 				<strong>Date de naissance:</strong> <span><?php echo $_SESSION["s_anniversaire"]; ?></span><br>
	 			</div>
	 			<?php //var_dump ($_SESSION) ?>
 			</div>
 		</div>
 		<div class="globalBtn">
 			<div class="btn">
	 			<a href="form.php"><img src="imgs/btn-carte-modifier.png" width="65" height="27" alt=""></a>
	 			<a href="form.php?session=ini"><img src="imgs/btn-carte-suprimer.png" width="65" height="27" alt=""></a>
	 			<a href="valider.php?origine=confirmation"><img src="imgs/btn-carte-valider.png" width="65" height="27" alt=""></a>
 			</div>
 		</div>
 </body>
 </html>