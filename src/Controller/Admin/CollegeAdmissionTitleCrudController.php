<?php

namespace App\Controller\Admin;

use App\Entity\CollegeAdmissionTitle;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
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
            TextEditorField::new('text')->setLabel('Текст'),
            EmailField::new('email')->setLabel('Почта'),
            TextField::new('schedule')->setLabel('График работы'),
            TextField::new('phone')->setLabel('Телефон'),
            TextField::new('address')->setLabel('Адрес'),
            ImageField::new('photo')
            ->setUploadDir('public\assets\upload\img')
            ->setBasePath('public\assets\upload\img')
            ->setUploadedFileNamePattern('[year]-[month]-[day]-[slug]-[contenthash].[extension]')
            ->setLabel('Выбрать фото'),
        ];
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('запись')
            ->setEntityLabelInPlural('Информация о приёмной комиссии');
    }

}
