<?php

namespace App\Controller\Admin;

use App\Entity\SportsFacilities;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class SportsFacilitiesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return SportsFacilities::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('address')->setLabel('Адрес'),
            TextField::new('name')->setLabel('Наименование объекта'),
        ];
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('запись')
            ->setEntityLabelInPlural('Спортивные объекты');
    }
}
