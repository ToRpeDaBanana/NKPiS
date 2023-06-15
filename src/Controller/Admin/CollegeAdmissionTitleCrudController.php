<?php

namespace App\Controller\Admin;

use App\Entity\CollegeAdmissionTitle;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class CollegeAdmissionTitleCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return CollegeAdmissionTitle::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title')->setLabel('Заголовок'),
            TextEditorField::new('text')->setLabel('Выбрать файл'),
            EmailField::new('email')->setLabel('Почта'),
            TextField::new('schedule')->setLabel('График работы'),
            TextField::new('address')->setLabel('Адрес'),
            ImageField::new('phone')
            ->setUploadDir('public\assets\upload\img')
            ->setBasePath('public\assets\upload\img')
            ->setLabel('Выбрать фото'),
        ];
    }

}
