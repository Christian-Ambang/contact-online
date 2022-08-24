<?php 
include ("../parametre.php");
?>
<!DOCTYPE html>
<html lang="fr">
   <head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <style type="text/css">
       /* Forcer l'allignement du message dans hotmail */
    .ExternalClass { width:100%; }
    /* Pour &eacute;viter les changement de taille de texte sur mobile */
    body { -webkit-text-size-adjust:none; -ms-text-size-adjust:none; }
    /* Pour supprimer les bordure sur les tableaux */
    table td { border-collaspse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; margin:0; padding:0; }

    img { margin:0; padding:0; }

    @media only screen and (max-width: 3000px), (max-device-width: 3000px) {
      *[class~=general] { width:640px!important; }
    }

    @media only screen and (max-width: 639px), (max-device-width: 639px) {
      *[class~=general] { width:320px!important; }
    }
      
    </style>
     <title>Candidature - John Doe  Curriculum Vitae </title>
   </head>
   <body>
    <table width="1OO%" align="center" cellpadding="0" cellspacing="0" border="0" style="color:cccccc">
      <tr>
        <td>
          <table class="general" width="640" align="center" cellpadding="0" cellspacing="0" border="0" style="max-width:640px;color:cccccc">
            <tr>
              <td  align="center" style="color:#000000;font-size:12px; font-family: Arial">
                <?php if ($_GET["link-mirror"]=="active"){echo $_GET["perso"];}else { echo "[ Titre Nom ]"; }?>, veuillez trouver ma candidature&nbsp;pour un poste de&nbsp;d&eacute;veloppeur&nbsp;web. <br>Si ce message ne s'affiche pas corectement, <a href="<?php  echo $URI; ?>/message-mail/mail-CV-professionnalisation.php?type=professionnalisation&link-mirror=active&perso=[ Titre Nom ]" target="_blank" style="color:#000000">consultez-le&nbsp;ici.</a>
              </td> 
            </tr>
            <tr>
            <td  height="20" align="center">
                  <img src="<?php echo $URI;?>/imgs/mail/blank.png" width="1" height="1" style="border:0;display:block">
            </td>
          </tr>
          <tr>
                <td bgcolor="#3676cc" height="10" style="height:10px;line-height:1px;font-size:1px;">&nbsp;
                     
                </td>
          </tr>
          <tr>
            <td  bgcolor="#3d97cc" height="10" style="height:10px;line-height:1px;font-size:1px;" align="center">&nbsp;
                  
            </td>
          </tr>
            <tr>
              <td bgcolor="#3d97cc" align="center" style="color:#ffffff;font-size:14px;font-family:Arial">
                <a href="http://site.fr/CV/index.php?type=professionnalisation&utm_source=[id_contact]&utm_medium=email/entete&utm_campaign=[volume]&bienvenue=true&contact=Bonne visite <br> [ Titre Nom ]" target="_blank" style="color:#ffffff;text-decoration:none"><strong style="font-size:20px">D&eacute;veloppeur Web</strong><br>
                Mobile dans toute l'&Icirc;le-de-France (Contrat&nbsp;de&nbsp;professionnalisation)<br><a/>
              </td> 
            </tr>
            
        <td  height="10" style="height:10px;line-height:1px;font-size:1px;" align="center" bgcolor="#3d97cc" >&nbsp;
            
        </td> 
      </tr>

      <tr>
        <td bgcolor="#3d97cc">
            <table align="center" width="100%" cellpadding="0" cellspacing="0" border="0">
              <tr>
                <td align="center" bgcolor="#3d97cc">
                  <table align="center" width="35%" cellpadding="0" cellspacing="0" border="0">
                      <tr>
                        <td width="33" style="width:33px">
                          <img src="<?php  echo $URI; ?>/imgs/mail/icon-en-poste.png" width="33" height="32" style="border:0;display:block">
                        </td>
                        <td width="10" style="width:10px;line-height:1px;font-size:1px;">&nbsp;
                          
                        </td>
                        <td style="font-size:14px;color:#ffffff;font-family:Arial;">
                          <a href="http://site.fr/CV/index.php?type=professionnalisation&utm_source=[id_contact]&utm_medium=email/entete&utm_campaign=[volume]&bienvenue=true&contact=Bonne visite <br> [ Titre Nom ]" target="_blank" style="color:#ffffff;text-decoration:none;white-space:nowrap;word-break:unset;"><strong>Actuellement&nbsp;en&nbsp;poste</strong></a><br>
                        </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
        </td>
      </tr>

      <tr>
        <td  height="10" align="center" style="height:10px;line-height:1px;font-size:1px;"  bgcolor="#3d97cc" >&nbsp;
            
        </td> 
      </tr>

      <tr>
        <td  height="20"  style="height:20px;line-height:1px;font-size:1px;" align="center">&nbsp;
            
        </td> 
      </tr>
      <tr>
        <td>
          <table align="left" width="317" style="width:317px;" cellpadding="0" cellspacing="0" border="0">
            <tr>
              <td align="center">
                <a href="http://site.fr/CV/index.php?type=professionnalisation&utm_source=[id_contact]&utm_medium=email/presentation&utm_campaign=[volume]&bienvenue=true&contact=Bonne visite <br> [ Titre Nom ]"><img src="<?php  echo $URI; ?>/imgs/mail/ml-tof-header.png" width="" height="" alt="" style="border:0;display:block"></a>
              </td>
            </tr>
            <tr>
              <td height="5" style="height:5px;line-height:1px;font-size:1px;">&nbsp;
               
              </td>
            </tr>
            <tr>
              <td align="center" style="font-size:14px;font-family:Arial;color:#696464">
                 <a href="http://site.fr/CV/index.php?type=professionnalisation&utm_source=[id_contact]&utm_medium=email/presentation&utm_campaign=[volume]&bienvenue=true&contact=Bonne visite <br> [ Titre Nom ]" style="text-decoration:none;color:#696464"> <strong>John Doe</strong></a>
              </td>
            </tr>
            <tr>
              <td height="5" style="height:5px;line-height:1px;font-size:1px;">&nbsp;
               
              </td>
            </tr>
          </table>
          <table  align="left" width="317" cellpadding="0" cellspacing="0" border="0">
            <tr>
            <!-- d&eacute;but tableau contour 1  -->
              <td>
                 <table align="center" width="282" style="width:282px" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                      <td  height="14" style="height:14px;line-height:14px;">
                        <img src="<?php  echo $URI; ?>/imgs/mail/header-gris-decoupe_haut.jpg" width="282" height="14" style="width:282px;height:14px;boder:0;display:block">
                      </td>
                    </tr>
                    <tr>
                        <td>
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                  <td width="2" style="width:2px;line-height:1px;font-size:1px;" bgcolor="#cccccc">&nbsp;
                                      
                                  </td>
                                  <td width="12" style="width:12px;line-height:1px;font-size:1px;">&nbsp;
                                      
                                  </td>
                                  <td width="266" style="width:266px;font-size:12px;font-family:Arial;color:#bfbebe">
                                    <?php
         
                                          function Age($date_naissance)
                                          {
                                              $arr1 = explode('/', $date_naissance);
                                              $arr2 = explode('/', date('d/m/Y'));
                                                  
                                              if(($arr1[1] < $arr2[1]) || (($arr1[1] == $arr2[1]) && ($arr1[0] <= $arr2[0])))
                                              return $arr2[2] - $arr1[2];

                                              return $arr2[2] - $arr1[2] - 1;
                                          }
                                       
                                      ?>
                                      <strong style="color:#696464">T&eacute;l:</strong>&nbsp;06 00 00 00 00<br>
                                      <strong style="color:#696464">Mail:</strong>&nbsp;<a href="mailto:contact@mail.com" target="_blank" style="text-decoration: none;color:#bfbebe">contact@mail.com</a><br>
                                      <strong style="color:#696464">Site web:</strong>&nbsp;<a href="http://site.fr/CV/index.php?type=professionnalisation&utm_source=[id_contact]&utm_medium=email/presentation&utm_campaign=[volume]&bienvenue=true&contact=Bonne visite <br> [ Titre Nom ]" style="text-decoration:none;color:#bfbebe;" target="_blank">http://wwww.mr-ambang.com/CV</a><br>
                                      <strong style="color:#696464">Adresse:</strong>&nbsp;1 rue du Tourbillon<br>
                                      <strong style="color:#696464">ville:</strong>&nbsp;77500 Chelles<br>
                                      <strong style="color:#696464">N&eacute; le:</strong>&nbsp;10 juin 1990 (<?php $ma_date_de_naissance ='10/06/1990'; $mon_age = Age($ma_date_de_naissance);
                                        echo $mon_age.' ans'; ?>)<br>
									  <strong style="color:#696464">&Eacute;cole:</strong>&nbsp;IPSSI<br>
                                  </td>
                                  <td width="2" style="width:2px;line-height:1px;font-size:1px;" bgcolor="#cccccc">&nbsp;
                                      
                                  </td>
                                </tr>
                            </table>    
                        </td>
                    </tr> 
                    <tr>
                      <td height="14" style="height:14px;line-height:1px;font-size:1px;">
                        <img src="<?php  echo $URI; ?>/imgs/mail/footer-gris-decoupe_bas.jpg" width="282" height="14" style="width:282px;height:14px">
                      </td>
                    </tr>
                 </table> 
              </td>
            </tr>
          </table>
          <!-- fin tableau contour 1  -->
          </td>
          </tr>
          <tr>
            <td  height="20" style="height:20px;line-height:1px;font-size:1px;" align="center">&nbsp;
                 
            </td> 
          </tr>
          <tr>
            <td  bgcolor="#8E8A8A" height="10" style="height:10px;line-height:1px;font-size:1px;">&nbsp;
                 
            </td> 
          </tr>
           <tr>
              <td bgcolor="#8E8A8A" align="center" style="font-size:15px;font-family:Arial;color:#696464">
                <a href="http://site.fr/CV/index.php?type=professionnalisation&utm_source=[id_contact]&utm_medium=email/competence&utm_campaign=[volume]&bienvenue=true&contact=Bonne visite <br> [ Titre Nom ]" style="text-decoration:none;color:#696464"><strong>COMP&Eacute;TENCES</strong></a>
              </td>
          </tr>
          <tr>
            <td  bgcolor="#8E8A8A" height="10" style="height:10px;line-height:1px;font-size:1px;">&nbsp;
                 
            </td> 
          </tr>
          <tr>
            <td bgcolor="#cccccc">
            <table width="317" style="width:317px" align="left" cellpadding="0" cellspacing="0" border="0">
            <tr>
            <td>
              <table width="100%" cellpadding="0" cellspacing="0" border="0">
                <tr>
                <td  height="10" style="height:10px;line-height:1px;font-size:1px;" align="center" >&nbsp;
                     
                </td> 
              </tr>
                <tr>
                  <td width="5%">&nbsp;
                        
                  </td>
                  <td>
                      <table align="left" width="75%" cellpadding="0" cellspacing="0" border="0">
                          <tr>
                            <td width="150" style="width:150px;font-size:15px;font-family:Arial;color:#696464"><a href="http://site.fr/CV/index.php?type=professionnalisation&type=professionnalisation&utm_source=[id_contact]&utm_medium=email/competence&utm_campaign=[volume]&bienvenue=true&contact=Bonne visite <br> [ Titre Nom ]" target="_blank" style="text-decoration:none;color:#696464"><strong>Front-end</strong></a></td>
                            <td width="30" style="width:30px;line-height:1px;font-size:1px;">&nbsp;
                                
                            </td>
                            <td width="22" height="20" style="height:20px;line-height:20px"><img src="<?php  echo $URI; ?>/imgs/mail/ultime-star-jaune-ter.png" width="22" height="20" style="border:0;display:block">
                            </td>
                            <td width="10" style="width:10px;line-height:1px;font-size:1px;">&nbsp;
                                
                            </td>
                            <td width="22" height="20" style="height:20px;line-height:20px"><img src="<?php  echo $URI; ?>/imgs/mail/ultime-star-jaune-ter.png" width="22" height="20" style="border:0;display:block">
                            </td>
                            <td width="10" style="width:10px;line-height:1px;font-size:1px;">&nbsp;
                                
                            </td>
                            <td width="22" height="20" style="height:20px;line-height:20px"><img src="<?php  echo $URI; ?>/imgs/mail/ultime-star-jaune-ter.png" width="22" height="20" style="border:0;display:block">
                            </td>
                            <td width="10" style="width:10px;line-height:1px;font-size:1px;">&nbsp;
                                
                            </td>
                            <td width="22" height="20" style="height:20px;line-height:20px">
                              <img src="<?php  echo $URI; ?>/imgs/mail/ultime-star-jaune-ter.png" width="22" height="20" style="border:0;display:block">
                            </td>
                            <td width="10" style="width:10px;line-height:1px;font-size:1px;">&nbsp;
                                
                            </td>
                            <td width="22" height="20" style="height:20px;line-height:20px">
                              <img src="<?php  echo $URI; ?>/imgs/mail/ultime-star-gris.png" width="22" height="20" style="border:0;display:block">
                            </td>
                          </tr> 
                      </table>
                  </td>
                  <td width="5%" style="line-height:1px;font-size:1px;">&nbsp;
                        
                  </td>
                </tr>
              </table>
            </td>
          </tr>


          <tr>
            <td  height="10" style="height:10px;line-height:1px;font-size:1px;" align="center" >&nbsp;
                 
            </td> 
          </tr>
          <tr>
            <td>
              <table width="100%" cellpadding="0" cellspacing="0" border="0">
                <tr>
                  <td width="5%" style="line-height:1px;font-size:1px;">&nbsp;
                        
                  </td>
                  <td>
                      <table align="left" width="80%" cellpadding="0" cellspacing="0" border="0">
                          <tr>
                            <td width="150" style="width:150px;font-size:15px;font-family:Arial;color:#696464"><a href="http://site.fr/CV/index.php?type=professionnalisation&utm_source=[id_contact]&utm_medium=email/competence&utm_campaign=[volume]&bienvenue=true&contact=Bonne visite <br> [ Titre Nom ]" target="_blank" style="text-decoration:none;color:#696464"><strong>Back-end</strong></a></td>
                            <td width="30" style="width:30px;line-height:1px;font-size:1px;">&nbsp;
                                
                            </td>
                            <td width="22" height="20" style="height:20px;"><img src="<?php  echo $URI; ?>/imgs/mail/ultime-star-jaune-ter.png" width="22" height="20" style="border:0;display:block">
                            </td>
                            <td width="10" style="width:10px;line-height:1px;font-size:1px;">&nbsp;
                                
                            </td>
                            <td width="22" height="20" style="height:20px;line-height:20px"><img src="<?php  echo $URI; ?>/imgs/mail/ultime-star-jaune-ter.png" width="22" height="20" style="border:0;display:block">
                            </td>
                            <td width="10" style="width:10px;line-height:1px;font-size:1px;">&nbsp;
                                
                            </td>
                            <td width="22" height="20" style="height:20px;line-height:20px"><img src="<?php  echo $URI; ?>/imgs/mail/ultime-star-jaune-ter.png" width="22" height="20" style="border:0;display:block">
                            </td>
                            <td width="10" style="width:10px;line-height:1px;font-size:1px;">&nbsp;
                                
                            </td>
                            <td width="22" height="20" style="height:20px;line-height:20px">
                              <img src="<?php  echo $URI; ?>/imgs/mail/ultime-star-gris.png" width="22" height="20" style="border:0;display:block">
                            </td>
                            <td width="10" style="width:10px;line-height:1px;font-size:1px;">&nbsp;
                                
                            </td>
                            <td width="22" height="20" style="height:20px;line-height:20px">
                              <img src="<?php  echo $URI; ?>/imgs/mail/ultime-star-gris.png" width="22" height="20" style="border:0;display:block">
                            </td>
                          </tr> 
                      </table>
                  </td>
                  <td width="5%" style="line-height:1px;font-size:1px;">&nbsp;
                        
                  </td>
                </tr>
              </table>
            </td>
          </tr>

               </table> 
               <table width="317" width="317px" align="left" cellpadding="0" cellspacing="0" border="0">
            <tr>
            <td  height="10" style="height:10px;line-height:1px;font-size:1px;" align="center" >&nbsp;
                 
            </td> 
          </tr>
          <tr>
            <td>
              <table width="100%" cellpadding="0" cellspacing="0" border="0">
                <tr>
                  <td width="5%" style="line-height:1px;font-size:1px;">&nbsp;
                        
                  </td>
                  <td>
                      <table align="left" width="75%" cellpadding="0" cellspacing="0" border="0">
                          <tr>
                            <td  width="150" style="width:150px;font-size:15px;font-family:Arial;color:#696464"><a href="http://site.fr/CV/index.php?type=professionnalisation&utm_source=[id_contact]&utm_medium=email/competence&utm_campaign=[volume]&bienvenue=true&contact=Bonne visite <br> [ Titre Nom ]" target="_blank" style="text-decoration:none;color:#696464"><strong>PAO</strong></a></td>
                            <td width="30" style="width:30px;line-height:1px;font-size:1px;">&nbsp;
                                
                            </td>
                            <td width="22" height="20" style="height:20px;line-height:20px"><img src="<?php  echo $URI; ?>/imgs/mail/ultime-star-jaune-ter.png" width="22" height="20" style="border:0;display:block">
                            </td>
                            <td width="10" style="width:10px;line-height:1px;font-size:1px;">&nbsp;
                                
                            </td>
                            <td width="22" height="20" style="height:20px;line-height:20px"><img src="<?php  echo $URI; ?>/imgs/mail/ultime-star-jaune-ter.png" width="22" height="20" style="border:0;display:block">
                            </td>
                            <td width="10" style="width:10px;line-height:1px;font-size:1px;">&nbsp;
                                
                            </td>
                            <td width="22" height="20" style="height:20px;line-height:20px"><img src="<?php  echo $URI; ?>/imgs/mail/ultime-star-jaune-ter.png" width="22" height="20" style="border:0;display:block">
                            </td>
                            <td width="10" style="width:10px;line-height:1px;font-size:1px;">&nbsp;
                                
                            </td>
                            <td width="22" height="20" style="height:20px;line-height:20px">
                              <img src="<?php  echo $URI; ?>/imgs/mail/ultime-star-jaune-ter.png" width="22" height="20" style="border:0;display:block">
                            </td>
                            <td width="10" style="width:10px;line-height:1px;font-size:1px;">&nbsp;
                                
                            </td>
                            <td width="22" height="20" style="height:20px;line-height:20px">
                              <img src="<?php  echo $URI; ?>/imgs/mail/ultime-star-gris.png" width="22" height="20" style="border:0;display:block">
                            </td>
                          </tr> 
                      </table>
                  </td>
                  <td width="5%" style="line-height:1px;font-size:1px;">&nbsp;
                        
                  </td>
                </tr>
              </table>
            </td>
          </tr>

          <tr>
            <td  height="10" style="height:10px;line-height:1px;font-size:1px;" align="center" >&nbsp;
                 
            </td> 
          </tr>
          <tr>
            <td>
              <table width="100%" cellpadding="0" cellspacing="0" border="0">
                <tr>
                  <td width="5%" style="line-height:1px;font-size:1px;">&nbsp;
                        
                  </td>
                  <td>
                      <table align="left" width="75%" cellpadding="0" cellspacing="0" border="0">
                          <tr>
                            <td width="150" style="widht:150px;font-size:15px;font-family:Arial;color:#696464"><a href="http://site.fr/CV/index.php?type=professionnalisation&utm_source=[id_contact]&utm_medium=email/competence&utm_campaign=[volume]&bienvenue=true&contact=Bonne visite <br> [ Titre Nom ]" target="_blank" style="text-decoration:none;color:#696464"><strong>Langues</strong></a></td>
                            <td width="30" style="width:30px;line-height:1px;font-size:1px;">&nbsp;
                                
                            </td>
                            <td width="22" height="20" style="height:20px;line-height:20px"><img src="<?php  echo $URI; ?>/imgs/mail/ultime-star-jaune-ter.png" width="22" height="20" style="border:0;display:block">
                            </td>
                            <td width="10" style="width:10px;line-height:1px;font-size:1px;">&nbsp;
                                
                            </td>
                            <td width="22" height="20" style="height:20px;line-height:20px"><img src="<?php  echo $URI; ?>/imgs/mail/ultime-star-jaune-ter.png" width="22" height="20" style="border:0;display:block">
                            </td>
                            <td width="10" style="width:10px;line-height:1px;font-size:1px;">&nbsp;
                                
                            </td>
                            <td width="22" height="20" style="height:20px;line-height:20px"><img src="<?php  echo $URI; ?>/imgs/mail/ultime-star-jaune-ter.png" width="22" height="20" style="border:0;display:block">
                            </td>
                            <td width="10" style="width:10px;line-height:1px;font-size:1px;">&nbsp;
                                
                            </td>
                            <td width="22" height="20" style="height:20px;line-height:20px">
                              <img src="<?php  echo $URI; ?>/imgs/mail/ultime-star-gris.png" width="22" height="20" style="border:0;display:block">
                            </td>
                            <td width="10" style="width:10px;line-height:1px;font-size:1px;">&nbsp;
                                
                            </td>
                            <td width="22" height="20" height="height:20px;line-height:20px">
                              <img src="<?php  echo $URI; ?>/imgs/mail/ultime-star-gris.png" width="22" height="20" style="border:0;display:block">
                            </td>
                          </tr> 
                      </table>
                  </td>
                  <td width="5%" style="line-height:1px;font-size:1px;">&nbsp;
                        
                  </td>
                </tr>
              </table>
            </td>
          </tr>
                <tr>
                  <td  height="10" style="height:10px;line-height:1px;font-size:1px;" align="center" >&nbsp;
                       
                  </td> 
                </tr>
               </table>
            </td>
          </tr> 

    


          <tr>
            <td  height="30" align="center" style="height:30px;line-height:1px;font-size:1px;" >&nbsp;
                 
            </td> 
          </tr>
          <tr>
            <td>
              <table width="100%" cellpadding="0" cellspacing="0" border="0">
                <tr>
                  <td width="5%" style="line-height:1px;font-size:1px;">&nbsp;
                        
                  </td>
                  <td style="font-size:13px;font-family:Arial;color:#696464;">
                        <?php if ($_GET["link-mirror"]=="active"){echo $_GET["perso"];}else { echo "[ Titre Nom ]"; }?>,<br>
						<br>
						J'ai le plaisir de vous adresser ma candidature pour le poste de d&eacute;veloppeur web en alternance.<br>
						<br>
						<strong style="text-decoration:underline">Fili&egrave;re</strong>&nbsp;:<br>
					  	<br>
						Mast&egrave;re 1 premi&egrave;re ann&eacute;e (D&eacute;veloppement web et mobile), &Eacute;cole IPSSI 
						(<a href="<?php  echo $URI; ?>/redirection/link_pdf_programme_mastere_ipssi.php" target="_blank" style="color:#696464;">voir le programme</a>).<br>
						<br>
						<strong style="text-decoration:underline">Mes points forts</strong>&nbsp;:<br>
					  	<br>
						&bull;&nbsp;3 ann&eacute;es d'exp&eacute;rience professionnelle en tant qu'int&eacute;grateur web.<br>
						&bull;&nbsp;2 ann&eacute;es d'exp&eacute;rience professionnelle en tant que graphiste free-lance.<br>
						&bull;&nbsp;Comp&eacute;tences en HTML5, CSS3, PHP 5, JQuery, Bootstrap et SQL.<br>
						&bull;&nbsp;S&eacute;rieux, organis&eacute;, dynamique et passionn&eacute;.<br>
					  	<br>
						Je saurais &ecirc;tre un v&eacute;ritable atout pour votre &eacute;quipe.<br>
						<br>
						<strong style="text-decoration:underline">Les avantages du contrat de professionnalisation</strong>&nbsp;:<br>
					  	<br>
						&bull;&nbsp;CDD de 12 mois avec une p&eacute;riode d'essai de 1 mois.<br>
						&bull;&nbsp;Ma r&eacute;mun&eacute;ration sera &agrave; hauteur de 100% du SMIC (ou Minimum Conventionnel).<br> 
						&bull;&nbsp;Application de la r&eacute;duction Fillon sur les bas salaires (SMIC).<br>
						&bull;&nbsp;Ma formation sera prise en charge par votre OPCA.<br>
					  	<br>
						<strong style="text-decoration:underline">Mon rythme d'alternance au sein de l'IPSSI</strong>&nbsp;: <br>
						<br>
						3 semaines en entreprise / 1 semaine en formation.<br>
						Je suis disponible : &agrave; partir de ao&ucirc;t 2020.<br>
						<br>
						&Eacute;tant passionn&eacute; d'informatique, je porte un int&eacute;r&ecirc;t tout particulier pour votre soci&eacute;t&eacute;, car elle co&iuml;ncide avec mon &eacute;tat d'esprit et mes ambitions d'&eacute;voluer dans une structure qui donnera un sens &agrave; mon savoir-faire.<br>
						<br>
					  	Travailleur et d&eacute;termin&eacute;, je reste &agrave; votre disposition pour un entretien o&ugrave; je pourrai vous exposer de vive voix mes motivations. 
						<br>
						<br>
						Dans cette attente,<br>
						Cordialement,<br>
						<strong>John Doe</strong> 
                   </td>
                  <td width="5%" style="line-height:1px;font-size:1px;">&nbsp;
                        
                  </td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td  height="20" style="height:20px;line-height:1px;font-size:1px;" align="center" >&nbsp;
             
            </td> 
          </tr>
          <tr>
            <td>
              <table  align="left" width="317" style="width:317px" cellpadding="0" cellspacing="0" border="0">
        <tr>  
              <td>
                 <table align="center" width="282" style="width:282px;" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                      <td height="14" style="height:14px;line-height:14px;">

                        <img src="<?php  echo $URI; ?>/imgs/mail/index-gris-decoupe_haut.jpg" width="282" height="14" style="width:282px;height:14px;boder:0;display:block;">
                      </td>
                    </tr>
                    <tr>
                        <td>
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                  <td width="2" style="width:2px;line-height:1px;font-size:1px;" bgcolor="#4793D0">&nbsp;
                                      
                                  </td>
                                  <td width="12" style="width:12px;line-height:1px;font-size:1px;">&nbsp;
                                      
                                  </td>
                                  <td align="center" width="266" style="width:266px;font-size:16;color:#4793d0;font-family:Arial;">
                                      <a href="http://site.fr/CV/index.php?type=professionnalisation&utm_source=[id_contact]&utm_medium=email/en savoir plus&utm_campaign=[volume]&bienvenue=true&contact=Bonne visite <br> [ Titre Nom ]" target="_blank" style="text-decoration:none;color:#4793d0;"><strong>EN SAVOIR PLUS</strong></a>
                                  </td>
                                  <td width="2" style="width:2px;line-height:1px;font-size:1px;" bgcolor="#4793D0">&nbsp;
                                      
                                  </td>
                                </tr>
                            </table>    
                        </td>
                    </tr> 
                    <tr>
                      <td height="14" style="height:14;line-height:14px;">
                        <img src="<?php  echo $URI; ?>/imgs/mail/index-gris-decoupe_bas.jpg" width="282" height="14" style="width:282px;height:14px">
                      </td>
                    </tr>
                    <tr>
                      <td height="10" style="height:10px;line-height:1px;font-size:1px;">&nbsp;
                        
                      </td>
                    </tr>
                 </table> 
              </td>
            </tr>
          </table>
          <table  align="left" width="317" style="width:317px;" cellpadding="0" cellspacing="0" border="0">
        <tr>
            <!-- d&eacute;but tableau contour 1  -->
              <td>
                 <table align="center" width="282" style="width:282px" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                      <td height="14" style="height:14px;line-height:14px;">
                        <img src="<?php  echo $URI; ?>/imgs/mail/index-gris-decoupe_haut.jpg" width="282" height="14" style="width:282px;height:14px;boder:0;display:block">
                      </td>
                    </tr>
                    <tr>
                        <td>
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                  <td width="2" style="width:2px;line-height:1px;font-size:1px;" bgcolor="#4793D0">&nbsp;
                                      
                                  </td>
                                  <td width="12" style="width:12px;line-height:1px;font-size:1px;">&nbsp;
                                      
                                  </td>
                                  <td align="center" width="266" style="width:266px;font-size:16;color:#4793d0;font-family:Arial">
                                      <a href="http://site.fr/CV/index.php?type=professionnalisation&utm_source=[id_contact]&utm_medium=email/me contacter&utm_campaign=[volume]&bienvenue=true&contact=Bonne visite <br> [ Titre Nom ]" target="_blank" style="text-decoration:none;color:#4793d0"><strong>ME CONTACTER</strong></a>
                                  </td>
                                  <td width="2" style="width:2px;line-height:1px;font-size:1px;" bgcolor="#4793D0">&nbsp;
                                      
                                  </td>
                                </tr>
                            </table>    
                        </td>
                    </tr> 
                    <tr>
                      <td  height="14" style="height:14;line-height:14px;">
                        <img src="<?php  echo $URI; ?>/imgs/mail/index-gris-decoupe_bas.jpg" width="282" height="14" style="width:282px;height:14px">
                      </td>
                    </tr>
                    <tr>
                      <td height="10" style="height:10px;line-height:1px;font-size:1px;">&nbsp;
                        
                      </td>
                    </tr>
                 </table> 
              </td>
            </tr>
          </table>
            </td>
          </tr>
          <tr>
            <td  height="20" style="height:20px;line-height:1px;font-size:1px;" align="center">&nbsp;
             
            </td> 
          </tr>
          <tr>
            <td bgcolor="#3d97cc">
				  <table bgcolor="#3d97cc" width="100%" cellpadding="0" cellspacing="0" border="0"> 
					  <tr>
						  <!--Ajoout-->
						  		<td>
								  <table align="center" width="80%" cellpadding="0" cellspacing="0" border="0">
									<tr>
										<td colspan="3" height="10" style="height:10px;line-height:10px;" style="height:10px;line-height:10px">
											&nbsp;
										</td>
									</tr>
									<tr>
									  <td align="right" height="14" width="48" style="height:14px;line-height:14px;width:48px"><img src="<?php  echo $URI; ?>/imgs/mail/btn-footer-cv-left.png" width="14" height="54" style="border:0;display:block"></td>
									  <td>
										<table width="100%" cellpadding="0" cellspacing="0" border="0">
										  <tr>
											<td height="2px" style="height:2px;line-height:1px;font-size:1px;" bgcolor="ffffff">&nbsp;

											</td>
										  </tr>
										  <tr>
											<td align="center" height="50" style="height:50px;font-size:15px;font-family:Arial;color:#ffffff"><a href="<?php  echo $URI; ?>/redirection/link_pdf_cv_redirection.php?utm_source=[id_contact]&utm_medium=email/pdf&utm_campaign=[volume]" target="_blank" style="text-decoration:none;color:#ffffff;">CV au&nbsp;format&nbsp;PDF</a></td>
										  </tr> 
										  <tr>
											<td height="2px" style="height:2px;line-height:1px;font-size:1px;" bgcolor="ffffff">&nbsp;

											</td>
										  </tr>
										</table>
									  </td>
									  <td height="14" width="48" style="height:14px;line-height:14px;width:48px"><img src="<?php  echo $URI; ?>/imgs/mail/btn-footer-cv-right.png" width="14" height="54" style="border:0;display:block"></td>
									</tr> 
									<tr>
										<td colspan="3" height="10" style="height:10px;line-height:1px;font-size:1px;">&nbsp;
										</td>
									</tr> 
								  </table>
							</td>
						  <!--Ajout-->
					  </tr>
				  </table>
             </td>
		  </tr>
		  <tr>
			<td bgcolor="#3676cc" height="10" style="height:10px;line-height:1px;font-size:1px;">&nbsp;

			</td>
		  </tr>
		  <tr>
			<td  height="20" align="center" style="line-height:1px;font-size:1px;" >&nbsp;

			</td> 
		  </tr>
        </table><!-- Fin tbleau 640-->
        </td>
      </tr>
    </table>
   </body>
</html>