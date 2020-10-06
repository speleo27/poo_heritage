<?php 
require_once "class/classPerson.php";
require_once "class/classvendor.php";

$robert= new Vendor("Robert");
$martin= new Personne("Martin");
$robert->sell($martin,"pain");

$alice=new Vendor('Alice');
$paul=new Personne('Paul');
$alice->sell($paul,"lait");

$alice->sell($robert,"lait");



?>