<?php

namespace App\Controller\Admin;

use App\Entity\PassingScores;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class PassingScoresCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return PassingScores::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            ChoiceField::new('class')->setChoices([
                '9 класс'=>'9',
                '11 класс'=>'11',
            ])->setLabel('Класс'),
            TextField::new('speciality')->setLabel('Специальность'),
            TextField::new('minimal_ball')->setLabel('Минимальный проходной балл'),
            TextField::new('training_period')->setLabel('Срок обучения'),
        ];
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('запись')
            ->setEntityLabelInPlural('Проходные баллы прошлых лет');
    }
}
