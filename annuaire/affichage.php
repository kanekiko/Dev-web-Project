<!DOCTYPE html>
<html lang="fr">

<head>
<meta charset="utf-8" />
<title>Affichage</title>
</head>

<body>
	<dl>
        <?php
        if (file_exists("annuaire.txt")) {
            $fichier = fopen("annuaire.txt","r");
            while ($ligne = fgets($fichier)) {
                list($prenom,$nom,$tel,$adresse,$ville,$email) = explode(';',rtrim($ligne));
	            if (empty($_POST['recherche']) || strtoupper($_POST['recherche']) == strtoupper($nom)) {
	                echo "<dt><span class='prenom'>$prenom</span> <span class='nom'>$nom</span></dt>
                            <dd class='adresse'>$adresse<br /><span class='ville'>$ville</span></dd>
	                        <dd class='telephone'>$tel</dd>
	                        <dd class='email'><a href='mailto:$email'>$email</a></dd>";
	            }
            }
            fclose($fichier);
        }
        ?>
    </dl>
    
    <p>
		<a href="index.php">Revenir au formulaire</a>
	</p>
</body>

</html>
