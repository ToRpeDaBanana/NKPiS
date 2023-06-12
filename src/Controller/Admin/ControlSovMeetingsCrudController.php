<?php

namespace App\Controller\Admin;

use App\Entity\ControlSovMeetings;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
class ControlSovMeetingsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ControlSovMeetings::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('planned')->setLabel('Запланировать заседание'),
            TextField::new('date_planned')->setLabel('Дата-время'),
        ];
    }
}
