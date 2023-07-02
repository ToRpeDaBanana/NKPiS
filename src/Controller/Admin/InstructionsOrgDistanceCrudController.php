<?php

namespace App\Controller\Admin;

use App\Entity\InstructionsOrgDistance;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;

class InstructionsOrgDistanceCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return InstructionsOrgDistance::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            ImageField::new('file')
            ->setUploadDir('public\assets\upload\files')
            ->setBasePath('public\assets\upload\files')
            ->setLabel('Положение (инструкция) об организации дистанционного обучения'),
        ];
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('запись')
            ->setEntityLabelInPlural('Дистанционное обучение');
    }

}
