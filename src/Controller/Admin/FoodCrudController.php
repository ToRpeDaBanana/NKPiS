<?php

namespace App\Controller\Admin;

use App\Entity\Food;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;

class FoodCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Food::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            ImageField::new('file_contract')
            ->setUploadDir('public\assets\upload\files')
            ->setBasePath('public\assets\upload\files')
            ->setUploadedFileNamePattern('[year]-[month]-[day]-[slug]-[contenthash].[extension]')
            ->setLabel('Договор на оказания услуг по организации питания'),
            ImageField::new('file_dogovor')
            ->setUploadDir('public\assets\upload\files')
            ->setBasePath('public\assets\upload\files')
            ->setUploadedFileNamePattern('[year]-[month]-[day]-[slug]-[contenthash].[extension]')
            ->setLabel('Договор платного питания'),
        ];
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('запись')
            ->setEntityLabelInPlural('Питание');
    }

}
