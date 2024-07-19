<?php

require_once("../config/config.php");
require_once('../model/ArticleRepository.php');

class AddArticleController {
    // la nouvelle méthode doit accepter trois parametre : title, content et date
        public function addArticle() {
    
            // model
            $dbConnection = new DbConnection();
            $pdo = $dbConnection->connect();
    
            // controller
            $title = "test";
            $content = "test";
            $date = "24-07-17";
               
            $articleRepository = new ArticleRepository();


            $isRequestOK = $articleRepository->insert($title, $content, $date);
    
            return $isRequestOk;
        }
}
    