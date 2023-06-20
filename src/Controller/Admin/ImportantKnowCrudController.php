<?php

namespace App\Controller\Admin;

use App\Entity\ImportantKnow;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\UrlField;

class ImportantKnowCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ImportantKnow::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [

            TextField::new('title')->setLabel('Заголовок документа или ссылки'),
            UrlField::new('link')->setLabel('Ссылка'),
            ImageField::new('file')->setUploadDir('public\assets\upload\files')
            ->setBasePath('public\assets\upload\files')
            ->setFormTypeOption('multiple', true)
            ->setLabel('Выбрать файл'),
        ];
    }

}
