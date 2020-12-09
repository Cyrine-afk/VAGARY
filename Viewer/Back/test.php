<?php 
    require_once '../Controller/InfluC.php';
    require_once '../Model/Influ.php';

    $inf1= new InfluC();

    
    if(isset($_POST["nom_inf"])&& isset($_POST["prenom_inf"]) && isset($_POST["date_ajout_inf"]) && isset($_POST["bio_inf"]) && isset($_POST["feedback_inf"]) && isset($_POST["image_inf"])&& isset($_POST["nbr_ab_inf"]) && isset($_POST["fb_inf"]) && isset($_POST["insta_inf"]) ) {
      var_dump($_POST['nom_inf']);
      $inf2= new Influ($_POST["nom_inf"], $_POST["prenom_inf"], $_POST["date_ajout_inf"], $_POST["bio_inf"], $_POST["feedback_inf"], $_POST["image_inf"], $_POST["nbr_ab_inf"], $_POST["fb_inf"], $_POST["insta_inf"]);
      $ac= new InfluC();
      $ac->ajouterInfluenceur($inf2);
    }
    else  
      echo "ICI";
?>