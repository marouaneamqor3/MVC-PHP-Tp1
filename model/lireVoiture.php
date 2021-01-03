<?php
require_once'Model.php';

$rep = Model::$pdo->query("SELECT * FROM voiture");

$rep->setFetchMode(PDO::FETCH_CLASS, 'Voiture');

$tab_voit = $rep->fetchAll();

var_dump($tab_voit);

