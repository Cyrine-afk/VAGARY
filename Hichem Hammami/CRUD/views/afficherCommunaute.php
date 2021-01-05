<?PHP
	include "../controller/CommunauteC.php";

	$Communaute=new CommunauteC();
	$listeCommunaute=$Communaute->afficherCommunaute();

?>

<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> Afficher Liste Utilisateurs </title>
    </head>
    <body>
		<button><a href="connexion.php">Ajouter un Utilisateur</a></button>
		<hr>
		<table border=1 align = 'center'>
			<tr>
				<th>Id</th>
				<th>Nom com</th>
				<th>nbr abonnés</th>
			</tr>

			<?PHP
				foreach($listeCommunaute as $Communaute){
			?>
				<tr>
					<td><?PHP echo $Communaute['id_com']; ?></td>
					<td><?PHP echo $Communaute['nom_com']; ?></td>
					<td><?PHP echo $Communaute['nbr_ab_com']; ?></td>
					
					<td>
						<form method="POST" action="supprimerCommunaute.php">
						<input type="submit" name="supprimer" value="supprimer">
						<input type="hidden" value=<?PHP echo $Communaute['id_com']; ?> name="id_com">
						</form>
					</td>
					<td>
						<a href="modifierCommunaute.php?id=<?PHP echo $Communaute['id_com']; ?>"> Modifier </a>
					</td>
				</tr>
			<?PHP
				}
			?>
		</table>
	</body>
</html>
