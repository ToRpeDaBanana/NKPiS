<?php

namespace App\Controller\Admin;

use App\Entity\NewsCentre;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class NewsCentreCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return NewsCentre::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title')->setLabel('Заголовок'),
            DateField::new('date')->setLabel('Дата'),
            TextEditorField::new('text_one')->setLabel('Текст-1'),
            ImageField::new('photo')
            ->setUploadDir('public\assets\upload\img')
            ->setBasePath('public\assets\upload\img')
            ->setFormTypeOption('multiple', true)
            ->setLabel('Фото-1'),
            TextEditorField::new('text_two')->setLabel('Текст-2'),
            
        ];
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('новость')
            ->setEntityLabelInPlural('Новости центра');
    }

}
