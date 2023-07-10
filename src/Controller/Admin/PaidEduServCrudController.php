<?php

namespace App\Controller\Admin;

use App\Entity\PaidEduServ;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Form\Type\FileUploadType;

class PaidEduServCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return PaidEduServ::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            ImageField::new('parent_folder')
            ->setUploadDir('public/assets/upload/files')
            ->setBasePath('public/assets/upload/files')
            ->setFormTypeOption('multiple', true)
            ->setUploadedFileNamePattern('[year]-[month]-[day]-[slug]-[contenthash].[extension]')
            ->setLabel('Родительская плата'),

            ImageField::new('procedur')
            ->setUploadDir('public/assets/upload/files')
            ->setBasePath('public/assets/upload/files')
            ->setFormTypeOption('multiple', true)
            ->setUploadedFileNamePattern('[year]-[month]-[day]-[slug]-[contenthash].[extension]')
            ->setLabel('Порядок оказания услуг')
        ];
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('запись')
            ->setEntityLabelInPlural('Платные образовательные услуги');
    }

}
