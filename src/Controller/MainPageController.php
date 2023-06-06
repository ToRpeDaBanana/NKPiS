<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class MainPageController extends AbstractController
{
    #[Route('/', name: 'app_main_page')]
    


    public function index(SessionInterface $session, Request $request): Response
    {
        if (!empty($_POST)){
            // echo($_POST);
            // var_dump($_POST);
            // exit;
            foreach($_POST as $k => $item){
                $session->set($k, $item);
            }
            exit(json_encode(['success' => true]));
            // if (!empty($_POST['zoom'])){
            //     // echo($_POST);
            //     $session->set('customStyle', $_POST['zoom']);
            //     // var_dump($_POST);
            //     exit(json_encode(['success' => true]));
            // }
        }
        

        // if (!$session->has('customStyle'))
        // {
        //     $session->set('customStyle', 1);
        // }
        // $customStyle = $session->get('customStyle');


        // echo($customStyle);
        // exit;
        // $session->clear();
        return $this->render('main_page/index.html.twig', [
            'controller_name' => 'MainPageController',
            // 'customStyle' => $customStyle,
        ]);
    }
}
