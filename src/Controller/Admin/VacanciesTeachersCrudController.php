<?php

namespace App\Controller\Admin;

use App\Entity\VacanciesTeachers;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class VacanciesTeachersCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return VacanciesTeachers::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title')->setLabel('Должность'),
            TextEditorField::new('text')->setLabel('Описание'),
        ];
    }

}
