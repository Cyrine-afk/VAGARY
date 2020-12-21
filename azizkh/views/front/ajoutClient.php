<?php
include "../../model/client.php";
include "../../controller/clientC.php";

if(isset($_POST["id_client"]) and isset($_POST["nom_client"]) and isset($_POST["prenom_client"]) and isset($_POST["date_nai_client"]) and isset($_POST["mail_client"]) and isset($_POST["date_ajout_client"]) and isset($_POST["mdp_client"]) and isset($_POST["login_client"]) and isset($_POST["img_client"]))
{
	$mailto =$_POST["mail_client"];
    $mailSub = "Compte Client";
    $mailMsg = "Bienvenue a vagary Mr ".$_POST["nom_client"]." ".$_POST["prenom_client"].", "."votre compte a ete traite avec succes";
    require 'PHPMailer-master/PHPMailerAutoload.php';
    $mail = new PHPMailer();
    $mail ->IsSmtp();
    $mail ->SMTPDebug = 0;
    $mail ->SMTPAuth = true;
    $mail ->SMTPSecure = 'ssl';
    $mail ->Host = "smtp.gmail.com";
    $mail ->Port = 465; // or 587
    $mail ->IsHTML(true);
    $mail ->Username = "vagarytn@gmail.com"; //hna 7ot il mail ili bich tibaath minou 
    $mail ->Password = "vagary1234"; //hna 7ot il mot de passe
    $mail ->SetFrom("vagarytn@gmail.com"); //hna 7ot il mail ili bich tibaath minou 
    $mail ->Subject = $mailSub;
    $mail ->Body = $mailMsg;
    $mail ->AddAddress($mailto);

    if(!$mail->Send())
    {
    echo "Mail Not Sent";
    }
    else
    {
    echo "Mail Sent";
    }
    $cli=new client($_POST["id_client"],$_POST["nom_client"],$_POST["prenom_client"],$_POST["date_nai_client"],$_POST["mail_client"],$_POST["date_ajout_client"],$_POST["mdp_client"],$_POST["login_client"],$_POST["img_client"]);
    $cliC=new clientC();
    $cliC->ajouterClient($cli);
    echo '<body onLoad="alert(\'Votre Compte a ete cree avec succes ...\')">'; 
        
         echo '<meta http-equiv="refresh" content="0;URL=login.html">'; 
   
    

}
else
{
    echo "taaadetich houni";
}
?>