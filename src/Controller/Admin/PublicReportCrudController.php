<?php

namespace App\Controller\Admin;

use App\Entity\PublicReport;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class PublicReportCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return PublicReport::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title')->setLabel('Заголовок документа'),
            ImageField::new('file')
            ->setUploadDir('public\assets\upload\files')
            ->setBasePath('public\assets\upload\files')
            ->setUploadedFileNamePattern('[year]-[month]-[day]-[slug]-[contenthash].[extension]')
            ->setLabel('Документ'),
        ];
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('запись')
            ->setEntityLabelInPlural('Публичный доклад руководителя');
    }
}
