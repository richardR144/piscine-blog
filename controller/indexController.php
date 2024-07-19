<?php
require_once("../model/ArticleRepository.php");
    

    class IndexController {
    
        public function index() {
            $articleRepository = new ArticleRepository();
            $articles = $articleRepository->findAll();
    
            $loader = new \Twig\Loader\FilesystemLoader('../template');
            $twig = new \Twig\Environment($loader);
    
            echo $twig->render('pages/index.html.twig', [
                'articles' => $articles
            ]);
        }
    }




 


// on vient instancier notre fonction
// $indexController = new IndexController();
// j'appelle la méthode findAll() 
// $indexController->index();
