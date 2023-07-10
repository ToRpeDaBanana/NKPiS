<?php

namespace App\Controller\Admin;

use App\Entity\AvailableEnvironment;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;

class AvailableEnvironmentCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return AvailableEnvironment::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextEditorField::new('text')->setLabel('Текст-1'),
            ImageField::new('photo')->setUploadDir('public/assets/upload/img')
            ->setBasePath('public/assets/upload/img')
            ->setFormTypeOption('multiple', true)
            ->setUploadedFileNamePattern('[year]-[month]-[day]-[slug]-[contenthash].[extension]')
            ->setLabel('Выбрать фото'),
            TextEditorField::new('text_two')->setLabel('Текст-2'),
        ];
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('запись')
            ->setEntityLabelInPlural('Доступная среда');
    }
}
