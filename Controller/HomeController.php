<?php
namespace App\Controller;
use Symfony\Component\Routing\Route;
use Symfony\component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

Class HommeController extends AbstractController {
    
    #[Route('/home', 'home.index', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('home/index.html.twig');
    }

    #[Route('/hello', name : 'hello.index', methods:['GET'])]
    public function hello(): Response
    {
        return $this->render('home/index.html.twig');
    }

    #[Route('/test', name: 'app_test', methods: ['GET'])]
    public function test(): Response {
        return $this->render('home/index.html.twig');
    }
   
}