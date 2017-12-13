<?php

//Initialisation de la classe avec les functions que l'on va travailler
class Poo{
 public $lastName;
 public $firstName;
 public $address;

//A voir....
  // function __construct()
  // {
  //   $this->nom = "Mon nom par défaut";
  // }

public function SetValues($nom,$prenom,$adresse)
{
  $this->lastName = $nom;
  $this->firstName = $prenom;
  $this->address = $adresse;
}

//Function qui va renvoyer le nom
   public function SetLastName($nom){
    $this->lastName = $nom;
  }

//Function qui va renvoyer le prénom
  public function SetFirstName($prenom){
    $this->firstName = $prenom;
  }

//Function qui va renvoyer l'adresse
  public function SetAddress($adresse){
    $this->address = $adresse;
  }

//Function utilisée dans reception.php et qui va renvoyer "Mon nom est..."etc
  public function Display(){
    echo "Mon nom est : ".$this->lastName. "<br/>";
    echo "Mon prenom est : ".$this->firstName. "<br/>";
    echo "Mon adresse est : ".$this->address. "<br/>";
  }

}

?>