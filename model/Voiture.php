<?php
class Voiture{
	public $immatriculation;
	public $marque;
	public $couleur;

	public function __construct($m = NULL, $c = NULL, $i= NULL){
		if (!is_null($m)&& !is_null($c) && !is_null($i)){
		 $this->marque=$m;
		 $this->couleur=$c;
		 $this->immatriculation=$i;
		}
	}

	public function afficher(){

		echo " $this->immatriculation \n";
		echo " $this->marque \n";
		echo " $this->couleur \n";

	}
	public static function getAllVoitures(){
		$rep = Model::$pdo->query("SELECT * FROM voiture");
		$rep->setFetchMode(PDO::FETCH_CLASS, 'Voiture');
		return $rep->fetchAll();
	}
}
