<!DOCTYPE html>

<html>
    <head>
        <title>Gestion d'annuaire</title>
        <link rel="stylesheet" type="text/css" href="annuaire.css"/>
        <meta charset="utf-8" />
    </head>
 
    <body>
        <form action="ajoute_entree.php" method="post" >
            <p><label for="prenom">Prénom</label> <input type="text" name="prenom" id="prenom" /></p>
            <p><label for="nom">Nom</label> <input type="text" name="nom" id="nom" /></p>
            <p><label for="tel">Téléphone</label> <input type="text" name="tel" id="tel" size="10"/></p>
            <p><label for="adresse">Adresse</label> <input type="text" name="adresse" id="adresse" size="50" /></p>
            <p><label for="ville">Ville</label> <input type="text" name="ville" id="ville" /></p>
            <p><label for="email">Email</label> <input type="text" name="email" id="email" /></p>
            <p><input type="submit" name="valider" value="Valider" /></p>
        </form>
    
        <hr />

        <form action="affichage.php" method="post">
            <p><label for="recherche">Nom</label> <input type="text" name="recherche" id="recherche" value="<?php if(isset($_POST['recherche'])) echo $_POST['recherche'];?>"/></p>
            <p><input type="submit" name="rechercher" value="Rechercher" /></p>
        </form>

		<p>
			<a href="affichage.php">Afficher le contenu de l'annuaire</a>
		</p>
        
    </body>
</html>
