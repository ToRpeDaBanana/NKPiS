<?php

namespace App\Controller\Admin;

use App\Entity\EntranceTests;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;

class EntranceTestsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return EntranceTests::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextEditorField::new('text')->setLabel('Текст'),
        ];
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('запись')
            ->setEntityLabelInPlural('Вступительные испытания');
    }

}
