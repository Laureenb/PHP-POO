<!DOCTYPE html>
<html>
<head>
	<title>Classe form</title>
</head>
<body>


<!-- <form action="class.php" method="POST"> -->

		<?php

		include "class.php";

		$form = ['name', 'gender'];
		$test = new Affiche($form);

		$test->boucle($form);

		// $form = new Form;
		// (['name',$name], ['gender',$gender]);
		// $class = $import;

		// echo $form;

		?>
		
<!-- </form> -->

</body>
</html>