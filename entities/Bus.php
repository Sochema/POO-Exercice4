<?php

class Bus extends AnimalCompagnie{
   protected $_nbrSieges;

 public function setNbrSieges($nbrSieges){
   if(is_int($nbrSieges)){
     $this->_nbrSieges=$nbrSieges;
   }
 }

 public function getNbrSieges(){
   return $this->_nbrSieges;
 }

 public function __construct($immatriculation, $couleur, $nbrSieges){
    $this->setNbrSieges($nbrSieges);
    parent::__construct($immatriculation, $couleur);
  }

}












?>

 <!-- Fetch class -> permet l'hydratation sans la function hydrate  -->
