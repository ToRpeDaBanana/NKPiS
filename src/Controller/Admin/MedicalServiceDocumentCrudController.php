<?php

namespace App\Controller\Admin;

use App\Entity\MedicalServiceDocument;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;

class MedicalServiceDocumentCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return MedicalServiceDocument::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            ImageField::new('treaty')
            ->setUploadDir('public\assets\upload\files')
            ->setBasePath('public\assets\upload\files')
            ->setFormTypeOption('multiple', true)
            ->setLabel('Договор по оказанию услуг по медобслуживанию'),
            ImageField::new('vaccination')
            ->setUploadDir('public\assets\upload\files')
            ->setBasePath('public\assets\upload\files')
            ->setFormTypeOption('multiple', true)
            ->setLabel('Дополнительные документы'),
        ];
    }
}
