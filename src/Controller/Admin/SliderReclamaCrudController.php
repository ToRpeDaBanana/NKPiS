<?php

namespace App\Controller\Admin;

use App\Entity\SliderReclama;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\UrlField;

class SliderReclamaCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return SliderReclama::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            UrlField::new('link')->setLabel('Ссылка'),
            ImageField::new('photo_pc')
            ->setUploadDir('public\assets\upload\img')
            ->setBasePath('public\assets\upload\img')
            ->setLabel('Фото для ПК версии'),
            ImageField::new('photo_mobile')
            ->setUploadDir('public\assets\upload\img')
            ->setBasePath('public\assets\upload\img')
            ->setLabel('Фото для мобильной версии'),
        ];
    }

}
