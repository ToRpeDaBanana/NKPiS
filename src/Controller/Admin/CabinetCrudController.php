<?php

namespace App\Controller\Admin;

use App\Entity\Cabinet;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class CabinetCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Cabinet::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name')->setLabel('Наименование учебных кабинетов'),
            TextField::new('count')->setLabel('Количество'),
        ];
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('запись')
            ->setEntityLabelInPlural('Кабинеты');
    }

}
