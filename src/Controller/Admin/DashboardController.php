<?php

namespace App\Controller\Admin;
use App\Entity\User;
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
use App\Entity\AccessIs;
use App\Entity\AvailableEnvironment;
use App\Entity\BannersVacancies;
use App\Entity\Cabinet;
use App\Entity\CalendarStudy;
use App\Entity\CalendarTrainingSchedule;
use App\Entity\CallSchedule;
use App\Entity\CollegeAdmission;
use App\Entity\CollegeAdmissionTitle;
use App\Entity\Comment;
use App\Entity\Contact;
use App\Entity\Curriculum;
use App\Entity\DemoExam;
use App\Entity\Documents;
use App\Entity\DopEdu;
use App\Entity\EconomucActivity;
use App\Entity\EconomucActivityDocument;
use App\Entity\EduAndProductionComplex;
use App\Entity\EduStandards;
use App\Entity\EmployMonitoring;
use App\Entity\EntranceTests;
use App\Entity\Food;
use App\Entity\ForEmloyText;
use App\Entity\ForEmployTable;
use App\Entity\HelpAGraduate;
use App\Entity\Holidays;
use App\Entity\ImportantKnow;
use App\Entity\InformAboutWorkPrograms;
use App\Entity\InformMedical;
use App\Entity\InformOfRealizeEduProgram;
use App\Entity\InformRealizeDopEdu;
use App\Entity\InformResultPriem;
use App\Entity\InforRealizeDopEduDate;
use App\Entity\InfPay;
use App\Entity\InstructionsOrgDistance;
use App\Entity\InterCertSchedule;
use App\Entity\InternationalCoop;
use App\Entity\LaboratoriesAndWorkshops;
use App\Entity\LaborProtection;
use App\Entity\Libraries;
use App\Entity\LicenseEdu;
use App\Entity\MeansEduUpbringing;
use App\Entity\MedicalExam;
use App\Entity\MedicalExamAdm;
use App\Entity\MedicalServiceDocument;
use App\Entity\NewsCentre;
use App\Entity\NormativeDocuments;
use App\Entity\Olympiads;
use App\Entity\OpenDoorsTable;
use App\Entity\OraganizationMedicalLink;
use App\Entity\PassingScores;
use App\Entity\PaymentAccount;
use App\Entity\PersonalAccount;
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
use App\Entity\SportsFacilities;
use App\Entity\StudentSupport;
use App\Entity\TeachersContests;
use App\Entity\TeachersDocument;
use App\Entity\TransferCollege;
use App\Entity\TransferWithinCollege;
use App\Entity\Vacancies;
use App\Entity\VacanciesTeachers;
use App\Entity\VacanForAdmTitle;
use App\Entity\VacannciesForAdmission;
use App\Entity\VeteransLabor;
use App\Entity\VeteransLaborDocument;
use App\Entity\VideosDaysOpenDoors;
use App\Entity\WorkingServices;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class DashboardController extends AbstractDashboardController
{   
    #[IsGranted('ROLE_ADMIN')]
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        // return parent::index();

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
        $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        return $this->redirect($adminUrlGenerator->setController(NewsCrudController::class)->generateUrl());
        // return $this->redirect($adminUrlGenerator->setController(GeneralInfCrudController::class)->generateUrl());
        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirect('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
        // return $this->render('some/path/my-dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('НКПИС панель администратора');
    }

    public function configureMenuItems(): iterable
    {
        return [

            MenuItem::linkToDashboard('Панель управления', 'fa fa-home'),
            MenuItem::section('Новости, отзывы, вопросы', ''),
                MenuItem::linkToCrud('Новости', '', News::class),
                MenuItem::linkToCrud('Новости центра', '', NewsCentre::class),
                MenuItem::linkToCrud('Отзывы', '', Comment::class),
                MenuItem::linkToCrud('Вопросы и ответы', '', QuestionAnswer::class),
                MenuItem::linkToCrud('Контактные данные', '', Contact::class),
                
            MenuItem::section('Слайдеры', ''),
                MenuItem::linkToCrud('Основной слайдер', '', SliderMain::class),
                MenuItem::linkToCrud('Слайдер рекламы', '', SliderReclama::class),

            MenuItem::section('О нас'),
                MenuItem::linkToCrud('Общая информация', '', GeneralInf::class),
                MenuItem::subMenu('Педагоги', '')->setSubItems([
                    MenuItem::linkToCrud('Педагогический состав', '', Teachers::class),
                    MenuItem::linkToCrud('Документ','',TeachersDocument::class),
                ]),
                MenuItem::linkToCrud('Контакты подразделений', '', DepartmentContacts::class),

            MenuItem::subMenu('Органы уравления', '')->setSubItems([
                MenuItem::linkToCrud('Председатель УС', '', ControlSovChairman::class),
                MenuItem::linkToCrud('Иные участники УС', '', ControlSovOther::class),
                MenuItem::linkToCrud('Документы', '', ControlSovDocuments::class),
                MenuItem::linkToCrud('Запланировать заседание', '', ControlSovMeetings::class),
                MenuItem::linkToCrud('Прошедшие заседания', '', ControlSovPastMeetings::class),
                

            ]),
            MenuItem::subMenu('Наши достижения', '')->setSubItems([
                MenuItem::linkToCrud('Достижения', '', OurAchievements::class),
                MenuItem::linkToCrud('Таблица достижений', '', OurAchievementsTable::class),
            ]),
            MenuItem::linkToCrud('Платные образовательные услуги', '', PaidEduServ::class),
            MenuItem::linkToCrud('Фотогалерея', '', PhotoGallery::class),

            MenuItem::section('Родителям'),
                MenuItem::subMenu('Вакантные места для приема(перевода) обучающихся', '')->setSubItems([
                    MenuItem::linkToCrud('Вакантные места', '', VacannciesForAdmission::class),
                    MenuItem::linkToCrud('Актуальность', '', VacanForAdmTitle::class),
                ]),
                MenuItem::linkToCrud('Психологическая поддержка ребенка', '', PsychologicalSupport::class),
                MenuItem::subMenu('Медицинское обслуживание', '')->setSubItems([
                    MenuItem::linkToCrud('Документы', '', MedicalServiceDocument::class),
                    MenuItem::linkToCrud('Организация медицинского обслуживания', '', OraganizationMedicalLink::class),
                    MenuItem::linkToCrud('График проведения медицинских осмотров', '', MedicalExam::class),
                    MenuItem::linkToCrud('Это важно знать', '', ImportantKnow::class),
                ]),
            MenuItem::section('Учащимся'),
                MenuItem::subMenu('Расписание, учебные периоды, каникулы', '')->setSubItems([
                    MenuItem::linkToCrud('Документ об учреждении сроков каникул', '', Holidays::class),
                    MenuItem::linkToCrud('Расписание', '', Schedule::class),
                    MenuItem::linkToCrud('Расписание звонков', '', CallSchedule::class),
                    MenuItem::linkToCrud('Календарные учебные графики', '', CalendarStudy::class),
                ]),
                MenuItem::linkToCrud('Расписание промежуточной аттестации', '', InterCertSchedule::class),
                MenuItem::subMenu('Государственная итоговая аттестация', '')->setSubItems([
                    MenuItem::linkToCrud('Демонстрационный экзамен', '', DemoExam::class),
                ]),
                MenuItem::linkToCrud('Олимпиады, конкурсы и конференции', '', Olympiads::class),
                MenuItem::subMenu('Центр содействия трудоустройству выпускников', '')->setSubItems([
                    MenuItem::linkToCrud('О центре', '', AboutCentre::class),
                    MenuItem::linkToCrud('В помощь выпускнику', '', HelpAGraduate::class),
                    MenuItem::linkToCrud('Мониторинг трудоустройства', '', EmployMonitoring::class),
                    MenuItem::linkToCrud('Вакансии и работодатели банеры', '', BannersVacancies::class),
                    MenuItem::linkToCrud('Вакансии', '', Vacancies::class),
                    MenuItem::linkToCrud('Работодателям текст', '', ForEmloyText::class),
                    MenuItem::linkToCrud('Работодателям таблица', '', ForEmployTable::class),
                ]),
            MenuItem::section('Педагогам'),
                MenuItem::linkToCrud('Вакансии педагогам', '', VacanciesTeachers::class),
                MenuItem::linkToCrud('Конкурсы, олимпиады, конференции педагогам', '', TeachersContests::class),
                MenuItem::linkToCrud('Профсоюзная организация', '', ProfDocument::class),
                MenuItem::subMenu('Совет ветеранов педагогического труда', '')->setSubItems([
                    MenuItem::linkToCrud('Новости совет ветеранов', '', VeteransLabor::class),
                    MenuItem::linkToCrud('Совет ветеранов документы', '', VeteransLaborDocument::class),
                ]),
            MenuItem::section('Поступление в колледж'),
                MenuItem::subMenu('Приёмная комиссия', '')->setSubItems([
                    MenuItem::linkToCrud('Информация о приёмной комиссии', '', CollegeAdmissionTitle::class),
                    MenuItem::linkToCrud('Поступление в колледж', '', CollegeAdmission::class),
                    MenuItem::linkToCrud('Нормативные документы Приемной комиссии', '', NormativeDocuments::class),
                    // MenuItem::linkToCrud('Контрольные цифры приема год приёма', '', AcceptanceCheckDigits::class),
                    MenuItem::linkToCrud('Контрольные цифры приема таблица', '', AcceptanceCheckDigitsTable::class),
                    MenuItem::linkToCrud('Проходные баллы прошлых лет', '', PassingScores::class),
                    MenuItem::linkToCrud('Медицинский осмотр для поступления', '', MedicalExamAdm::class),
                    MenuItem::linkToCrud('Перевод в колледж из другого учебного заведения', '', TransferCollege::class),
                    MenuItem::linkToCrud('Переводы внутри колледжа', '', TransferWithinCollege::class),
                ]),
                MenuItem::linkToCrud('Специальности/профессии', '', SpecialtiesProfessions::class),
                MenuItem::linkToCrud('Вступительные испытания', '', EntranceTests::class),
                MenuItem::subMenu('Дни открытых дверей', '')->setSubItems([
                    MenuItem::linkToCrud('Дни открытых дверей информация', '', VideosDaysOpenDoors::class),
                    MenuItem::linkToCrud('Дни открытых дверей таблица', '', OpenDoorsTable::class),
                ]),
            MenuItem::section('Сведения об образовательно организации'),
                MenuItem::linkToCrud('Документы', '', Documents::class),
                MenuItem::subMenu('Образование', '')->setSubItems([
                    MenuItem::linkToCrud('Сведения о реализации образовательных программ', '', InformOfRealizeEduProgram::class),
                    MenuItem::linkToCrud('Дополнительное образование дата', '', InforRealizeDopEduDate::class),
                    MenuItem::linkToCrud('Дополнительное образование', '', InformRealizeDopEdu::class),
                    MenuItem::linkToCrud('Сведения о результатах приема', '', InformResultPriem::class),
                    MenuItem::linkToCrud('Копия лицензии на право ведения образовательной деятельности', '', LicenseEdu::class),
                    MenuItem::linkToCrud('Положение (инструкция) об организации дистанционного обучения', '', InstructionsOrgDistance::class),
                    MenuItem::linkToCrud('Образовательные программы -> профессиональное образование', '', ProfessionalEdu::class),
                    MenuItem::linkToCrud('Образовательные программы -> дополнительное образование', '', DopEdu::class),
                    MenuItem::linkToCrud('Информация о рабочих программах', '', InformAboutWorkPrograms::class),
                    MenuItem::linkToCrud('Учебный план', '', Curriculum::class),
                    MenuItem::linkToCrud('Календарный учебный график', '', CalendarTrainingSchedule::class),
                ]),
                MenuItem::subMenu('Материально-техническое обеспечение и оснащенность образовательного процесса', '')->setSubItems([
                    MenuItem::linkToCrud('Кабинеты', '', Cabinet::class),
                    MenuItem::linkToCrud('Лаборатории и мастерские', '', LaboratoriesAndWorkshops::class),
                    MenuItem::linkToCrud('Библиотеки', '', Libraries::class),
                    MenuItem::linkToCrud('Спортивные объекты', '', SportsFacilities::class),
                    MenuItem::linkToCrud('Средства обучения и воспитания', '', MeansEduUpbringing::class),
                    MenuItem::linkToCrud('Питание', '', Food::class),
                    MenuItem::linkToCrud('Медицинское обслуживание', '', InformMedical::class),
                    MenuItem::linkToCrud('Доступ к информационным системам', '', AccessIs::class),
                ]),
                MenuItem::subMenu('Финансово-хозяйственная деятельность', '')->setSubItems([
                    MenuItem::linkToCrud('Средства', '', EconomucActivity::class),
                    MenuItem::linkToCrud('Документы', '', EconomucActivityDocument::class),
                ]),
                MenuItem::linkToCrud('Образовательные стандарты и требования', '', EduStandards::class),
                MenuItem::linkToCrud('Стипендии и меры поддержки обучающихся', '', StudentSupport::class),
                MenuItem::linkToCrud('Доступная среда', '', AvailableEnvironment::class),
                MenuItem::linkToCrud('Международное сотрудничество', '', InternationalCoop::class),
                MenuItem::subMenu('Платежные реквизиты', '')->setSubItems([
                    MenuItem::linkToCrud('Лицевой счет учреждения', '', PersonalAccount::class),
                    MenuItem::linkToCrud('Расчетный счет учреждения', '', PaymentAccount::class),
                    MenuItem::linkToCrud('ИНН, КПП, ОКАТО, ОГРН, ОКТМО', '', InfPay::class),
                ]),
                MenuItem::linkToCrud('Публичный доклад руководителя', '', PublicReport::class),
                MenuItem::linkToCrud('Режим работы специалистов и служб', '', WorkingServices::class),
            MenuItem::section('Дополнительная информация'),
                MenuItem::linkToCrud('Защита персональных данных', '', PersonalDataProtection::class),
                MenuItem::linkToCrud('Охрана труда', '', LaborProtection::class),
                MenuItem::linkToCrud('Учебно-производственный комплекс', '', EduAndProductionComplex::class),
            // MenuItem::section('Пользователи'),
            // MenuItem::linkToCrud('Категории', 'fa fa-tags', Category::class),
            // MenuItem::linkToCrud('Администраторы', 'fas fa-list', User::class),
        ];
    }
}
