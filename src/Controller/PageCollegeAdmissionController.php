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

class PageCollegeAdmissionController extends AbstractController
{
    #[Route('/admissionCommittee', methods:['GET'])]
    public function admissionCommittee(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session,
        
    ): Response
        
    {
        // $pageContent = $doctrine->getRepository(Teachers::class)->findAll();


        return $this->render('CollegeAdmission/AdmissionCommittee.html.twig', [
            'controller_name' => 'PageController',
            // 'pageData' => $pageContent,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    #[Route('/profession', methods:['GET'])]
    public function profession(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session,
        
    ): Response
        
    {
        // $pageContent = $doctrine->getRepository(Teachers::class)->findAll();


        return $this->render('CollegeAdmission/Profession.html.twig', [
            'controller_name' => 'PageController',
            // 'pageData' => $pageContent,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    #[Route('/entrancetests', methods:['GET'])]
    public function entrancetests(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session,
        
    ): Response
        
    {
        // $pageContent = $doctrine->getRepository(Teachers::class)->findAll();


        return $this->render('CollegeAdmission/Entrancetests.html.twig', [
            'controller_name' => 'PageController',
            // 'pageData' => $pageContent,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    #[Route('/openDays', methods:['GET'])]
    public function OpenDays(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session,
        
    ): Response
        
    {
        // $pageContent = $doctrine->getRepository(Teachers::class)->findAll();


        return $this->render('CollegeAdmission/OpenDays.html.twig', [
            'controller_name' => 'PageController',
            // 'pageData' => $pageContent,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
}
