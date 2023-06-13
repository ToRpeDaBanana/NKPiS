<?php

namespace App\Controller;
use App\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;

class MainPageController extends AbstractController
{
    #[Route('/', name: 'app_main_page')]
    


    public function index(
        SessionInterface $session, 
        Request $request,
        EntityManagerInterface $entityManager, 
        ManagerRegistry $doctrine,
    
    ): Response

    {
        

        $includeValues = [
            'fontSize',
            'font',
            'display',
            'checkboxInterval',
            'betweenInterval',
            'colorSite1',
            'colorSite2',
            'imgVisible',
        ];
        if (!empty($_POST)){
            // echo($_POST);
            // var_dump($_POST);
            // exit;
            
            foreach($_POST as $k => $item){
                if( in_array($k, $includeValues)){
                    $session->set($k, $item);
                }
                
            }
            // exit(json_encode(['success' => true]));

            // if (!empty($_POST['zoom'])){
            //     // echo($_POST);
            //     $session->set('customStyle', $_POST['zoom']);
            //     // var_dump($_POST);
            //     exit(json_encode(['success' => true]));
            // }
        }
        
        // $pageContent = $entityManager->getRepository(Page::class)->findAll();
        $pageContent = $doctrine->getRepository(Category::class)->findAll();
        $sessionValues = [];
        foreach($includeValues as $item){
            if ($session->has($item)){
                $sessionValues[$item] = $session->get($item);
            }
            
        }
        // var_dump($sessionValues);
        // var_dump($_SESSION);


        // if (!$session->has('customStyle'))
        // {
        //     $session->set('customStyle', 1);
        // }
        // $customStyle = $session->get('customStyle');
        // echo($customStyle);
        // var_dump($pageContent);
        // exit;
        // $session->clear();
        
        return $this->render('main_page/index.html.twig', [
            'controller_name' => 'MainPageController',
            'pageData' => $pageContent,
            'sessionData' => $sessionValues,
        ]);
    }
}
