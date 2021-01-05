<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/CRUD/Model/avis.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/CRUD/Controller/AvisC.php';

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
            $avis = new avis(
                $_POST['text_avis'],
                $_POST['client']
                
            );
            
            $AvisC->ajouterAvis($avis);
            header('Location:comm_id.php');
            
        }
        else
            $error = "Missing information";
    }
    ?>
