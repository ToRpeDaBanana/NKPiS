<?php

namespace App\Controller\Admin;

use App\Entity\LaboratoriesAndWorkshops;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class LaboratoriesAndWorkshopsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return LaboratoriesAndWorkshops::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name')->setLabel('Наименование лабораторий и мастерских'),
            IntegerField::new('count')->setLabel('Количество'),
        ];
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('запись')
            ->setEntityLabelInPlural('Лаборатории и мастерские');
    }

}
