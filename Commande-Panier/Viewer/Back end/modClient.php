<?php
include "ComC.php";

$id_comd=$_POST["id_comd"];
$date_achat_comd=$_POST["date_achat_comd"];
$quantity=$_POST["quantity"];
$paiment=$_POST["paiment"];
$prix_total=$_POST["prix_total"];



$commandeC=new CommandeC();

$commandeC->modifierClient($id_comd,$date_achat_comd,$quantity,$paiment,$prix_total);

header("location:tableP.php");
?>