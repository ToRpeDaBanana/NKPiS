<?php

namespace App\Controller\Admin;

use App\Entity\Schedule;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;

class ScheduleCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Schedule::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            ChoiceField::new('semester')->setChoices([
                '1 Семестр' => '1 Семестр',
                '2 Семестр' => '2 Семестр',
            ])->setLabel('Курс'),
            ImageField::new('file')->setUploadDir('public\assets\upload\files')
            ->setBasePath('public\assets\upload\files')
            ->setFormTypeOption('multiple', true)
            ->setLabel('Выбрать файл'),
        ];
    }

}