<?php
require_once('../config/config.php');



$stmt = $pdo->query("SELECT * from article");
$articles = $stmt->fetchAll(PDO::FETCH_ASSOC);

require_once('../template/pages/indexView.php');

