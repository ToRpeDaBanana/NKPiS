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

class PageParentsController extends AbstractController
{
    #[Route('/vacantplaces', methods:['GET'])]
    public function vacantplaces(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session,
        
    ): Response
        
    {
        // $pageContent = $doctrine->getRepository(Teachers::class)->findAll();


        return $this->render('page-parents/Vacantplaces.html.twig', [
            'controller_name' => 'PageController',
            // 'pageData' => $pageContent,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    #[Route('/questionandanswer', methods:['GET'])]
    public function questionandanswer(
        ManagerRegistry $doctrine,
        Request $request,
        SessionService $sessionService,
        SessionInterface $session, 
    ): Response
        
    {
        // $pageContent = $doctrine->getRepository(GeneralInf::class)->findAll();
        // var_dump($pageAbout);
        // exit;
        return $this->render('page-parents/Questionandanswer.html.twig', [
            'controller_name' => 'PageController',
            // 'pageData' => $pageContent,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    #[Route('/psychologicalsupport', methods:['GET'])]
    public function psychologicalsupport(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session, 
    ): Response
        
    {
        // $pageContent = $doctrine->getRepository(DepartmentContacts::class)->findAll();
        // var_dump($pageAbout);
        // exit;

        return $this->render('page-parents/Psychologicalsupport.html.twig', [
            'controller_name' => 'PageController',
            // 'pageData' => $pageContent,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    #[Route('/medicalservice', methods:['GET'])]
    public function medicalservice(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session, 
    ): Response
        
    {
        // $pageContent = $doctrine->getRepository(News::class)->findAll();
        // var_dump($pageAbout);
        // exit;

        return $this->render('page-parents/Medicalservice.html.twig', [
            'controller_name' => 'PageController',
            // 'pageData' => $pageContent,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    #[Route('/medicalexamination', methods:['GET'])]
    public function medicalexamination(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session, 
    ): Response
        
    {
        // $pageContent1 = $doctrine->getRepository(ControlSovChairman::class)->findAll();
        // $pageContent2 = $doctrine->getRepository(ControlSovOther::class)->findAll();
        // $pageContent3 = $doctrine->getRepository(ControlSovMeetings::class)->findAll();
        // $pageContent4 = $doctrine->getRepository(ControlSovDocuments::class)->findAll();
        // $pageContent5 = $doctrine->getRepository(ControlSovPastMeetings::class)->findAll();
        // var_dump($pageAbout);
        // exit;

        return $this->render('page-parents/Medicalexamination.html.twig', [
            'controller_name' => 'PageController',
            // 'pageData1' => $pageContent1,
            // 'pageData2' => $pageContent2,
            // 'pageData3' => $pageContent3,
            // 'pageData4' => $pageContent4,
            // 'pageData5' => $pageContent5,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    #[Route('/itsimportanttoknow', methods:['GET'])]
    public function itsimportanttoknow(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session, 
    ): Response
        
    {
        // $pageContent = $doctrine->getRepository(Comment::class)->findAll();
        // var_dump($pageAbout);
        // exit;

        return $this->render('page-parents/ItsImportanttoknow.html.twig', [
            'controller_name' => 'PageController',
            // 'pageData' => $pageContent,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    #[Route('/documents', methods:['GET'])]
    public function documents(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session, 
    ): Response
        
    {
        // $pageContent1 = $doctrine->getRepository(OurAchievements::class)->findAll();
        // $pageContent2 = $doctrine->getRepository(OurAchievementsTable::class)->findAll();
        // var_dump($pageAbout);
        // exit;

        return $this->render('page-parents/documents.html.twig', [
            'controller_name' => 'PageController',
            // 'pageData1' => $pageContent1,
            // 'pageData2' => $pageContent2,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
}
