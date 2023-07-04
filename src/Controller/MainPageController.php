<?php

namespace App\Controller;
use App\Entity\Category;
use App\Entity\News;
use App\Entity\QuestionAnswer;
use App\Entity\SliderMain;
use App\Entity\SliderReclama;
use App\Form\QuestionAnswerType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use App\Service\SessionService;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
class MainPageController extends AbstractController
{
    #[Route('/', name: 'app_main_page')]
    


    public function index(
        SessionInterface $session, 
        Request $request,
        EntityManagerInterface $entityManager, 
        ManagerRegistry $doctrine,
        SessionService $sessionService,
        SluggerInterface $slugger
    ): Response

    {
        $review = new QuestionAnswer();
        $form = $this->createForm(QuestionAnswerType::class, $review);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
             /** @var UploadedFile $file */
             $file = $form->get('file')->getData();
             if ($file) {
                 $originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                 $safeFilename = $slugger->slug($originalFilename);
                 $newFilename = $safeFilename.'-'.uniqid().'.'.$file->guessExtension();
                 try {
                     $file->move(
                         $this->getParameter('kernel.project_dir') . 
                         '/public/assets/upload/files/',
                         $newFilename
                     );
                 } catch (FileException $e) {
                 }
 
                 $review->setFile($newFilename);
            }
            $review->setDate(new \DateTime());
            $entityManager->persist($review);
            $entityManager->flush();

            return $this->redirectToRoute('questionandanswer_new');
        }

        // $includeValues = [
        //     'fontSize',
        //     'font',
        //     'display',
        //     'checkboxInterval',
        //     'betweenInterval',
        //     'colorSite1',
        //     'colorSite2',
        //     'imgVisible',
        // ];
        // if (!empty($_POST)){
        //     // echo($_POST);
        //     // var_dump($_POST);
        //     // exit;
            
        //     foreach($_POST as $k => $item){
        //         if( in_array($k, $includeValues)){
        //             $session->set($k, $item);
        //         }
                
        //     }
        //     exit(json_encode(['success' => true]));

        //     // if (!empty($_POST['zoom'])){
        //     //     // echo($_POST);
        //     //     $session->set('customStyle', $_POST['zoom']);
        //     //     // var_dump($_POST);
        //     //     exit(json_encode(['success' => true]));
        //     // }
        // }
        
        // $pageContent = $doctrine->getRepository(Category::class)->findAll();
        $pageContent1 = $entityManager->getRepository(SliderMain::class)->findAll();
        $pageContent2 = $entityManager->getRepository(SliderReclama::class)->findAll();
        $pageContent3 = $entityManager->getRepository(News::class)->findAll();
        // $sessionValues = [];
        // foreach($includeValues as $item){
        //     if ($session->has($item)){
        //         $sessionValues[$item] = $session->get($item);
        //     }
            
        // }
        
        // $serviceGetSession->setServiceData($sessionValues);
        // var_dump($sessionValues);
        // var_dump($_SESSION);


        // if (!$session->has('customStyle'))
        // {
        //     $session->set('customStyle', 1);
        // }
        // $customStyle = $session->get('customStyle');
        // echo($customStyle);
        // var_dump($pageContent);
        // exit;
        // $session->clear();
        
        return $this->render('main_page/index.html.twig', [
            'controller_name' => 'MainPageController',
            'form' => $form->createView(),
            'pageData1' => $pageContent1,
            'pageData2' => $pageContent2,
            'pageData3' => $pageContent3,
            'sessionData' => $sessionService->getSessionData($session),
        ]);
    }
}
