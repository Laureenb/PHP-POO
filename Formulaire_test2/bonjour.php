<!DOCTYPE html>
<html>
<head>
	<title>bonjour</title>
</head>
<body>
	<?php

	include "class.php";

	$form = new Form(
		['recup_test.php', 'POST'],
		[
			['text', 'text', 'text'],
			['text', 'text', 'text'],
			['text', 'text', 'text'],
			['text', 'text', 'text'],
			['text', 'text', 'text']
		]
	);
	?>

</body>
</html>