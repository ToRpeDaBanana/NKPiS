<?php

namespace App\Controller\Admin;

use App\Entity\ForEmployTable;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ForEmployTableCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ForEmployTable::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [

            TextField::new('code')->setLabel('Код'),
            TextField::new('speciality')->setLabel('Специальность'),
        ];
    }
}
