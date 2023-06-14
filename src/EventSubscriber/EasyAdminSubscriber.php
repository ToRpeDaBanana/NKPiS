<?PHP

namespace App\EventSubscriber;

use App\Entity\News;
use Doctrine\ORM\Mapping\Entity;
use EasyCorp\Bundle\EasyAdminBundle\Event\AfterEntityDeletedEvent;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class EasyAdminSubscriber implements EventSubscriberInterface{

    /**
     * @var ParameterBagInterface
     */
    private $parameterBag;

    public function __construct(ParameterBagInterface   $parameterBag){
        $this->parameterBag = $parameterBag;
    }

    public static function getSubscribedEvents(){
        return [
            AfterEntityDeletedEvent::class => ['deletePhysicalImage'],
        ];
    }

    public function deletePhysicalImage(AfterEntityDeletedEvent $event){
        $entity = $event->getEntityInstance();
        // var_dump($entity);
        // exit;
        if ($entity instanceof News){
            foreach($entity->getFirstPhoto() as $item){
                $imgpath = $this->parameterBag->get('kernel.project_dir') . 
                '/public/assets/upload/img'.$item;
                if(file_exists($imgpath)) unlink($imgpath);
            }
            foreach($entity->getSecondPhoto() as $item){
                $imgpath = $this->parameterBag->get('kernel.project_dir') . 
                '/public/assets/upload/img'.$item;
                if(file_exists($imgpath)) unlink($imgpath);
            }
            foreach($entity->getFile() as $item){
                $imgpath = $this->parameterBag->get('kernel.project_dir') . 
                '/public/assets/upload/files'.$item;
                if(file_exists($imgpath)) unlink($imgpath);
            }
        }
    }
}