<?php
include ("parametre.php");
include("connexion_bd.php");

?>
<!DOCTYPE html>
<html>
 <head>
 	<title>Update certifié</title>
 	<script type="text/javascript" src="js/jquery.js"></script>
 	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
 	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
 	<style type="text/css">
 		* {
		  -webkit-box-sizing: border-box;
		     -moz-box-sizing: border-box;
		          box-sizing: border-box;
		}
 		body {
 			background-color:#5b54a0;
 			width: 100%;
 			margin: 0;
 			padding: 75px 0;
 		}

 		.globalBlockMail {
 			width:100%;
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
 		}

 		.mail_sent {
 			cursor: pointer;
 		}

 		.sms_sent {
 			cursor: pointer;
 		}

 		.campagneList,.campagneListSMS,.campagneListSMSsource {
 			width: 300px;
 			margin: 5px auto;
 			padding:10px;
 			text-align: left;
 			color:#FFFFFF;
 			background-color: #7671aa;
 			border-radius: 10px;
 			margin-top: 15px;
 		}

 		.text-align-left {

 			width: 300px;
 			margin: 5px auto;
 			padding:0;
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


 	</style>
 </head>
 <body>
 	
 		<div class="globalBlockMail">

 				<!-- ::::::::::::::::::: -->

 				<?php 
	 				$id=$_GET["id"];

	 				$rq_campagne="SELECT `campagne_name`, `code_source` FROM `Campagne_sms` WHERE id=$id" ;
	 			
	 				$query = $pdo->query($rq_campagne);
					
					$resultat = $query->fetchAll();
				?>
				
				<div class="text-align-left">
					<img src="imgs/SMS.png" width="" height="">
				</div>

				<div class="campagneListSMSsource">
					<?php echo $resultat[0]["code_source"]; ?>
				</div>
				

 		</div>
 		<script src="js/campagne.js">
 		</script>
 </body>
 </html>