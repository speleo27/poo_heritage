<?php
require_once "classPerson.php";

class Vendor extends Personne {

  

    public function sell($customer,$product){
        echo"le vendeur ".$this->get_name()." vend du ". $product." à ".$customer->get_name()."</br>";
    }


}
?>