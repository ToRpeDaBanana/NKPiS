<?php

namespace App\Controller\Admin;

use App\Entity\DepartmentContacts;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;

class DepartmentContactsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return DepartmentContacts::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name')->setLabel('ФИО'),
            TextField::new('job_title')->setLabel('Должность'),
            TextField::new('phone')->setLabel('Телефон'),
            TextField::new('day_week')->setLabel('Дни недели'),
            TextEditorField::new('time')->setLabel('Время'),
            TextField::new('email')->setLabel('Почта'),
        ];
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('запись')
            ->setEntityLabelInPlural('Контакры подразделений');
    }

}
