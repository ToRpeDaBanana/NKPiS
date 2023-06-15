<?php

namespace App\Controller\Admin;

use App\Entity\ControlSovMeetings;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
class ControlSovMeetingsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ControlSovMeetings::class;
    }


    public function configureFields(string $pageName): iterable
    {   
        // phpinfo();
        // exit;
        return [
            ChoiceField::new('planned')->setChoices([
                'Заседание запланировано на ' => 1,
                'В ближайшее время заседаний не запланированно' => 0,
            ])->setLabel('Запланировать заседание'),
            DateTimeField::new('date_planned')->setLabel('Дата-время')
        ];
    }
}