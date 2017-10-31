<?php

class Cars extends AnimalCompagnie{
   protected $_nbrPortes;


 public function setNbrPortes($nbrPortes){
   if(is_int($nbrPortes)){
     $this->_nbrPortes=$nbrPortes;
  }

 }

 public function getNbrPortes(){
   return $this->_nbrPortes;
 }

 public function __construct($immatriculation, $couleur, $nbrPortes){
    $this->setNbrPortes($nbrPortes);
    parent::__construct($immatriculation, $couleur);

  }



}




 ?>
