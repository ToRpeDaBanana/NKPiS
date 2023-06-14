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

class PageStudentsController extends AbstractController
{
    #[Route('/studyperiods', methods:['GET'])]
    public function studyperiods(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session,
        
    ): Response
        
    {
        // $pageContent = $doctrine->getRepository(Teachers::class)->findAll();


        return $this->render('page-students/studyperiods.html.twig', [
            'controller_name' => 'PageController',
            // 'pageData' => $pageContent,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    #[Route('/certification', methods:['GET'])]
    public function certification(
        ManagerRegistry $doctrine,
        Request $request,
        SessionService $sessionService,
        SessionInterface $session, 
    ): Response
        
    {
        // $pageContent = $doctrine->getRepository(GeneralInf::class)->findAll();
        // var_dump($pageAbout);
        // exit;
        return $this->render('page-students/certification.html.twig', [
            'controller_name' => 'PageController',
            // 'pageData' => $pageContent,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    #[Route('/demoexam', methods:['GET'])]
    public function demoexam(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session, 
    ): Response
        
    {
        // $pageContent = $doctrine->getRepository(DepartmentContacts::class)->findAll();
        // var_dump($pageAbout);
        // exit;

        return $this->render('page-students/demoexam.html.twig', [
            'controller_name' => 'PageController',
            // 'pageData' => $pageContent,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    #[Route('/olympiads', methods:['GET'])]
    public function olympiads(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session, 
    ): Response
        
    {
        // $pageContent = $doctrine->getRepository(News::class)->findAll();
        // var_dump($pageAbout);
        // exit;

        return $this->render('page-students/olympiads.html.twig', [
            'controller_name' => 'PageController',
            // 'pageData' => $pageContent,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    #[Route('/aboutcentre', methods:['GET'])]
    public function aboutcentre(
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

        return $this->render('page-students/aboutcentre.html.twig', [
            'controller_name' => 'PageController',
            // 'pageData1' => $pageContent1,
            // 'pageData2' => $pageContent2,
            // 'pageData3' => $pageContent3,
            // 'pageData4' => $pageContent4,
            // 'pageData5' => $pageContent5,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    #[Route('/newscenter', methods:['GET'])]
    public function newscenter(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session, 
    ): Response
        
    {
        // $pageContent = $doctrine->getRepository(Comment::class)->findAll();
        // var_dump($pageAbout);
        // exit;

        return $this->render('page-students/newscenter.html.twig', [
            'controller_name' => 'PageController',
            // 'pageData' => $pageContent,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    #[Route('/helpgraduatestudent', methods:['GET'])]
    public function helpgraduatestudent(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session, 
    ): Response
        
    {
        // $pageContent1 = $doctrine->getRepository(OurAchievements::class)->findAll();
        // $pageContent2 = $doctrine->getRepository(OurAchievementsTable::class)->findAll();
        // var_dump($pageAbout);
        // exit;

        return $this->render('page-students/helpgraduatestudent.html.twig', [
            'controller_name' => 'PageController',
            // 'pageData1' => $pageContent1,
            // 'pageData2' => $pageContent2,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    #[Route('/monitoringofemployment', methods:['GET'])]
    public function monitoringofemployment(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session, 
    ): Response
        
    {
        // $pageContent1 = $doctrine->getRepository(OurAchievements::class)->findAll();
        // $pageContent2 = $doctrine->getRepository(OurAchievementsTable::class)->findAll();
        // var_dump($pageAbout);
        // exit;

        return $this->render('page-students/monitoringofemployment.html.twig', [
            'controller_name' => 'PageController',
            // 'pageData1' => $pageContent1,
            // 'pageData2' => $pageContent2,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    #[Route('/vacanciesandemployers', methods:['GET'])]
    public function vacanciesandemployers(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session, 
    ): Response
        
    {
        // $pageContent1 = $doctrine->getRepository(OurAchievements::class)->findAll();
        // $pageContent2 = $doctrine->getRepository(OurAchievementsTable::class)->findAll();
        // var_dump($pageAbout);
        // exit;

        return $this->render('page-students/Vacanciesandemployers.html.twig', [
            'controller_name' => 'PageController',
            // 'pageData1' => $pageContent1,
            // 'pageData2' => $pageContent2,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    #[Route('/employers', methods:['GET'])]
    public function employers(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session, 
    ): Response
        
    {
        // $pageContent1 = $doctrine->getRepository(OurAchievements::class)->findAll();
        // $pageContent2 = $doctrine->getRepository(OurAchievementsTable::class)->findAll();
        // var_dump($pageAbout);
        // exit;

        return $this->render('page-students/Employers.html.twig', [
            'controller_name' => 'PageController',
            // 'pageData1' => $pageContent1,
            // 'pageData2' => $pageContent2,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
}
