<?php

require_once('../controller/ArticleController.php');
require_once('../controller/IndexController.php');

$requestUri = $_SERVER['REQUEST_URI'];
$uri = parse_url($requestUri, PHP_URL_PATH);
$endUri = str_replace('/Piscine-Blog/public/', '', $uri);
$endUri = trim($endUri, '/');
// j'instencie ce code ici et plus dans mon articleController car c'est où se geère les url
// uri=url ->identification



if($endUri === "") {

    $indexController = new IndexController();
    $indexController->index();

} else if ($endUri === "add-article") {

    $addArticleController = new ArticleController();
    $addArticleController->addArticle();

} else if ($endUri === "show-article") {

    $addArticleController = new ArticleController();
    $addArticleController->showArticle();

} else {
    echo '<p>Dégage !</p>';
}

