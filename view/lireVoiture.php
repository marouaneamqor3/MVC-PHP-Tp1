<?php
require_once'../model/ModelVoiture.php';
//$tab_voit = new Voiture();
echo '<table><thead><tr>';
echo '<th>Imm</th>';
echo '<th>marque</th>';
echo '<th>color</th>';
echo  '</tr></thead><tbody>';

$tab_voit = Voiture::getAllVoitures();
//var_dump($tab_voit);
foreach( $tab_voit as $tab){
	//$tab->afficher();
}
echo '</tbody></table>';

//var_dump($tab_voit);

