<?php

if (isset($_POST['valider'])) {
	
	$prenom = $_POST['prenom'];
	$nom = $_POST['nom'];
	$tel = $_POST['tel'];
	$adresse = $_POST['adresse'];
	$ville = $_POST['ville'];
	$email = $_POST['email'];

	$fichier = fopen("annuaire.txt","a");
	fwrite($fichier,"$prenom;$nom;$tel;$adresse;$ville;$email\n");
	fclose($fichier);
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>sans titre</title>
	<meta charset="utf-8" />
</head>

<body>
	<p>
		L'annuaire a bien été mis à jour.
	</p>
	<p>
		<a href="index.php">Revenir au formulaire</a>
	</p>
</body>

</html>

