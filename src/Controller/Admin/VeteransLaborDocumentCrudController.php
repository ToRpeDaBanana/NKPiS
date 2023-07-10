<?php

namespace App\Controller\Admin;

use App\Entity\VeteransLaborDocument;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;

class VeteransLaborDocumentCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return VeteransLaborDocument::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            ImageField::new('file')
            ->setUploadDir('public/assets/upload/files')
            ->setBasePath('public/assets/upload/files')
            ->setUploadedFileNamePattern('[year]-[month]-[day]-[slug]-[contenthash].[extension]')
            ->setLabel('Документ'),
        ];
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('запись')
            ->setEntityLabelInPlural('Документы совета ветеранов');
    }

}
