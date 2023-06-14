<?php

namespace App\Controller\Admin;

use App\Entity\GeneralInf;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class GeneralInfCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return GeneralInf::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        yield TextEditorField::new('text');

        // return [
        //     IdField::new('id'),
        //     TextField::new('title'),
        //     TextEditorField::new('description'),
        // ];
    }
    
}
