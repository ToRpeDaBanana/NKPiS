<?php

namespace App\Controller\Admin;

use App\Entity\ControlSovPastMeetings;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\UrlField;

class ControlSovPastMeetingsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ControlSovPastMeetings::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
           TextField::new('date_past')->setLabel('Дата'),
           ImageField::new('agenda')->setUploadDir('public/assets/files')->setLabel('Повестка'),
           ImageField::new('protocol')->setUploadDir('public/assets/files')->setLabel('Протокол'),
           UrlField::new('link')->setLabel('Ссылка'),
        ];
    }
}
