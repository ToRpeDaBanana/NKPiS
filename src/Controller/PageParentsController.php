<?php

namespace App\Controller;

use App\Entity\ImportantKnow;
use App\Entity\MedicalExam;
use App\Entity\MedicalServiceDocument;
use App\Entity\OraganizationMedicalLink;
use App\Entity\PsychologicalSupport;
use App\Entity\QuestionAnswer;
use App\Entity\Vacancies;
use App\Entity\VacanForAdmTitle;
use App\Entity\VacannciesForAdmission;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use App\Service\SessionService;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Request;

class PageParentsController extends AbstractController
{
    #[Route('/vacantplaces', methods:['GET'])]
    public function vacantplaces(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session,
        EntityManagerInterface $entityManager 
        
    ): Response
        
    {
        $pageContent1 = $entityManager->getRepository(VacannciesForAdmission::class)->findAll();
        $pageContent2 = $entityManager->getRepository(VacanForAdmTitle::class)->findAll();

        return $this->render('page-parents/Vacantplaces.html.twig', [
            'controller_name' => 'PageController',
            'pageData1' => $pageContent1,
            'pageData2' => $pageContent2,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    // #[Route('/questionandanswer', methods:['GET'])]
    // public function questionandanswer(
    //     ManagerRegistry $doctrine,
    //     SessionService $sessionService,
    //     SessionInterface $session,
    //     EntityManagerInterface $entityManager 
    // ): Response
        
    // {
    //     $pageContent = $entityManager->getRepository(QuestionAnswer::class)->findAll();
    //     return $this->render('page-parents/Questionandanswer.html.twig', [
    //         'controller_name' => 'PageController',
    //         'pageData' => $pageContent,
    //         'sessionData' => $sessionService->getSessionData($session)
    //     ]);
    // }
    #[Route('/psychologicalsupport', methods:['GET'])]
    public function psychologicalsupport(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session,
        EntityManagerInterface $entityManager 
    ): Response
        
    {
        $pageContent = $entityManager->getRepository(PsychologicalSupport::class)->findAll();

        return $this->render('page-parents/Psychologicalsupport.html.twig', [
            'controller_name' => 'PageController',
            'pageData' => $pageContent,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    #[Route('/medicalservice/medical', methods:['GET'])]
    public function medicalservice(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session,
        EntityManagerInterface $entityManager 
    ): Response
        
    {
        $pageContent = $entityManager->getRepository(OraganizationMedicalLink::class)->findAll();

        return $this->render('page-parents/Medicalservice.html.twig', [
            'controller_name' => 'PageController',
            'pageData' => $pageContent,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    #[Route('/medicalservice/medicalexamination', methods:['GET'])]
    public function medicalexamination(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session,
        EntityManagerInterface $entityManager 
    ): Response
        
    {
        $pageContent = $entityManager->getRepository(MedicalExam::class)->findAll();

        return $this->render('page-parents/Medicalexamination.html.twig', [
            'controller_name' => 'PageController',
            'pageData' => $pageContent,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    #[Route('/medicalservice/itsimportanttoknow', methods:['GET'])]
    public function itsimportanttoknow(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session,
        EntityManagerInterface $entityManager 
    ): Response
        
    {
        $pageContent = $entityManager->getRepository(ImportantKnow::class)->findAll();

        return $this->render('page-parents/ItsImportanttoknow.html.twig', [
            'controller_name' => 'PageController',
            'pageData' => $pageContent,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    #[Route('/medicalservice/documents', methods:['GET'])]
    public function documents(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session,
        EntityManagerInterface $entityManager  
    ): Response
        
    {
        $pageContent = $entityManager->getRepository(MedicalServiceDocument::class)->findAll();

        return $this->render('page-parents/documents.html.twig', [
            'controller_name' => 'PageController',
            'pageData' => $pageContent,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
}
