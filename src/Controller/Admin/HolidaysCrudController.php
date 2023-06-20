<?php

namespace App\Controller\Admin;

use App\Entity\Holidays;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class HolidaysCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Holidays::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title')->setLabel('Заголовок документа'),
            ImageField::new('file')->setUploadDir('public\assets\upload\files')
            ->setBasePath('public\assets\upload\files')
            ->setLabel('Выбрать файл'),
        ];
    }

}
