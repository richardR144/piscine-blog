<?php
require_once('../config/config.php');


$dbConnection = new dbConnection();
$pdoConnection->connect();
$stmt = $pdo->query("SELECT * from article");
$articles = $stmt->fetchAll(PDO::FETCH_ASSOC);

public function connect() {
    try {
        $pdo = new PDO("mysql:dsn=$this->dsn", $this->user, $this->password);
        
        return $pdo;
    } catch (PDOException $e) {
        
        die("Erreur de connexion : " . $e->getMessage());
    }
}


require_once('../template/pages/indexView.php');

