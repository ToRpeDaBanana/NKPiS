<?php

namespace App\Controller\Admin;

use App\Entity\PhotoGallery;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class PhotoGalleryCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return PhotoGallery::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title')->setLabel('Заголовок'),
            ImageField::new('main_photo')
            ->setUploadDir('public\assets\upload\img')
            ->setBasePath('public\assets\upload\img')
            ->setLabel('Выбрать главное фото'),
            ImageField::new('photo')->setUploadDir('public\assets\upload\img')
            ->setBasePath('public\assets\upload\img')
            ->setFormTypeOption('multiple', true)
            ->setLabel('Выбрать фото'),
        ];
    }

}