<!DOCTYPE html>
<html>
<head>
	<title>Classe form</title>
</head>
<body>
	<?php

	include "class.php";

	$form = new Form(
		['recup.php', 'POST'],
		[
			['text', 'text', 'text'],
			['number', 'number', 'number'],
			['password', 'password', 'password'],
			['checkbox', 'checkbox', 'checkbox'],
			['radio', 'femal', 'radio'],
			['radio', 'male', 'radio']
		]
	);
	?>

</body>
</html>