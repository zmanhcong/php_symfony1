<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/main", name="main")
     */
    public function index(): Response
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
        ]);
    }

    /**
     * @Route("/", name="home")
     */
    public function home()
    {
        return $this -> render("home/index.html.twig");
    }


    /**
     * @Route("/custom/{name?}", name="custom")
     */
    public function custom(Request $request)
    {
        $name = $request->get("name");
        return $this->render("home/custom.html.twig", [
            "name" => $name
        ]);
    }
}
