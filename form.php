<?php
include("parametre.php");
include("connexion_bd.php");
if($_GET["session"]=="ini"){session_destroy();unset($_SESSION);}

$rq="SELECT * FROM `contact` WHERE `groupe`!='' GROUP BY `groupe`";
$query = $pdo->query($rq);
$resultat = $query->fetchAll();

$rq2="SELECT * FROM `contact` WHERE `groupe`!='' GROUP BY `domaine`";
$query2 = $pdo->query($rq2);
$resultat2 = $query2->fetchAll();

?>
<!DOCTYPE html>
<html>
 <head>
 	<title>Formulaire d'ajout de contact</title>
 	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
 	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<script src="js/jquery.js"></script>
 	<script src="js/form.js"></script> 
 	<style type="text/css">
 		body {
 			background:url("imgs/bg.png") repeat-x;
 			background-color: #7f4d9b;
 			width: 100%;
 			margin: 0;
 			padding: 0;
 		}
 		.global {
 			background: url('imgs/form-vierge-4.png') center center no-repeat;
 			width: 318px;
 			height:631px;
 			margin: 0 auto;
 			position:relative;
 		}
 		.input {
 			position: absolute;
 			top:90px;
 			left:145px;
 		}
 		.alignement {
 			padding-bottom:10px;
 		}
 		.center {
 			text-align: center;
 		}

 		
 		::-webkit-input-placeholder {
		   color: #ffffff;
		}

		:-moz-placeholder { /* Firefox 18- */
		   color: #ffffff;  
		}

		::-moz-placeholder {  /* Firefox 19+ */
		   color: #ffffff;  
		}

		:-ms-input-placeholder {  
		   color: #ffffff;  
		}



 		input {
			color:#ffffff;
 			width:120px;
 			border:0;
 			background:rgba( 0, 0, 0, 0);
 			font-size: 13px;
 		}

 		select {
 			color:#ffffff;
 			width:120px;
 			border:0;
 			background:rgba( 0, 0, 0, 0);
 			font-size: 13px;
 			-webkit-appearance: none;
			-moz-appearance: none;
			appearance: none;
			
			background-image: url(imgs/icon-select.png);
			background-size: .8em;
			background-repeat: no-repeat;
			background-position: calc(100% - .4em) center;
			
			
				
			
 		}

		#groupeSelect {
			background-image: url(imgs/icon-select.png);
			background-size: .8em;
			background-repeat: no-repeat;
			background-position: calc(100% - .4em) center;
		}
		
		
		
 		option {
 			background-color:#ffffff;
 			color:#000000;	
 		}

		.validForm {
			position: relative;
			bottom: 0px;
		}
		
		
		.groupeSuperposition {
			position:relative;

			width: 120px;
		}
		
		.groupeSuperposition #groupeTxt,#domaineTxt {
			position: absolute;
			width: 100px;
			top:0;
			left:40px;
			z-index: 10;
			
		}
		
		.groupeSuperposition #groupeSelect,#Domaine {
			position: absolute;
			width: 120px;
			
			top:0;
			left:40px;
			z-index:0;
			color:rgba(0,0,0,0);
		}

 	</style>
 </head>
 	<body>
 		<div class="global">
 			<div class="input">
 				<form action="redirection.php" method="POST" >
 				<div class="alignement">
	 					<label for="civilite">
	 						<?php 
	 						if($_SESSION["erreur_civilite"]=="true" && isset($_SESSION["erreur_civilite"]) && $_SESSION['s_civilite']=='' && isset($_SESSION['s_civilite'])){
	 							echo "<img src='imgs/icon-form-contact-10.png' width='29' height='32 alt='' style='margin-right:5px' hspace='0' align='absmiddle' vspace='0' >" ;
	 						}else {
	 							echo "<img src='imgs/icon-form-contact-1.png' width='29' height='32' alt='' style='margin-right:5px' hspace='0' align='absmiddle' vspace='0' >" ;
	 						} 
	 						?>
	 					</label>
	 					<select id="civilite" name="civilite">
	 						<option value="" <?php if(isset($_SESSION['s_civilite'])&& $_SESSION['s_civilite']==''){echo "selected";}?> >Civilité<?php if($arrayOblig['civilite']=='true'){echo '*';} ?></option>
	 						<option value="Madame" <?php if(isset($_SESSION['s_civilite'])&& $_SESSION['s_civilite']=='Madame'){echo "selected";}?>>Madame</option>
	 						<option value="Monsieur" <?php if(isset($_SESSION['s_civilite'])&& $_SESSION['s_civilite']=='Monsieur'){echo "selected";}?>>Monsieur</option>
	 					</select>
	 				</div>		
	 				<div class="alignement">
	 					<label for="prenom">
	 						<?php 
	 						if($_SESSION["erreur_prenom"]=="true" && $_SESSION['s_prenom']=='' && isset($_SESSION['s_prenom'])){
	 							echo "<img src='imgs/".$_SESSION['img_erreur']."' width='29' height='32 alt='' style='margin-right:5px' hspace='0' align='absmiddle' vspace='0' >" ;
	 						
	 						}else {
	 							echo "<img src='imgs/icon-form-contact-1.png' width='29' height='32' alt='' style='margin-right:5px' hspace='0' align='absmiddle' vspace='0' >" ;
	 						}
	 						?>
 						</label>
	 					<input id="prenom" type="text" name="prenom" placeholder="Prénom<?php if($arrayOblig['prenom']=='true'){echo '*';} ?>"  value="<?php echo $_SESSION['s_prenom'];?>" >
	 				</div>
	 				<div class="alignement">
	 					<label for="nom">
	 						<?php 
	 						if($_SESSION["erreur_nom"]=="true" && $_SESSION['s_nom']=='' && isset($_SESSION['s_nom']) ){
	 							echo "<img src='imgs/".$_SESSION['img_erreur']."' width='29' height='32 alt='' style='margin-right:5px' hspace='0' align='absmiddle' vspace='0' >" ;

	 						}else {
	 							echo "<img src='imgs/icon-form-contact-1.png' width='29' height='32' alt='' style='margin-right:5px' hspace='0' align='absmiddle' vspace='0' >" ;
	 						}
	 						?>
	 					</label>	
	 					<input id="nom" type="text" name="nom" placeholder="Nom<?php if($arrayOblig['nom']=='true'){echo '*';} ?>" value="<?php echo $_SESSION['s_nom'] ?>">
	 				</div>
	 				<div class="alignement">
	 					<label for="email">
	 						<?php 
	 						if($_SESSION["erreur_email"]=="true" && $_SESSION['s_email']=='' && isset($_SESSION['s_email'])){
	 							 echo "<img src='imgs/".$_SESSION['img_erreur']."' width='29' height='32 alt='' style='margin-right:5px' hspace='0' align='absmiddle' vspace='0' >" ;

	 						}else {
	 							echo "<img src='imgs/icon-form-contact-2.png' width='29' height='32' alt='' style='margin-right:5px' hspace='0' align='absmiddle' vspace='0' >" ;
	 						}
	 						?>
	 					</label>

	 					<input id="email" type="text" name="email" placeholder="E-mail<?php if($arrayOblig['email']=='true'){echo '*';} ?>" value="<?php echo $_SESSION['s_email'] ?>">
	 				</div>
	 				<div class="alignement">
	 					<label for="societe">
	 						<?php 
	 						if($_SESSION["erreur_societe"]=="true" && $_SESSION['s_societe']=='' && isset($_SESSION['s_societe'])){
	 							echo "<img src='imgs/".$_SESSION['img_erreur']."' width='29' height='32 alt='' style='margin-right:5px' hspace='0' align='absmiddle' vspace='0' >" ;	 						
	 						}else {
	 							echo "<img src='imgs/icon-form-contact-3.png' width='29' height='32' alt='' style='margin-right:5px' hspace='0' align='absmiddle' vspace='0' >" ;

	 						}
	 						?>
	 					</label>
	 					<input id="societe" type="text" name="societe" placeholder="Societé<?php if($arrayOblig['societe']=='true'){echo '*';} ?>" value="<?php echo $_SESSION['s_societe'] ;?>">
	 				</div>
	 				<div class="alignement">
	 					<label for="cp">
	 						<?php 
	 						if($_SESSION["erreur_cp"]=="true" && $_SESSION['s_cp']=='' && isset($_SESSION['s_cp'])){
	 							 echo "<img src='imgs/".$_SESSION['img_erreur']."' width='29' height='32 alt='' style='margin-right:5px' hspace='0' align='absmiddle' vspace='0' >" ;

	 						}else {
	 							echo "<img src='imgs/icon-form-contact-4.png' width='29' height='32' alt='' style='margin-right:5px' hspace='0' align='absmiddle' vspace='0' >" ;
	 						}
	 						?>
	 					</label>
	 					<input id="cp" type="text" name="cp" placeholder="Code postal<?php if($arrayOblig['cp']=='true'){echo '*';} ?>" value="<?php echo $_SESSION['s_cp'] ?>">
	 				</div>
	 				<div class="alignement groupeSuperposition">
	 					<label for="domaine" >
							<?php 
	 						if($_SESSION["erreur_domaine"]=="true" && $_SESSION['s_domaine']=='' && isset($_SESSION['s_domaine'])){
	 							 	echo "<img src='imgs/".$_SESSION['img_erreur']."' width='29' height='32 alt='' style='margin-right:5px' hspace='0' align='absmiddle' vspace='0' >" ;

	 						}else {
	 								echo "<img src='imgs/icon-form-contact-5.png' width='29' height='32' alt='' style='margin-right:5px' hspace='0' align='absmiddle' vspace='0' >" ;

	 						}
	 						?>	 					
	 					</label>
						<input id="domaineTxt" type="text" name="domaine" placeholder="Domaine<?php if($arrayOblig['domaine']=='true'){echo '*';} ?>" value="<?php echo $_SESSION['s_domaine'] ?>">
						<select id="Domaine" name="domaineSelect">
	 						<!--<option value="Agroalimentaire" <?php if(isset($_SESSION['s_domaine'])&& $_SESSION['s_domaine']=='Agroalimentaire'){echo "selected";}?>>Agroalimentaire </option>
							<option value="Banque / Assurance" <?php if(isset($_SESSION['s_domaine'])&& $_SESSION['s_domaine']=='Banque / Assurance'){echo "selected";}?>>Banque / Assurance </option>
							<option value="Imprimerie" <?php if(isset($_SESSION['s_domaine'])&& $_SESSION['s_domaine']=='Imprimerie'){echo "selected";}?>>Imprimerie </option>
							<option value="BTP" <?php if(isset($_SESSION['s_domaine'])&& $_SESSION['s_domaine']=='BTP'){echo "selected";}?>>BTP </option>
							<option value="Chimie" <?php if(isset($_SESSION['s_domaine'])&& $_SESSION['s_domaine']=='Chimie'){echo "selected";}?>>Chimie </option>
							<option value="Commerce" <?php if(isset($_SESSION['s_domaine'])&& $_SESSION['s_domaine']=='Commerce'){echo "selected";}?>>Commerce  </option>
							<option value="Communication" <?php if(isset($_SESSION['s_domaine'])&& $_SESSION['s_domaine']=='Communication'){echo "selected";}?>>Communication </option>
							<option value="Multimedia" <?php if(isset($_SESSION['s_domaine'])&& $_SESSION['s_domaine']=='Multimedia'){echo "selected";}?>>Multimédia </option>
							<option value="Electronique" <?php if(isset($_SESSION['s_domaine'])&& $_SESSION['s_domaine']=='Electronique'){echo "selected";}?>>Électronique </option>
							<option value="Electricite" <?php if(isset($_SESSION['s_domaine'])&& $_SESSION['s_domaine']=='Electricite'){echo "selected";}?>>Électricité </option>
							<option value="Etudes et conseils" <?php if(isset($_SESSION['s_domaine'])&& $_SESSION['s_domaine']=='Etudes et conseils'){echo "selected";}?>>Études et conseils </option>
							<option value="Industrie pharmaceutique" <?php if(isset($_SESSION['s_domaine'])&& $_SESSION['s_domaine']=='Industrie pharmaceutique'){echo "selected";}?>>Industrie pharmaceutique </option>
							<option value="Informatique" <?php if(isset($_SESSION['s_domaine'])&& $_SESSION['s_domaine']=='Informatique'){echo "selected";}?>>Informatique </option>
							<option value="Telecoms" <?php if(isset($_SESSION['s_domaine'])&& $_SESSION['s_domaine']=='Telecoms'){echo "selected";}?>>Télécoms </option>
							<option value="Automobile" <?php if(isset($_SESSION['s_domaine'])&& $_SESSION['s_domaine']=='Automobile'){echo "selected";}?>>Automobile </option>
							<option value="Metallurgie" <?php if(isset($_SESSION['s_domaine'])&& $_SESSION['s_domaine']=='Metallurgie'){echo "selected";}?>>Métallurgie </option>
							<option value="Services aux entreprises" <?php if(isset($_SESSION['s_domaine'])&& $_SESSION['s_domaine']=='Services aux entreprises'){echo "selected";}?>>Services aux entreprises </option>
							<option value="Textile" <?php if(isset($_SESSION['s_domaine'])&& $_SESSION['s_domaine']=='Textile'){echo "selected";}?>>Textile </option>
							<option value="Transports" <?php if(isset($_SESSION['s_domaine'])&& $_SESSION['s_domaine']=='Transports'){echo "selected";}?>>Transports </option>
	 						<option value="Sports" <?php if(isset($_SESSION['s_domaine'])&& $_SESSION['s_domaine']=='Sports'){echo "selected";}?>>Sports </option>
	 						<option value="Web" <?php if(isset($_SESSION['s_domaine'])&& $_SESSION['s_domaine']=='Web'){echo "selected";}?>>Web </option>
	 						-->
							<option value="" <?php if(isset($_SESSION['s_domaine'])&& $_SESSION['s_domaine']==''){echo "selected";}?> ></option>
							<?php foreach($resultat2 as $key=>$value){ ?>
							<option <?php if(isset($_SESSION['s_domaine'])&& $_SESSION['s_domaine']==$resultat2[$key]['domaine']){echo "selected";}?> value="<?php echo $resultat2[$key]['domaine']?>"><?php echo $resultat2[$key]['domaine']?></option>
							<?php } ?>
						</select>	 				
	 				</div>
	 				<!-- <div class="alignement">
	 					<label for="theme" >
							<?php 
	 						if($_SESSION["erreur_theme"]=="true" && $_SESSION['s_theme']=='' && isset($_SESSION['s_theme'])){
	 							 	echo "<img src='imgs/".$_SESSION['img_erreur']."' width='29' height='32 alt='' style='margin-right:5px' hspace='0' align='absmiddle' vspace='0' >" ;

	 						}else {
	 								echo "<img src='imgs/icon-form-contact-5.png' width='29' height='32' alt='' style='margin-right:5px' hspace='0' align='absmiddle' vspace='0' >" ;

	 						}
	 						?>	 					
	 					</label>
						<select id="theme" name="theme">
	 						<option value="" <?php if(isset($_SESSION['s_theme'])&& $_SESSION['s_theme']==''){echo "selected";}?> >theme<?php if($arrayOblig['theme']=='true'){echo '*';} ?></option>
	 						<option value="Allyteams" <?php if(isset($_SESSION['s_theme'])&& $_SESSION['s_theme']=='Allyteams'){echo "selected";}?>>Allyteams </option>
	 					</select>	 				
	 				</div> -->
					<div class="alignement groupeSuperposition">
	 					<label for="groupe">
	 						<?php 
		 						if($_SESSION["erreur_groupe"]=="true" && $_SESSION['s_groupe']=='' && isset($_SESSION['s_groupe'])){
		 							echo "<img src='imgs/".$_SESSION['img_erreur']."' width='29' height='32 alt='' style='margin-right:5px' hspace='0' align='absmiddle' vspace='0' >" ;
		 						}else {
		 							echo "<img src='imgs/icon-form-contact-11.png' width='29' height='32' alt='' style='margin-right:5px' hspace='0' align='absmiddle' vspace='0' >" ;

		 						}
	 						?>
	 					</label>
<!--
						<div class="groupeSuperposition">
-->
	 					<input id="groupeTxt" type="text" name="groupe" placeholder="Groupe<?php if($arrayOblig['groupe']=='true'){echo '*';} ?>" value="<?php echo $_SESSION['s_groupe'] ?>">
	 					<select name="selectGroupe" id="groupeSelect">
							<option value=""></option>
							<?php foreach($resultat as $key=>$value){ ?>
							<option <?php if(isset($_SESSION['s_groupe'])&& $_SESSION['s_groupe']==$resultat[$key]['groupe']){echo "selected";}?> value="<?php echo $resultat[$key]['groupe']?>"><?php echo $resultat[$key]['groupe']?></option>
							<?php } ?>
						</select>
<!--
						</div>
-->
					</div>
	 				<div class="alignement">
	 					<label for="tel">
	 						<?php 
		 						if($_SESSION["erreur_tel"]=="true" && $_SESSION['s_tel']=='' && isset($_SESSION['s_tel'])){
		 							echo "<img src='imgs/".$_SESSION['img_erreur']."' width='29' height='32 alt='' style='margin-right:5px' hspace='0' align='absmiddle' vspace='0' >" ;
		 						}else {
		 							echo "<img src='imgs/icon-form-contact-6.png' width='29' height='32' alt='' style='margin-right:5px' hspace='0' align='absmiddle' vspace='0' >" ;

		 						}
	 						?>
	 					</label>
	 					<input id="tel" type="text" name="tel" placeholder="Téléphone<?php if($arrayOblig['tel']=='true'){echo '*';} ?>" value="<?php echo $_SESSION['s_tel'] ?>">
	 				</div>
	 				<div class="alignement">
	 					<label for="Reseaux">
							<?php 
		 						if($_SESSION["erreur_Reseaux"]=="true" && $_SESSION['s_Reseaux']=='' && isset($_SESSION['s_Reseaux']) ){
		 								echo "<img src='imgs/".$_SESSION['img_erreur']."' width='29' height='32 alt='' style='margin-right:5px' hspace='0' align='absmiddle' vspace='0' >" ;

		 						}else {
		 							echo "<img src='imgs/icon-form-contact-9.png' width='29' height='32' alt='' style='margin-right:5px' hspace='0' align='absmiddle' vspace='0' >" ;

		 						}
	 						?>	 
	 					</label>
	 					<input id="Reseaux" type="text" name="Reseaux" placeholder="Réseaux<?php if($arrayOblig['Reseaux']=='true'){echo '*';} ?>" value="<?php echo $_SESSION['s_Reseaux'] ?>">
	 				</div>
	 				<div class="alignement">
	 					<label for="relation">
							<?php 
		 						if(isset($_SESSION["erreur_relation"]) && $_SESSION["erreur_relation"]=="true" &&  $_SESSION['s_relation']=='' && isset($_SESSION['s_relation'])){
		 							echo "<img src='imgs/".$_SESSION['img_erreur']."' width='29' height='32 alt='' style='margin-right:5px' hspace='0' align='absmiddle' vspace='0' >" ;
		 						}else {
		 							echo "<img src='imgs/icon-form-contact-7.png' width='29' height='32' alt='' style='margin-right:5px' hspace='0' align='absmiddle' vspace='0' >" ;
		 						}
	 						?>	 					
	 					</label>

	 					<select id="relation" name="relation">
	 						<option value="" <?php if(isset($_SESSION['s_relation'])&& $_SESSION['s_relation']==''){echo "selected";}?>>Relation<?php if($arrayOblig['relation']=='true'){echo '*';} ?></option>
	 						<option value="Professionnelle" <?php if(isset($_SESSION['s_relation'])&& $_SESSION['s_relation']=='Professionnelle'){echo "selected";}?>>Professionnelle</option>
	 						<option value="Personnelle" <?php if(isset($_SESSION['s_relation'])&& $_SESSION['s_relation']=='Personnelle'){echo "selected";}?>>Personnelle</option>
	 					</select>
	 				</div>
	 				<div class="alignement">
	 					<label for="anniversaire"> 
							<?php 
	 						if(isset($_SESSION["erreur_anniversaire"]) && $_SESSION["erreur_anniversaire"]=="true" && $_SESSION['s_anniversaire']=='' && isset($_SESSION['s_anniversaire'])){
	 								echo "<img src='imgs/".$_SESSION['img_erreur']."' width='29' height='32 alt='' style='margin-right:5px' hspace='0' align='absmiddle' vspace='0' >" ;

	 						}else {
	 							echo "<img src='imgs/icon-form-contact-8.png' width='29' height='32' alt='' style='margin-right:5px' hspace='0' align='absmiddle' vspace='0' >" ;
	 						}
	 						?>
	 					</label>
	 					<input id="anniversaire" type="text" name="anniversaire" placeholder="Anniversaire<?php if($arrayOblig['anniversaire']=='true'){echo '*';} ?>" value="<?php echo $_SESSION['s_anniversaire']; ?>">
	 				</div>
	 				<div class="alignement center validForm">
	 					<input type="image" src="imgs/btn-valider.png">
	 				</div>
 				</form>
 			</div>
 		</div>	
 	</body>
 </html>	