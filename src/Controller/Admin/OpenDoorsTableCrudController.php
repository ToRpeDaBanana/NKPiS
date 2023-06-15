<?php

namespace App\Controller\Admin;

use App\Entity\OpenDoorsTable;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class OpenDoorsTableCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return OpenDoorsTable::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            DateField::new('date')->setLabel('Дата'),
            TextField::new('address')->setLabel('Адрес'),
            TextEditorField::new('text')->setLabel('Описание'),
            TextEditorField::new('register')->setLabel('Регистрация участников'),
        ];
    }

}
