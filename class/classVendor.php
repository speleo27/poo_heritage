<?php
require_once "classPerson.php";

class Vendor extends Personne {

  

    public function sell($customer,$product){
        echo"le vendeur ".$this->show()." vend du ". $product." à ".$customer->show()."</br>";
    }


}
?>