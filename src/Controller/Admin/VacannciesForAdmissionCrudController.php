<?php

namespace App\Controller\Admin;

use App\Entity\VacannciesForAdmission;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class VacannciesForAdmissionCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return VacannciesForAdmission::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            ChoiceField::new('course')->setChoices([
                '1 курс' => '1 курс',
                '2 курс' => '2 курс',
                '3 курс' => '3 курс',
                '4 курс' => '4 курс',
            ])->setLabel('Курс'),
            TextField::new('professio_specialty')->setLabel('Профессия / Специальность'),
            ChoiceField::new('based_training_program')->setChoices([
                '9 кл.' => '9 кл.',
                '11 кл.' => '11 кл.',
            ])
            ->setLabel('Программа обучения на базе'),

            TextField::new('count_budget_places')->setLabel('Количество бюджетных мест'),
            TextField::new('count_pay_places')->setLabel('Количество внебюджетных мест'),
        ];
    }
}
