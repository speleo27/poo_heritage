<?php
class Personne{
 protected $name;

 public function __construct($name){
     $this->name = $name;

 }
 public function show(){
    return $this->name;
 }
 
     
 




}


?>