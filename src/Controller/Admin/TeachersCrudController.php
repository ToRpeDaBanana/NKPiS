<?php

namespace App\Controller\Admin;

use App\Entity\Teachers;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;

class TeachersCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Teachers::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
            TextField::new('job_title'),
            TextField::new('phone'),
            EmailField::new('email'),
            ImageField::new('photo')->setUploadDir('public/assets/img'),
            TextField::new('category_job_title'),
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
