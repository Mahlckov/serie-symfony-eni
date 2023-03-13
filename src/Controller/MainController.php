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
        echo 'coucou';
        die();
    }

    /**
     * @Route("/test", name="main_test")
     */
    public function test(){
        echo 'testounet';
        die();
    }
}