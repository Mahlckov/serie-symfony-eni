<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController{
//on crée une méthode par page
    /**
     * On dit quelle url, commence par un slash
     * convention de nommage de route : préfixe par le nom du controller (main) + nom méthode
     * @Route("/", name="main_home")
     */
    public function home(){
        //on déplace le code html dans un fichier twig
        return $this->render('main/home.html.twig');
    }

    /**
     * @Route("/test", name="main_test")
     */
    public function test(){
        $serie = [
            'title' => '<h1>Game of Thrones</h1>',
            'year' => 2010
        ];
        //on ajoute un tableau associatif en 2nd argument de la méthode render()
        return $this->render('main/test.html.twig', [
            "mySerie" => $serie,
            "autreVar" => 3456789
        ]);
    }
}