<?php

namespace App\Controller\Admin;

use App\Entity\AboutCentre;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class AboutCentreCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return AboutCentre::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextEditorField::new('text_one')->setLabel('О центре'),
            TextField::new('title')->setLabel('Заголовок'),
            TextEditorField::new('text_two')->setLabel('Текст-2'),
            TextField::new('senior_foreman')->setLabel('Старший мастер площадки'),
            EmailField::new('email')->setLabel('Электронный адрес'),
            TextEditorField::new('text_tree')->setLabel('Текст-3'),
            ImageField::new('photo')->setUploadDir('public/assets/upload/img')
            ->setBasePath('public/assets/upload/img')
            ->setFormTypeOption('multiple', true)
            ->setUploadedFileNamePattern('[year]-[month]-[day]-[slug]-[contenthash].[extension]')
            ->setLabel('Выбрать фото'),
            ImageField::new('file')->setUploadDir('public/assets/upload/files')
            ->setBasePath('public/assets/upload/files')
            ->setFormTypeOption('multiple', true)
            ->setUploadedFileNamePattern('[year]-[month]-[day]-[slug]-[contenthash].[extension]')
            ->setLabel('Выбрать файл'),
        ];
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('запись')
            ->setEntityLabelInPlural('О центре');
    }

}
