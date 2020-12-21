<?php
include "../../controller/clientC.php";

$id_client=$_POST["id"];
$nom_client=$_POST["nom"];
$prenom_client=$_POST["prenom"];
$date_nai_client=$_POST["date"];
$mail_client=$_POST["email"];


$clientC=new clientC();

$clientC->modifierClient1($id_client,$nom_client,$prenom_client,$date_nai_client,$mail_client);

header("location:user-personal.php");
?>