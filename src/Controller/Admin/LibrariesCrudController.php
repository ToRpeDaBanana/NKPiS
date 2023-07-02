<?php

namespace App\Controller\Admin;

use App\Entity\Libraries;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class LibrariesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Libraries::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('text')->setLabel('Библиотека'),

        ];
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('запись')
            ->setEntityLabelInPlural('Библиотеки');
    }
}
