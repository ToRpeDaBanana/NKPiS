<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Comment;
use App\Entity\ControlSovChairman;
use App\Entity\ControlSovDocuments;
use App\Entity\ControlSovMeetings;
use App\Entity\ControlSovOther;
use App\Entity\ControlSovPastMeetings;
use App\Entity\DepartmentContacts;
use App\Entity\News;
use App\Entity\OurAchievements;
use App\Entity\OurAchievementsTable;
use App\Entity\PaidEduServ;
use App\Entity\PhotoGallery;
use App\Entity\Teachers;
use App\Service\SessionService;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Request;

class PageController extends AbstractController
{
    #[Route('/teachers', methods:['GET'])]
    public function teachers(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session,
        
    ): Response
        
    {
        $pageContent = $doctrine->getRepository(Teachers::class)->findAll();


        return $this->render('page/teachers.html.twig', [
            'controller_name' => 'PageController',
            'pageData' => $pageContent,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    #[Route('/general', methods:['GET'], name:'general')]
    public function general(
        ManagerRegistry $doctrine,
        Request $request,
        SessionService $sessionService,
        SessionInterface $session, 
    ): Response
        
    {
        // $pageContent = $doctrine->getRepository(GeneralInf::class)->findAll();
        // var_dump($pageAbout);
        // exit;
        return $this->render('page/generalInformation.html.twig', [
            'controller_name' => 'PageController',
            // 'pageData' => $pageContent,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    #[Route('/contactpod', methods:['GET'])]
    public function contactPod(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session, 
    ): Response
        
    {
        $pageContent = $doctrine->getRepository(DepartmentContacts::class)->findAll();
        // var_dump($pageAbout);
        // exit;

        return $this->render('page/contactPod.html.twig', [
            'controller_name' => 'PageController',
            'pageData' => $pageContent,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    #[Route('/news', methods:['GET'])]
    public function news(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session, 
    ): Response
        
    {
        $pageContent = $doctrine->getRepository(News::class)->findAll();
        // var_dump($pageAbout);
        // exit;

        return $this->render('page/news.html.twig', [
            'controller_name' => 'PageController',
            'pageData' => $pageContent,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    #[Route('/controlSov', methods:['GET'])]
    public function controlSov(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session, 
    ): Response
        
    {
        $pageContent1 = $doctrine->getRepository(ControlSovChairman::class)->findAll();
        $pageContent2 = $doctrine->getRepository(ControlSovOther::class)->findAll();
        $pageContent3 = $doctrine->getRepository(ControlSovMeetings::class)->findAll();
        $pageContent4 = $doctrine->getRepository(ControlSovDocuments::class)->findAll();
        $pageContent5 = $doctrine->getRepository(ControlSovPastMeetings::class)->findAll();
        // var_dump($pageAbout);
        // exit;

        return $this->render('page/controlSov.html.twig', [
            'controller_name' => 'PageController',
            'pageData1' => $pageContent1,
            'pageData2' => $pageContent2,
            'pageData3' => $pageContent3,
            'pageData4' => $pageContent4,
            'pageData5' => $pageContent5,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    #[Route('/comment', methods:['GET'])]
    public function comment(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session, 
    ): Response
        
    {
        $pageContent = $doctrine->getRepository(Comment::class)->findAll();
        // var_dump($pageAbout);
        // exit;

        return $this->render('page/comment.html.twig', [
            'controller_name' => 'PageController',
            'pageData' => $pageContent,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    #[Route('/ourAch', methods:['GET'])]
    public function ourAch(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session, 
    ): Response
        
    {
        $pageContent1 = $doctrine->getRepository(OurAchievements::class)->findAll();
        $pageContent2 = $doctrine->getRepository(OurAchievementsTable::class)->findAll();
        // var_dump($pageAbout);
        // exit;

        return $this->render('page/ourAch.html.twig', [
            'controller_name' => 'PageController',
            'pageData1' => $pageContent1,
            'pageData2' => $pageContent2,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    #[Route('/payedic', methods:['GET'])]
    public function payToEdicution(
        ManagerRegistry $doctrine,
        Request $request,
        SessionService $sessionService,
        SessionInterface $session, 
    ): Response
        
    {
        $pageContent = $doctrine->getRepository(PaidEduServ::class)->findAll();
        // var_dump($pageAbout);
        // exit;

        return $this->render('page/payToEdicution.html.twig', [
            'controller_name' => 'PageController',
            'pageData' => $pageContent,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    #[Route('/photo', methods:['GET'])]
    public function photo(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session, 
    ): Response
        
    {
        $pageContent = $doctrine->getRepository(PhotoGallery::class)->findAll();
        // var_dump($pageAbout);
        // exit;

        return $this->render('page/photo.html.twig', [
            'controller_name' => 'PageController',
            'pageData' => $pageContent,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
}
