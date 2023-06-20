<?php

namespace App\Controller\Admin;

use App\Entity\VacanForAdmTitle;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;

class VacanForAdmTitleCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return VacanForAdmTitle::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            DateField::new('date')->setLabel('Дата'),
        ];
    }

}
