<?php

namespace App\Controller\Admin;

use App\Entity\SpecialtiesProfessions;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class SpecialtiesProfessionsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return SpecialtiesProfessions::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            ChoiceField::new('class')->setChoices([
                '9 класс'=>'9',
                '11 класс'=>'11',
            ])->setLabel('Класс'),
            TextField::new('title')->setLabel('Специальность'),
            TextEditorField::new('text')->setLabel('Описание'),
        ];
    }

}
