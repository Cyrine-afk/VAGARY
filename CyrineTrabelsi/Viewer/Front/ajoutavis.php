<?php
session_start();
include_once $_SERVER['DOCUMENT_ROOT'].'/projet/VAGARY/CyrineTrabelsi/Model/avisCom.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/projet/VAGARY/CyrineTrabelsi/Controller/AvisC.php';

    $error = "";
 
    // create avis
    $avis = null;

    // create an instance of the controller
    $AvisC = new AvisC();
    
    if (
        isset($_POST["text_avis"])// && 
       // isset($_POST["client"]) 
    ) {
        if (
            !empty($_POST["text_avis"]) //&& 
            ///!empty($_SESSION["client"]) 
        ){
            $avis = new avisCom(
                $_POST['text_avis'],
                $_SESSION['e']
                
            );
            
            $AvisC->ajouterAvis($avis);
            header('Location:comm_id.php');
            
        }
        else
            $error = "Missing information";
    }
    ?>
