<?php
require_once '../model/ModelVoiture.php';

$tab_v=ModelVoiture::getAllVoitures();
//var_dump($tab_v);
require'../view/voiture/list.php';

