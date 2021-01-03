<?php
require_once'Model.php';
class ModelVoiture{
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

/*	public function afficher(){
		echo "<tr>";
		echo "<td> $this->immatriculation </td>";
		echo "<td> $this->marque </td>";
		echo "<td> $this->couleur </td>";
		echo "</tr>";
	
}*/

	public static function getAllVoitures(){
		$rep = Model::$pdo->query("SELECT * FROM voiture");
		$rep->setFetchMode(PDO::FETCH_CLASS, 'ModelVoiture');
		return $rep->fetchAll();
	}
	public static function getImmatriculation(){
		echo  "$this->immatriculation" ;
	}
	public static function getVoitureByImmat($immatriculation){
		$rep = Model::$pdo->query("SELECT * FROM voiture where immatriculation=$immatriculation");
		$rep->setFetchMode(PDO::FETCH_CLASS, 'ModelVoiture');
		return $rep->fetchAll();
	}
}
