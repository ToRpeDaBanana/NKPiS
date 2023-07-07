<?php

namespace App\EventSubscriber;

use App\Service\PhotoValidator;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpKernel\Event\ControllerEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use EasyCorp\Bundle\EasyAdminBundle\Event\BeforeEntityPersistedEvent;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class PhotoValidationSubscriber implements EventSubscriberInterface
{
    /**
     * @var ParameterBagInterface
     */
    private $parameterBag;
    private $validator;

    public function __construct(
        ParameterBagInterface $parameterBag,
        ValidatorInterface $validator, 
    ){
        $this->parameterBag = $parameterBag;
        $this->validator = $validator;
    }
    
    public static function getSubscribedEvents(){
        return [
            BeforeEntityPersistedEvent::class => ['validation'],
        ];
    }

    public function validation (BeforeEntityPersistedEvent $event){
        $entity = $event->getEntityInstance();
        // var_dump($entity);
        // var_dump($_POST);
        // var_dump('------------------------------------');
        // var_dump($_FILES);
        // var_dump('------------------------------------');
        // var_dump($_FILES['SliderMain']['name']['photo']['file']);
        // var_dump('------------------------------------');
        // var_dump($_FILES['SliderMain']['tmp_name']['photo']['file']);
        // exit;
        $imgpath = $this->parameterBag->get('kernel.project_dir') . 
            '/public/assets/upload/img/';
        $uploadedFilePath = 'public/assets/upload/img/';
        $originalFileName = 'original_filename.jpg';
        $mimeType = 'image/jpeg';
        $size = 12345;
        $error = null;

        // Создание объекта UploadedFile
        $uploadedFile = new UploadedFile(
            // $_FILES['SliderMain']['tmp_name']['photo']['file'],
            $imgpath . $_FILES['SliderMain']['name']['photo']['file'],
            $_FILES['SliderMain']['name']['photo']['file'],
        );
        if ($uploadedFile instanceof UploadedFile) {
            $constraints = new File([
                'maxSize' => '100M',
                // 'maxWidth' => 1920,
                // 'maxHeight' => 1080,
            ]);

            $violations = $this->validator->validate($uploadedFile, $constraints);
            var_dump($violations->count());
            exit;
            if ($violations->count() > 0) {
                // Handle the validation errors (e.g., add an error to the Request object or throw an exception)
                // In this example, we add the error message to the "error" attribute of the Request object
                // $this->request->attributes->set('error', $violations[0]->getMessage());
            }
        }
    }
    // private $validator;

    // public function __construct(ValidatorInterface $validator)
    // {
    //     $this->validator = $validator;
    // }

    // public static function getSubscribedEvents(): array
    // {
    //     return [
    //         KernelEvents::CONTROLLER => 'onKernelController',
    //     ];
    // }

    // public function onKernelController(ControllerEvent $event): void
    // {
    //     $controller = $event->getController();

    //     // Check if the controller is an action (controller method)
    //     if (!is_array($controller)) {
    //         return;
    //     }

    //     $object = $controller[0];
    //     $methodName = $controller[1];

    //     // Here, you can check if the current controller and method meet your requirements
    //     // $entity = $event->getEntityInstance();
    //     // Get the request object
    //     $request = $event->getRequest();
    //     var_dump($event);
    //     exit;
    //     // if ($entity instanceof SliderMain){
    //     //     $item = $entity->getPhoto();
    //     //     if (!empty($item)){
    //     //     $imgpath = $this->parameterBag->get('kernel.project_dir') . 
    //     //     '/public/assets/upload/img/'.$item;
    //     //     if(file_exists($imgpath)) unlink($imgpath);
    //     //     }
    //     // }

    //     // Get the uploaded file from the request
        
    //     $file = $request->files->get('photo');
    //     // var_dump($file);
    //     // exit;
    //     // Validate the file using constraints
    //     try {
            // if ($file instanceof UploadedFile) {
            //     $constraints = new File([
            //         'maxSize' => '5M', // Set maximum file size constraint (e.g., 5 megabytes)
            //         'maxWidth' => 1920,
            //         'maxHeight' => 1080,
            //     ]);

            //     $violations = $this->validator->validate($file, $constraints);

            //     if ($violations->count() > 0) {
            //         // Handle the validation errors (e.g., add an error to the Request object or throw an exception)
            //         // In this example, we add the error message to the "error" attribute of the Request object
            //         $request->attributes->set('error', $violations[0]->getMessage());
            //     }
            // }
    //     } catch (\InvalidArgumentException $e) {
    //         // Handle invalid file (e.g., add an error to the Request object or throw an exception)
    //         // In this example, we add the error message to the "error" attribute of the Request object
    //         $request->attributes->set('error', $e->getMessage());
    //     }
    // }
}