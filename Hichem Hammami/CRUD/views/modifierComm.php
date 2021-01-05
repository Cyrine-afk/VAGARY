<?php
    include "../controller/CommunauteC.php";
    include_once '../Model/Communaute.php';

	$CommunauteC = new CommunauteC();
	$error = "";

	if (
        isset($_POST["id_com"])&&
        isset($_POST["nom_com"]) && 
        isset($_POST["nbr_com"]) 
    ){
        var_dump($_POST['nom_com']);
		if (
            !empty($_POST["nom_com"]) && 
            !empty($_POST["nbr_com"]) 
        ) {
            $Communaute = new Communaute(
                $_POST['nom_com'],
                $_POST['nbr_com']
            );
            
            $CommunauteC->modifierCommunaute($Communaute, $_GET['id_nom']);
            header('Location:afficherCommunaute.php');
        }
        else
            $error = "Missing information";
	}

?>
<!DOCTYPE html>
<html>

	<head>
		<title>Modifier Communaute</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<button><a href="afficherCommunaute.php">Retour à la liste</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
		
		<?php
			if (isset($_GET['id_com'])){
                $CommunauteC->recupererCommunaute1($Communaute,$_GET['id_com']);
				
				
		?>
		<form action="" method="POST">
            <table align="center">
                <tr>
                    <td rowspan='3' colspan='1'>Fiche Personnelle</td>
                    <td>
                        <label for="nom_com">Nom Communauté:
                        </label>
                    </td>
                    <td><input type="text" name="nom_com" id="nom_com" maxlength="20" value = "<?php echo $Communaute['nom_com']; ?>"></td>
                </tr>
                <tr>
                    <td>
                        <label for="nbr_ab_com">nbr ab:
                        </label>
                    </td>
                    <td><input type="number" name="nbr_ab_com" id="nbr_ab_com"  value = "<?php echo $Communaute['nbr_ab_com']; ?>"></td>
                </tr>
                <tr>
                    <td>
                        <label for="id_com">id com:
                        </label>
                    </td>
                    <td><input type="number" name="id_com" id="id_com"  value = "<?php echo $Communaute['id_com']; ?>"></td>
                </tr>
                
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Modifier" name = "modifer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
		<?php
            }
		?>
	</body>
</html>