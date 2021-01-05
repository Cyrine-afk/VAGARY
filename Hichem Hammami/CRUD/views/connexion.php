<?php
    include_once '../Model/communaute.php';
    include_once '../Controller/CommunauteC.php';

    $error = "";

    // create communaute
    $Communaute = null;

    // create an instance of the controller
    $CommunauteC = new CommunauteC();
    if (
        isset($_POST["nom_com"]) && 
        isset($_POST["nbr_ab_com"]) 
    ) {
        if (
            !empty($_POST["nom_com"]) && 
            !empty($_POST["nbr_ab_com"]) 
        ){
            $Communaute = new Communaute(
                $_POST['nom_com'],
                $_POST['nbr_ab_com']
                
            );
            $CommunauteC->ajouterCommunaute($Communaute);
            header('Location:afficherCommunaute.php');
        }
        else
            $error = "Missing information";
    }

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Communaute Display</title>
</head>
    <body>
        <button><a href="afficherCommunaute.php">Retour à la liste</a></button>
        <hr>
        
        <div id_com="error">
            <?php echo $error; ?>
        </div>
        
        <form action="" method="POST">
            <table border="1" align="center">

                <tr>
                    <td rowspan='3' colspan='1'>Fiche Communaute</td>
                    <td>
                        <label for="nom_com">Nom Communauté:
                        </label>
                    </td>
                    <td><input type="text" name="nom_com" id="nom_com" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="nbr_ab_com">nombre d'abonnés:
                        </label>
                    </td>
                    <td><input type="number" name="nbr_ab_com" id="nbr_ab_com" ></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Envoyer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
                
            </table>
        </form>
    </body>
</html>