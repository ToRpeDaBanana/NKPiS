<?php

namespace App\Controller;

use App\Entity\AboutCentre;
use App\Entity\BannersVacancies;
use App\Entity\CalendarStudy;
use App\Entity\CallSchedule;
use App\Entity\DemoExam;
use App\Entity\EmployMonitoring;
use App\Entity\ForEmloyText;
use App\Entity\ForEmployTable;
use App\Entity\HelpAGraduate;
use App\Entity\Holidays;
use App\Entity\InterCertSchedule;
use App\Entity\NewsCentre;
use App\Entity\Olympiads;
use App\Entity\Schedule;
use App\Entity\Vacancies;
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
        EntityManagerInterface $entityManager 
        
    ): Response
        
    {
        $pageContent1 = $entityManager->getRepository(Holidays::class)->findAll();
        $pageContent2 = $entityManager->getRepository(Schedule::class)->findAll();
        $pageContent3 = $entityManager->getRepository(CallSchedule::class)->findAll();
        $pageContent4 = $entityManager->getRepository(CalendarStudy::class)->findAll();

        return $this->render('page-students/studyperiods.html.twig', [
            'controller_name' => 'PageController',
            'pageData1' => $pageContent1,
            'pageData2' => $pageContent2,
            'pageData3' => $pageContent3,
            'pageData4' => $pageContent4,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    #[Route('/certification', methods:['GET'])]
    public function certification(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session,
        EntityManagerInterface $entityManager  
    ): Response
        
    {
        $pageContent = $entityManager->getRepository(InterCertSchedule::class)->findAll();
        return $this->render('page-students/certification.html.twig', [
            'controller_name' => 'PageController',
            'pageData' => $pageContent,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    #[Route('/demoexam', methods:['GET'])]
    public function demoexam(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session,
        EntityManagerInterface $entityManager  
    ): Response
        
    {
        $pageContent = $entityManager->getRepository(DemoExam::class)->findAll();

        return $this->render('page-students/demoexam.html.twig', [
            'controller_name' => 'PageController',
            'pageData' => $pageContent,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    #[Route('/olympiads', methods:['GET'])]
    public function olympiads(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session,
        EntityManagerInterface $entityManager  
    ): Response
        
    {
        $pageContent = $entityManager->getRepository(Olympiads::class)->findAll();

        return $this->render('page-students/olympiads.html.twig', [
            'controller_name' => 'PageController',
            'pageData' => $pageContent,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    #[Route('/alumniAdvocacyCenter/aboutcentre', methods:['GET'])]
    public function aboutcentre(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session,
        EntityManagerInterface $entityManager  
    ): Response
        
    {
        $pageContent = $entityManager->getRepository(AboutCentre::class)->findAll();

        return $this->render('page-students/aboutcentre.html.twig', [
            'controller_name' => 'PageController',
            'pageData' => $pageContent,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    #[Route('/alumniAdvocacyCenter/newscenter', methods:['GET'])]
    public function newscenter(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session,
        EntityManagerInterface $entityManager 
    ): Response
        
    {
        $pageContent = $entityManager->getRepository(NewsCentre::class)->findAll();

        return $this->render('page-students/newscenter.html.twig', [
            'controller_name' => 'PageController',
            'pageData' => $pageContent,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    #[Route('/alumniAdvocacyCenter/newscenter/{id}', methods:['GET'])]
    public function newscenterId(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session,
        EntityManagerInterface $entityManager 
    ): Response
        
    {
        $pageContent = $entityManager->getRepository(NewsCentre::class)->findAll();

        return $this->render('page-students/newscenterId.html.twig', [
            'controller_name' => 'PageController',
            'pageData' => $pageContent,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    #[Route('/alumniAdvocacyCenter/helpgraduatestudent', methods:['GET'])]
    public function helpgraduatestudent(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session,
        EntityManagerInterface $entityManager  
    ): Response
        
    {
        $pageContent = $entityManager->getRepository(HelpAGraduate::class)->findAll();

        return $this->render('page-students/helpgraduatestudent.html.twig', [
            'controller_name' => 'PageController',
            'pageData' => $pageContent,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    #[Route('/alumniAdvocacyCenter/monitoringofemployment', methods:['GET'])]
    public function monitoringofemployment(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session,
        EntityManagerInterface $entityManager  
    ): Response
        
    {
        $pageContent = $entityManager->getRepository(EmployMonitoring::class)->findAll();

        return $this->render('page-students/monitoringofemployment.html.twig', [
            'controller_name' => 'PageController',
            'pageData' => $pageContent,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    #[Route('/alumniAdvocacyCenter/vacanciesandemployers', methods:['GET'])]
    public function vacanciesandemployers(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session,
        EntityManagerInterface $entityManager 
    ): Response
        
    {
        $pageContent1 = $entityManager->getRepository(BannersVacancies::class)->findAll();
        $pageContent2 = $entityManager->getRepository(Vacancies::class)->findAll();

        return $this->render('page-students/Vacanciesandemployers.html.twig', [
            'controller_name' => 'PageController',
            'pageData1' => $pageContent1,
            'pageData2' => $pageContent2,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    #[Route('/alumniAdvocacyCenter/employers', methods:['GET'])]
    public function employers(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session,
        EntityManagerInterface $entityManager  
    ): Response
        
    {
        $pageContent1 = $entityManager->getRepository(ForEmloyText::class)->findAll();
        $pageContent2 = $entityManager->getRepository(ForEmployTable::class)->findAll();

        return $this->render('page-students/Employers.html.twig', [
            'controller_name' => 'PageController',
            'pageData1' => $pageContent1,
            'pageData2' => $pageContent2,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
}
