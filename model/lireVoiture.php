<?php
require_once'Model.php';
require_once'Voiture.php';
//$tab_voit = new Voiture();
$tab_voit = Voiture::getAllVoitures();
foreach( $tab_voit as $tab){
	$tab->afficher();
}

//var_dump($tab_voit);

