<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\SessionService;

use function Symfony\Component\DependencyInjection\Loader\Configurator\service;

class AjaxController extends AbstractController
{
    #[Route('/ajaxResponder', name: 'ajax_responder')]
    public function index(
        SessionInterface $session, 
        Request $request,
        SessionService $sessionService,
    ): Response

    {
        

        // $includeValues = [
        //     'fontSize',
        //     'font',
        //     'display',
        //     'checkboxInterval',
        //     'betweenInterval',
        //     'colorSite1',
        //     'colorSite2',
        //     'imgVisible',
        // ];
        if (!empty($_POST)){
            // echo($_POST);
            // var_dump($_POST);
            // exit;
            
            // foreach($_POST as $k => $item){
            //     if( in_array($k, $includeValues)){
            //         $session->set($k, $item);
            //     }
                
            // }
            $sessionService->setSessionData($session,$_POST);
            exit(json_encode(['success' => true]));

            // if (!empty($_POST['zoom'])){
            //     // echo($_POST);
            //     $session->set('customStyle', $_POST['zoom']);
            //     // var_dump($_POST);
            //     exit(json_encode(['success' => true]));
            // }
        }
        exit(json_encode([]));
    }
}
