<?php

require_once("../config/config.php");


class ArticleRepository {

    public function findAll() {
        $dbConnection = new DbConnection();
        $pdo = $dbConnection->connect();

        $stmt = $pdo->query("SELECT * FROM article");
        $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $articles;
    }



// la méthode insert permet de sauver des données dans la table article
    // elle insère le titre, le contenu et la date qu'on lui envoie en parametre
    public function insert($title, $content, $date)
    {
        
        // model
        $dbConnection = new DbConnection();
        $pdo = $dbConnection->connect();

        // model
        $sql = "INSERT INTO article (title, content, date) VALUES (:title, :content, :date)";
        $stmt = $pdo->prepare($sql);


        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':content', $content);
        $stmt->bindParam(':date', $date);

        // view
        // if ($stmt->execute()) {
        //     echo "Nouvel article ajouté avec succès";
        // } else {
        //     echo "Erreur lors de l'ajout de l'article";
        // }

        $isRequestOk = $stmt->execute();

       return $isRequestOk;
    }



    public function findOneById($id) {
        // se connecter à la base de données
        $dbConnection = new DbConnection();
        $pdo = $dbConnection->connect();

        // Prepare l'SQL
        $sql = "SELECT * FROM article WHERE id = :id";
        $sql = "DELETE * FROM article Where id = :id";
        $stmt = $pdo->prepare($sql);

        // Bind le paramètre de l'id
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        // Execute the query
        $stmt->execute();

        // Fetch renvoie à un tableau
        $article = $stmt->fetch(PDO::FETCH_ASSOC);

        // Return l'article
        return $article;
    }


}


?>