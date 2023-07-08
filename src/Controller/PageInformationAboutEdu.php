<?php

namespace App\Controller;

use App\Entity\AccessIs;
use App\Entity\AvailableEnvironment;
use App\Entity\Cabinet;
use App\Entity\CalendarTrainingSchedule;
use App\Entity\Curriculum;
use App\Entity\Documents;
use App\Entity\DopEdu;
use App\Entity\EconomucActivity;
use App\Entity\EconomucActivityDocument;
use App\Entity\EduStandards;
use App\Entity\Food;
use App\Entity\Contact;
use App\Entity\InformAboutWorkPrograms;
use App\Entity\InformMedical;
use App\Entity\InformOfRealizeEduProgram;
use App\Entity\InformRealizeDopEdu;
use App\Entity\InformResultPriem;
use App\Entity\InforRealizeDopEduDate;
use App\Entity\InfPay;
use App\Entity\InstructionsOrgDistance;
use App\Entity\InternationalCoop;
use App\Entity\LaboratoriesAndWorkshops;
use App\Entity\Libraries;
use App\Entity\LicenseEdu;
use App\Entity\MeansEduUpbringing;
use App\Entity\PaymentAccount;
use App\Entity\PersonalAccount;
use App\Entity\ProfessionalEdu;
use App\Entity\PublicReport;
use App\Entity\SportsFacilities;
use App\Entity\StudentSupport;
use App\Entity\WorkingServices;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use App\Service\SessionService;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Request;

class PageInformationAboutEdu extends AbstractController
{
    #[Route('/basicInformation', methods:['GET'])]
    public function basicInformation(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session,
        EntityManagerInterface $entityManager 
        
    ): Response
        
    {
        // $pageContent = $entityManager->getRepository(Documents::class)->findAll();
        
        $contact = $entityManager->getRepository(Contact::class)->findAll();
        return $this->render('Information-about-educational/OsnovSved.html.twig', [
            'controller_name' => 'PageController',
            // 'pageData' => $pageContent,
            'contact' => $contact,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    #[Route('/documents', methods:['GET'])]
    public function documents(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session,
        EntityManagerInterface $entityManager 
        
    ): Response
        
    {
        $pageContent = $entityManager->getRepository(Documents::class)->findAll();
        $contact = $entityManager->getRepository(Contact::class)->findAll();

        return $this->render('Information-about-educational/document.html.twig', [
            'controller_name' => 'PageController',
            'pageData' => $pageContent,
            'contact' => $contact,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    #[Route('/education', methods:['GET'])]
    public function education(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session,
        EntityManagerInterface $entityManager 
        
    ): Response
        
    {
        $pageContent1 = $entityManager->getRepository(InformOfRealizeEduProgram::class)->findAll();
        $pageContent2 = $entityManager->getRepository(InforRealizeDopEduDate::class)->findAll();
        $pageContent3 = $entityManager->getRepository(InformRealizeDopEdu::class)->findAll();
        $pageContent4 = $entityManager->getRepository(InformResultPriem::class)->findAll();
        $pageContent5 = $entityManager->getRepository(LicenseEdu::class)->findAll();
        $pageContent6 = $entityManager->getRepository(InstructionsOrgDistance::class)->findAll();
        $pageContent7 = $entityManager->getRepository(ProfessionalEdu::class)->findAll();
        $pageContent8 = $entityManager->getRepository(DopEdu::class)->findAll();
        $pageContent9 = $entityManager->getRepository(InformAboutWorkPrograms::class)->findAll();
        $pageContent10 = $entityManager->getRepository(Curriculum::class)->findAll();
        $pageContent11 = $entityManager->getRepository(CalendarTrainingSchedule::class)->findAll();
        $contact = $entityManager->getRepository(Contact::class)->findAll();
        return $this->render('Information-about-educational/obrazovanie.html.twig', [
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
            'pageData10' => $pageContent10,
            'pageData11' => $pageContent11,
            'contact' => $contact,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    #[Route('/materialTehcnical', methods:['GET'])]
    public function materiaTex(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session,
        EntityManagerInterface $entityManager 
        
    ): Response
        
    {
        $pageContent1 = $entityManager->getRepository(Cabinet::class)->findAll();
        $pageContent2 = $entityManager->getRepository(LaboratoriesAndWorkshops::class)->findAll();
        $pageContent3 = $entityManager->getRepository(Libraries::class)->findAll();
        $pageContent4 = $entityManager->getRepository(SportsFacilities::class)->findAll();
        $pageContent5 = $entityManager->getRepository(MeansEduUpbringing::class)->findAll();
        $pageContent6 = $entityManager->getRepository(Food::class)->findAll();
        $pageContent7 = $entityManager->getRepository(InformMedical::class)->findAll();
        $pageContent8 = $entityManager->getRepository(AccessIs::class)->findAll();
        $contact = $entityManager->getRepository(Contact::class)->findAll();
        return $this->render('Information-about-educational/materiaTex.html.twig', [
            'controller_name' => 'PageController',
            'pageData1' => $pageContent1,
            'pageData2' => $pageContent2,
            'pageData3' => $pageContent3,
            'pageData4' => $pageContent4,
            'pageData5' => $pageContent5,
            'pageData6' => $pageContent6,
            'pageData7' => $pageContent7,
            'pageData8' => $pageContent8,
            'contact' => $contact,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    #[Route('/finacehoz', methods:['GET'])]
    public function FinHoz(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session,
        EntityManagerInterface $entityManager 
        
    ): Response
        
    {
        $pageContent1 = $entityManager->getRepository(EconomucActivity::class)->findAll();
        $pageContent2 = $entityManager->getRepository(EconomucActivityDocument::class)->findAll();
        $contact = $entityManager->getRepository(Contact::class)->findAll();

        return $this->render('Information-about-educational/FinHoz.html.twig', [
            'controller_name' => 'PageController',
            'pageData1' => $pageContent1,
            'pageData2' => $pageContent2,
            'contact' => $contact,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    #[Route('/ObrazovStandart', methods:['GET'])]
    public function ObrazStandart(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session,
        EntityManagerInterface $entityManager 
        
    ): Response
        
    {
        $pageContent = $entityManager->getRepository(EduStandards::class)->findAll();

        $contact = $entityManager->getRepository(Contact::class)->findAll();
        return $this->render('Information-about-educational/ObrazStandart.html.twig', [
            'controller_name' => 'PageController',
            'pageData' => $pageContent,
            'contact' => $contact,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    #[Route('/StipendAndSupport', methods:['GET'])]
    public function StipendAndSupport(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session,
        EntityManagerInterface $entityManager 
        
    ): Response
        
    {
        $pageContent = $entityManager->getRepository(StudentSupport::class)->findAll();

        $contact = $entityManager->getRepository(Contact::class)->findAll();
        return $this->render('Information-about-educational/StipendAndSupport.html.twig', [
            'controller_name' => 'PageController',
            'pageData' => $pageContent,
            'contact' => $contact,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    #[Route('/availableEnvironment', methods:['GET'])]
    public function AvailableEnvironment(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session,
        EntityManagerInterface $entityManager 
        
    ): Response
        
    {
        $pageContent = $entityManager->getRepository(AvailableEnvironment::class)->findAll();

        $contact = $entityManager->getRepository(Contact::class)->findAll();
        return $this->render('Information-about-educational/DostupSreda.html.twig', [
            'controller_name' => 'PageController',
            'pageData' => $pageContent,
            'contact' => $contact,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    #[Route('/internationalCooperation', methods:['GET'])]
    public function MezduNarod(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session,
        EntityManagerInterface $entityManager 
        
    ): Response
        
    {
        $pageContent = $entityManager->getRepository(InternationalCoop::class)->findAll();

        $contact = $entityManager->getRepository(Contact::class)->findAll();
        return $this->render('Information-about-educational/MezduNarod.html.twig', [
            'controller_name' => 'PageController',
            'pageData' => $pageContent,
            'contact' => $contact,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    #[Route('/paymentDetails', methods:['GET'])]
    public function PaymentDetails(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session,
        EntityManagerInterface $entityManager 
        
    ): Response
        
    {
        $pageContent1 = $entityManager->getRepository(PersonalAccount::class)->findAll();
        $pageContent2 = $entityManager->getRepository(PaymentAccount::class)->findAll();
        $pageContent3 = $entityManager->getRepository(InfPay::class)->findAll();
        $contact = $entityManager->getRepository(Contact::class)->findAll();

        return $this->render('Information-about-educational/platezRekviz.html.twig', [
            'controller_name' => 'PageController',
            'pageData1' => $pageContent1,
            'pageData2' => $pageContent2,
            'pageData3' => $pageContent3,
            'contact' => $contact,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    #[Route('/publicReport', methods:['GET'])]
    public function PublicReport(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session,
        EntityManagerInterface $entityManager 
        
    ): Response
        
    {
        $pageContent = $entityManager->getRepository(PublicReport::class)->findAll();
        $contact = $entityManager->getRepository(Contact::class)->findAll();

        return $this->render('Information-about-educational/PublickDocklad.html.twig', [
            'controller_name' => 'PageController',
            'pageData' => $pageContent,
            'contact' => $contact,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
    #[Route('/specialistsAndServices', methods:['GET'])]
    public function RezimWorkSpecSupport(
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SessionInterface $session,
        EntityManagerInterface $entityManager 
        
    ): Response
        
    {
        $pageContent = $entityManager->getRepository(WorkingServices::class)->findAll();
        $contact = $entityManager->getRepository(Contact::class)->findAll();

        return $this->render('Information-about-educational/RezimWorkSpecSupport.html.twig', [
            'controller_name' => 'PageController',
            'pageData' => $pageContent,
            'contact' => $contact,
            'sessionData' => $sessionService->getSessionData($session)
        ]);
    }
}
