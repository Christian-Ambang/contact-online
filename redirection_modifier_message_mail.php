<?php 
include("connexion_bd.php");

session_start();


/* Condition 0*/

if($_POST["nomMessage"]=="" && $_POST["objetMessage"]=="" && $_POST["modulableMessageText"]=="" && $_POST["selectionMessageModulable"]=="")
{
    $_SESSION["nomMessage"]=$_POST["nomMessage"];
	$_SESSION["urlMessage"]=$_POST["urlMessage"];
	$_SESSION["txtMessage"]=$_POST["txtMessage"];
	$_SESSION["objetMessage"]=$_POST["objetMessage"];
	$_SESSION["modulableMessage"]=$_POST["modulableMessage"];
	$_SESSION["modulableMessageText"]=$_POST["modulableMessageText"];
	$_SESSION["selectionMessageModulable"]=$_POST["selectionMessageModulable"];
	header("location: /modifier_nouveau_message_mail.php?nouveauMessage=true1");
	$_SESSION["back"]="Veuillez vérifier vos champs";	

} else 
if($_POST["nomMessage"]=="" && $_POST["urlMessage"]=="" && $_POST["txtMessage"] && $_POST["objetMessage"]=="" && $_POST["modulableMessage"]=="")
{
	$_SESSION["nomMessage"]=$_POST["nomMessage"];
	$_SESSION["urlMessage"]=$_POST["urlMessage"];
	$_SESSION["txtMessage"]=$_POST["txtMessage"];
	$_SESSION["objetMessage"]=$_POST["objetMessage"];
	$_SESSION["modulableMessage"]=$_POST["modulableMessage"];
	$_SESSION["modulableMessageText"]=$_POST["modulableMessageText"];
	$_SESSION["selectionMessageModulable"]=$_POST["selectionMessageModulable"];
	header("location: /modifier_nouveau_message_mail.php?nouveauMessage=true2");
	$_SESSION["back"]="Veuillez vérifier vos champs";	

}else
{
	$idMessage=addslashes($_POST["idMessage"]);
	$nomMessage=addslashes($_POST["nomMessage"]);
	$urlMessage=addslashes($_POST["urlMessage"]);
	$txtMessage=addslashes($_POST["txtMessage"]);
	$objetMessage=addslashes($_POST["objetMessage"]);
	$modulableMessage=addslashes($_POST["modulableMessage"]);
	$modulableMessageText=addslashes($_POST["modulableMessageText"]);
	$selectionMessageModulable=addslashes($_POST["selectionMessageModulable"]);
	$req="UPDATE `Campagne-mail` SET `campagne_name`='$nomMessage', `code_source`='$urlMessage', `objet`='$objetMessage', `txt`='$txtMessage', `modulable`='$modulableMessage', `modulableTexte`='$modulableMessageText', `modulableURL`='$selectionMessageModulable' WHERE `id`='$idMessage'";
	$query = $pdo->query($req);
	$id=$_POST["idMessage"];
	header("location: /messages_mails.php?nouveauMessage=true1&id=$id");	

}


/* Condition 2 */

if($_POST["nomMessage"]=="" && $_POST["urlMessage"]=="" && $_POST["txtMessage"]=="" && $_POST["objetMessage"]=="" && $_POST["modulableMessage"]=="" && $_POST["modulableMessageText"]=="" && $_POST["selectionMessageModulable"]=="")
{
	$_SESSION["nomMessage"]=$_POST["nomMessage"];
	$_SESSION["urlMessage"]=$_POST["urlMessage"];
	$_SESSION["txtMessage"]=$_POST["txtMessage"];
	$_SESSION["objetMessage"]=$_POST["objetMessage"];
	$_SESSION["modulableMessage"]=$_POST["modulableMessage"];
	$_SESSION["modulableMessageText"]=$_POST["modulableMessageText"];
	$_SESSION["selectionMessageModulable"]=$_POST["selectionMessageModulable"];
	header("location: /modifier_nouveau_message_mail.php?nouveauMessage=true3");
	$_SESSION["back"]="Veuillez vérifier vos champs";
	
}
