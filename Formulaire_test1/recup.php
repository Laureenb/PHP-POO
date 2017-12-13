<?php

function AfficherValeur($valeur)
{
	echo "Ma valeur est : ".$valeur. "<br/>";
}


if(isset($_POST["desc"]))
{
	AfficherValeur($_POST['desc']);
	AfficherValeur($_POST['desc2']);
	AfficherValeur($_POST['genre']);
}

?>