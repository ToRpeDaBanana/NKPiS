<?php

namespace App\Controller\Admin;

use App\Entity\Teachers;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;

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
            TextEditorField::new('priem')->setLabel('Приём'),
            ImageField::new('photo')
            ->setUploadDir('public\assets\upload\img')
            ->setBasePath('public\assets\upload\img')
            ->setLabel('Фото'),
            ChoiceField::new('category_job_title')->setChoices([
                'Директор'=>'high',
                'Заместители'=>'midle',
                'Предователи/заведующие'=>'low',
            ])->setLabel('Категория'),
        ];
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('запись')
            ->setEntityLabelInPlural('Педагогический состав');
    }
    
}
