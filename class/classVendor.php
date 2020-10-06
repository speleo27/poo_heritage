<?php
class Vendor extends Personne {

  

    public function sell($customer,$product){
        echo"<p>".$this->name." vend du ". $product." à ".$customer->name."</p>";
    }


}
?>