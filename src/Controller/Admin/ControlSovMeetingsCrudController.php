<?php

namespace App\Controller\Admin;

use App\Entity\ControlSovMeetings;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
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
                'Заседание запланировано на ' => 'Заседание запланировано на',
                'В ближайшее время заседаний не запланированно' => 'В ближайшее время заседаний не запланированно',
            ])->setLabel('Запланировать заседание'),
            DateTimeField::new('date_planned')->setLabel('Дата-время')
        ];
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('запись')
            ->setEntityLabelInPlural('Запланированные заседания');
    }
}
