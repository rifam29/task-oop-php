<?php
require_once "Animal.php";

class frog extends animal
{
    public $jump;
    
    public  function jump() {
        return $this -> jump = "Hop Hop";
    }
}
?>