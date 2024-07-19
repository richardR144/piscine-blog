<?php 


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../vendor/autoload.php';

class DbConnection {

    private $dsn;

    private $username;

    private $password;


    function __construct() {
        $this->dsn = 'mysql:host=localhost:3306;dbname=piscine-blog';
        $this->username = 'root';
        $this->password = 'root';
    }

    public function connect() {
        try {
            $pdo = new PDO($this->dsn, $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $pdo;
        } catch (PDOException $e) {
            echo "Erreur de connexion : " . $e->getMessage();
        }
    }
}