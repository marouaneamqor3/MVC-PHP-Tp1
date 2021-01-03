<?php
class Voiture{
	public $immatriculation,$marque,$couleur;
	public function __construct($m = NULL, $c = NULL, $i= NULL){
		if (!in_null($m)&& !is_null($c) && !is_null($i)){
		 $this->marque=$m;
		 $this->couleur=$c;
		 $this->immatriculation=$i;
		}
	}
	public function afficher(){
		echo 'immatriculation = $this->immatriculation';
		echo 'marque = $this->marque';
		echo 'couleur = $this->couleur';
	}
}
