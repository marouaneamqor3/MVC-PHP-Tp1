<?php
require_once'../config/Conf.php';
class Model
{
	public static $pdo;


	public static function Init(){
	$hostname=Conf::getHostname();
	$database=Conf::getDatabase();
	$login=Conf::getLogin();
	$password=Conf::getPassword();
//echo Conf::getDebug();
	try {
		self::$pdo = new PDO("mysql:host=$hostname;dbname=$database",$login, $password);
		self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo "Connected successfully ";
		echo "<br>";
	} catch(PDOException $e) {

		if (Conf::getDebug()==True)
		{
	 		echo "Connection failed: " . $e->getMessage();
		}
		else
		{
			echo "Ouuups Une erreur dans la base acitiver le mode debug";
		}
		die();
	}
	}
}
 Model::Init();
