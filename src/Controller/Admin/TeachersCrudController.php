<?php

namespace App\Controller\Admin;

use App\Entity\Teachers;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
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
            TextField::new('name')->setLabel('ФИО'),
            TextField::new('job_title')->setLabel('Должность'),
            TextField::new('phone')->setLabel('Телефон'),
            EmailField::new('email')->setLabel('Почта'),
            ImageField::new('photo')->setUploadDir('public\assets\upload\img')
            ->setBasePath('public\assets\upload\img'),
            ChoiceField::new('category_job_title')->setChoices([
                'Директор/замы'=>'up',
                'Предователи/заведующие'=>'down',
            ])->setLabel('Категория'),
        ];
    }
    
}
