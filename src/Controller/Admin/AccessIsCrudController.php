<?php

namespace App\Controller\Admin;

use App\Entity\AccessIs;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class AccessIsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return AccessIs::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('accsess')->setLabel('Доступ к сети интернет'),
            TextField::new('speed')->setLabel('Скорость'),
            TextField::new('provider')->setLabel('Провайдер'),
        ];
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('запись')
            ->setEntityLabelInPlural('Доступ к ИС');
    }
}
