<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



session_set_cookie_params(3600);

// mon localhost est sur mon windows port: 33306 de la base de donnée piscine.php, avec comme username root et password root
$dsn = 'mysql:host=localhost:3306;dbname=piscine-blog';
$username = 'root';
$password = 'root';
// j'utilise try catch pour récupérer des erreurs éventuelles
try {
    $pdo = new PDO($dsn, $username, $password);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
?>