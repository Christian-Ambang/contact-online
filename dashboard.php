<?php
include ("parametre.php");
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
 			border-left:4px solid #523f94;
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
 				<div class="box-profil">
 					<img src="imgs/photo-ambang-christian.jpg" alt="">
 				</div>
 				<div class="box">
 					<strong>Statut</strong>
 				</div>
 				<div class="box">
 					<a href="/dashboard/contact.php"><strong>Contacts</strong></a>
 				</div>
 				<div class="box">
 					<a href="/messages_mails.php"><strong>Mail</strong></a>
 				</div>
 				<div class="box">
 					<strong>SMS</strong>
 				</div>
 				<div class="box">
 					<a href="/analytics.php" target="_blank"><strong>Analytics</strong></a>
 				</div>
 			</div>
 		</div>
 </body>
 </html>