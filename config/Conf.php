<?php
error_reporting(E_ALL);

class Conf {

	static private $database = array(
		//le nom du host
		'hostname'=>'localhost',
		'database'=>'TD1',
		'login'=>'amqor',
		'password'=>'amqor'
	);
	static public function getLogin(){
		return self::$database['login'];
	}
	static public function getHostname(){
		return self::$database['hostname'];
	}
        static public function getDatabase(){
                return self::$database['database'];
        }
        static public function getPassword(){
                return self::$database['password'];
        }
}
?>
