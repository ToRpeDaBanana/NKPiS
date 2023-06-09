<?php

namespace App\Controller;

use App\Entity\EduAndProductionComplex;
use App\Entity\LaborProtection;
use App\Entity\PersonalDataProtection;
use App\Entity\Contact;
use App\Entity\ProtivCorp;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use App\Service\SessionService;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Request;

class PageDopInf extends AbstractController
{
    #[Route('/personalDataProtection', methods:['GET'])]
    public function PersonalDataProtection(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session,
        EntityManagerInterface $entityManager 
        
    ): Response
        
    {
        $pageContent = $entityManager->getRepository(PersonalDataProtection::class)->findAll();
        $contact = $entityManager->getRepository(Contact::class)->findAll();

        return $this->render('Dop_inf/SavePersonalDate.html.twig', [
            'controller_name' => 'PageController',
            'pageData' => $pageContent,
            'contact' => $contact,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    #[Route('/laborProtection', methods:['GET'])]
    public function SaveTrud(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session,
        EntityManagerInterface $entityManager 
        
    ): Response
        
    {
        $pageContent = $entityManager->getRepository(LaborProtection::class)->findAll();
        $contact = $entityManager->getRepository(Contact::class)->findAll();

        return $this->render('Dop_inf/SaveTrud.html.twig', [
            'controller_name' => 'PageController',
            'pageData' => $pageContent,
            'contact' => $contact,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    #[Route('/studyWorkComplecs', methods:['GET'])]
    public function StudyWorkComplecs(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session,
        EntityManagerInterface $entityManager 
        
    ): Response
        
    {
        $pageContent = $entityManager->getRepository(EduAndProductionComplex::class)->findAll();

        $contact = $entityManager->getRepository(Contact::class)->findAll();
        return $this->render('Dop_inf/StudyWorkComplecs.html.twig', [
            'controller_name' => 'PageController',
            'pageData' => $pageContent,
            'contact' => $contact,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }

    #[Route('/antiCorruption', methods:['GET'])]
    public function protivCorp(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session,
        EntityManagerInterface $entityManager 
        
    ): Response
        
    {
        $pageContent = $entityManager->getRepository(ProtivCorp::class)->findAll();

        $contact = $entityManager->getRepository(Contact::class)->findAll();
        return $this->render('Dop_inf/protivCorp.html.twig', [
            'controller_name' => 'PageController',
            'pageData' => $pageContent,
            'contact' => $contact,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
}
