<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler;
use Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage;
use Symfony\Component\Routing\Annotation\Route;

class MainPageController extends AbstractController
{
    #[Route('/', name: 'app_main_page')]
    
    public function index(SessionInterface $session): Response
    {
        $sessionStorage = new NativeSessionStorage([], new NativeFileSessionHandler());
        $session = new Session($sessionStorage);
        $session = new Session();
        $session->start();

        return $this->render('main_page/index.html.twig', [
            'controller_name' => 'MainPageController',
        ]);
    }
}
