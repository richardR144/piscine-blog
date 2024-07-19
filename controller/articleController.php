<?php


require_once("../config/config.php");
require_once("../model/ArticleRepository.php");

class ArticleController {

    public function addArticle() {


        $isRequestOK = false;

        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            $title = $_POST['title'];
            $content = $_POST['content'];
            $dateNow = new DateTime("NOW");
            $date = $dateNow->format('Y-m-d');

            $articleRepository = new ArticleRepository();
            $isRequestOK = $articleRepository->insert($title, $content, $date);

        }


            $loader = new \Twig\Loader\FilesystemLoader('../template');
            $twig = new \Twig\Environment($loader);
    
            echo $twig->render('pages/addArticleView.html.twig', [
                'isRequestOK' => $isRequestOK
            ]);
 }

        public function showArticle() {

                // récupère l'id passé dans l'url de la requête 
           $id = $_GET['id'];

           var_dump($id); die;
        // on instancie le repository pour accéder aux méthodes
            $articleRepository = new ArticleRepository();
   
            // on appelle la méthode qui permet de récup un article
           // en fonction de son id
           $article = $articleRepository->findOneById($id);
           
           $loader = new \Twig\Loader\FilesystemLoader('../template');
           $twig = new \Twig\Environment($loader);
   
           echo $twig->render('page/showArticleView.html.twig', [
               'articles' => $articles
           ]);
         
           // on appelle la vue
           // qui affiche l'article
           
       }
       }

    // j'ai mis l'url (uri) met en commentaire 
    // car je l'ai instencié dans mon Index.php dossier public
    // $articleController = new ArticleController();
    // $articleController->showArticle();