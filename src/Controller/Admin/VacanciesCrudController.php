<?php

namespace App\Controller\Admin;

use App\Entity\Vacancies;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class VacanciesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Vacancies::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title')->setLabel('Заголовок вакансии'),
            TextEditorField::new('text')->setLabel('Описание вакансии'),
        ];
    }

}
