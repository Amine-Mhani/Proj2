<?php


class Connexion {
    private $connexion;

    public function __construct() {
        /*Local database
        $host = 'localhost';
        $dbname = 'platform';
        $login = 'root';
        $password = '';*/


        //Remote Database
        $host = 'remotemysql.com';
        $dbname = 'QyAQjHlDFm';
        $login = 'QyAQjHlDFm';
        $password = 'DKSrKBVlQe';

        try {
            $this->connexion = new PDO("mysql:host=$host;dbname=$dbname", $login, $password);
            $this->connexion->query("SET NAMES UTF8");
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    function getConnexion() {
        return $this->connexion;
    }
}
