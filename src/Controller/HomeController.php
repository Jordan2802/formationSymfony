<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



class HomeController extends AbstractController{

    /**
     * @Route("/hello/{prenom}/age/{age}", name="hello")
     * @Route("/hello/{prenom}", name="hello_prenom")
     * @Route("/bonjourtest", name="hello_base")
     * montre la page qui dit bonjour
     *
     * @return void
     */
    public function hello($prenom = "anonyme", $age = 0) {
        return $this->render(
            'hello.html.twig',
            [
                'prenom' => $prenom,
                'age' => $age
            ]
            );
    }

    /**
     * @Route("/", name="homepage")
     */
    public function home(){
        $prenoms = ["jordan" => 31, "lucas" => 12, "anne" => 55];


        return $this->render(
            'home.html.twig',
            [ 
                'title' => "bonjour à tous",
                'age' => 12,
                'tableau' => $prenoms
            ]
        );
    }

}
?>