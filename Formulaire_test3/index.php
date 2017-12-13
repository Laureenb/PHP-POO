<!DOCTYPE html>
<html>
<head>
	<title>Exemple : Récupérer les données d'un formulaire dans une nouvelle page</title>
</head>
<body>

<?php

//Il faut inclure le fichier class.php
include "class.php";

//Initialiser la variable de la classe
$poo = new Poo();

//Si lastname existe renvoyer tout
if(isset($_POST["lastname"]))
{
	$poo->Setpre($_POST['lastname']);
	$poo->SetName($_POST["firstname"]);
	$poo->Setadress($_POST['adresse']);
}

//Permet d'afficher "Mon nom est..."etc
// $poo->Display();

?>

<br/>

<!-- Appelle la page qui va réceptionner les réponses du formulaire (si il y en a une) avec la méthode POST qui sera réutilisée dans reception.php avec les valeurs "name" des inputs-->
<form action='reception.php' method="POST">

Entrez votre nom: <input type="text" name="firstname"><br/><br/>

Entrez votre prenom: <input type="text" name="lastname"><br/><br/>

Entrez votre adresse: <input type="text" name="adresse"><br/><br/>

<input type="submit" name="" value="submit">

</form>

</body>
</html>