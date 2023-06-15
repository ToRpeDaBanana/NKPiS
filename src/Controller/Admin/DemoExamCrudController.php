<?php

namespace App\Controller\Admin;

use App\Entity\DemoExam;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class DemoExamCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return DemoExam::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [

            TextField::new('title')->setLabel('Заголовок документа'),
            ImageField::new('file')
            ->setUploadDir('public\assets\upload\files')
            ->setBasePath('public\assets\upload\files')
            ->setLabel('Документ'),
        ];
    }

}