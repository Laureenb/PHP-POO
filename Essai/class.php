<?php

include "index.php";

class Form{
    //public $action;
    public $name;
    public $gender;
    public $text;
    public $status;
    public $newsletter;
    public $submit;
   	public $die;

  function __construct()
  {
    //$this->db=new db();
    // si une des propriétés est un objet, il doit etre instancié dans le constructeur
  }

   public function save($post) {
   	extract($post);
  	$this->name=$name;
  	$this->gender=$gender;
  	$this->status=$status;
  }
  public function displayProperties() {
  	echo "mon nom est: ".$this->name;
  	echo "<br>mon genre est: ".$this->gender;
  	echo "<br>mon statut est: ".$this->status;
  }
  public function AddTotoToName()
  {
	$this->name=$this->name.'toto';
  }

}

//***TEST***

//dans class.php:
//creer constructeur
//creer propriétés
// creer methodes (text,select,end,..)

//dans index.php:
//enlever le form existant en html
//include class
//créer un objet Form
//Appeler les diférentes methodes pour créer des inputs
//générer un output de ton objet Form (=HTML)

?>