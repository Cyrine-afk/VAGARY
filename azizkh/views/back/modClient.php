<?php
include "../../controller/clientC.php";

$id_client=$_POST["id_client"];
$nom_client=$_POST["nom"];
$prenom_client=$_POST["prenom"];
$date_nai_client=$_POST["age"];
$mail_client=$_POST["email"];

$mdp_client=$_POST["mdp"];
$login_client=$_POST["login"];

$clientC=new clientC();
echo "Cbonnnnn";
$clientC->modifierClient($id_client,$nom_client,$prenom_client,$date_nai_client,$mail_client,$mdp_client,$login_client);

header("location:users.php");
?>