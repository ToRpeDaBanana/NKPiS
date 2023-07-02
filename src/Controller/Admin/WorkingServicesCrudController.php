<?php

namespace App\Controller\Admin;

use App\Entity\WorkingServices;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class WorkingServicesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return WorkingServices::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name')->setLabel('Наименование'),
            TextField::new('day')->setLabel('День недели'),
            TextField::new('time')->setLabel('Время'),
            TextField::new('special')->setLabel('Специалист'),
            TextField::new('phone')->setLabel('Контактный телефон'),
        ];
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('запись')
            ->setEntityLabelInPlural('Документы');
    }
}
