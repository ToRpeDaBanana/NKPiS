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
use App\Entity\GeneralInf;
use App\Entity\News;
use App\Entity\OurAchievements;
use App\Entity\OurAchievementsTable;
use App\Entity\PaidEduServ;
use App\Entity\PhotoGallery;
use App\Entity\SliderMain;
use App\Entity\SliderReclama;
use App\Entity\Teachers;
use App\Entity\TeachersDocument;
use App\Repository\GeneralInfRepository;
use App\Repository\TeachersRepository;
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
        EntityManagerInterface $entityManager 
        
    ): Response
        
    {
        $pageContent1 = $entityManager->getRepository(Teachers::class)->findAll();
        $pageContent2 = $entityManager->getRepository(TeachersDocument::class)->findAll();
        
        return $this->render('page/teachers.html.twig', [
            'controller_name' => 'PageController',
            'pageData1' => $pageContent1,
            'pageData2' => $pageContent2,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    #[Route('/general', methods:['GET'])]
    public function general(
        ManagerRegistry $doctrine,
        Request $request,
        SessionService $sessionService,
        SessionInterface $session,
        EntityManagerInterface $entityManager 
    ): Response
        
    {
        $pageContent = $entityManager->getRepository(GeneralInf::class)->findAll();
        // var_dump($pageAbout);
        // exit;
        return $this->render('page/generalInformation.html.twig', [
            'controller_name' => 'PageController',
            'pageData' => $pageContent,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    #[Route('/contactpod', methods:['GET'])]
    public function contactPod(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session,
        EntityManagerInterface $entityManager  
    ): Response
        
    {
        $pageContent = $entityManager->getRepository(DepartmentContacts::class)->findAll();
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
        EntityManagerInterface $entityManager  
    ): Response
        
    {
        $pageContent = $entityManager->getRepository(News::class)->findAll();
        // var_dump($pageAbout);
        // exit;

        return $this->render('page/news.html.twig', [
            'controller_name' => 'PageController',
            'pageData' => $pageContent,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    #[Route('/news/{id}', methods:['GET'])]
    public function newsId(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session,
        EntityManagerInterface $entityManager  
    ): Response
        
    {
        $pageContent = $entityManager->getRepository(News::class)->findAll();
        // var_dump($pageAbout);
        // exit;

        return $this->render('page/newsId.html.twig', [
            'controller_name' => 'PageController',
            'pageData' => $pageContent,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    #[Route('/governingBodies/controlSoviet', methods:['GET'])]
    public function controlSov(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session,
        EntityManagerInterface $entityManager  
    ): Response
        
    {
        $pageContent1 = $entityManager->getRepository(ControlSovChairman::class)->findAll();
        $pageContent2 = $entityManager->getRepository(ControlSovOther::class)->findAll();
        $pageContent3 = $entityManager->getRepository(ControlSovMeetings::class)->findAll();
        $pageContent4 = $entityManager->getRepository(ControlSovDocuments::class)->findAll();
        $pageContent5 = $entityManager->getRepository(ControlSovPastMeetings::class)->findAll();
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
        EntityManagerInterface $entityManager  
    ): Response
        
    {
        $pageContent = $entityManager->getRepository(Comment::class)->findAll();
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
        EntityManagerInterface $entityManager  
    ): Response
        
    {
        $pageContent1 = $entityManager->getRepository(OurAchievements::class)->findAll();
        $pageContent2 = $entityManager->getRepository(OurAchievementsTable::class)->findAll();
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
        EntityManagerInterface $entityManager  
    ): Response
        
    {
        $pageContent = $entityManager->getRepository(PaidEduServ::class)->findAll();
        // var_dump($pageAbout);
        // exit;

        return $this->render('page/payToEdicution.html.twig', [
            'controller_name' => 'PageController',
            'pageData' => $pageContent,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    #[Route('/photoAndVideo/photoGallery', methods:['GET'])]
    public function photo(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session,
        EntityManagerInterface $entityManager  
    ): Response
        
    {
        $pageContent = $entityManager->getRepository(PhotoGallery::class)->findAll();
        // var_dump($pageAbout);
        // exit;

        return $this->render('page/photo.html.twig', [
            'controller_name' => 'PageController',
            'pageData' => $pageContent,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    #[Route('/photoAndVideo/photoGallery/{id}', methods:['GET'])]
    public function photoId(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session,
        EntityManagerInterface $entityManager  
    ): Response
        
    {
        $pageContent = $entityManager->getRepository(PhotoGallery::class)->findAll();
        // var_dump($pageAbout);
        // exit;

        return $this->render('page/photoId.html.twig', [
            'controller_name' => 'PageController',
            'pageData' => $pageContent,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
}
