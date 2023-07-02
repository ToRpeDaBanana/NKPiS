<?php

namespace App\Controller\Admin;

use App\Entity\AcceptanceCheckDigitsTable;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class AcceptanceCheckDigitsTableCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return AcceptanceCheckDigitsTable::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            ChoiceField::new('class')->setChoices([
                    '9 класс'=>'9',
                    '11 класс'=>'11',
            ])->setLabel('Класс'),
            ChoiceField::new('basis')->setChoices([
                'Бюджет'=>'Бюджет',
                'Внебюджет'=>'Внебюджет',
            ])->setLabel('Основа'),
            TextField::new('speciality')->setLabel('Специальность'),
            TextField::new('training_period')->setLabel('Срок обучения'),
            IntegerField::new('cpc')->setLabel('КЦП'),
        ];
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('таблицу')
            ->setEntityLabelInPlural('Контрольные цифры приёма таблица');
    }
}
