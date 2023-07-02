<?php

namespace App\Controller\Admin;

use App\Entity\LaborProtection;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class LaborProtectionCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return LaborProtection::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            ChoiceField::new('category')->setChoices([
                'Инструкция по охране труда'=>'1',
                'Нормативные документы по охране труда'=>'2',
            ])
            ->setLabel('Категория документа'),
            TextField::new('title')->setLabel('Заголовок документа'),
            ImageField::new('file')
            ->setUploadDir('public\assets\upload\files')
            ->setBasePath('public\assets\upload\files')
            ->setLabel('Документ'),
        ];
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('запись')
            ->setEntityLabelInPlural('Охрана труда');
    }
}
