<?php

namespace App\Controller\Admin;

use App\Entity\Holidays;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;

class HolidaysCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Holidays::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            ImageField::new('file')->setUploadDir('public\assets\upload\files')
            ->setBasePath('public\assets\upload\files')
            ->setLabel('Выбрать файл'),
        ];
    }

}
