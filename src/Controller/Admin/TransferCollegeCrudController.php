<?php

namespace App\Controller\Admin;

use App\Entity\TransferCollege;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class TransferCollegeCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return TransferCollege::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [

            TextEditorField::new('text')->setLabel('Текст'),
            TextField::new('sub_title')->setLabel('Подзаголовок'),
            TextEditorField::new('text_instruction')->setLabel('Пошаговая инструкция для перевода в колледж'),
        ];
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('запись')
            ->setEntityLabelInPlural('Переход в колледж из другого учебного заведения');
    }

}
