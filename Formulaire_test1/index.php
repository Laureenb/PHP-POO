<!DOCTYPE html>
<html>
<head>
	<title>Classe form</title>
</head>
<body>

	<h1>Formulaire</h1>

<?php

		include "class.php";

		$form = new Form();

		$form->create('recup.php', 'POST');

		$form->label('Entrez description');

		$form->textarea('desc','description');

		$form->label('Entrez description2');

		$form->textarea('desc2','description2');

		$form->label('Entrez genre');

		$form->radio('genre', 'h', 'Homme');

		$form->radio('genre', 'f', 'Femme');

		$form->label('Abonnement News');

		$form->checkbox('checkbox','checkbox value');

		$form->submit('submit','valider');

		$form->end();

?>

</body>
</html>