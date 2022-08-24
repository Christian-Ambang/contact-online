<?php 
include("connexion_bd.php");
include ("parametre.php");
$rq_campagne="SELECT * FROM `Campagne-mail` ORDER BY `id` DESC" ;
$query = $pdo->query($rq_campagne);
$resultat = $query->fetchAll();

$req2="SELECT MAX(`id`) FROM `Campagne-mail`";
$query2 = $pdo->query($req2);
$resultat2 = $query2->fetch();

//var_dump($resultat2[0]+1);
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
		          font-family: Arial,Helvetica,sans-serif;
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
			border-radius: 0;
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
 		

 		/* Ajout*/
 		.tableMessages tr {
 			background-color: #ffffff;
 		}
 		.tableMessages td {
 			color:#4A72B2;
 			padding: 5px;
 			text-align: left;
 		}

 		.tableMessages td a{
 			color:#4A72B2;
 			text-decoration: none;
 		}
 	
 		.tableMessages .border {
 			border-left:3px solid #4A72B2;
 		}
		
		.backgroundSelect td{
/*
			background-color: #cdd1e5;
*/
			background-color: #64d99b;
			color:#ffffff !important;
		}
		
		.backgroundSelect td a{
/*
			background-color: #cdd1e5;
*/
			color:#ffffff !important;
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
 					<a href="nouveau_message_mail.php?videSession=true"><strong>Nouveau message</strong></a>
 				</div>
 				<div id="recherche" class="box">
 					<strong>Messages Mails</strong>	
 				</div>
 				
 						<div>
	 						<table class="tableMessages" align="center" width="290" style="width:290px;border-spacing: 0px 5px;" cellpadding="0"  border="0">
		 						<?php $i=1; foreach ($resultat as $key => $value) { ?>
		 							
				 							<tr class="<?php if($_GET["id"]==$resultat[$key]['id']){ echo "backgroundSelect";}?>">
					 							<td class="border">
					 								<?php echo $i++ ?>
					 							</td>
					 							<td>
					 								<?php echo substr($resultat[$key]['campagne_name'],0,13) ?> 
					 							</td>	
					 							<td>
					 								<a href="<?php echo $resultat[$key]['code_source']; ?>" target="_blank">Voir</a>
					 							</td>
					 							<td>
					 								<a href="<?php echo "modifier_nouveau_message_mail.php?idMessage=".$resultat[$key]['id'] ?>" target="_self">Modifier</a>
					 							</td>
					 						</tr>
							 			
		 						<?php } ?>
 							</table>
			 			</div>
 			</div>
 		</div>
 </body>
 </html>