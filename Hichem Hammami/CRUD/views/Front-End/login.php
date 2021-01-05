<?php

//include $_SERVER['DOCUMENT_ROOT']."/CRUD/config.php";
include_once $_SERVER['DOCUMENT_ROOT'].'/CRUD/Controller/CommunauteC.php';
session_start();





$pdo = new PDO('mysql:host=localhost;dbname=vagary', 'root', '',
          [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    

    if (isset($_POST['config'])) {
        $adresse = $_POST['mail_client'];
        $mdp = $_POST['mdp_client'];
        $sql = "SELECT id_client , mail_client , mdp_client from client where mail_client='$adresse' and mdp_client='$mdp'";
        $res = $pdo->query($sql);
        $resultat = $res->fetchALL(PDO::FETCH_ASSOC);

        if ($resultat) {
            $_SESSION['client'] = $resultat['id_client'];
            header("location:comm.php");
        } else {
            echo
                "
                <div class='alert alert-dismissible alert-danger'>
                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                    <strong>!</strong> <a href='#' class='alert-link'>Change a few things up</a> and try submitting again.
                </div>
                ";
        }
    }
    ?>





