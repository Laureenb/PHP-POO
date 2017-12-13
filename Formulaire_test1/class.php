<?php

class Form{
    public $create;
    public $label;
    public $textarea;
    public $radio;
   	public $checkbox;

  // function __construct()
  // {
  
  // }

  public function create($url,$method){
    echo "<form action='{$url}' method='{$method}'>";
  }

  public function label($text){
    echo "<p>{$text}</p><br/>";
  }

  public function textarea($name,$placeholder){
    echo "<textarea name='{$name}' placeholder='{$placeholder}' cols='30' rows='10'></textarea><br/>";
  }

  public function radio($name,$value,$text){
    echo  "{$text}<input type='radio' name='{$name}' value='{$value}'><br/>";
  }

  public function checkbox($name,$value){
    echo  "<input type='checkbox' name='{$name}' value='{$value}'><br/>";
  }
 
   public function submit($name,$value){
    echo  "<input type='submit' name='{$name}' value='{$value}'><br/>";
  }
   public function end(){
    echo  "</form>";
  }

  public function save($post) {
   	extract($_POST);
  	$this->textarea=$_POST['desc'];
    $this->textarea=$_POST['desc2'];
  	$this->radio=$_POST['genre'];
  	$this->checkbox=$_POST['checkbox'];
    $this->submit=$_POST['submit'];
  }

}

?>