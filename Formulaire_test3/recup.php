<?php

//Il faut inclure le fichier class.php
include "class.php";

//Initialiser la variable de la classe
$poo = new Poo();
$poo->SetValues($_POST['lastname'],$_POST['firstname'],$_POST['adresse']);
//Faire appel aux functions créées dans la classe en mentionnant le "name" des inputs ainsi que la méthode POST
// $poo->SetName($_POST['firstname']);
// $poo->Setpre($_POST['lastname']);
// $poo->Setadress($_POST['adresse']);

//La function Display sert a afficher "Mon nom est..."etc
$poo->Display();

?>