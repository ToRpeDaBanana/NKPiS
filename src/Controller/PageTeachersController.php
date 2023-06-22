<?php

namespace App\Controller;

use App\Entity\ProfDocument;
use App\Entity\TeachersContests;
use App\Entity\VacanciesTeachers;
use App\Entity\VeteransLabor;
use App\Entity\VeteransLaborDocument;
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
        EntityManagerInterface $entityManager 
        
    ): Response
        
    {
        $pageContent = $entityManager->getRepository(VacanciesTeachers::class)->findAll();


        return $this->render('page-teachers/Jobopenings.html.twig', [
            'controller_name' => 'PageController',
            'pageData' => $pageContent,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    #[Route('/conferences', methods:['GET'])]
    public function conferences(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session,
        EntityManagerInterface $entityManager 
        
    ): Response
        
    {
        $pageContent = $entityManager->getRepository(TeachersContests::class)->findAll();


        return $this->render('page-teachers/Conferences.html.twig', [
            'controller_name' => 'PageController',
            'pageData' => $pageContent,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    #[Route('/tradeUnion', methods:['GET'])]
    public function tradeUnion(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session,
        EntityManagerInterface $entityManager 
        
    ): Response
        
    {
        $pageContent = $entityManager->getRepository(ProfDocument::class)->findAll();


        return $this->render('page-teachers/TradeUnion.html.twig', [
            'controller_name' => 'PageController',
            'pageData' => $pageContent,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    #[Route('/councilofVeteransofPedagogicalLabor', methods:['GET'])]
    public function councilofVeteransofPedagogicalLabor(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session,
        EntityManagerInterface $entityManager 
        
    ): Response
        
    {
        $pageContent1 = $entityManager->getRepository(VeteransLabor::class)->findAll();
        $pageContent2 = $entityManager->getRepository(VeteransLaborDocument::class)->findAll();


        return $this->render('page-teachers/CouncilofVeteransofPedagogicalLabor.html.twig', [
            'controller_name' => 'PageController',
            'pageData1' => $pageContent1,
            'pageData2' => $pageContent2,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    #[Route('/councilofVeteransofPedagogicalLabor/{id}', methods:['GET'])]
    public function councilofVeteransofPedagogicalLaborId(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session,
        EntityManagerInterface $entityManager 
        
    ): Response
        
    {
        $pageContent1 = $entityManager->getRepository(VeteransLabor::class)->findAll();
        $pageContent2 = $entityManager->getRepository(VeteransLaborDocument::class)->findAll();


        return $this->render('page-teachers/CouncilofVeteransofPedagogicalLaborId.html.twig', [
            'controller_name' => 'PageController',
            'pageData1' => $pageContent1,
            'pageData2' => $pageContent2,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
}
