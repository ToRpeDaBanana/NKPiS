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
use App\Entity\AvailableEnvironment;
use App\Entity\BannersVacancies;
use App\Entity\CalendarStudy;
use App\Entity\CalendarTrainingSchedule;
use App\Entity\CallSchedule;
use App\Entity\CollegeAdmission;
use App\Entity\CollegeAdmissionTitle;
use App\Entity\Curriculum;
use App\Entity\DemoExam;
use App\Entity\Documents;
use App\Entity\DopEdu;
use App\Entity\DrivingDirections;
use App\Entity\EconomucActivityDocument;
use App\Entity\EduAndProductionComplex;
use App\Entity\EmployMonitoring;
use App\Entity\EntranceTests;
use App\Entity\ForEmloyText;
use App\Entity\ForEmployTable;
use App\Entity\HelpAGraduate;
use App\Entity\Holidays;
use App\Entity\ImportantKnow;
use App\Entity\InformAboutWorkPrograms;
use App\Entity\InterCertSchedule;
use App\Entity\LicenseEdu;
use App\Entity\MedicalExam;
use App\Entity\MedicalExamAdm;
use App\Entity\MedicalServiceDocument;
use App\Entity\NewsCentre;
use App\Entity\NormativeDocuments;
use App\Entity\Olympiads;
use App\Entity\OpenDoorsTable;
use App\Entity\OraganizationMedicalLink;
use App\Entity\PassingScores;
use App\Entity\PersonalDataProtection;
use App\Entity\PhotoGallery;
use App\Entity\ProfDocument;
use App\Entity\ProfessionalEdu;
use App\Entity\PsychologicalSupport;
use App\Entity\PublicReport;
use App\Entity\QuestionAnswer;
use App\Entity\Schedule;
use App\Entity\SliderMain;
use App\Entity\SliderReclama;
use App\Entity\SpecialtiesProfessions;
use App\Entity\TeachersContests;
use App\Entity\TeachersDocument;
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
            if(is_array($entity->getFirstPhoto())){
                foreach($entity->getFirstPhoto() as $item){
                    if (!empty($item)){
                    $imgpath = $this->parameterBag->get('kernel.project_dir') . 
                    '/public/assets/upload/img/'.$item;
                    if(file_exists($imgpath)) unlink($imgpath);
                    }
                }
            }   
            if(is_array($entity->getSecondPhoto())){
                foreach($entity->getSecondPhoto() as $item){
                    if (!empty($item)){
                    $imgpath = $this->parameterBag->get('kernel.project_dir') . 
                    '/public/assets/upload/img/'.$item;
                    var_dump($imgpath);
                    if(file_exists($imgpath)) unlink($imgpath);
                    }
                }
            }  
            if(is_array($entity->getFile())){
                foreach($entity->getFile() as $item){
                    if (!empty($item)){
                    $imgpath = $this->parameterBag->get('kernel.project_dir') . 
                    '/public/assets/upload/files/'.$item;
                    if(file_exists($imgpath)) unlink($imgpath);
                    }
                }
            }
        }
        if ($entity instanceof NewsCentre){
            if(is_array($entity->getPhoto())){
                foreach($entity->getPhoto() as $item){
                    if (!empty($item)){
                    $imgpath = $this->parameterBag->get('kernel.project_dir') . 
                    '/public/assets/upload/img/'.$item;
                    if(file_exists($imgpath)) unlink($imgpath);
                    }
                }
            }        
        }
        if ($entity instanceof AboutCentre){
            if(is_array($entity->getPhoto())){
                foreach($entity->getPhoto() as $item){
                    if (!empty($item)){
                    $imgpath = $this->parameterBag->get('kernel.project_dir') . 
                    '/public/assets/upload/img/'.$item;
                    if(file_exists($imgpath)) unlink($imgpath);
                    }
                }
            }
            if(is_array($entity->getFile())){
                foreach($entity->getFile() as $item){
                    if (!empty($item)){
                    $imgpath = $this->parameterBag->get('kernel.project_dir') . 
                    '/public/assets/upload/files/'.$item;
                    if(file_exists($imgpath)) unlink($imgpath);
                    }
                }
            }
        }
        if ($entity instanceof CalendarStudy){
            if(is_array($entity->getFile())){
                foreach($entity->getFile() as $item){
                    if (!empty($item)){
                    $imgpath = $this->parameterBag->get('kernel.project_dir') . 
                    '/public/assets/upload/files/'.$item;
                    if(file_exists($imgpath)) unlink($imgpath);
                    }
                }
            }    
        }
        if ($entity instanceof ControlSovDocuments){
            $item = $entity->getDocument();
            if (!empty($item)){
            $imgpath = $this->parameterBag->get('kernel.project_dir') . 
            '/public/assets/upload/files/'.$item;
            if(file_exists($imgpath)) unlink($imgpath); 
            }
        }
        if ($entity instanceof ControlSovChairman){
            $item = $entity->getPhoto();
            if (!empty($item)){
            $imgpath = $this->parameterBag->get('kernel.project_dir') . 
            '/public/assets/upload/img/'.$item;
            if(file_exists($imgpath)) unlink($imgpath);
            }
        }
        if ($entity instanceof BannersVacancies){
            $item = $entity->getPhoto();
            if (!empty($item)){
            $imgpath = $this->parameterBag->get('kernel.project_dir') . 
            '/public/assets/upload/img/'.$item;
            if(file_exists($imgpath)) unlink($imgpath);
            }
        }
        if ($entity instanceof CollegeAdmissionTitle){
            $item = $entity->getPhoto();
            if (!empty($item)){
            $imgpath = $this->parameterBag->get('kernel.project_dir') . 
            '/public/assets/upload/img/'.$item;
            if(file_exists($imgpath)) unlink($imgpath);
            }
        }
        if ($entity instanceof ControlSovPastMeetings){
            $item = $entity->getProtocol();
            if (!empty($item)){
            $imgpath = $this->parameterBag->get('kernel.project_dir') . 
            '/public/assets/upload/files/'.$item;
            if(file_exists($imgpath)) unlink($imgpath);
            }
        }
        if ($entity instanceof ControlSovPastMeetings){
            $item = $entity->getAgenda();
            if (!empty($item)){
            $imgpath = $this->parameterBag->get('kernel.project_dir') . 
            '/public/assets/upload/files/'.$item;
            if(file_exists($imgpath)) unlink($imgpath);
            }
        }
        if ($entity instanceof DemoExam){
            $item = $entity->getFile();
            if (!empty($item)){
            $imgpath = $this->parameterBag->get('kernel.project_dir') . 
            '/public/assets/upload/files/'.$item;
            if(file_exists($imgpath)) unlink($imgpath);
            }
        }
        if ($entity instanceof DrivingDirections){
            $item = $entity->getPhoto();
            if (!empty($item)){
            $imgpath = $this->parameterBag->get('kernel.project_dir') . 
            '/public/assets/upload/img/'.$item;
            if(file_exists($imgpath)) unlink($imgpath);
            }
        }
        if ($entity instanceof EmployMonitoring){
            $item = $entity->getFile();
            if (!empty($item)){
            $imgpath = $this->parameterBag->get('kernel.project_dir') . 
            '/public/assets/upload/files/'.$item;
            if(file_exists($imgpath)) unlink($imgpath);
            }
        }
        if ($entity instanceof Holidays){
            $item = $entity->getFile();
            if (!empty($item)){
            $imgpath = $this->parameterBag->get('kernel.project_dir') . 
            '/public/assets/upload/files/'.$item;
            if(file_exists($imgpath)) unlink($imgpath);
            }
        }
        if ($entity instanceof ImportantKnow){
            $item = $entity->getFile();
            if (!empty($item)){
            $imgpath = $this->parameterBag->get('kernel.project_dir') . 
            '/public/assets/upload/files/'.$item;
            if(file_exists($imgpath)) unlink($imgpath);
            }  
        }
        if ($entity instanceof InterCertSchedule){
            if(is_array($entity->getFile())){
                foreach($entity->getFile() as $item){
                    if (!empty($item)){
                    $imgpath = $this->parameterBag->get('kernel.project_dir') . 
                    '/public/assets/upload/files/'.$item;
                    if(file_exists($imgpath)) unlink($imgpath);
                    }
                }
            }    
        }
        if ($entity instanceof MedicalServiceDocument){
            if(is_array($entity->getTreaty())){
                foreach($entity->getTreaty() as $item){
                    if (!empty($item)){
                    $imgpath = $this->parameterBag->get('kernel.project_dir') . 
                    '/public/assets/upload/files/'.$item;
                    if(file_exists($imgpath)) unlink($imgpath);
                    }
                }
            }
            if(is_array($entity->getVaccination())){
                foreach($entity->getVaccination() as $item){
                    if (!empty($item)){
                    $imgpath = $this->parameterBag->get('kernel.project_dir') . 
                    '/public/assets/upload/files/'.$item;
                    if(file_exists($imgpath)) unlink($imgpath);
                    }
                }
            }      
        }
        if ($entity instanceof NormativeDocuments){
            if(is_array($entity->getFile())){
                foreach($entity->getFile() as $item){
                    if (!empty($item)){
                    $imgpath = $this->parameterBag->get('kernel.project_dir') . 
                    '/public/assets/upload/files/'.$item;
                    if(file_exists($imgpath)) unlink($imgpath);
                    }
                }
            }    
        }
        if ($entity instanceof PaidEduServ){
            if(is_array($entity->getParentFolder())){
                foreach($entity->getParentFolder() as $item){
                    if (!empty($item)){
                    $imgpath = $this->parameterBag->get('kernel.project_dir') . 
                    '/public/assets/upload/files/'.$item;
                    if(file_exists($imgpath)) unlink($imgpath);
                    }
                }
            }
            if(is_array($entity->getProcedur())){
                foreach($entity->getProcedur() as $item){
                    $imgpath = $this->parameterBag->get('kernel.project_dir') . 
                    '/public/assets/upload/files/'.$item;
                    if(file_exists($imgpath)) unlink($imgpath);
                }
            }       
        }
        if ($entity instanceof PhotoGallery){
            if(is_array($entity->getPhoto())){
                foreach($entity->getPhoto() as $item){
                    if (!empty($item)){
                    $imgpath = $this->parameterBag->get('kernel.project_dir') . 
                    '/public/assets/upload/img/'.$item;
                    if(file_exists($imgpath)) unlink($imgpath);
                    }
                }
            }    
        }
        if ($entity instanceof ProfDocument){
            $item = $entity->getCollectiveAgreement();
            if (!empty($item)){
            $imgpath = $this->parameterBag->get('kernel.project_dir') . 
            '/public/assets/upload/files/'.$item;
            if(file_exists($imgpath)) unlink($imgpath);
            }
        }
        if ($entity instanceof ProfDocument){
            $item = $entity->getAgreementChange();
            if (!empty($item)){
            $imgpath = $this->parameterBag->get('kernel.project_dir') . 
            '/public/assets/upload/files/'.$item;
            if(file_exists($imgpath)) unlink($imgpath);
            }
        }
        if ($entity instanceof ProfDocument){
            $item = $entity->getInformAbout();
            if (!empty($item)){
            $imgpath = $this->parameterBag->get('kernel.project_dir') . 
            '/public/assets/upload/files/'.$item;
            if(file_exists($imgpath)) unlink($imgpath);
            }
        }
        if ($entity instanceof ProfDocument){
            $item = $entity->getCommissionDocuments();
            if (!empty($item)){
            $imgpath = $this->parameterBag->get('kernel.project_dir') . 
            '/public/assets/upload/files/'.$item;
            if(file_exists($imgpath)) unlink($imgpath);
            }
        }
        if ($entity instanceof ProfDocument){
            $item = $entity->getImplementationDocuments();
            if (!empty($item)){
            $imgpath = $this->parameterBag->get('kernel.project_dir') . 
            '/public/assets/upload/files/'.$item;
            if(file_exists($imgpath)) unlink($imgpath);
            }
        }
        if ($entity instanceof QuestionAnswer){
            if(is_array($entity->getFile())){
                foreach($entity->getFile() as $item){
                    if (!empty($item)){
                    $imgpath = $this->parameterBag->get('kernel.project_dir') . 
                    '/public/assets/upload/files/'.$item;
                    if(file_exists($imgpath)) unlink($imgpath);
                    }
                }
            }    
        }
        if ($entity instanceof Schedule){
            if(is_array($entity->getFile())){
                foreach($entity->getFile() as $item){
                    if (!empty($item)){
                    $imgpath = $this->parameterBag->get('kernel.project_dir') . 
                    '/public/assets/upload/files/'.$item;
                    if(file_exists($imgpath)) unlink($imgpath);
                    }
                }
            }    
        }
        if ($entity instanceof Teachers){
            $item = $entity->getPhoto();
            if (!empty($item)){
            $imgpath = $this->parameterBag->get('kernel.project_dir') . 
            '/public/assets/upload/img/'.$item;
            if(file_exists($imgpath)) unlink($imgpath);
            }
        }
        // if ($entity instanceof TeachersContests){
        //     $item = $entity->getFile();
        //     $imgpath = $this->parameterBag->get('kernel.project_dir') . 
        //     '/public/assets/upload/files/'.$item;
        //     if(file_exists($imgpath)) unlink($imgpath);
        // }
        if ($entity instanceof VeteransLabor){
            if(is_array($entity->getPhoto())){
                foreach($entity->getPhoto() as $item){
                    if (!empty($item)){
                    $imgpath = $this->parameterBag->get('kernel.project_dir') . 
                    '/public/assets/upload/img/'.$item;
                    if(file_exists($imgpath)) unlink($imgpath);
                    }
                }
            }    
        }
        if ($entity instanceof VeteransLaborDocument){
            $item = $entity->getFile();
            if (!empty($item)){
            $imgpath = $this->parameterBag->get('kernel.project_dir') . 
            '/public/assets/upload/files/'.$item;
            if(file_exists($imgpath)) unlink($imgpath);
            }
        }
        if ($entity instanceof TeachersDocument){
            $item = $entity->getFile();
            if (!empty($item)){
            $imgpath = $this->parameterBag->get('kernel.project_dir') . 
            '/public/assets/upload/files/'.$item;
            if(file_exists($imgpath)) unlink($imgpath);
            }
        }
        if ($entity instanceof SliderMain){
            $item = $entity->getPhoto();
            if (!empty($item)){
            $imgpath = $this->parameterBag->get('kernel.project_dir') . 
            '/public/assets/upload/img/'.$item;
            if(file_exists($imgpath)) unlink($imgpath);
            }
        }
        if ($entity instanceof SliderReclama){
            $item = $entity->getPhotoPc();
            if (!empty($item)){
            $imgpath = $this->parameterBag->get('kernel.project_dir') . 
            '/public/assets/upload/img/'.$item;
            if(file_exists($imgpath)) unlink($imgpath);
            }
        }
        if ($entity instanceof SliderReclama){
            $item = $entity->getPhotoMobile();
            if (!empty($item)){
            $imgpath = $this->parameterBag->get('kernel.project_dir') . 
            '/public/assets/upload/img/'.$item;
            if(file_exists($imgpath)) unlink($imgpath);
            }
        }
        if ($entity instanceof Documents){
            $item = $entity->getDocument();
            if (!empty($item)){
                $imgpath = $this->parameterBag->get('kernel.project_dir') . 
                '/public/assets/upload/files/'.$item;
                if(file_exists($imgpath)) unlink($imgpath);
                }
        }
        if ($entity instanceof LicenseEdu){
            $item = $entity->getFile();
            if (!empty($item)){
                $imgpath = $this->parameterBag->get('kernel.project_dir') . 
                '/public/assets/upload/files/'.$item;
                if(file_exists($imgpath)) unlink($imgpath);
                }
        }
        if ($entity instanceof ProfessionalEdu){
            $item = $entity->getFile();
            if (!empty($item)){
            $imgpath = $this->parameterBag->get('kernel.project_dir') . 
            '/public/assets/upload/files/'.$item;
            if(file_exists($imgpath)) unlink($imgpath);
            }
        }
        if ($entity instanceof ProfessionalEdu){
            $item = $entity->getDescription();
            if (!empty($item)){
                $imgpath = $this->parameterBag->get('kernel.project_dir') . 
                '/public/assets/upload/files/'.$item;
                if(file_exists($imgpath)) unlink($imgpath);
            }
        }
        if ($entity instanceof DopEdu){
            $item = $entity->getFile();
            if (!empty($item)){
            $imgpath = $this->parameterBag->get('kernel.project_dir') . 
            '/public/assets/upload/files/'.$item;
            if(file_exists($imgpath)) unlink($imgpath);
            }
        }
        if ($entity instanceof DopEdu){
                $item = $entity->getDescription();
            if (!empty($item)){
                $imgpath = $this->parameterBag->get('kernel.project_dir') . 
                '/public/assets/upload/files/'.$item;
                if(file_exists($imgpath)) unlink($imgpath);
            }   
        }
        if ($entity instanceof InformAboutWorkPrograms){
            $item = $entity->getFile();
            if (!empty($item)){
            $imgpath = $this->parameterBag->get('kernel.project_dir') . 
            '/public/assets/upload/files/'.$item;
            if(file_exists($imgpath)) unlink($imgpath);
            }
        }
        if ($entity instanceof InformAboutWorkPrograms){
                $item = $entity->getDescription();
            if (!empty($item)){
                $imgpath = $this->parameterBag->get('kernel.project_dir') . 
                '/public/assets/upload/files/'.$item;
                if(file_exists($imgpath)) unlink($imgpath);
            }   
        }
        if ($entity instanceof Curriculum){
            $item = $entity->getFile();
        if (!empty($item)){
            $imgpath = $this->parameterBag->get('kernel.project_dir') . 
            '/public/assets/upload/files/'.$item;
            if(file_exists($imgpath)) unlink($imgpath);
        }   
        }
        if ($entity instanceof CalendarTrainingSchedule){
            $item = $entity->getFile();
        if (!empty($item)){
            $imgpath = $this->parameterBag->get('kernel.project_dir') . 
            '/public/assets/upload/files/'.$item;
            if(file_exists($imgpath)) unlink($imgpath);
        }   
        }
        if ($entity instanceof EconomucActivityDocument){
            $item = $entity->getFile();
        if (!empty($item)){
            $imgpath = $this->parameterBag->get('kernel.project_dir') . 
            '/public/assets/upload/files/'.$item;
            if(file_exists($imgpath)) unlink($imgpath);
        }   
        }
        if ($entity instanceof AvailableEnvironment){
            if(is_array($entity->getPhoto())){
                foreach($entity->getPhoto() as $item){
                    if (!empty($item)){
                    $imgpath = $this->parameterBag->get('kernel.project_dir') . 
                    '/public/assets/upload/img/'.$item;
                    if(file_exists($imgpath)) unlink($imgpath);
                    }
                }
            }    
        }
        if ($entity instanceof PublicReport){
            $item = $entity->getFile();
        if (!empty($item)){
            $imgpath = $this->parameterBag->get('kernel.project_dir') . 
            '/public/assets/upload/files/'.$item;
            if(file_exists($imgpath)) unlink($imgpath);
        }   
        }
        if ($entity instanceof PersonalDataProtection){
            $item = $entity->getFile();
        if (!empty($item)){
            $imgpath = $this->parameterBag->get('kernel.project_dir') . 
            '/public/assets/upload/files/'.$item;
            if(file_exists($imgpath)) unlink($imgpath);
        }   
        }
        if ($entity instanceof EduAndProductionComplex){
            if(is_array($entity->getPhoto())){
                foreach($entity->getPhoto() as $item){
                    if (!empty($item)){
                    $imgpath = $this->parameterBag->get('kernel.project_dir') . 
                    '/public/assets/upload/img/'.$item;
                    if(file_exists($imgpath)) unlink($imgpath);
                    }
                }
            }    
        }
    }
}