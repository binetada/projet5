<?php
namespace Entity;

abstract class Manager{

	const DSN = 'mysql:dbname=blog;host=localhost';
	const USER = 'root';
	const PASS = '';




	protected function cnx(){
		try {
		    $dbh = new PDO(self::DSN, self::USER, self::PASS);
		} catch (PDOException $e) {
		    echo 'Connexion échouée : ' . $e->getMessage();
		}
		return $dbh;
	}

}

