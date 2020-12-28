<?php
    include 'D:/Programmes/xampp/htdocs/projet/VAGARY/CyrineTrabelsi/config.php';

    if (isset($_POST["id_inf"]))
    {
        $query= "INSERT INTO client_follow_inf (id_client,id_inf,date_follow) values (:id_client,:id_inf,:date_follow)";

        $statement = $connect->prepare($query);

        $statement->execute(
            array(
                ':id_inf' => $_POST["id_inf"],
                ':id_client' => $_SESSION['id_client']
            )
        );

        $result=$statement->fetchAll();

        if (isset($result)) {
            echo 'done';
        }
    }
?>