<?php

namespace App\Controller\Admin;

use App\Entity\CollegeAdmission;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class CollegeAdmissionCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return CollegeAdmission::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextEditorField::new('text')->setLabel('Поступление в колледж текст'),
            TextEditorField::new('documents_rf')->setLabel('Документы для граждан РФ'),
            TextEditorField::new('documents_foreign')->setLabel('Документы для иностранных граждан'),
            TextEditorField::new('text_two')->setLabel('Текст-2'),
            TextEditorField::new('cost_education')->setLabel('Стоимость обучения'),
            TextEditorField::new('text_three')->setLabel('Текст-3'),
        ];
    }

}
