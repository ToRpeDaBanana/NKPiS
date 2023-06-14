<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use App\Service\SessionService;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Request;

class PageTeachersController extends AbstractController
{
    #[Route('/jobopenings', methods:['GET'])]
    public function jobopenings(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session,
        
    ): Response
        
    {
        // $pageContent = $doctrine->getRepository(Teachers::class)->findAll();


        return $this->render('page-teachers/Jobopenings.html.twig', [
            'controller_name' => 'PageController',
            // 'pageData' => $pageContent,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    #[Route('/conferences', methods:['GET'])]
    public function conferences(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session,
        
    ): Response
        
    {
        // $pageContent = $doctrine->getRepository(Teachers::class)->findAll();


        return $this->render('page-teachers/Conferences.html.twig', [
            'controller_name' => 'PageController',
            // 'pageData' => $pageContent,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    #[Route('/tradeUnion', methods:['GET'])]
    public function tradeUnion(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session,
        
    ): Response
        
    {
        // $pageContent = $doctrine->getRepository(Teachers::class)->findAll();


        return $this->render('page-teachers/TradeUnion.html.twig', [
            'controller_name' => 'PageController',
            // 'pageData' => $pageContent,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    #[Route('/councilofVeteransofPedagogicalLabor', methods:['GET'])]
    public function councilofVeteransofPedagogicalLabor(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session,
        
    ): Response
        
    {
        // $pageContent = $doctrine->getRepository(Teachers::class)->findAll();


        return $this->render('page-teachers/CouncilofVeteransofPedagogicalLabor.html.twig', [
            'controller_name' => 'PageController',
            // 'pageData' => $pageContent,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
}
