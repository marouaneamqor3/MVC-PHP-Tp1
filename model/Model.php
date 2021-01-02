<?php
require_once'../config/Conf.php';
class Model{
	public static $pdo;


	public static function Init(){
	$hostname=Conf::getHostname();
	$database=Conf::getDatabase();
	$login=Conf::getLogin();
	$password=Conf::getPassword();
	try {
		self::$pdo = new PDO("mysql:host=$hostname;dbname=$database",$login, $password);
		self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo "Connected successfully";
	} catch(PDOException $e) {
	 	echo "Connection failed: " . $e->getMessage();
		}
	}
}
 Model::Init();
