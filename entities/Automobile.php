<?php

abstract class Automobile{

    protected $_immatriculation;
    protected $_couleur;

    public function __construct($immatriculation, $couleur){
      $this->setImmatriculation($immatriculation);
      $this->setCouleur($couleur);
    }


//SETTERS
    public function setImmatriculation($immatriculation){
      $this->_immatriculation=$immatriculation;
    }

    public function setCouleur($couleur){
      $this->_couleur=$couleur;
    }

//GETTERS

    public function getImmatriculation(){
      return $this->_immatriculation;
    }

    public function getCouleur(){
      return $this->_couleur;
    }


  }
















?>
