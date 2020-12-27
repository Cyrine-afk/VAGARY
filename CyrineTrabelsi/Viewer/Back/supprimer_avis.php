<?PHP
include "../../Controller/avisA.php";
$avis=new AvisA();
if (isset($_POST["Id"])){
	$avis->supprimerAvis($_POST["Id"]);
	header('Location: avis.php');
}
else 
echo "prob"; 

?>