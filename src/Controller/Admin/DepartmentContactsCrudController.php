<?php

namespace App\Controller\Admin;

use App\Entity\DepartmentContacts;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;

class DepartmentContactsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return DepartmentContacts::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
            TextField::new('job_title'),
            TextField::new('phone'),
            TextField::new('day_week'),
            TextField::new('email'),
            ChoiceField::new('category')->setChoices([
                'О нас'=>'about',
                'Родителям'=>'parents',
                'Учащимся'=>'students',
                'Педагогам'=>'teachers',
                'Поступление в колледж'=>'admission',
            ]),
        ];
    }

}
