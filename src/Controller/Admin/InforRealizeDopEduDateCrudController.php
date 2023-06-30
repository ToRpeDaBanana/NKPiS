<?php

namespace App\Controller\Admin;

use App\Entity\InforRealizeDopEduDate;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;

class InforRealizeDopEduDateCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return InforRealizeDopEduDate::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            DateField::new('data_revevance')->setLabel('Дата'),
        ];
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('запись')
            ->setEntityLabelInPlural('Дополнительное образование дата');
    }

}
