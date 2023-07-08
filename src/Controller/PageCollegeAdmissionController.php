<?php

namespace App\Controller;
use App\Entity\Contact;
use App\Entity\AcceptanceCheckDigits;
use App\Entity\AcceptanceCheckDigitsTable;
use App\Entity\CollegeAdmission;
use App\Entity\CollegeAdmissionTitle;
use App\Entity\EntranceTests;
use App\Entity\MedicalExamAdm;
use App\Entity\NormativeDocuments;
use App\Entity\OpenDoorsTable;
use App\Entity\PassingScores;
use App\Entity\SpecialtiesProfessions;
use App\Entity\TransferCollege;
use App\Entity\TransferWithinCollege;
use App\Entity\VideosDaysOpenDoors;
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
        EntityManagerInterface $entityManager 
        
    ): Response
        
    {
        $pageContent1 = $entityManager->getRepository(CollegeAdmissionTitle::class)->findAll();
        $pageContent2 = $entityManager->getRepository(CollegeAdmission::class)->findAll();
        $pageContent3 = $entityManager->getRepository(NormativeDocuments::class)->findAll();
        $pageContent4 = $entityManager->getRepository(AcceptanceCheckDigits::class)->findAll();
        $pageContent5 = $entityManager->getRepository(AcceptanceCheckDigitsTable::class)->findAll();
        $pageContent6 = $entityManager->getRepository(PassingScores::class)->findAll();
        $pageContent7 = $entityManager->getRepository(MedicalExamAdm::class)->findAll();
        $pageContent8 = $entityManager->getRepository(TransferCollege::class)->findAll();
        $pageContent9 = $entityManager->getRepository(TransferWithinCollege::class)->findAll();
        $contact = $entityManager->getRepository(Contact::class)->findAll();


        return $this->render('CollegeAdmission/AdmissionCommittee.html.twig', [
            'controller_name' => 'PageController',
            'pageData1' => $pageContent1,
            'pageData2' => $pageContent2,
            'pageData3' => $pageContent3,
            'pageData4' => $pageContent4,
            'pageData5' => $pageContent5,
            'pageData6' => $pageContent6,
            'pageData7' => $pageContent7,
            'pageData8' => $pageContent8,
            'pageData9' => $pageContent9,
            'contact' => $contact,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    #[Route('/profession', methods:['GET'])]
    public function profession(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session,
        EntityManagerInterface $entityManager 
        
    ): Response
        
    {
        $pageContent = $entityManager->getRepository(SpecialtiesProfessions::class)->findAll();
        $contact = $entityManager->getRepository(Contact::class)->findAll();


        return $this->render('CollegeAdmission/Profession.html.twig', [
            'controller_name' => 'PageController',
            'pageData' => $pageContent,
            'contact' => $contact,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    #[Route('/entrancetests', methods:['GET'])]
    public function entrancetests(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session,
        EntityManagerInterface $entityManager 
        
    ): Response
        
    {
        $pageContent = $entityManager->getRepository(EntranceTests::class)->findAll();
        $contact = $entityManager->getRepository(Contact::class)->findAll();

        return $this->render('CollegeAdmission/Entrancetests.html.twig', [
            'controller_name' => 'PageController',
            'pageData' => $pageContent,
            'contact' => $contact,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    #[Route('/openDays', methods:['GET'])]
    public function OpenDays(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session,
        EntityManagerInterface $entityManager 
        
    ): Response
        
    {
        $pageContent1 = $entityManager->getRepository(VideosDaysOpenDoors::class)->findAll();
        $pageContent2 = $entityManager->getRepository(OpenDoorsTable::class)->findAll();
        $contact = $entityManager->getRepository(Contact::class)->findAll();

        return $this->render('CollegeAdmission/OpenDays.html.twig', [
            'controller_name' => 'PageController',
            'pageData1' => $pageContent1,
            'pageData2' => $pageContent2,
            'contact' => $contact,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
}
