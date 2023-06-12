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
use App\Entity\Category;
use App\Controller\Admin\UserCrudController;
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
        return $this->redirect($adminUrlGenerator->setController(UserCrudController::class)->generateUrl());
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

                // MenuItem::linkToCrud('Text', 'fa fa-tags', Page::class),
                MenuItem::section('О нас'),
                MenuItem::linkToCrud('Общая информация', 'fa fa-tags', GeneralInf::class),
                MenuItem::linkToCrud('Педагогический состав', 'fa fa-tags', Teachers::class),
                MenuItem::linkToCrud('Контакты подразделений', 'fa fa-tags', DepartmentContacts::class),

            MenuItem::subMenu('Органы уравления', 'fa-solid fa-file-word')->setSubItems([
                MenuItem::linkToCrud('Председатель УС', 'fa fa-tags', ControlSovChairman::class),
                MenuItem::linkToCrud('Иные участники УС', 'fa fa-tags', ControlSovOther::class),
                MenuItem::linkToCrud('Документы', 'fa fa-tags', ControlSovDocuments::class),
                MenuItem::linkToCrud('Запланировать заседание', 'fa fa-tags', ControlSovMeetings::class),
                MenuItem::linkToCrud('Прошедшие заседания', 'fa fa-tags', ControlSovPastMeetings::class),
                

            ]),
            MenuItem::subMenu('Наши достижения', 'fa-solid fa-file-word')->setSubItems([
                MenuItem::linkToCrud('Достижения', 'fa fa-tags', OurAchievements::class),
                MenuItem::linkToCrud('Таблица достижений', 'fa fa-tags', OurAchievementsTable::class),
            ]),
            MenuItem::linkToCrud('Платные образовательные услуги', 'fa fa-tags', PaidEduServ::class),
            MenuItem::section('Родителям'),
            MenuItem::subMenu('Родителям', 'fa-solid fa-file-word')->setSubItems([

            ]),
            MenuItem::section('Новости'),
            MenuItem::linkToCrud('Новости', 'fa fa-tags', News::class),
            MenuItem::section('Пользователи'),
            // MenuItem::linkToCrud('Категории', 'fa fa-tags', Category::class),
            MenuItem::linkToCrud('Администраторы', 'fas fa-list', User::class),
        ];
    }
}
