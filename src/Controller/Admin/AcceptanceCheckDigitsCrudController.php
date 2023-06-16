<?php

namespace App\Controller\Admin;

use App\Entity\AcceptanceCheckDigits;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class AcceptanceCheckDigitsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return AcceptanceCheckDigits::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('years_title')->setLabel('Год приёма'),
            TextEditorField::new('text')->setLabel('Текст'),
        ];
    }
}
