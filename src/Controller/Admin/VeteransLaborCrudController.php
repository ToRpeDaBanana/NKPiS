<?php

namespace App\Controller\Admin;

use App\Entity\VeteransLabor;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class VeteransLaborCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return VeteransLabor::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title')->setLabel('Заголовок'),
            DateField::new('date')->setLabel('Дата'),
            TextEditorField::new('text'),
            ImageField::new('photo')
            ->setUploadDir('public\assets\upload\img')
            ->setBasePath('public\assets\upload\img')
            ->setFormTypeOption('multiple', true)
            ->setLabel('Выбрать фото'),
        ];
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('запись')
            ->setEntityLabelInPlural('Новости совета ветеранов');
    }

}
