<?php

namespace App\Controller\Admin;

use App\Entity\HelpAGraduate;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;

class HelpAGraduateCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return HelpAGraduate::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextEditorField::new('text_one')->setLabel('Текст-1'),
            TextEditorField::new('text_two')->setLabel('Текст-2'),
        ];
    }

}
