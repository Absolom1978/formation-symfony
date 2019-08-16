<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller {


    /**
     * @Route("/hello/{prenom}", name="hello")
     *
     * @return void
     */
    public function hello ($prenom = "anonyme") {
        return new Response("Bonjour  " . $prenom);
    }

    /** 
     * @Route("/", name="homepage")
     * 
     */
    public function home () {
        $prenom = ["pierre" => 31 , "yvon" => 23 , "marcel" => 45];        
        return $this->render(
            'home.html.twig', [
                'title' => "Bienvenue sur mon site dsdsdsd!",
                'age' => 31,
                'prenoms'=> $prenom
            ]
        );
    }
}




?>



