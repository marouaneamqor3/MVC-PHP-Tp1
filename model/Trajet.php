<?php
class Trajet{
        public $id;
        public $depart;
        public $arrivee;
        public $date;
        public $nbplaces;
        public $prix;
        public $conducteur_login;

        public function __construct($id = NULL, $depart = NULL, $arrivee = NULL,$date =NULL,$nbplaces=NULL,$prix=NULL,$conducteur_login=NULL){
                if (!is_null($id) && !is_null($depart) && !is_null($arrivee) && !is_null($date) && !is_null($nbplaces) && !is_null($prix) && !is_null($conducteur_login) ){
                 $this->id=$id;
                 $this->depart=$depart;
                 $this->arrivee=$arrivee;
		 $this->date=$date;
		 $this->nbplaces=$nbplaces;
		 $this->prix=$prix;
		 $this->conducteur_login=$conducteur_login;
                }
        }

        public function afficher(){
                 echo'$this->id=$id';
                 echo'$this->depart=$depart';
                 echo'$this->arrivee=$arrivee';
                 echo'$this->date=$date';
                 echo'$this->nbplaces=$nbplaces';
                 echo'$this->prix=$prix';
                 echo'$this->conducteur_login=$conducteur_login';

        }
        public static function getAllTrajets(){
                $rep = Model::$pdo->query("SELECT * FROM trajet");
                $rep->setFetchMode(PDO::FETCH_CLASS, 'Trajet');
                return $rep->fetchAll();
        }
}

