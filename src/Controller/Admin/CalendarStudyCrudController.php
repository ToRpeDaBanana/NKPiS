<?php

namespace App\Controller\Admin;

use App\Entity\CalendarStudy;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;

class CalendarStudyCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return CalendarStudy::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            ImageField::new('file')->setUploadDir('public\assets\upload\files')
            ->setBasePath('public\assets\upload\files')
            ->setFormTypeOption('multiple', true)
            ->setLabel('Выбрать файл(ы)'),
        ];
    }

}
