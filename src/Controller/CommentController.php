<?php
namespace App\Controller;

use App\Entity\Comment;
use App\Form\CommentType;
use App\Service\SessionService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

class CommentController extends AbstractController
{

    #[Route('/comment',name:"comment_new", methods:['GET', 'POST'])]
    public function new(
        Request $request, 
        EntityManagerInterface $entityManager,
        SessionService $sessionService,
        SessionInterface $session,
        SluggerInterface $slugger
        ): Response
    {
        $review = new Comment();
        $form = $this->createForm(CommentType::class, $review);
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
            

            return $this->redirectToRoute('comment_new');
        }

        $pageContent = $entityManager->getRepository(Comment::class)->findAll();

        return $this->render('page/comment.html.twig', [
            'form' => $form->createView(),
            'pageData' => $pageContent,
            'sessionData' => $sessionService->getSessionData($session),
        ]);
    }
}