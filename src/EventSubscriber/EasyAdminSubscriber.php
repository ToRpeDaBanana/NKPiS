<?PHP

namespace App\EventSubscriber;

use App\Entity\Teachers;
use App\Entity\GeneralInf;
use App\Entity\DepartmentContacts;
use App\Entity\News;
use App\Entity\ControlSovChairman;
use App\Entity\ControlSovOther;
use App\Entity\ControlSovMeetings;
use App\Entity\ControlSovPastMeetings;
use App\Entity\ControlSovDocuments;
use App\Entity\OurAchievements;
use App\Entity\OurAchievementsTable;
use App\Entity\PaidEduServ;
use App\Controller\Admin\NewsCrudController;
use App\Entity\AboutCentre;
use App\Entity\AcceptanceCheckDigits;
use App\Entity\AcceptanceCheckDigitsTable;
use App\Entity\BannersVacancies;
use App\Entity\CalendarStudy;
use App\Entity\CallSchedule;
use App\Entity\CollegeAdmission;
use App\Entity\CollegeAdmissionTitle;
use App\Entity\DemoExam;
use App\Entity\EmployMonitoring;
use App\Entity\EntranceTests;
use App\Entity\ForEmloyText;
use App\Entity\ForEmployTable;
use App\Entity\HelpAGraduate;
use App\Entity\Holidays;
use App\Entity\ImportantKnow;
use App\Entity\InterCertSchedule;
use App\Entity\MedicalExam;
use App\Entity\MedicalExamAdm;
use App\Entity\MedicalServiceDocument;
use App\Entity\NewsCentre;
use App\Entity\NormativeDocuments;
use App\Entity\Olympiads;
use App\Entity\OpenDoorsTable;
use App\Entity\OraganizationMedicalLink;
use App\Entity\PassingScores;
use App\Entity\PhotoGallery;
use App\Entity\ProfDocument;
use App\Entity\PsychologicalSupport;
use App\Entity\Schedule;
use App\Entity\SpecialtiesProfessions;
use App\Entity\TeachersContests;
use App\Entity\TransferCollege;
use App\Entity\TransferWithinCollege;
use App\Entity\Vacancies;
use App\Entity\VacanciesTeachers;
use App\Entity\VacannciesForAdmission;
use App\Entity\VeteransLabor;
use App\Entity\VeteransLaborDocument;
use App\Entity\VideosDaysOpenDoors;
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
        if ($entity instanceof NewsCentre){
            foreach($entity->getPhoto() as $item){
                $imgpath = $this->parameterBag->get('kernel.project_dir') . 
                '/public/assets/upload/img'.$item;
                if(file_exists($imgpath)) unlink($imgpath);
            }
        }
        if ($entity instanceof AboutCentre){
            foreach($entity->getPhoto() as $item){
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
        if ($entity instanceof CalendarStudy){
            foreach($entity->getFile() as $item){
                $imgpath = $this->parameterBag->get('kernel.project_dir') . 
                '/public/assets/upload/files'.$item;
                if(file_exists($imgpath)) unlink($imgpath);
            }
        }
        if ($entity instanceof ControlSovDocuments){
            foreach($entity->getDocument() as $item){
                $imgpath = $this->parameterBag->get('kernel.project_dir') . 
                '/public/assets/upload/files'.$item;
                if(file_exists($imgpath)) unlink($imgpath);
            }
        }
        if ($entity instanceof ControlSovChairman){
            $item = $entity->getPhoto();
            $imgpath = $this->parameterBag->get('kernel.project_dir') . 
            '/public/assets/upload/img'.$item;
            if(file_exists($imgpath)) unlink($imgpath);
        }
    }
}