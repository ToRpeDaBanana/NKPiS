<?php

namespace App\Controller\Admin;

use App\Entity\Category;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
class CategoryCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Category::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            // ChoiceField::new('category_name')->setChoices([
            //     'О нас'=>'about',
            //     'Родителям'=>'parents',
            //     'Учащимся'=>'students',
            //     'Педагогам'=>'teachers',
            //     'Поступление в колледж'=>'admission',
            // ]),
            // TextField::new('sub_category'),
        ];
    }

}
