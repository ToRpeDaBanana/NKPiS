<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Page;

class PageController extends AbstractController
{
    #[Route('/teachers', methods:['GET'])]
    public function index(
        ManagerRegistry $doctrine,
    ): Response
        
    {
        $pageContent = $doctrine->getRepository(Page::class)->findAll();


        return $this->render('page/teachers.html.twig', [
            'controller_name' => 'PageController',
            'pageData' => $pageContent,
        ]);
    }
    #[Route('/general', methods:['GET'])]
    public function general(
        ManagerRegistry $doctrine,
    ): Response
        
    {
        $pageContent = $doctrine->getRepository(Page::class)->findBy(['title'=>'Общая информация']);
        // var_dump($pageAbout);
        // exit;

        return $this->render('page/generalInformation.html.twig', [
            'controller_name' => 'PageController',
            'pageData' => $pageContent,
        ]);
    }
    #[Route('/contactpod', methods:['GET'])]
    public function contactPod(
        ManagerRegistry $doctrine,
    ): Response
        
    {
        $pageContent = $doctrine->getRepository(Page::class)->findBy(['title'=>'Педагогический состав']);
        // var_dump($pageAbout);
        // exit;

        return $this->render('page/contactPod.html.twig', [
            'controller_name' => 'PageController',
            'pageData' => $pageContent,
        ]);
    }
    #[Route('/news', methods:['GET'])]
    public function news(
        ManagerRegistry $doctrine,
    ): Response
        
    {
        $pageContent = $doctrine->getRepository(Page::class)->findBy(['title'=>'Педагогический состав']);
        // var_dump($pageAbout);
        // exit;

        return $this->render('page/news.html.twig', [
            'controller_name' => 'PageController',
            'pageData' => $pageContent,
        ]);
    }
    #[Route('/controlSov', methods:['GET'])]
    public function controlSov(
        ManagerRegistry $doctrine,
    ): Response
        
    {
        $pageContent = $doctrine->getRepository(Page::class)->findBy(['title'=>'Педагогический состав']);
        // var_dump($pageAbout);
        // exit;

        return $this->render('page/controlSov.html.twig', [
            'controller_name' => 'PageController',
            'pageData' => $pageContent,
        ]);
    }
    #[Route('/comment', methods:['GET'])]
    public function comment(
        ManagerRegistry $doctrine,
    ): Response
        
    {
        $pageContent = $doctrine->getRepository(Page::class)->findBy(['title'=>'Педагогический состав']);
        // var_dump($pageAbout);
        // exit;

        return $this->render('page/comment.html.twig', [
            'controller_name' => 'PageController',
            'pageData' => $pageContent,
        ]);
    }
    #[Route('/ourAch', methods:['GET'])]
    public function ourAch(
        ManagerRegistry $doctrine,
    ): Response
        
    {
        $pageContent = $doctrine->getRepository(Page::class)->findBy(['title'=>'Педагогический состав']);
        // var_dump($pageAbout);
        // exit;

        return $this->render('page/ourAch.html.twig', [
            'controller_name' => 'PageController',
            'pageData' => $pageContent,
        ]);
    }
    #[Route('/payedic', methods:['GET'])]
    public function payToEdicution(
        ManagerRegistry $doctrine,
    ): Response
        
    {
        $pageContent = $doctrine->getRepository(Page::class)->findBy(['title'=>'Педагогический состав']);
        // var_dump($pageAbout);
        // exit;

        return $this->render('page/payToEdicution.html.twig', [
            'controller_name' => 'PageController',
            'pageData' => $pageContent,
        ]);
    }
    #[Route('/photo', methods:['GET'])]
    public function photo(
        ManagerRegistry $doctrine,
    ): Response
        
    {
        $pageContent = $doctrine->getRepository(Page::class)->findBy(['title'=>'Педагогический состав']);
        // var_dump($pageAbout);
        // exit;

        return $this->render('page/photo.html.twig', [
            'controller_name' => 'PageController',
            'pageData' => $pageContent,
        ]);
    }
}
