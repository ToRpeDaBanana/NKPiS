<?php

namespace App\Controller\Admin;

use App\Entity\InternationalCoop;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class InternationalCoopCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return InternationalCoop::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
